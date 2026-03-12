<?php
/**
 * GEEK-INFOTECH-AMS Session & Access Manager
 * Role-Based Access Control (RBAC) 
 * CLASS: Session
 * PURPOSE: Handles User Authentication State, RBAC (Role Based Access Control), and Routing
 */

// --- SECTION 1: SESSION STARTUP ---
// Prevent multiple session starts which can cause PHP notices
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Session {

    /**
     * PUBLIC FUNCTION: init
     * PURPOSE: Saves user data into the server-side session after successful login
     * @param array $user - Data fetched from the database
     */
    public static function init($user) {
        // 1. Store Core Identity
        $_SESSION['user_id']    = $user['USER_ID'];
        $_SESSION['username']   = $user['USERNAME'];
        $_SESSION['role']       = strtoupper($user['ROLE']);
        
        // 2. Store Display Metadata
        // Uses DISPLAY_NAME from AuthService or fallbacks to Username
        $_SESSION['full_name']  = $user['DISPLAY_NAME'] ?? $user['USERNAME']; 
        
        // 3. Store Reference IDs (Staff or Student)
        $_SESSION['staff_id']   = $user['STAFF_REF_ID'] ?? null;
        $_SESSION['student_id'] = $user['STUDENT_REF_ID'] ?? null;
        
        // 4. Security Metadata
        $_SESSION['login_time'] = time();
        $_SESSION['user_ip']    = $_SERVER['REMOTE_ADDR'];
        
        // 5. CRITICAL: Regenerate Session ID to prevent "Session Hijacking"
        session_regenerate_id(true);
    }


    /**
     * PUBLIC FUNCTION: redirectByRole
     * PURPOSE: Automatically sends the user to the correct dashboard based on their role
     * @param string $role - ADMIN, STUDENT, FACULTY, etc.
     */
    public static function redirectByRole($role) {
        $role = strtoupper($role);

        // Uses the url() helper defined in config.php
        switch ($role) {
            case 'ADMIN':     header("Location: " . url('views/admin/dashboard.php')); break;
            case 'COUNSELOR': header("Location: " . url('views/counselor/dashboard.php')); break;
            case 'FACULTY':   header("Location: " . url('views/faculty/dashboard.php')); break;
            case 'STUDENT':   header("Location: " . url('views/student/dashboard.php')); break;
            default:          header("Location: " . url('index.php?error=unauthorized_role'));
        }
        exit();
    }


    /**
     * PUBLIC FUNCTION: protect
     * PURPOSE: Security Gatekeeper. Use this at the top of every restricted page.
     * USAGE: Session::protect(['ADMIN', 'FACULTY']);
     * @param array $allowedRoles - List of roles that can view the page
     */
    public static function protect($allowedRoles = []) {
        // 1. GATE 1: Is the user logged in?
        if (!isset($_SESSION['user_id'])) {
            header("Location: " . url('index.php?error=login_required'));
            exit();
        }

        // 2. GATE 2: Does the user have the right role?
        if (!empty($allowedRoles)) {
            $userRole = $_SESSION['role'] ?? '';
            if (!in_array($userRole, $allowedRoles)) {
                header("Location: " . url('views/unauthorized.php'));
                exit();
            }
        }
    }


    /**
     * PUBLIC FUNCTION: checkLogin
     * PURPOSE: Prevents logged-in users from seeing the login page again.
     * USAGE: Call this at the very top of index.php
     */
    public static function checkLogin() {
        if (isset($_SESSION['user_id']) && isset($_SESSION['role'])) {
            self::redirectByRole($_SESSION['role']);
        }
    }


    /**
     * PUBLIC FUNCTION: destroy
     * PURPOSE: Completely wipes the session and clears browser cookies for logout
     */
    public static function destroy() {
        // 1. Clear the Session Array
        $_SESSION = [];

        // 2. Clear the Session Cookie in the browser
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // 3. Destroy session on server
        session_destroy();

        // 4. Redirect to home
        header("Location: " . url('index.php?msg=logged_out'));
        exit();
    }
}

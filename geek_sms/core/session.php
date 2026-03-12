<?php
/**
 * GEEK-INFOTECH-SMS Session & Access Manager
 * Role-Based Access Control (RBAC) 
 */

// Ensure session starts only if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Session {

    /**
     * Set session variables after successful login
     */
    public static function init($user) {
        $_SESSION['user_id']    = $user['USER_ID'];
        $_SESSION['username']   = $user['USERNAME'];
        $_SESSION['role']       = strtoupper($user['ROLE']);
        
        // Use DISPLAY_NAME prepared by AuthService, fallback to Username
        $_SESSION['full_name']  = $user['DISPLAY_NAME'] ?? $user['USERNAME']; 
        
        $_SESSION['staff_id']   = $user['STAFF_REF_ID'] ?? null;
        $_SESSION['student_id'] = $user['STUDENT_REF_ID'] ?? null;
        $_SESSION['login_time'] = time();
        
        // Regenerate ID to prevent session fixation attacks
        session_regenerate_id(true);
    }

    /**
     * ROUTING: Redirect user to their specific dashboard using the universal url() helper
     */
    public static function redirectByRole($role) {
        $role = strtoupper($role);

        switch ($role) {
            case 'ADMIN':     header("Location: " . url('views/admin/dashboard.php')); break;
            case 'COUNSELOR': header("Location: " . url('views/counselor/dashboard.php')); break;
            case 'FACULTY':   header("Location: " . url('views/faculty/dashboard.php')); break;
            case 'STUDENT':   header("Location: " . url('views/student/dashboard.php')); break;
            default:          header("Location: " . url('index.php?error=unauthorized'));
        }
        exit();
    }

    /**
     * PROTECTION: Use this at the top of every dashboard page
     * Example: Session::protect(['ADMIN', 'FACULTY']);
     */
    public static function protect($allowedRoles = []) {
        // 1. Check if logged in
        if (!isset($_SESSION['user_id'])) {
            header("Location: " . url('index.php?error=login_required'));
            exit();
        }

        // 2. Check Role permissions
        if (!empty($allowedRoles) && !in_array($_SESSION['role'], $allowedRoles)) {
            header("Location: " . url('views/unauthorized.php'));
            exit();
        }
    }

    /**
     * Helper to check if a user is already logged in (used on index.php)
     */
    public static function checkLogin() {
        if (isset($_SESSION['user_id']) && isset($_SESSION['role'])) {
            self::redirectByRole($_SESSION['role']);
        }
    }

    /**
     * Secure Logout
     */
    public static function destroy() {
        $_SESSION = []; // Clear array
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }
        session_destroy();
        header("Location: " . url('index.php?msg=logged_out'));
        exit();
    }
}

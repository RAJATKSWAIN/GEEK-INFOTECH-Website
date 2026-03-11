<?php
/**
 * GEEK-INFOTECH-SMS Authentication Service
 * Handles Login, Audit Updates, and Security Checks
 */

require_once __DIR__ . '/../core/config.php';
require_once __DIR__ . '/../core/security.php';

class AuthService {
    private $db;

    public function __construct() {
        // Uses the global db() helper from your config.php
        $this->db = db();
    }

    /**
     * Authenticate a user by Username and Password
     * Only allows ACTIVE users to log in
     */
    public function authenticate($username, $password) {
        try {
            // 1. Fetch user and join with Staff/Student names for the session
            $sql = "SELECT u.*, s.FULL_NAME as STAFF_NAME, st.FULL_NAME as STUDENT_NAME 
                    FROM GSMS_MST_USERS u
                    LEFT JOIN GSMS_MST_STAFF s ON u.STAFF_REF_ID = s.STAFF_ID
                    LEFT JOIN GSMS_MST_STUDENTS st ON u.STUDENT_REF_ID = st.STUDENT_ID
                    WHERE u.USERNAME = :username AND u.IS_ACTIVE = 1";
            
            $stmt = $this->db->prepare($sql);
            $stmt->execute([':username' => $username]);
            $user = $stmt->fetch();

            // 2. Verify Password using PHP's native password_verify
            if ($user && password_verify($password, $user['PASSWORD_HASH'])) {
                
                // 3. Update Audit Trail (IP and Timestamp)
                $this->updateLoginAudit($user['USER_ID']);
                
                // Prepare display name for session
                $user['DISPLAY_NAME'] = $user['STAFF_NAME'] ?? $user['STUDENT_NAME'] ?? $user['USERNAME'];
                
                return $user;
            }

            return false; // Auth failed

        } catch (PDOException $e) {
            // In a professional system, log this error to a file
            error_log("AuthService Error: " . $e->getMessage());
            return false;
        }
    }

    /**
     * Updates the User table with the latest login metadata
     */
    private function updateLoginAudit($userId) {
        $ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
        $sql = "UPDATE GSMS_MST_USERS 
                SET LAST_LOGIN_AT = NOW(), 
                    LAST_LOGIN_IP = :ip 
                WHERE USER_ID = :id";
        
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':ip' => $ip,
            ':id' => $userId
        ]);
    }

    /**
     * Optional: Check if a username is already taken (for registration)
     */
    public function isUsernameExists($username) {
        $stmt = $this->db->prepare("SELECT COUNT(*) FROM GSMS_MST_USERS WHERE USERNAME = ?");
        $stmt->execute([$username]);
        return $stmt->fetchColumn() > 0;
    }
}

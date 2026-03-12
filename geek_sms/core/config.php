<?php
/**
 * GEEK-INFOTECH-SMS-V1.0.0
 * Universal System Configuration & Core Helpers
 * Localization: Asia/Kolkata
 */

// 1. Force Indian Standard Time for all operations
date_default_timezone_set('Asia/Kolkata');

// 2. Global System Constants
define('APP_NAME', 'GEEK-INFOTECH-AMS');
define('APP_VERSION', '1.0.0');

// Dynamic Base URL - Helps with redirects regardless of folder depth
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . "/geek_sms/");

// 3. Database Singleton Class
class Database {
    private $host     = "sql104.infinityfree.com";
    private $db_name  = "if0_40254012_geek_sms"; 
    private $username = "if0_40254012";
    private $password = "Geekinfo2025";
    private $port     = "3306";
    
    public $conn;
    private static $instance;

    private function __construct() {
        try {
            $dsn = "mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name . ";charset=utf8mb4";
            
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES    => false,
            ];

            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
            
            // Sync Database Timezone with PHP
            $this->conn->exec("SET time_zone = '+05:30'");

        } catch (PDOException $e) {
            // High-security error masking for production
            error_log("Connection Error: " . $e->getMessage());
            die("Critical Error: Authority Server Connection Failed.");
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}

/**
 * 4. Global Helper Function: db()
 * Usage: $stmt = db()->prepare("...");
 */
if (!function_exists('db')) {
    function db() {
        return Database::getInstance()->getConnection();
    }
}

/**
 * 5. Global Helper Function: url()
 * Usage: header("Location: " . url('views/admin/dashboard.php'));
 */
if (!function_exists('url')) {
    function url($path = '') {
        return BASE_URL . ltrim($path, '/');
    }
}

<?php
/**
 * GEEK-INFOTECH-AMS-V1.0.0
 * Universal System Configuration
 * CLASS: Global System Configuration
 * PURPOSE: Manages Database, Pathing, Security, and Environment
 */

// --- SECTION 1: SYSTEM LOCALIZATION ---
date_default_timezone_set('Asia/Kolkata');


// --- SECTION 2: ENVIRONMENT DETECTION ---
// Automatically switches between Localhost and InfinityFree
$is_local = ($_SERVER['REMOTE_ADDR'] == '127.0.0.1' || $_SERVER['HTTP_HOST'] == 'localhost');


// --- SECTION 3: WEB & PHYSICAL PATHING ---
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$domain   = $_SERVER['HTTP_HOST'];

// The URL used by the browser (CSS/JS/Redirects)
define('BASE_URL', $protocol . $domain . "/geek_sms/");

// The Absolute Path used by PHP (require/include)
define('SYS_ROOT', realpath(__DIR__ . '/..') . DIRECTORY_SEPARATOR);
define('CORE_PATH', SYS_ROOT . 'core' . DIRECTORY_SEPARATOR);
define('SERVICE_PATH', SYS_ROOT . 'services' . DIRECTORY_SEPARATOR);


// --- SECTION 4: SECURITY CONSTANTS ---
define('APP_NAME', 'GEEK-INFOTECH-AMS');
define('APP_VERSION', '1.2.0');
define('ENC_KEY', 'G33k_Inf0_Secure_2026_TRINY'); // For Security::encrypt()


// --- SECTION 5: DATABASE SINGLETON ---
class Database {
    // PROPERTIES: Private credentials
    private $host     = "sql104.infinityfree.com";
    private $db_name  = "if0_40254012_geek_sms"; 
    private $username = "if0_40254012";
    private $password = "Geekinfo2025";
    
    public $conn;
    private static $instance;

    /**
     * PRIVATE FUNCTION: __construct
     * Prevents multiple connections; runs once per page load.
     */
    private function __construct() {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name . ";charset=utf8mb4";
            
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES    => false,
            ];

            $this->conn = new PDO($dsn, $this->username, $this->password, $options);
            
            // Sync Database Timezone with PHP
            $this->conn->exec("SET time_zone = '+05:30'");

        } catch (PDOException $e) {
            // Mask technical details from the public
            error_log("GEEK-AMS DB Error: " . $e->getMessage());
            die("Critical Error: Authority Server Connection Failed.");
        }
    }

    /**
     * PUBLIC FUNCTION: getInstance
     * Returns the existing connection or creates a new one if empty.
     */
    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    /**
     * PUBLIC FUNCTION: getConnection
     * Returns the PDO object.
     */
    public function getConnection() {
        return $this->conn;
    }
}


// --- SECTION 6: GLOBAL UTILITY HELPERS ---

/**
 * HELPER: db()
 * Access the database anywhere: $data = db()->query(...)
 */
if (!function_exists('db')) {
    function db() {
        return Database::getInstance()->getConnection();
    }
}

/**
 * HELPER: url()
 * Generate absolute URLs: <a href="<?= url('index.php') ?>">
 */
if (!function_exists('url')) {
    function url($path = '') {
        return BASE_URL . ltrim($path, '/');
    }
}

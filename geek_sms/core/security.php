<?php
/**
 * GEEK-INFOTECH-SMS Security Core
 * AES-256 Encryption & Input Sanitization
 */
class Security {
    private static $cipher = "aes-256-cbc";
    // Change this to a 32-character random string for your production environment
    private static $encryption_key = "G33k_Inf0_Secure_Key_2026_Triny"; 

    /**
     * Encrypt sensitive data
     */
    public static function encrypt($data) {
        $iv_length = openssl_cipher_iv_length(self::$cipher);
        $iv = openssl_random_pseudo_bytes($iv_length);
        $encrypted = openssl_encrypt($data, self::$cipher, self::$encryption_key, 0, $iv);
        // Combine encrypted data and IV with a separator for storage
        return base64_encode($encrypted . '::' . $iv);
    }

    /**
     * Decrypt sensitive data
     */
    public static function decrypt($data) {
        if (empty($data) || !strpos($data, '::')) return $data;
        
        list($encrypted_data, $iv) = explode('::', base64_decode($data), 2);
        return openssl_decrypt($encrypted_data, self::$cipher, self::$encryption_key, 0, $iv);
    }

    /**
     * Global Sanitization to prevent XSS
     */
    public static function clean($data) {
        return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
    }
}

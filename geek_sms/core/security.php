<?php
/**
 * GEEK-INFOTECH-SMS Security Core
 * AES-256 Encryption & Input Sanitization
 * CLASS: Security
 * PURPOSE: Handles Data Encryption (AES-256) and Input Sanitization
 */
class Security {

    /**
     * PROPERTY: Cipher Algorithm
     * TYPE: Private Static String
     */
    private static $cipher = "aes-256-cbc";


    /**
     * PUBLIC FUNCTION: clean
     * PURPOSE: Prevents Cross-Site Scripting (XSS) by stripping HTML tags
     * USAGE: $safe_data = Security::clean($_POST['data']);
     */
    public static function clean($data) {
        if (is_array($data)) {
            return array_map([self::class, 'clean'], $data);
        }
        return htmlspecialchars(strip_tags(trim($data)), ENT_QUOTES, 'UTF-8');
    }


    /**
     * PUBLIC FUNCTION: encrypt
     * PURPOSE: Converts plain text into unreadable secure strings
     * USAGE: $secret = Security::encrypt("MyData");
     */
    public static function encrypt($data) {
        if (empty($data)) return "";

        // 1. Calculate Initialization Vector (IV) length
        $iv_length = openssl_cipher_iv_length(self::$cipher);
        
        // 2. Generate a random IV for unique encryption every time
        $iv = openssl_random_pseudo_bytes($iv_length);
        
        // 3. Encrypt using the ENC_KEY defined in config.php
        $encrypted = openssl_encrypt($data, self::$cipher, ENC_KEY, 0, $iv);
        
        // 4. Return combined string as Base64 for safe DB storage
        return base64_encode($encrypted . '::' . $iv);
    }


    /**
     * PUBLIC FUNCTION: decrypt
     * PURPOSE: Reverts encrypted strings back to original plain text
     * USAGE: $original = Security::decrypt($encrypted_string);
     */
    public static function decrypt($data) {
        if (empty($data)) return "";
        
        // 1. Decode from Base64
        $decoded = base64_decode($data, true);
        if (!$decoded || !strpos($decoded, '::')) return $data;

        // 2. Split the encrypted content and the IV
        list($encrypted_data, $iv) = explode('::', $decoded, 2);
        $iv_length = openssl_cipher_iv_length(self::$cipher);

        // 3. Validate IV length to prevent decryption errors
        if (strlen($iv) !== $iv_length) {
            return "Security Error: Integrity Check Failed";
        }

        // 4. Decrypt using the ENC_KEY defined in config.php
        return openssl_decrypt($encrypted_data, self::$cipher, ENC_KEY, 0, $iv);
    }
}

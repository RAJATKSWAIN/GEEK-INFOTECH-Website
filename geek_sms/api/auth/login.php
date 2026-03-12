<?php
/**
 * GEEK-INFOTECH-AMS Login API Gateway
 * Receives credentials, verifies via Service, and sets Session 
 * PURPOSE: Handles form submission, sanitization, and authentication orchestration.
 */

// --- SECTION 1: LOAD CORE DEPENDENCIES ---
// We use __DIR__ to find config, then config's SYS_ROOT to find everything else.
require_once __DIR__ . '/../../core/config.php';
require_once SYS_ROOT . 'core/security.php';
require_once SYS_ROOT . 'core/session.php';
require_once SYS_ROOT . 'services/AuthService.php';


// --- SECTION 2: REQUEST VALIDATION ---
/**
 * Only allow POST requests. 
 * Prevents users from accessing this script directly via URL.
 */
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: " . url('index.php?error=invalid_request'));
    exit();
}


// --- SECTION 3: INPUT SANITIZATION ---
/**
 * Use the Security::clean helper defined in security.php
 * Note: We do NOT clean the password to preserve special characters.
 */
$role     = Security::clean($_POST['role'] ?? '');
$username = Security::clean($_POST['username'] ?? '');
$password = $_POST['password'] ?? ''; 


// --- SECTION 4: EMPTY FIELD CHECK ---
if (empty($role) || empty($username) || empty($password)) {
    header("Location: " . url('index.php?error=empty_fields'));
    exit();
}


// --- SECTION 5: AUTHENTICATION EXECUTION ---
/**
 * Initialize the AuthService and attempt to verify the identity.
 */
$authService = new AuthService();
$userData    = $authService->authenticate($username, $password, $role);


// --- SECTION 6: RESPONSE & SESSION HANDLING ---
if ($userData) {
    /**
     * CASE: Success
     * 1. Initialize the Session with user data.
     * 2. Route user to their specific dashboard.
     */
    Session::init($userData);
    Session::redirectByRole($userData['ROLE']);
    
} else {
    /**
     * CASE: Failure
     * Redirect back to login with a sanitized error code.
     */
    header("Location: " . url('index.php?error=login_failed'));
    exit();
}

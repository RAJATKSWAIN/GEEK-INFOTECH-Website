<?php
/**
 * GEEK-INFOTECH-SMS Authorization API
 * Implements the "Checker" part of Maker-Checker
 */

require_once __DIR__ . '/../../core/config.php';
require_once __DIR__ . '/../../core/session.php';

// 1. Military-Grade Protection: Only logged-in Admins can call this API
Session::protect(['ADMIN']);

$db = db();
$targetUserId = $_GET['id'] ?? null;
$currentAdminStaffId = $_SESSION['staff_id'];

if (!$targetUserId) {
    header("Location: ../../views/admin/dashboard.php?error=invalid_id");
    exit();
}

try {
    /**
     * 2. Execute the Authorization
     * The SQL will fail if MAKER_ID == AUTH_ID due to our DB Check Constraint
     */
    $sql = "UPDATE GSMS_MST_USERS 
            SET AUTH_ID = :auth_id, 
                AUTH_DATE = NOW(), 
                IS_ACTIVE = 1 
            WHERE USER_ID = :user_id";
    
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':auth_id' => $currentAdminStaffId,
        ':user_id' => $targetUserId
    ]);

    // 3. Success Redirect
    header("Location: ../../views/admin/dashboard.php?msg=authorized");
    exit();

} catch (PDOException $e) {
    /**
     * 4. Constraint Violation Handling
     * If the DB returns a Check Constraint error (MAKER_ID <> AUTH_ID)
     */
    if ($e->getCode() == 'HY000' || strpos($e->getMessage(), 'CHK_MAKER_CHECKER_DIFF') !== false) {
        header("Location: ../../views/admin/dashboard.php?error=self_auth_violation");
    } else {
        header("Location: ../../views/admin/dashboard.php?error=db_error");
    }
    exit();
}

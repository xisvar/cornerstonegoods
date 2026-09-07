<?php
/**
 * Logout - Module 4: Sessions assignment.
 *
 * The confirm/cancel prompt happens client-side (see the onclick
 * confirm() on the footer's Log Out link) before the browser ever
 * requests this page, so by the time this script runs the visitor
 * has already confirmed. This script's only job is to destroy the
 * session and send them back to the login page.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Clear all session data, then destroy the session itself.
$_SESSION = array();

if (ini_get('session.use_cookies')) {
    $cookieParams = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $cookieParams['path'],
        $cookieParams['domain'],
        $cookieParams['secure'],
        $cookieParams['httponly']
    );
}

session_destroy();

header('Location: login.php?loggedout=1');
exit;
?>

<?php
/**
 * Shared page header.
 * Defines the XHTML document shell and common metadata for each page.
 *
 * Also starts the PHP session used by the login/logout flow (Module 4)
 * so every page - not just the protected ones - has access to
 * $_SESSION, which the footer needs to decide whether to show a
 * logout link.
 *
 * A page can set $requiresAuth = true before including this file to
 * mark itself as a protected page. If no authenticated session
 * exists, a meta refresh tag is added here (it must go in <head>,
 * before this file prints </head>) so the browser automatically
 * returns the visitor to login.php after they've had a moment to
 * read the "not authenticated" message the page itself displays in
 * its <main> content.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isAuthenticated = isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;

if (!isset($pageTitle) || trim($pageTitle) === '') {
    $pageTitle = 'Cornerstone Goods';
}
if (!isset($pageDescription) || trim($pageDescription) === '') {
    $pageDescription = 'Cornerstone Goods is a Christian retailer of books, gifts, and home goods built on faith and service.';
}
if (!isset($pageKeywords) || trim($pageKeywords) === '') {
    $pageKeywords = 'Christian store, faith based gifts, Christian books, Cornerstone Goods';
}

$requiresAuth = isset($requiresAuth) ? (bool) $requiresAuth : false;
$needsAuthRedirect = $requiresAuth && !$isAuthenticated;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="author" content="Cornerstone Goods" />
    <?php if ($needsAuthRedirect): ?>
    <meta http-equiv="refresh" content="3;url=login.php" />
    <?php endif; ?>
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div id="page-wrap">
    <header>
        <h1>Cornerstone Goods</h1>
        <p class="tagline">Faith-Rooted Gifts, Books &amp; Home Goods</p>
    </header>

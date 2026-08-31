<?php
/**
 * header.php
 * -----------------------------------------------------------
 * Shared XHTML 1.0 Strict header used by every page on the
 * Cornerstone Goods website.
 *
 * Expects the calling page to define these variables BEFORE
 * including this file:
 *   $pageTitle       - string, shown in <title> and browser tab
 *   $pageDescription - string, used in the meta description tag
 *   $pageKeywords    - string, comma separated meta keywords
 *
 * Basic error handling: if a calling page forgets to set one of
 * the variables above, we fall back to a sensible site-wide
 * default instead of letting an "undefined variable" notice
 * reach the browser.
 */

if (!isset($pageTitle) || trim($pageTitle) === '') {
    $pageTitle = 'Cornerstone Goods';
}
if (!isset($pageDescription) || trim($pageDescription) === '') {
    $pageDescription = 'Cornerstone Goods is a Christian retailer of books, gifts, and home goods built on faith and service.';
}
if (!isset($pageKeywords) || trim($pageKeywords) === '') {
    $pageKeywords = 'Christian store, faith based gifts, Christian books, Cornerstone Goods';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="keywords" content="<?php echo htmlspecialchars($pageKeywords, ENT_QUOTES, 'UTF-8'); ?>" />
    <meta name="author" content="Cornerstone Goods" />
    <link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<div id="page-wrap">
    <header>
        <h1>Cornerstone Goods</h1>
        <p class="tagline">Faith-Rooted Gifts, Books &amp; Home Goods</p>
    </header>

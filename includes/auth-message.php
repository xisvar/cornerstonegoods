<?php
/**
 * Shared "not authenticated" notice for protected pages.
 * Included inside a protected page's <main> when $isAuthenticated
 * (set by includes/header.php) is false. header.php has already
 * added the meta-refresh redirect to <head> by this point; this
 * just supplies the visible message and a manual fallback link for
 * anyone whose browser has the meta refresh disabled.
 */
?>
<div class="callout-box">
    You are not authenticated. Redirecting you to the login page in a
    few seconds&hellip; if nothing happens, <a href="login.php">log in here</a>.
</div>

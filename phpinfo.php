<?php
/**
 * phpinfo.php
 * -----------------------------------------------------------
 * Assignment requirement: "Establish a link to a third page that
 * displays the hosting PHP configuration using PHP info."
 *
 * phpinfo() normally prints its own complete HTML document
 * (its own <html>, <head>, and <body> tags), which would break
 * strict XHTML validation if printed inside our shared layout.
 * To keep the site's navigation and footer consistent on every
 * page, we capture phpinfo()'s output with an output buffer and
 * extract only the inner <body> content before inserting it into
 * our own page.
 */

$pageTitle       = 'Hosting Configuration - Cornerstone Goods';
$pageDescription = 'PHP hosting configuration details for the Cornerstone Goods website, generated with phpinfo().';
$pageKeywords    = 'PHP info, hosting configuration, server configuration';
$currentPage     = 'phpinfo';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';

ob_start();
phpinfo(INFO_GENERAL | INFO_CONFIGURATION | INFO_MODULES);
$phpInfoRaw = ob_get_clean();

// Basic error handling: if phpinfo() output could not be captured
// for any reason, show a friendly message instead of a blank page.
if ($phpInfoRaw === false || trim($phpInfoRaw) === '') {
    $phpInfoBody = '<p>Hosting configuration details are temporarily unavailable.</p>';
} else {
    if (preg_match('/<body[^>]*>(.*)<\/body>/is', $phpInfoRaw, $matches)) {
        $phpInfoBody = $matches[1];
    } else {
        $phpInfoBody = $phpInfoRaw;
    }
}
?>
    <main>
        <h2>Hosting &amp; PHP Configuration</h2>

        <div class="info-note">
            The details below are generated automatically by PHP's built-in
            <code>phpinfo()</code> function and reflect the exact PHP version and
            configuration of the server currently hosting this site.
        </div>

        <?php echo $phpInfoBody; ?>
    </main>
<?php
include 'includes/footer.php';
?>

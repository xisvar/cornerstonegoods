<?php
/**
 * Module 6 Database landing page.
 * Explains the database-driven comments feature and links to
 * where it actually lives, on the organizational chart page.
 */

$pageTitle       = 'Module 6 Database - Cornerstone Goods';
$pageDescription = 'Module 6 Week 6 Database assignment: a MySQL-backed comments section on the organizational chart.';
$pageKeywords    = 'Module 6 Database, MySQL, mysqli, comments';
$currentPage     = 'database';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
?>
    <main>
        <h2>Module 6: Week 6 Database</h2>

        <p>
            This module adds a MySQL-backed comments section to the
            organizational chart. Comments are stored in a <code>comments</code>
            table (name, title, comment text, and an automatic timestamp) and
            can be added, edited, and deleted once you are logged in.
        </p>

        <p>
            <a href="org-chart.php">Go to the organizational chart &amp; comments</a>
        </p>
    </main>
<?php
include 'includes/footer.php';
?>

<?php
/**
 * One-time database setup script - Module 6: Database assignment.
 *
 * Some hosts (Aiven's free MySQL tier included) don't give you a
 * web-based phpMyAdmin-style tool to run schema.sql by hand. This
 * page does the same CREATE TABLE schema.sql does, but through
 * mysqli_query() instead, using the exact same credentials your
 * site already connects with (Pxxl Secrets or the fallback
 * constants in includes/db-connect.php). Visit this page once in
 * your browser after your database connection is configured, then
 * you can delete this file - it uses CREATE TABLE IF NOT EXISTS,
 * so it's harmless to leave in place or run again, but it has no
 * reason to exist once the table is there.
 */

require_once 'includes/db-connect.php';

$conn = get_db_connection();

$createTableSql = "CREATE TABLE IF NOT EXISTS comments (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    title VARCHAR(150) NOT NULL,
    comments TEXT NOT NULL,
    commentdate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id)
)";

$success = mysqli_query($conn, $createTableSql);

$pageTitle     = 'Database Setup - Cornerstone Goods';
$currentPage   = 'database';
$callingScript = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
?>
    <main>
        <h2>Database Setup</h2>

        <?php if ($success): ?>
            <div class="info-note">
                The <code>comments</code> table is ready. You can now
                <a href="org-chart.php">go to the organizational chart</a> and add a
                comment. You can safely delete this file now.
            </div>
        <?php else: ?>
            <div class="callout-box">
                Something went wrong creating the table:
                <?php echo htmlspecialchars(mysqli_error($conn), ENT_QUOTES, 'UTF-8'); ?>
            </div>
        <?php endif; ?>
    </main>
<?php
include 'includes/footer.php';
?>

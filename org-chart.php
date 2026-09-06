<?php
/**
 * Organizational chart page.
 * Displays the team members and links to their profile pages.
 */

$pageTitle       = 'Our Team - Cornerstone Goods';
$pageDescription = 'Meet the Cornerstone Goods team, the people behind our Christian retail company.';
$pageKeywords    = 'Cornerstone Goods team, organizational chart, staff';
$currentPage     = 'variables';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
include 'variables.php';


$employee1_name = $employee1_name ?? 'Name unavailable';
$employee2_name = $employee2_name ?? 'Name unavailable';
$employee3_name = $employee3_name ?? 'Name unavailable';
$employee1_link = $employee1_link ?? '#';
$employee2_link = $employee2_link ?? '#';
$employee3_link = $employee3_link ?? '#';
?>
    <main>
        <h2>Our Team</h2>

        <p>Cornerstone Goods is run by a small team committed to faith and
            service. Select a name below to learn more about each person.</p>

        <ul class="org-chart">
            <li>
                <a href="<?php echo htmlspecialchars($employee1_link, ENT_QUOTES, 'UTF-8'); ?>">
                    <?php echo htmlspecialchars($employee1_name, ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </li>
            <li>
                <a href="<?php echo htmlspecialchars($employee2_link, ENT_QUOTES, 'UTF-8'); ?>">
                    <?php echo htmlspecialchars($employee2_name, ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </li>
            <li>
                <a href="<?php echo htmlspecialchars($employee3_link, ENT_QUOTES, 'UTF-8'); ?>">
                    <?php echo htmlspecialchars($employee3_name, ENT_QUOTES, 'UTF-8'); ?>
                </a>
            </li>
        </ul>
    </main>
<?php
include 'includes/footer.php';
?>

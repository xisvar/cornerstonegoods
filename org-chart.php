<?php
/**
 * Organizational chart page.
 * Displays the team members and links to their profile pages.
 * Protected by Module 4's session login: $requiresAuth causes
 * includes/header.php to compute $isAuthenticated and, if false,
 * queue the auto-redirect to login.php.
 */

$pageTitle       = 'Our Team - Cornerstone Goods';
$pageDescription = 'Meet the Cornerstone Goods team, the people behind our Christian retail company.';
$pageKeywords    = 'Cornerstone Goods team, organizational chart, staff';
$currentPage     = 'variables';
$callingScript   = __FILE__;
$requiresAuth    = true;

include 'includes/header.php';
include 'includes/nav.php';
?>
    <main>
        <h2>Our Team</h2>

        <?php if (!$isAuthenticated): ?>
            <?php include 'includes/auth-message.php'; ?>
        <?php else: ?>
            <?php
            include 'variables.php';

            $employee1_name = $employee1_name ?? 'Name unavailable';
            $employee2_name = $employee2_name ?? 'Name unavailable';
            $employee3_name = $employee3_name ?? 'Name unavailable';
            $employee1_link = $employee1_link ?? '#';
            $employee2_link = $employee2_link ?? '#';
            $employee3_link = $employee3_link ?? '#';
            ?>
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
        <?php endif; ?>
    </main>
<?php
include 'includes/footer.php';
?>

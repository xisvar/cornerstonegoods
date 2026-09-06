<?php
/**
 * Profile page for Daniel Okafor.
 * Displays the operations manager's details and biography content.
 */

$pageTitle       = 'Daniel Okafor - Cornerstone Goods';
$pageDescription = 'Profile page for Daniel Okafor, Operations Manager of Cornerstone Goods.';
$pageKeywords    = 'Daniel Okafor, Cornerstone Goods, operations manager';
$currentPage     = 'variables';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
include 'variables.php';
?>
    <main>
        <h2><?php echo htmlspecialchars($employee2_name, ENT_QUOTES, 'UTF-8'); ?></h2>

        <img src="<?php echo htmlspecialchars($employee2_photo, ENT_QUOTES, 'UTF-8'); ?>"
             alt="Photo of <?php echo htmlspecialchars($employee2_name, ENT_QUOTES, 'UTF-8'); ?>"
             width="240" height="240" />

        <ul class="profile-info">
            <li><strong>Title:</strong> <?php echo htmlspecialchars($employee2_title, ENT_QUOTES, 'UTF-8'); ?></li>
            <li><strong>Department:</strong> <?php echo htmlspecialchars($employee2_department, ENT_QUOTES, 'UTF-8'); ?></li>
            <li><strong>Favorite Book:</strong> <?php echo htmlspecialchars($employee2_book, ENT_QUOTES, 'UTF-8'); ?></li>
            <li><strong>Personal Motto:</strong> <?php echo htmlspecialchars($employee2_motto, ENT_QUOTES, 'UTF-8'); ?></li>
        </ul>

        <p><a href="org-chart.php">Back to Our Team</a></p>

        <p class="photo-credit">These photos were generated with Gemini AI.</p>
    </main>
<?php
include 'includes/footer.php';
?>

<?php
/**
 * Profile page for Grace Whitfield.
 * Displays the founder's information and leadership details.
 */

$pageTitle       = 'Grace Whitfield - Cornerstone Goods';
$pageDescription = 'Profile page for Grace Whitfield, Founder and CEO of Cornerstone Goods.';
$pageKeywords    = 'Grace Whitfield, Cornerstone Goods, founder, CEO';
$currentPage     = 'variables';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
include 'variables.php';
?>
    <main>
        <h2><?php echo htmlspecialchars($employee1_name, ENT_QUOTES, 'UTF-8'); ?></h2>

        <img src="<?php echo htmlspecialchars($employee1_photo, ENT_QUOTES, 'UTF-8'); ?>"
             alt="Photo of <?php echo htmlspecialchars($employee1_name, ENT_QUOTES, 'UTF-8'); ?>"
             width="240" height="240" />

        <ul class="profile-info">
            <li><strong>Title:</strong> <?php echo htmlspecialchars($employee1_title, ENT_QUOTES, 'UTF-8'); ?></li>
            <li><strong>Department:</strong> <?php echo htmlspecialchars($employee1_department, ENT_QUOTES, 'UTF-8'); ?></li>
            <li><strong>Favorite Book:</strong> <?php echo htmlspecialchars($employee1_book, ENT_QUOTES, 'UTF-8'); ?></li>
            <li><strong>Personal Motto:</strong> <?php echo htmlspecialchars($employee1_motto, ENT_QUOTES, 'UTF-8'); ?></li>
        </ul>

        <p><a href="org-chart.php">Back to Our Team</a></p>

        <p class="photo-credit">These photos were generated with Gemini AI.</p>

    </main>
<?php
include 'includes/footer.php';
?>

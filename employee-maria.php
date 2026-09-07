<?php
/**
 * Profile page for Maria Delgado.
 * Displays the customer care lead's details and profile information.
 * Protected by Module 4's session login.
 */

$pageTitle       = 'Maria Delgado - Cornerstone Goods';
$pageDescription = 'Profile page for Maria Delgado, Customer Care Lead at Cornerstone Goods.';
$pageKeywords    = 'Maria Delgado, Cornerstone Goods, customer care';
$currentPage     = 'variables';
$callingScript   = __FILE__;
$requiresAuth    = true;

include 'includes/header.php';
include 'includes/nav.php';
?>
    <main>
        <?php if (!$isAuthenticated): ?>
            <?php include 'includes/auth-message.php'; ?>
        <?php else: ?>
            <?php include 'variables.php'; ?>
            <h2><?php echo htmlspecialchars($employee3_name, ENT_QUOTES, 'UTF-8'); ?></h2>

            <img src="<?php echo htmlspecialchars($employee3_photo, ENT_QUOTES, 'UTF-8'); ?>"
                 alt="Photo of <?php echo htmlspecialchars($employee3_name, ENT_QUOTES, 'UTF-8'); ?>"
                 width="240" height="240" />

            <ul class="profile-info">
                <li><strong>Title:</strong> <?php echo htmlspecialchars($employee3_title, ENT_QUOTES, 'UTF-8'); ?></li>
                <li><strong>Department:</strong> <?php echo htmlspecialchars($employee3_department, ENT_QUOTES, 'UTF-8'); ?></li>
                <li><strong>Favorite Book:</strong> <?php echo htmlspecialchars($employee3_book, ENT_QUOTES, 'UTF-8'); ?></li>
                <li><strong>Personal Motto:</strong> <?php echo htmlspecialchars($employee3_motto, ENT_QUOTES, 'UTF-8'); ?></li>
            </ul>

            <p><a href="org-chart.php">Back to Our Team</a></p>

            <p class="photo-credit">These photos were generated with Gemini AI.</p>
        <?php endif; ?>
    </main>
<?php
include 'includes/footer.php';
?>

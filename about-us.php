<?php
/**
 * About Us page.
 * Shares the company story, mission, and values.
 */

$pageTitle       = 'About Us - Cornerstone Goods';
$pageDescription = 'Learn about Cornerstone Goods, a Christian retailer of books, apparel, and home goods founded on faith and service.';
$pageKeywords    = 'About Cornerstone Goods, Christian company, faith based business';
$currentPage     = 'about';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';

// Basic error handling
$aboutParagraphOne = 'Cornerstone Goods was founded to give customers an online home for '
    . 'books, apparel, and gifts that reflect their Christian faith. What began as a '
    . 'single shelf of devotionals and handmade cards has grown into a full catalog of '
    . 'products meant to encourage families, churches, and individuals in their everyday '
    . 'walk of faith. Every product is chosen with care, and every order is treated as an '
    . 'opportunity to serve a customer well, not just complete a transaction.';

$aboutParagraphTwo = 'The company operates on a simple set of values drawn directly from '
    . 'scripture: honesty in business dealings, generosity toward the community, and '
    . 'excellence in the quality of goods and service offered. A portion of proceeds from '
    . 'every sale is set aside to support local ministries and charitable outreach. As '
    . 'Cornerstone Goods continues to grow through this course, from a simple homepage '
    . 'into a full e-commerce Content Management System, that same foundation of faith '
    . 'and service will continue to guide every page that is added.';

if (trim($aboutParagraphOne) === '') {
    $aboutParagraphOne = 'Company description coming soon.';
}
if (trim($aboutParagraphTwo) === '') {
    $aboutParagraphTwo = 'Company description coming soon.';
}
?>
    <main>
        <h2>About Cornerstone Goods</h2>

        <p>
            <?php echo htmlspecialchars($aboutParagraphOne, ENT_QUOTES, 'UTF-8'); ?>
        </p>

        <p>
            <?php echo htmlspecialchars($aboutParagraphTwo, ENT_QUOTES, 'UTF-8'); ?>
        </p>
    </main>
<?php
include 'includes/footer.php';
?>

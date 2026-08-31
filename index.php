<?php
/**
 * index.php - Homepage
 * -----------------------------------------------------------
 * Cornerstone Goods homepage. Sets up page-specific SEO values,
 * then pulls in the shared header, nav, and footer includes so
 * markup is not duplicated across the site.
 */

$pageTitle       = 'Cornerstone Goods - Christian Gifts, Books & Home Goods';
$pageDescription = 'Cornerstone Goods is an online Christian retailer offering books, apparel, and home goods that reflect faith and everyday life.';
$pageKeywords    = 'Christian store, Christian gifts, Christian home goods, faith based retailer';
$currentPage     = 'home';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
?>
    <main>
        <h2>Welcome to Cornerstone Goods</h2>

        <p>
            Cornerstone Goods is a small Christian company that sells books, apparel,
            and home goods designed to encourage faith in everyday life. This site is
            being built module by module throughout CSIS410 as the foundation for a
            complete e-commerce Content Management System.
        </p>

        <div class="callout-box">
            "Trust in the Lord with all your heart and lean not on your own
            understanding." &mdash; Proverbs 3:5
        </div>

        <p>
            Use the menu above to explore the current pages. Future weeks will add
            forms, arrays, sessions, and a full database-driven shopping experience
            as each module is completed.
        </p>
    </main>
<?php
include 'includes/footer.php';
?>

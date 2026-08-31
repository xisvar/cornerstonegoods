<?php
/**
 * contact-us.php
 * -----------------------------------------------------------
 * Assignment requirement: "Establish a link to the fourth page
 * that 'Prints' Contact Us information for your company using
 * PHP." The contact details are stored in an array and output
 * with print, as specifically required (About Us uses echo
 * instead, so both required statements appear in the site).
 */

$pageTitle       = 'Contact Us - Cornerstone Goods';
$pageDescription = 'Contact information for Cornerstone Goods, a Christian retailer of books, apparel, and home goods.';
$pageKeywords    = 'Contact Cornerstone Goods, customer service, Christian retailer contact';
$currentPage     = 'contact';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';

// Contact details kept in one array so future pages/modules can
// reuse the same information instead of retyping it.
$contactInfo = array(
    'Company'  => 'Cornerstone Goods',
    'Email'    => 'support@cornerstonegoods.example',
    'Phone'    => '(555) 010-2468',
    'Address'  => '123 Grace Avenue, Lynchburg, VA 24515',
    'Hours'    => 'Monday - Friday, 9:00 AM - 5:00 PM ET',
);

?>
    <main>
        <h2>Contact Cornerstone Goods</h2>

        <p>We would love to hear from you. Reach us using any of the details below:</p>

        <?php
        if (empty($contactInfo)) {
            print '<p>Contact information is currently unavailable. Please check back soon.</p>';
        } else {
            print '<ul class="contact-list">';
            foreach ($contactInfo as $label => $value) {
                print '<li><strong>' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . ':</strong> '
                    . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '</li>';
            }
            print '</ul>';
        }
        ?>
    </main>
<?php
include 'includes/footer.php';
?>

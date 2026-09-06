<?php
/**
 * module1-foundations.php
 * -----------------------------------------------------------
 * Assignment requirement: "Create a foundations page that
 * demonstrates the required XHTML, CSS, and PHP elements for
 * the first course module."
 *
 * This page presents the Week 1 submission for the Web Development:
 * Foundations assignment. It establishes the page metadata, identifies
 * the active navigation item, and loads the shared site layout so the
 * page matches the overall Cornerstone Goods design.
 *
 * The content also documents the required elements of the assignment,
 * including strict XHTML structure, shared CSS classes, reusable
 * navigation, and the automatic last-modified date output.
 */

$pageTitle       = 'Module 1 Foundations - Cornerstone Goods';
$pageDescription = 'Module 1 Week 1 Foundations assignment page for the Cornerstone Goods website, built with strict XHTML, CSS, and PHP.';
$pageKeywords    = 'Module 1 Foundations, XHTML, CSS, PHP, Cornerstone Goods';
$currentPage     = 'foundations';
$callingScript   = __FILE__;

// Include the shared site header and main navigation to maintain a
// consistent layout and page structure across the entire website.
include 'includes/header.php';
include 'includes/nav.php';
?>
    <main>
        <h2>Module 1: Week 1 Foundations</h2>

        <p>
            This page satisfies the Web Development: Foundations assignment. The
            site is written entirely by hand in strict XHTML, custom CSS, and PHP,
            with no third-party frameworks, templates, or content management
            systems, in keeping with the course's academic integrity requirements.
        </p>

        <ul>
            <li>Strict XHTML 1.0 document type on every page, with matching
                W3C and CSS validation badges linked at the bottom of the page.</li>
            <li>A descriptive title, meta description, and meta keywords on
                every page so search engines can index the site.</li>
            <li>At least three custom CSS classes defined in <code>styles.css</code>
                (<code>.tagline</code>, <code>.current-page</code>, and
                <code>.callout-box</code>), plus a fourth used on the configuration page.</li>
            <li>A shared main menu, built once in <code>includes/nav.php</code> and
                reused on every page, with placeholders for each upcoming module.</li>
            <li>A shared header and footer, built once and reused everywhere, so
                the design and navigation stay consistent site-wide.</li>
            <li>A PHP function that automatically prints the date and time each
                page was last modified, based on that page's own file timestamp.</li>
        </ul>

        <p>
            From here, continue to the <a href="about-us.php">About Us</a> page to
            read about Cornerstone Goods, the <a href="phpinfo.php">hosting
            configuration</a> page to see the server's PHP setup, or the
            <a href="contact-us.php">Contact Us</a> page for company contact details.
        </p>
    </main>
<?php
include 'includes/footer.php';
?>

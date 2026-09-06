<?php
/**
 * Module 2 Forms landing page.
 * Briefly explains the GET vs. POST distinction, then links to
 * both poll forms.
 */

$pageTitle       = 'Module 2 Forms - Cornerstone Goods';
$pageDescription = 'Module 2 Week 2 Forms assignment: two product polls, one using GET and one using POST.';
$pageKeywords    = 'Module 2 Forms, GET method, POST method, product poll';
$currentPage     = 'forms';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
?>
    <main>
        <h2>Module 2: Week 2 Forms</h2>

        <p>
            This module compares PHP's two main ways of receiving form data.
            Both methods send the same kind of information; the difference is
            how and where that information travels:
        </p>

        <ul>
            <li>
                <strong>GET</strong> appends form data to the URL as a query
                string. It is visible in the address bar, can be bookmarked
                or shared as a link, and is best for short, non-sensitive
                data such as a search or a simple poll.
            </li>
            <li>
                <strong>POST</strong> sends form data in the body of the
                request instead of the URL. It does not clutter the address
                bar, is not saved in browser history, and is the better
                choice for larger amounts of data or anything that should
                not be resubmitted just by revisiting a link.
            </li>
        </ul>

        <p>Two identical product polls below demonstrate each method:</p>

        <ul>
            <li><a href="poll-get.php">Product Poll &mdash; GET Method</a></li>
            <li><a href="poll-post.php">Product Poll &mdash; POST Method</a></li>
        </ul>
    </main>
<?php
include 'includes/footer.php';
?>

<?php
/**
 * Poll results - GET method.
 * Reads its answers from $_GET (since poll-get.php submits with
 * method="get") and hands them to render_poll_results() to build
 * the report.
 */

$pageTitle       = 'Poll Results (GET) - Cornerstone Goods';
$pageDescription = 'Results report for the Cornerstone Goods GET-method product poll.';
$pageKeywords    = 'poll results, GET method report';
$currentPage     = 'forms';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
include 'poll-data.php';
include 'includes/poll-results-render.php';
?>
    <main>
        <h2>Poll Results &mdash; GET Method</h2>
        <p>
            These results were read from <code>$_GET</code>, which is why every
            answer below is also visible in this page's URL.
        </p>
        <?php render_poll_results($_GET, $pollProducts, $pollQuestions, $pollScale); ?>

        <p><a href="poll-get.php">&laquo; Take the poll again</a></p>
    </main>
<?php
include 'includes/footer.php';
?>

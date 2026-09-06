<?php
/**
 * Poll results - POST method.
 * Reads its answers from $_POST (since poll-post.php submits with
 * method="post") and hands them to render_poll_results() to build
 * the report.
 */

$pageTitle       = 'Poll Results (POST) - Cornerstone Goods';
$pageDescription = 'Results report for the Cornerstone Goods POST-method product poll.';
$pageKeywords    = 'poll results, POST method report';
$currentPage     = 'forms';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
include 'poll-data.php';
include 'includes/poll-results-render.php';
?>
    <main>
        <h2>Poll Results &mdash; POST Method</h2>
        <p>
            These results were read from <code>$_POST</code>, so unlike the GET
            report, none of these answers appear in this page's URL.
        </p>
        <?php render_poll_results($_POST, $pollProducts, $pollQuestions, $pollScale); ?>

        <p><a href="poll-post.php">&laquo; Take the poll again</a></p>
    </main>
<?php
include 'includes/footer.php';
?>

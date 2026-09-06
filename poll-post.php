<?php
/**
 * Product poll - POST method.
 * Demonstrates a form submitted with POST, appropriate here since
 * the answers stay out of the URL and address bar, and the form
 * should not be resubmitted just by revisiting or bookmarking a link.
 */

$pageTitle       = 'Product Poll (POST) - Cornerstone Goods';
$pageDescription = 'Rank three Cornerstone Goods products using this POST-method survey.';
$pageKeywords    = 'product poll, survey, POST method';
$currentPage     = 'forms';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
include 'poll-data.php';
include 'includes/poll-form-render.php';
?>
    <main>
        <h2>Product Poll &mdash; POST Method</h2>

        <p>
            This form submits using the <strong>POST</strong> method, so your
            answers are sent in the body of the request instead of the URL.
            POST is the better choice here if we did not want a long list of
            answers cluttering the address bar, and it is required any time a
            form should not be resubmitted just by revisiting or bookmarking
            a link.
        </p>

        <form action="results-post.php" method="post">
            <p>
                <label for="ranker_name">Your Name:</label><br />
                <input type="text" id="ranker_name" name="ranker_name" required="required" />
            </p>

            <?php foreach ($pollProducts as $product): ?>
                <?php render_poll_product($product, $pollQuestions, $pollScale); ?>
            <?php endforeach; ?>

            <p>
                <label for="comments">Comments:</label><br />
                <textarea id="comments" name="comments" rows="4" cols="50"></textarea>
            </p>

            <p>
                <input type="submit" value="Submit Poll (POST)" />
            </p>
        </form>
    </main>
<?php
include 'includes/footer.php';
?>

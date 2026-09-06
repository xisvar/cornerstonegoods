<?php
/**
 * Product poll - GET method.
 * Demonstrates a form submitted with GET, appropriate here since
 * the poll is short, non-sensitive, and benefits from being
 * bookmarkable or shareable as a link - something POST cannot do.
 */

$pageTitle       = 'Product Poll (GET) - Cornerstone Goods';
$pageDescription = 'Rank three Cornerstone Goods products using this short GET-method survey.';
$pageKeywords    = 'product poll, survey, GET method';
$currentPage     = 'forms';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
include 'poll-data.php';
include 'includes/poll-form-render.php';
?>
    <main>
        <h2>Product Poll &mdash; GET Method</h2>

        <p>
            This form submits using the <strong>GET</strong> method, so your
            answers will appear directly in the page's URL after you submit.
            GET is a good fit here because a poll like this is short, is not
            sensitive information, and benefits from being bookmarkable or
            shareable as a link &mdash; something POST cannot do.
        </p>

        <form action="results-get.php" method="get">
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
                <input type="submit" value="Submit Poll (GET)" />
            </p>
        </form>
    </main>
<?php
include 'includes/footer.php';
?>

<?php
/**
 * Poll results renderer.
 * Validates and renders the submitted poll answers as a table.
 * Used by both results-get.php and results-post.php so the
 * report layout only needs to be built once; each page just
 * passes in $_GET or $_POST as the $data array.
 *
 * All output is escaped with htmlspecialchars() since this page
 * is displaying data a visitor typed in, including on the GET
 * report where answers are also visible in the URL.
 *
 * @param array $data       $_GET or $_POST from the submitted poll
 * @param array $products   $pollProducts
 * @param array $questions  $pollQuestions
 * @param array $scale      $pollScale
 * @return bool True if the submission had enough data to display a report.
 */
function render_poll_results($data, $products, $questions, $scale) {

    // ---------- Validation ----------
    // A visitor who reaches this page without submitting the form
    // (e.g. by typing the URL directly) should see a clear message
    // instead of a page full of "undefined index" notices.
    $rankerName = isset($data['ranker_name']) ? trim($data['ranker_name']) : '';

    if ($rankerName === '') {
        echo '<div class="callout-box">';
        echo 'No poll submission was found. Please <a href="poll-get.php">go back and complete the poll</a> before viewing results.';
        echo '</div>';
        return false;
    }

    // Count how many of the 15 required radio answers actually
    // arrived, so an incomplete submission is reported honestly
    // rather than silently shown as blank.
    $totalExpected = count($products) * count($questions);
    $totalAnswered = 0;
    ?>
    <p><strong>Ranked by:</strong> <?php echo htmlspecialchars($rankerName, ENT_QUOTES, 'UTF-8'); ?></p>

    <table>
        <tr>
            <th scope="col">Product</th>
            <?php foreach ($questions as $qText): ?>
                <th scope="col"><?php echo htmlspecialchars($qText, ENT_QUOTES, 'UTF-8'); ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($products as $product): ?>
        <tr>
            <td><?php echo htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></td>
            <?php foreach ($questions as $qKey => $qText):
                $fieldName = $product['id'] . '_' . $qKey;
                $answerValue = isset($data[$fieldName]) ? $data[$fieldName] : '';
                if ($answerValue !== '' && isset($scale[$answerValue])) {
                    $totalAnswered++;
                    $answerLabel = $scale[$answerValue];
                } else {
                    $answerLabel = 'No answer';
                }
            ?>
                <td><?php echo htmlspecialchars($answerLabel, ENT_QUOTES, 'UTF-8'); ?></td>
            <?php endforeach; ?>
        </tr>
        <?php endforeach; ?>
    </table>

    <?php if ($totalAnswered < $totalExpected): ?>
        <p class="poll-warning">
            Note: only <?php echo (int) $totalAnswered; ?> of <?php echo (int) $totalExpected; ?>
            rating questions were answered. Missing ratings are shown above as "No answer."
        </p>
    <?php endif; ?>

    <p>
        <strong>Comments:</strong><br />
        <?php
        $comments = isset($data['comments']) ? trim($data['comments']) : '';
        echo ($comments !== '')
            ? nl2br(htmlspecialchars($comments, ENT_QUOTES, 'UTF-8'))
            : '<em>No comments were left.</em>';
        ?>
    </p>
    <?php

    return true;
}
?>

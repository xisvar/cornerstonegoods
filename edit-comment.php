<?php
/**
 * Edit an existing comment - Module 6: Database assignment.
 * Reached from the Edit link next to each comment on org-chart.php.
 */

$pageTitle       = 'Edit Comment - Cornerstone Goods';
$pageDescription = 'Edit a comment on the Cornerstone Goods organizational chart.';
$pageKeywords    = 'edit comment, Cornerstone Goods';
$currentPage     = 'database';
$callingScript   = __FILE__;
$requiresAuth    = true;

include 'includes/header.php';
include 'includes/nav.php';

$formError  = '';
$commentRow = null;

if ($isAuthenticated) {
    require_once 'includes/comments-functions.php';

    $commentId = isset($_GET['id']) ? (int) $_GET['id'] : (isset($_POST['id']) ? (int) $_POST['id'] : 0);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $submittedName    = isset($_POST['name']) ? trim($_POST['name']) : '';
        $submittedTitle   = isset($_POST['title']) ? trim($_POST['title']) : '';
        $submittedComment = isset($_POST['comment']) ? trim($_POST['comment']) : '';

        // ---------- Form validation ----------
        if ($commentId <= 0) {
            $formError = 'No comment was specified to update.';
        } elseif ($submittedName === '' || $submittedTitle === '' || $submittedComment === '') {
            $formError = 'Please fill in your name, a title, and a comment before saving.';
        } else {
            if (update_comment($commentId, $submittedName, $submittedTitle, $submittedComment)) {
                header('Location: org-chart.php#comments');
                exit;
            } else {
                $formError = 'Something went wrong updating this comment. Please try again.';
            }
        }

        // Keep whatever the visitor just typed on screen if saving failed,
        // instead of re-querying and discarding their edits.
        $commentRow = array('id' => $commentId, 'name' => $submittedName, 'title' => $submittedTitle, 'comments' => $submittedComment);
    } else {
        $commentRow = ($commentId > 0) ? get_comment_by_id($commentId) : null;
        if ($commentRow === null) {
            $formError = 'That comment could not be found. It may have already been deleted.';
        }
    }
}
?>
    <main>
        <h2>Edit Comment</h2>

        <?php if (!$isAuthenticated): ?>
            <?php include 'includes/auth-message.php'; ?>
        <?php elseif ($commentRow === null): ?>
            <div class="callout-box"><?php echo htmlspecialchars($formError, ENT_QUOTES, 'UTF-8'); ?></div>
            <p><a href="org-chart.php">&laquo; Back to Our Team</a></p>
        <?php else: ?>

            <?php if ($formError !== ''): ?>
                <div class="callout-box"><?php echo htmlspecialchars($formError, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>

            <form action="edit-comment.php" method="post">
                <input type="hidden" name="id" value="<?php echo (int) $commentRow['id']; ?>" />
                <p>
                    <label for="name">Your Name:</label><br />
                    <input type="text" id="name" name="name" maxlength="100"
                           value="<?php echo htmlspecialchars($commentRow['name'], ENT_QUOTES, 'UTF-8'); ?>"
                           required="required" />
                </p>
                <p>
                    <label for="title">Title:</label><br />
                    <input type="text" id="title" name="title" maxlength="150"
                           value="<?php echo htmlspecialchars($commentRow['title'], ENT_QUOTES, 'UTF-8'); ?>"
                           required="required" />
                </p>
                <p>
                    <label for="comment">Comment:</label><br />
                    <textarea id="comment" name="comment" rows="5" cols="50" required="required"><?php echo htmlspecialchars($commentRow['comments'], ENT_QUOTES, 'UTF-8'); ?></textarea>
                </p>
                <p>
                    <input type="submit" value="Save Changes" />
                </p>
            </form>

            <p><a href="org-chart.php">&laquo; Back to Our Team</a></p>
        <?php endif; ?>
    </main>
<?php
include 'includes/footer.php';
?>

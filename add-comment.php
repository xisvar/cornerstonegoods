<?php
/**
 * Add a comment - Module 6: Database assignment.
 * Linked from org-chart.php once a visitor is authenticated.
 */

$pageTitle       = 'Add a Comment - Cornerstone Goods';
$pageDescription = 'Leave a comment on the Cornerstone Goods organizational chart.';
$pageKeywords    = 'add comment, Cornerstone Goods';
$currentPage     = 'database';
$callingScript   = __FILE__;
$requiresAuth    = true;

include 'includes/header.php';
include 'includes/nav.php';

$formError        = '';
$submittedName    = '';
$submittedTitle   = '';
$submittedComment = '';

if ($isAuthenticated && $_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'includes/comments-functions.php';

    $submittedName    = isset($_POST['name']) ? trim($_POST['name']) : '';
    $submittedTitle   = isset($_POST['title']) ? trim($_POST['title']) : '';
    $submittedComment = isset($_POST['comment']) ? trim($_POST['comment']) : '';

    // ---------- Form validation ----------
    if ($submittedName === '' || $submittedTitle === '' || $submittedComment === '') {
        $formError = 'Please fill in your name, a title, and a comment before submitting.';
    } elseif (strlen($submittedName) > 100) {
        $formError = 'Name must be 100 characters or fewer.';
    } elseif (strlen($submittedTitle) > 150) {
        $formError = 'Title must be 150 characters or fewer.';
    } else {
        if (insert_comment($submittedName, $submittedTitle, $submittedComment)) {
            header('Location: org-chart.php#comments');
            exit;
        } else {
            $formError = 'Something went wrong saving your comment. Please try again.';
        }
    }
}
?>
    <main>
        <h2>Add a Comment</h2>

        <?php if (!$isAuthenticated): ?>
            <?php include 'includes/auth-message.php'; ?>
        <?php else: ?>

            <?php if ($formError !== ''): ?>
                <div class="callout-box"><?php echo htmlspecialchars($formError, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>

            <form action="add-comment.php" method="post">
                <p>
                    <label for="name">Your Name:</label><br />
                    <input type="text" id="name" name="name" maxlength="100"
                           value="<?php echo htmlspecialchars($submittedName, ENT_QUOTES, 'UTF-8'); ?>"
                           required="required" />
                </p>
                <p>
                    <label for="title">Title:</label><br />
                    <input type="text" id="title" name="title" maxlength="150"
                           value="<?php echo htmlspecialchars($submittedTitle, ENT_QUOTES, 'UTF-8'); ?>"
                           required="required" />
                </p>
                <p>
                    <label for="comment">Comment:</label><br />
                    <textarea id="comment" name="comment" rows="5" cols="50" required="required"><?php echo htmlspecialchars($submittedComment, ENT_QUOTES, 'UTF-8'); ?></textarea>
                </p>
                <p>
                    <input type="submit" value="Post Comment" />
                </p>
            </form>

            <p><a href="org-chart.php">&laquo; Back to Our Team</a></p>
        <?php endif; ?>
    </main>
<?php
include 'includes/footer.php';
?>

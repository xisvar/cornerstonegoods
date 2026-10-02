<?php
/**
 * Delete a comment - Module 6: Database assignment.
 * Only accepts POST, so a comment can never be deleted just by
 * visiting or crawling a link - each Delete button on the org
 * chart is its own small form that posts here with the comment's
 * ID, and asks for confirmation before submitting.
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$isAuthenticated = isset($_SESSION['authenticated']) && $_SESSION['authenticated'] === true;

if ($isAuthenticated && $_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'includes/comments-functions.php';

    $commentId = isset($_POST['id']) ? (int) $_POST['id'] : 0;
    if ($commentId > 0) {
        delete_comment($commentId);
    }
}

header('Location: org-chart.php#comments');
exit;
?>

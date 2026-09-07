<?php
/**
 * Login page - Module 4: Sessions assignment.
 *
 * Authenticates against the fixed username/password the assignment
 * requires ("customer" / "customer"). This check, and the redirect
 * on success, must happen before any HTML is printed - which is why
 * it runs here at the very top of the file, before includes/header.php
 * (which is what actually prints the <!DOCTYPE> and everything after).
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// The one account this assignment requires. In a real application
// these would never be hard-coded like this; they are fixed here
// only because the instructions specifically require the exact
// username "customer" and password "customer" so the assignment can
// be graded.
define('VALID_USERNAME', 'customer');
define('VALID_PASSWORD', 'customer');

$loginError = '';
$submittedUsername = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $submittedUsername = isset($_POST['username']) ? trim($_POST['username']) : '';
    $submittedPassword = isset($_POST['password']) ? $_POST['password'] : '';

    // ---------- Form validation ----------
    if ($submittedUsername === '' || $submittedPassword === '') {
        $loginError = 'Please enter both a username and a password.';
    } elseif ($submittedUsername !== VALID_USERNAME || $submittedPassword !== VALID_PASSWORD) {
        $loginError = 'Incorrect username or password. Please try again.';
    } else {
        // Credentials are correct: start the authenticated session
        // and send the visitor on to the organizational chart.
        $_SESSION['authenticated'] = true;
        $_SESSION['username']      = VALID_USERNAME;

        header('Location: org-chart.php');
        exit;
    }
}

$loggedOut = isset($_GET['loggedout']) && $_GET['loggedout'] === '1';

$pageTitle       = 'Login - Cornerstone Goods';
$pageDescription = 'Log in to view the Cornerstone Goods organizational chart.';
$pageKeywords    = 'login, Cornerstone Goods team access';
$currentPage     = 'sessions';
$callingScript   = __FILE__;

include 'includes/header.php';
include 'includes/nav.php';
?>
    <main>
        <h2>Team Login</h2>

        <p>The organizational chart and staff profile pages require you to log in first.</p>

        <?php if ($loggedOut): ?>
            <div class="info-note">You have been logged out.</div>
        <?php endif; ?>

        <?php if ($loginError !== ''): ?>
            <div class="callout-box"><?php echo htmlspecialchars($loginError, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>

        <form action="login.php" method="post">
            <p>
                <label for="username">Username:</label><br />
                <input type="text"
                       id="username"
                       name="username"
                       value="<?php echo htmlspecialchars($submittedUsername, ENT_QUOTES, 'UTF-8'); ?>"
                       required="required" />
            </p>
            <p>
                <label for="password">Password:</label><br />
                <input type="password"
                       id="password"
                       name="password"
                       required="required" />
            </p>
            <p>
                <input type="submit" value="Log In" />
            </p>
        </form>

        <div class="info-note">
            For grading purposes, this page accepts username <code>customer</code>
            and password <code>customer</code>.
        </div>
    </main>
<?php
include 'includes/footer.php';
?>

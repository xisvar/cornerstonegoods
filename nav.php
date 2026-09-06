<?php
/**
 * Shared site navigation.
 * Builds the main menu and highlights the active page.
 */

if (!isset($currentPage)) {
    $currentPage = '';
}


function nav_item($key, $label, $href, $currentPage) {
    $class = ($key === $currentPage) ? ' class="current-page"' : '';
    echo '<li' . $class . '><a href="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '">'
        . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '</a></li>' . "\n";
}
?>
<nav>
    <ul class="main-menu">
        <?php
        nav_item('home', 'Home', 'index.php', $currentPage);
        nav_item('foundations', 'Module 1: Week 1 Foundations', 'module1-foundations.php', $currentPage);
        nav_item('about', 'About Us', 'about-us.php', $currentPage);
        nav_item('phpinfo', 'Hosting Configuration', 'phpinfo.php', $currentPage);
        nav_item('contact', 'Contact Us', 'contact-us.php', $currentPage);
        nav_item('variables', 'Week 1: Variables', 'org-chart.php', $currentPage);
        nav_item('forms', 'Module 2: Week 2 Forms', '#', $currentPage);
        nav_item('arrays', 'Module 3: Week 3 Arrays', '#', $currentPage);
        nav_item('sessions', 'Module 4: Week 4 Sessions', '#', $currentPage);
        nav_item('cms-sessions', 'Module 5: Week 5 CMS Sessions', '#', $currentPage);
        nav_item('database', 'Module 6: Week 6 Database', '#', $currentPage);
        nav_item('cms-database', 'Module 8: Week 8 CMS Database', '#', $currentPage);
        ?>
    </ul>
</nav>

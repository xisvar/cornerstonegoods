<?php
/**
 * Shared page footer.
 * Adds the last-modified notice and validation badges to every page.
 */

if (!isset($callingScript) || !file_exists($callingScript)) {
    $callingScript = __FILE__;
}

$lastModifiedTimestamp = filemtime($callingScript);
$lastModifiedDisplay = ($lastModifiedTimestamp !== false)
    ? date('F j, Y \a\t g:i A', $lastModifiedTimestamp)
    : 'unavailable';
?>
    <footer>
        <p class="last-modified">
            This page was last modified on <?php echo htmlspecialchars($lastModifiedDisplay, ENT_QUOTES, 'UTF-8'); ?>.
        </p>
        <p class="validation-badges">
            <a href="http://validator.w3.org/check?uri=referer">
                <img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Strict" height="31" width="88" />
            </a>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
                <img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" />
            </a>
        </p>
        <p>&copy; <?php echo date('Y'); ?> Cornerstone Goods. "Whatever you do, work at it with all your heart, as working for the Lord." &mdash; Colossians 3:23</p>
    </footer>
</div>
</body>
</html>

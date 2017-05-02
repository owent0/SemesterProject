<?php
    // logout.php This ends the current session
    // Tom Owen Rithvik Mandalapu Steve Pham Michael Robinson
    session_start();

    session_destroy();
    header("Location: index.php");
?>

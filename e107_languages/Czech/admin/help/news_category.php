<?php


if (!defined('e107_INIT')) { exit; }

$text = "You can separate your news items into different categories, and allow visitors to display only the news items in those categories. <br /><br />Upload your news icon images either ".e_THEME."-yourtheme-/images/ or themes/shared/newsicons/.";
$ns -> tablerender("News Category Help", $text);
?>
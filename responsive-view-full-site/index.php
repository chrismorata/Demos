<?php
require_once('../_resources/includes/Demo.class.php');

$demo = new Demo("View Full Site for Responsive Web Design");
$demo->setDescription("Add a view full site link for visitors who want to see the desktop version of your web page.");
$demo->addCSS('demo.css');
$demo->addJS('demo.js');

$demo->startDemo();
?>
<ul>
    <li>
        <h2>Content</h2>
    </li>
    <li>
        <h2>Content</h2>
    </li>
    <li>
        <h2>Content</h2>
    </li>
</ul>

<span id="view-full">View Full Site</span>

<?
$demo->endDemo();

//$demo->displaySource($demo->content, 'html');
//$demo->displaySource($demo->css[0], 'css');
$demo->displaySource($demo->js[0], 'js');

$demo->renderDemo();
?>

    
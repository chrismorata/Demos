<?php
require_once('../_resources/includes/Demo.class.php');

$demo = new Demo("Demo: Simple Solution for Responsive Tables");
$demo->setDescription("Quick solution for responsive tables that doesn't require JS. Browser support needs further testing.");
$demo->addCSS('demo.css');
//$demo->addJS('demo.js');

$demo->startDemo();
?>
<div class="table-container">
	<table class="data-table">
		<thead>
			<tr>
				<th>A Heading</th>
				<th>A Longer Heading</th>
				<th>A Really Really Really Long Heading</th>
				<th>A Really Really...Oh Hell I Think You Get It.</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
			</tr>	
			<tr>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
			</tr>	
            <tr>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
			</tr>	
            <tr>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
			</tr>	
            <tr>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
				<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
			</tr>	
		</tbody>
	</table>
</div>
<?
$demo->endDemo();

$demo->displaySource($demo->content, 'html');
$demo->displaySource($demo->css[0], 'css');
//$demo->displaySource($demo->js[0], 'js');

$demo->renderDemo();
?>

    
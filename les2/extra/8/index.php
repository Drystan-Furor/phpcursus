<?php 

include_once 'elements/Link.php'; 

$google = new Link('http://google.com', 'Ga naar Google');
$slack = new Link('http://slack.com', 'Ga naar Slack');

?>

<html>
<body>

<ul>
    <li><?php $google->show(); ?></li>
    <li><?php $slack->show(); ?></li>
</ul>

</body>
<html>
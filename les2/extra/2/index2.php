

<a href="index2.php?file=hello">hello</a>
<br/>
<a href="index2.php?file=world">world</a>

<h1>
<?php 
if(isset($_REQUEST['file'])) {
    include @$_REQUEST['file'] . '.php';
}
?>
</h1>
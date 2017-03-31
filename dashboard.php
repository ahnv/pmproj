<?php
session_start();
require __DIR__.'/src/autoload.php';
if (!$_SESSION['logged_in']){
	header("Location: index.php");
}
require __DIR__.'/header.php';	

$portalhelper=new portalhelper($db);
print_r($portalhelper->fetch($_SESSION['uid']));
?>


<?php require __DIR__.'/footer.php'; ?>
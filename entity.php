<?php 


require_once('includes/header.php');


if(!isset($_GET["id"])) {

  exit("Nope");

}


$entityId = $_GET['id'];
$entity = new Entity($con, $entityId);

$preview = new PreviewProvider($con,$userLoggedIn );

  echo $preview->createPreviewVideo($entity);


?>
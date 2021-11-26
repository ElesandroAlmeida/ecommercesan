<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Hcode\DB\Sql();
	$response = $sql->select("SELECT * FROM tb_users");

	echo "<pre>";
	echo json_encode($response);

});

$app->run();

 ?>
<?

require_once 'config.php';
require_once 'functions.php';

if($_GET['key'] !== md5($APP['key']))
{
	echo json_encode(['error' => "INVALID_KEY"]);
	die();
}

dbConnect();
$records = dbSelect("SELECT first_name, last_name FROM studenti WHERE id = {$_GET['id']}");

if(empty($records)){
	echo json_encode(['error' => 'NO_DATA']);
	die();
}
echo json_encode(current($records));
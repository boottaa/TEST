<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	
	use Zend\Db\Sql\Sql;
	use Zend\Db\TableGateway\TableGateway;
	use ABTT\Method;
	
	$root_dir = dirname(__DIR__);
	require_once $root_dir.'/loader.php';
	
	
	/*
	 *
	 *
	 * $met = new ABTT\Method();
	
	if($met->post()){
		die('method POST');
	}elseif($met->put()){
		die('PUT');
	}

	
	<form method="post">
		<input type="hidden" name="_method" value="put">
		<input type="text" name="name">
		<input type="text" name="password">
		<input type="submit">
	</form>
	*/



	


$adapter = new Zend\Db\Adapter\Adapter(
    \ABTT\Info::get_db('default')
);



/*$sql = new Sql($adapter);
$select = $sql->select()->from('users');
$statement = $sql->prepareStatementForSqlObject($select);
$results = $statement->execute();*/


/*$projectTable = new TableGateway('users', $adapter);
$rowset = $projectTable->select();


echo '<pre>';
foreach ($rowset as $projectRow) {
    print_r($projectRow);
}*/
$res = $adapter->query('SELECT * FROM `test`.`users`')->execute();
echo '<pre>';

foreach ($res as $v){
    print_r($v);
}

die();
Twig_Autoloader::register();
$loader = new Twig_Loader_Filesystem($root_dir);
$twig = new Twig_Environment($loader, array(
    'cache' => false,//'/path/to/compilation_cache',
));
$method = strtolower(trim($_SERVER['REQUEST_METHOD']));

if($method == 'post'){

}
$view = ABTT\Module::on('vk');
echo $twig->render($view, array('the' => 'hello', 'title' => 'hello'));
	




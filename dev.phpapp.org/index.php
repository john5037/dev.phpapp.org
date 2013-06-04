<?php 

    /*$services_json = json_decode(getenv("VCAP_SERVICES"),true);
    echo "<pre>";
    var_dump($services_json);exit;
    $mysql_config = $services_json["mysql-5.1"][0]["credentials"];
    $username = $mysql_config["username"];
    $password = $mysql_config["password"];
    $hostname = $mysql_config["hostname"];
    $port = $mysql_config["port"];
    $db = $mysql_config["name"];
    $link = mysql_connect("$hostname:$port", $username, $password);
    $db_selected = mysql_select_db($db, $link);
    exit;*/    
  include_once('includes/sm_mainconfig.inc');
  define('WEB_PATH' ,'web/');
    
	include_once("controller/Controller.php");
  
  //$res=$o__objDB->db_accesstable("SHOW TABLES");
  //var_dump($res);exit;
  
	$controller = new Controller($o__objDB);
	$controller->invoke();

?>
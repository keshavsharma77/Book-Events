<?php
header("Content-Type: application/json; charset=UTF-8");
require 'database.php';
require 'users.php';

$req=$_GET['req'] ?? null;
$db=new database();
$user= new users($db->connect());

switch($req)
{
    case 'insert':
        $obj=$_GET['object'];
        $temp=json_decode($obj);
        echo $user->insertuserdetail($temp);
        break;

    case 'list':
        echo $user->getuserdetails();
        break;

    default:
        echo json_encode(["In-valid request"]);
        break;
}

?>
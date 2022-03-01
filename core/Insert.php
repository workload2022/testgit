<?php 

require_once '../db/DatabaseClass.php';

if ( isset( $_POST['name'] ) and isset( $_POST['phone'] ) and isset( $_POST['email'] ) )
{

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$mysqliConn = new DatabaseClass();
	$mysqliConn->insertStudentDetails( $name, $phone, $email );

}

?>

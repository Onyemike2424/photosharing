<?php
include 'connect.php';

class Login_validate extends connection
{
	function __construct()
	{
		$email = __("loginemail");
		$password = __("loginpassword");
		// var_dump($connections);
		$selectdata = $this->connect()->prepare("SELECT * FROM users WHERE email = ?, AND pwd = ?");
		if ($selectdata) {
			echo "Seleted";
		}
	}
}

if (isset($_POST["loginbtn"])) {
	$email = __("loginemail");
	$password = sha1(__("loginpassword"));
	$stat = "1";

	$selectdata = $dircon->prepare("SELECT * FROM users WHERE email = ? AND pwd = ? LIMIT 1");
	$selectdata->bind_param("ss", $email, $password);
	$selectdata->execute();
	$data = $selectdata->get_result();
	if ($data->num_rows > 0) {
		$auth = $data->fetch_assoc();
		session_start();
		$_SESSION["firstname"] = $auth['firstname'];
		$_SESSION["lastname"] = $auth['lastname'];
		$_SESSION["email"] = $email;
		$_SESSION["id"] = $auth['id'];
		$_SESSION["role"] = $auth['role'];
		if (isset($_SESSION["email"])) {
			echo json_encode(["result" => "logged In"]);
		}
		die();
	} else {
		echo json_encode(["result" => "Invalid login details"]);
		die();
	}
} else {
	die();
}

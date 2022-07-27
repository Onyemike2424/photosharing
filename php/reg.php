<?php
error_reporting(1);
session_start();
include 'connect.php';
$conn = new connection();


class Reg extends connection{
	
	public function reg(){
		$fname = $this->__pData__("firstName");
		$lname = $this->__pData__("lastName");
		$email = $this->__pData__("email");

		if (strlen($fname) < 3 || strlen($lname) < 3 || strlen($email) < 4) {
			echo json_encode(["resp" => "Fill all fields correctly"]);
			die();
		}



		$password = sha1($this->__pData__("password"));
		$regdate = date('d/m/y');

		$checkmail = $this->connect()->query("SELECT email FROM users WHERE email = '$email'");
		if ($checkmail->num_rows > 0) {
			echo json_encode(["resp" => "Email already exist, Kindly choose a different email and try again"]);
			die();
		}

		$insert =  $this->connect()->prepare("INSERT INTO users (firstname, lastname, email, pwd, created_at, updated_at) VALUES(?,?,?,?,?,?)");
		$insert->bind_param("ssssss", $fname, $lname, $email, $password, $regdate, $regdate);
		if ($insert->execute()) {
	
			$selectdata = $this->connect()->prepare("SELECT * FROM users WHERE email = ? AND pwd = ? LIMIT 1");
			$selectdata->bind_param("ss", $email, $password);
			$selectdata->execute();
			$data = $selectdata->get_result();
			if ($data->num_rows > 0) {
				$auth = $data->fetch_assoc();
				$_SESSION["id"] = $auth['id'];
				$_SESSION["email"] = $email;
				$_SESSION["role"] = 'user';
				$_SESSION["firstname"] = $fname;
				$_SESSION["lastname"] = $lname;
			}
			echo json_encode(["resp" => "registered"]);
		} else {
			echo json_encode(["resp" => "Failed please try again"]);
			die();
		}
	}
}

new Reg();


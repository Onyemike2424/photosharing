<?php 

$test = "connection page is working";

$dircon = new mysqli("localhost", "root", "root", "collins_photosharing");
if ($dircon->connect_error) {
	die("Connection failed: " . $dircon->connect_error);
}


// var_dump($dircon);
/**
 * 
 */


class connection 
{
		protected $host;
		protected $user;
		protected $psd;
		protected $db;
		public $connecting;
		protected $postD;

	public function connect()
	{
		$this->connecting = null;
		$this->host = "localhost";
		$this->user = "root";
		$this->psd = "root";
		$this->db = "collins_photosharing";
		$this->connecting = new mysqli($this->host, $this->user, $this->psd, $this->db);

		if ($this->connecting->error) {
			die("connection failed:  ". $this->connecting->error );
			die();
		}

		return $this->connecting;
	}

	protected function __pData__($postD){
		return $this->connect()->real_escape_string($_POST[$postD]);
	}

	protected function __gData__($postD){
		return $this->connect()->real_escape_string($_GET[$postD]);
	}

}


/**
 * 
 */


function __($e){
	$conn = new connection();
	return mysqli_real_escape_string($conn->connect(), $_POST[$e]);
}



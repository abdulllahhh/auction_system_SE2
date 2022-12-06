<?php


class users
{

	private $id;
	private $username;
	private $password;
	private $name;
	private $type;
	private $db;
	private $email;
	private $phone;
	private $L_name;
	private $BOD;
	private $country;
	private $city;
	function __construct()
	{
		include_once '../include/DatabaseClass.php';
		$this->db = new database();
	}


	function login($username, $password)
	{
		$this->username = $username;
		$this->password = $password;
		$sql = "SELECT * FROM users WHERE Username='$this->username'";
		$row = $this->db->select($sql);
		if ($row['Password1'] === $this->password) {
			session_start();
			$_SESSION['id'] = $row['ID'];
			$_SESSION['type'] = $row['roles'];
			$_SESSION['username'] = $row['Username'];
			$_SESSION['email'] = $row['Email'];
			$_SESSION['fname'] = $row['Name1'];
			$_SESSION['lname'] = $row['L_name'];
			$_SESSION['BOD'] = $row['date_of_birth'];
			$_SESSION['phone'] = $row['phone_number'];
			$_SESSION['address'] = $row['country'];
			$_SESSION['photo'] = $row['photo'];


			$this->db->close();
			return true;
		}
		$this->db->close();
		return false;
	}
	function Register($username, $password, $name, $email, $phone, $L_name, $BOD, $country, $city)
	{
		$this->username = $username;
		$this->password = $password;
		$this->name = $name;
		$this->email = $email;
		$this->phone = $phone;
		$this->L_name = $L_name;
		$this->BOD = $BOD;
		$this->country = $country;
		$this->city = $city;

		// $sql = "INSERT INTO users ( Name1,Username, Password1, Email, L_name, date_of_birth, country, city,roles,  phone_number) 
		// VALUES ('$this->name', '$this->username', '$this->password','$this->email','$this->L_name',$this->BOD,'$this->country','$this->city','user',$this->phone)";

		$sql = "INSERT INTO users ( Name1,Username, Password1, Email, L_name, date_of_birth, country, city,roles,  phone_number) 
		VALUES ('$this->name', '$this->username', '$this->password','$this->email','$this->L_name',$this->BOD,'$this->country','$this->city','user',$this->phone)";

		$row = $this->db->insert($sql);


		$this->db->close();
		return true;
	}
	function logout()
	{

		session_start();
		unset($_SESSION['id']);
		unset($_SESSION['type']);
		unset($_SESSION['username']);
		unset($_SESSION['email']);
		unset($_SESSION['fname']);
		unset($_SESSION['lname']);
		unset($_SESSION['BOD']);
		unset($_SESSION['phone']);
		unset($_SESSION['address']);
		unset($_SESSION['photo']);
		session_destroy();
		header("location:../../index.php");
		$this->db->close();
	}
	function addUser($info)
	{


		$sql = "SELECT * FROM user WHERE username = '{{$info['username']}}'";

		$r = $this->db->check($sql);

		if ($r == 0) {

			$s_sql1 = "INSERT INTO users (Name, Username, Password, Email, L_name, date_of_birth, country, city, role,phone_number)
			 VALUES ({$info['fname']},'{$info['username']}', '{$info['password']}', '{$info['email']}','{$info['lname']}','{$info['age']}','{$info['address']}','{$info['city']}','{$info['type']}','{$info['phone']}')";
			$this->db->insert($s_sql1);
			$this->db->close();

			return true;
		}


		$this->db->close();

		return false;
	}
	public function usersinfo($info)
	{
		include_once '../include/DatabaseClass.php';
		$this->db = new database();
		$this->username = $info['username'];
		$this->password = $info['password'];
		$this->name = $info['name'];
		$this->type = $info['type'];
	}
	function getID()
	{
		return $this->id;
	}
	function getUsername()
	{
		return $this->username;
	}
	function getPassword()
	{
		return $this->password;
	}
	function getname()
	{
		return $this->name;
	}
	function setID($id)
	{
		$this->id = $id;
	}
	function setUsername($username)
	{
		$this->username = $username;
	}
	function setPassword($password)
	{
		$this->password = $password;
	}
	function setname($name)
	{
		$this->name = $name;
	}
}

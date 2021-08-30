<?php 
	trait LoginModel{
		//dang ky tai khoan
		public function modelRegister(){
			$name = $_POST["name"];
			$email = $_POST["email"];
			$address = $_POST["address"];
			$phone = $_POST["phone"];
			$password = $_POST["password"];
			//ma hoa password
			$password = md5($password);
			//kiem tra xem email da ton tai chua, neu chua ton tai thi insert vao csdl
			$conn = Connection::getInstance();
			$queryEmail = $conn->query("select * from customers where email='$email'");
			$checkEmail = $queryEmail->rowCount();
			$result1 = $queryEmail->fetch();
			if($checkEmail == 0){
				//insert ban ghi vao csdl
				$_SESSION["name"] = $name;
				$_SESSION["customer_email"] = $email;
				$_SESSION["customer_id"] = $result1->id;
				$conn->query("insert into customers set name='$name',email='$email',phone='$phone',address='$address',password='$password'");
				header("location:index.php");
			}else{
				header("location:index.php?controller=login&action=register&message=emailExists");
			}
		}
		//Login
		public function modelLogin($key,$key2,$key3){
			$email = $_POST["email"];
			$password = $_POST["password"];
			$password = md5($password);
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id, email, password,name from customers where email='$email'");
			$result = $query->fetch();
			if(isset($result->email)){
				if($result->password == $password){
					//dang nhap thanh cong
					$_SESSION["name"] = $result->name;
					$_SESSION["customer_email"] = $email;
					$_SESSION["customer_id"] = $result->id;
					header("location:".$key."&".$key2."&".$key3);
				}else{
					header("location:index.php?controller=login&action=login&message=passwordNotExists");
				}				
			}
			else{
				header("location:index.php?controller=login&action=login&message=emailNotExists");
			}
		}
	}
 ?>
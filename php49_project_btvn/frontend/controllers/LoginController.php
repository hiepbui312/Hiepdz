<?php 
	include "models/LoginModel.php";
	class LoginController extends Controller{
		use LoginModel;
		//dang ky thanh vien
		public function register(){
			$this->loadView("RegisterView.php");
		}		
		//khi an nut submit register
		public function registerPost(){
			$this->modelRegister();			
		}
		//dang nhap
		public function login(){
			$key=isset($_GET["key"])?$_GET["key"]:"index.php?";
			$key2=isset($_GET["key2"])?$_GET["key2"]:"";
			$key3=isset($_GET["key3"])?$_GET["key3"]:"";
			$this->loadView("LoginView.php",["key"=>$key,"key2"=>$key2,"key3"=>$key3]);
		}
		//dang nhap an nut submit
		public function loginPost(){
			$key=isset($_GET["key"])?$_GET["key"]:"index.php";
			$key2=isset($_GET["key2"])?$_GET["key2"]:"";
			$key3=isset($_GET["key3"])?$_GET["key3"]:"";
			$this->modelLogin($key,$key2,$key3);
		}
		//dang xuat
		public function logout(){
			unset($_SESSION["customer_email"]);
			header("location:index.php");
		}
	}
 ?>
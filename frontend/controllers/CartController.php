<?php 
	include "models/CartModel.php";
	class CartController extends Controller{
		use CartModel;
		//ham hien thi gio hang
		public function index(){
			$this->loadView("CartView.php");
		}	
		//thanh toan gio hang
		public function create(){
			//kiem tra neu user chua dang nhap thi di chuyen den trang login, nguoc lai thi thanh toan gio hang
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$price = isset($_GET["price"]) ? $_GET["price"] : 0;
			$adult = isset($_GET["adult"]) ? $_GET["adult"] : 0;
			$kid = isset($_GET["kid"]) ? $_GET["kid"] : 0;
			$room = isset($_GET["room"]) ? $_GET["room"] : 0;
			$key1 = isset($_GET["key1"]) ? $_GET["key1"] : "0000-00-00";
			$key2 = isset($_GET["key2"]) ? $_GET["key2"] : "0000-00-00";
			
				$this->cartCheckOut($id,$price,$adult,$kid,$room,$key1,$key2);
				header("location:index.php?message=checkOutSuccess");
			
		}	
	}
 ?>
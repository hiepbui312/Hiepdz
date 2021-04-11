<?php
	trait CartModel{		
		public function cartCheckOut($id,$price,$adult,$kid,$room,$key1,$key2){
			$conn = Connection::getInstance();			
			//lay id vua moi insert
			$customer_id = $_SESSION["customer_id"];
			$name = isset($_POST["name"]) ? $_POST["name"] : "";
			$phone = isset($_POST["phone"]) ? $_POST["phone"] : 0;
			$address = isset($_POST["address"]) ? $_POST["address"] : "";
			$email = isset($_POST["email"]) ? $_POST["email"] : "";
			$chuthich = isset($_POST["chuthich"]) ? $_POST["chuthich"] : "";
			$result = $conn->query("insert into orders set room_id=$id,price=$price, adults=$adult, kids=$kid, rooms=$room, check_in='$key1', check_out='$key2', hoten='$name', dienthoai=$phone,diachi='$address', email='$email', chuthich='$chuthich'");
		}	
	}	
?>
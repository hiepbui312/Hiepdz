<?php 
	trait ReviewsModel{
		public function UpdateReview($id){
			$booking_number = isset($_POST["booking_number"]) ? $_POST["booking_number"] : 0;
			$pin_code = isset($_POST["pin_code"]) ? $_POST["pin_code"] : 0;
			$title = isset($_POST["title"]) ? $_POST["title"] : "";
			$review = isset($_POST["review"]) ? $_POST["review"] : "";
			$star = isset($_POST["star"]) ? $_POST["star"] : 0;
			$name = $_SESSION["name"];
			$email = $_SESSION["customer_email"];
			$conn = Connection::getInstance();
			//update du lieu tuong ung voi id truyen vao
			$query=$conn->query("select * from reviews where email='$email' and product_id=$id");
			$result = $query->rowCount();
			if ($result>0) {
				$conn->query("delete from reviews where email='$email' and product_id=$id");	
			}
			$conn->query("insert into reviews set booking_number=$booking_number,pin_code=$pin_code,title='$title',review='$review',product_id=$id,star=$star,name='$name',email='$email'");
			
		}
	}	
 ?>
<?php 
	trait ProductsModel{
		public function modelHotProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where hot=1 order by price desc limit 0,10");
			return $query->fetchAll();
		}
		public function highestVoteProducts(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products order by star desc limit 0,10");
			return $query->fetchAll();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select address,products.id as id,products.name as pname,categories.name as hname,star,content,photo1,photo2,photo5,photo,photo4,photo3,price from products,categories where products.category_id = categories.id and products.id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}								
		public function modelGetroom($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from rooms where product_id=$id");
			$result = $query->fetchAll();
			return $result;
		}
		public function modelReview($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from reviews where product_id=$id");
			return $query->fetchAll();
		}
		public function modelReviewAvg($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select avg(star) as avgStar from reviews where product_id=$id");
			$result = $query->fetch();
			return $result;
		}
		public function modelReviews($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from reviews where product_id=$id");
			$result = $query->rowCount();
			return $result;
		}
		public function modelAvgStar($id,$i){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from reviews where star=$i and product_id=$id");
			$result1 = $query->rowCount();
			$query = $conn->query("select * from reviews where product_id=$id");
			$result2 = $query->rowCount();
			if ($result2 == 0) {
				$result2 =1;
			}
			$result = ($result1/$result2)*100;
			return $result;
		}							
	}
 ?>
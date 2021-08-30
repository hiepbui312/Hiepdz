<?php 
	trait SearchModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelReadSearchProductName($key,$key1,$key2,$key3,$people,$key6,$key7,$recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select products.id as id,products.name as pname,categories.name as hname,star,content,photo,price from products,categories where products.category_id = categories.id and categories.name like '%$key%' and room_available>$key3 and price <= $key6 and star >= $key7 and max_people > $people and check_out is NULL or check_out > $key2 order by star desc");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecordSearchProductName($key,$key1,$key2,$key3,$people,$key6,$key7){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from products where category_id in (select id from categories where name like '%$key%') and room_available>$key3 and price <= $key6 and star >= $key7 and max_people > $people and check_out is NULL or check_out > $key2");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//ham lay danh sach cac ban ghi co phan trang
	
		//smart search
		public function modelSmartSearch($key){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select name from categories where name like '%$key%'");
			return $query->fetchAll();
		}
		public function modelReviews($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from reviews where product_id=$id");
			$result = $query->rowCount();
			return $result;
		}
		public function modelReviewAvg($id){
			$conn = Connection::getInstance();
			$query = $conn->query("select avg(star) as avgStar from reviews where product_id=$id");
			$result = $query->fetch();
			return $result;
		}		
	}
 ?>
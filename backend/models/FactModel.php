<?php 
	trait FactModel{
		//ham lay danh sach cac ban ghi co phan trang
		public function modelRead($recordPerPage){
			//lay bien p truyen tu url
			$p = isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"] > 0 ? ($_GET["p"]-1) : 0;			
			//lay tu ban ghi nao
			$from = $p * $recordPerPage;
			//---
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from facts order by id desc limit $from,$recordPerPage");
			//lay toan bo ket qua tra ve
			$result = $query->fetchAll();			
			//---
			return $result;
		}
		//tinh tong so ban ghi
		public function totalRecord(){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select id from facts");
			//tra ve tong so ban ghi
			return $query->rowCount();
		}
		//lay mot ban ghi
		public function modelGetRecord($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("select * from facts where id=$id");
			//tra ve mot ban ghi
			return $query->fetch();
		}
		//update ban ghi
		public function modelUpdate($id){
			$name = $_POST["name"];
			$content = $_POST["content"];
			//lay bien ket noi
			$conn = Connection::getInstance();
			$query = $conn->query("update facts set name='$name', content='$content' where id=$id");
			if($_FILES["photo"]["name"] != ""){
				//---
				//lay anh cu
				$queryOldPhoto = $conn->query("select photo from facts where id=$id");
				//lay mot ban ghi
				$oldPhoto = $queryOldPhoto->fetch();
				if($oldPhoto->photo != "" && file_exists("../assets/upload/img/".$oldPhoto->photo))
					unlink("../assets/upload/img/".$oldPhoto->photo);
				//---
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/img/$photo");
				//upload anh

				//update lai truong photo
				$conn->query("update facts set photo='$photo' where id=$id");
			}
		}
		//create bang hi
		public function modelCreate(){
			$name = $_POST["name"];
			$content = $_POST["content"];
			//lay bien ket noi
			if($_FILES["photo"]["name"] != ""){				
				$photo = time()."_".$_FILES["photo"]["name"];
				//upload anh
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/img/$photo");				
			}
			$conn = Connection::getInstance();
			$query = $conn->query("insert into facts set name='$name',content='$content',photo='$photo'");
			
		}
		//xoa ban ghi
		public function modelDelete($id){
			//lay bien ket noi
			$conn = Connection::getInstance();
			$conn->query("delete from facts where id=$id");
		}
	}
 ?>
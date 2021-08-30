<?php 
	trait CategoriesModel{
		//lien ket cac danh muc cap cha
		public function modelListCategories(){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = 0 order by id desc");
			return $query->fetchAll();
		}
		//liet ke cac danh muc cap con
		public function modelListCategoriesSub($categories_id){
			$conn = Connection::getInstance();
			$query = $conn->query("select * from categories where parent_id = $categories_id order by id desc");
			return $query->fetchAll();
		}
	}
 ?>
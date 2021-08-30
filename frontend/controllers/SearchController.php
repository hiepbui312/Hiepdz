<?php 
	//include file model
	include "models/SearchModel.php";
	class SearchController extends Controller{
		//su dung file model o day
		use SearchModel;
		//ham tao
		public function __construct(){			
		}
		//hien thi danh sach cac ban ghi co phan trang
		public function productName(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$key1 = isset($_GET["key1"]) ? $_GET["key1"] : "0000-00-00";
			$key2 = isset($_GET["key2"]) ? $_GET["key2"] : "0000-00-00";
			$key3 = isset($_GET["key3"]) ? $_GET["key3"] : 0;
			$key4 = isset($_GET["key4"]) ? $_GET["key4"] : 0;
			$key5 = isset($_GET["key5"]) ? $_GET["key5"] : 0;
			$key6 = isset($_GET["key6"]) ? $_GET["key6"] : 10000000;
			$key7 = isset($_GET["key7"]) ? $_GET["key7"] : 0;
			//dinh nghia so ban ghi tren mot trang
			$recordPerPage = 25;
			$people = ($key4 + $key5/2);
			//tinh tong so trang
			$numPage = ceil($this->totalRecordSearchProductName($key,$key1,$key2,$key3,$people,$key6,$key7)/$recordPerPage);
			$totalProduct = $this->totalRecordSearchProductName($key,$key1,$key2,$key3,$people,$key6,$key7);
			//lay du lieu tu model
			$data = $this->modelReadSearchProductName($key,$key1,$key2,$key3,$people,$key6,$key7,$recordPerPage);
			//load view, truyen du lieu ra view
			$this->loadView("SearchProductNameView.php",["data"=>$data,"numPage"=>$numPage,"totalProduct"=>$totalProduct,"key6"=>$key6,"key7"=>$key7,"key"=>$key]);
		}
		public function smartSearch(){
			$key = isset($_GET["key"]) ? $_GET["key"] : "";
			$data = $this->modelSmartSearch($key);
			$_SESSION["i"]=0;
			foreach($data as $rows){
				$_SESSION["i"]++;
				$a=$_SESSION["i"];
				echo "<li onclick='auto_complete($a)' id='a$a'><a>$rows->name</a></li>";
			}
		}
		
	}
 ?>
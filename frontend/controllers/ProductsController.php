<?php 
	//include file model
	include "models/ProductsModel.php";
	class ProductsController extends Controller{
		//su dung file model o day
		use ProductsModel;
		//hien thi danh sach cac ban ghi co phan trang
		public function index(){
			//load view, truyen du lieu ra view
			$this->loadView("ProductsCategoryView.php");
		}		
		//chi tiet san pham
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$record = $this->modelGetRecord($id);
			$data = $this->modelGetroom($id);
			$review = $this->modelReview($id);
			$reviews = $this->modelReviews($id);
			$avg = $this->modelReviewAvg($id);
			//load view, truyen du lieu ra view
			$this->loadView("ProductsDetailView.php",["record"=>$record,"data"=>$data,"id"=>$id,"avg"=>$avg,"review"=>$review,"reviews"=>$reviews]);
		}
	}
 ?>
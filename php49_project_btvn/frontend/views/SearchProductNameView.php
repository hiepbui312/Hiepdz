<?php $this->layoutPath = "LayoutTrangTrong.php"; ?>
		<!-- header -->
		<script type="text/javascript">
			function smartSearch(){		
				var key6 = document.getElementById('current-range').innerText;
		        location.href = window.location.href+"&key6="+key6;
		         //---
      		}
 
      function search(){
        var key = document.getElementById('key').value;
        var key1 = document.getElementById('key1').value;
        var key2 = document.getElementById('key2').value;
        var key3 = document.getElementById('key3').value;
        var key4 = document.getElementById('key4').value;
        var key5 = document.getElementById('key5').value;
        //di chuyen den trang search
        if(key=='Enter your destination or hotel name'){
          location.href="index.php?controller=search&action=productName&key1="+key1+"&key2="+key2+"&key3="+key3+"&key4="+key4+"&key5="+key5;
        }else{
          location.href="index.php?controller=search&action=productName&key="+key+"&key1="+key1+"&key2="+key2+"&key3="+key3+"&key4="+key4+"&key5="+key5;
        }
        
      }
      //---
      function smartSearch1(){
        var key = document.getElementById('key').value;
        if(key != ""){
          document.getElementById('smart-search').setAttribute("style","display:block;");
          //---
          $.ajax({
            url: "index.php?controller=search&action=smartSearch&key="+key,
            success: function( result ) {
              $( "#smart-search ul" ).empty();
              $( "#smart-search ul" ).append(result);
            }
          });
          //---
        }else{
          document.getElementById('smart-search').setAttribute("style","display:none;");
        } 
      }
      function auto_complete(n){
        var x = "a"+n;
        var a1 = document.getElementById(x);
        document.getElementById('key').value = a1.innerText;
        document.getElementById('smart-search').setAttribute("style","display:none;");
      }
      
      //---
		</script>
		<!-- /header -->
		<!-- body -->
		<div class="first-line">
			<div class="wrapper" style="position: relative;">
				<span style="font-size: 18px; color: white;">Search Accommodation Results for:</span>
				<span style="color: white; right: 215px;top: 5px; font-size: 12px; position: absolute;">Home</span>
				<span style="top: 5px;color: #4e7c96; right: 205px; font-size: 12px; position: absolute;">/</span>
				<span style="top: 5px;color: #fdb732; right: 0px; font-size: 12px; position: absolute;">ACCOMMODATION SEARCH RESULTS</span>
			</div>
		</div>
		<div class="frame-body">
			<div class="wrapper" style="display: flex;">
				<div class="filter-search">
					<div class="search-again">	
						<div class="search-result">
							<i class="fa fa-search" aria-hidden="true" style="color: #fdb732;font-size: 17px"></i>
							<span style="font-size: 17px;margin-left: 10px;"><?php echo $totalProduct ?> results found.</span>
						</div>
					</div>
					<div class="search-again">
						<div class="ModifySearch">
							<span style="font-size: 17px; margin-right: 75px;">Modify Search</span>
							<i class="fa fa-plus-circle" aria-hidden="true" style="color: #01b7f2;font-size: 17px;float: right;"></i>
						</div>
						<div class="ModifySearch1">
							<div class="wrapper">
								<div class="search-tab-content">
									<div class="row">
										<div class="form-group col-12">
											<label>Your Destination</label><br>
											<input class="i-t" type="text" onkeyup ="smartSearch1();" <?php if($key==""): ?> value="Enter your destination or hotel name"<?php else: ?>value="<?php echo $key; ?>"<?php endif; ?> onfocus="if(this.value == 'Enter your destination or hotel name') this.value ='';" onblur="if(this.value == '') this.value = 'Enter your destination or hotel name';" id="key">
										</div>
										<div class="form-group col-12">
											<div class="row">
											<div class="col-12">
											<label>Check in</label><br>
											<style type="text/css">
								              [type="date"]::-webkit-inner-spin-button {
								                display: none;
								              }
								              [type="date"]::-webkit-calendar-picker-indicator {
								                opacity: 0;
								                margin-right: -10px;
								                width: 20px;
								                height: 20px;
								              }
								              [type="date"] {
								                background:#f5f5f5 url('../assets/upload/img/icon-calendar.jpg') 97% 50% no-repeat ;
								              }
								            </style>
											<input class="form-control i-t1" type="date" id="key1">
								            <script type="text/javascript">
								              var g = new Date();
								                if(g.getDate()>10){
								                  d=g.getDate();
								                }else{
								                  d="0"+g.getDate();
								                }
								                if(g.getMonth()>8){
								                  m=g.getMonth()+1;
								                }else{
								                  m="0"+(g.getMonth()+1);
								                }
								                y = g.getFullYear();
								                date = y+"-"+m+"-"+d;
								                var x = document.getElementById('key1');
								                 x.setAttribute("value",date);  
								            </script>
											</div>
											<div class="col-12">
											<label>check out</label><br>
											<input class="form-control i-t2" type="date" id="key2">
								            <script type="text/javascript">
								              var g = new Date();
								                if(g.getDate()>10){
								                  d=g.getDate();
								                }else{
								                  d="0"+g.getDate();
								                }
								                if(g.getMonth()>8){
								                  m=g.getMonth()+1;
								                }else{
								                  m="0"+(g.getMonth()+1);
								                }
								                y = g.getFullYear();
								                date = y+"-"+m+"-"+d;
								                var x = document.getElementById('key2');
								                 x.setAttribute("value",date);  
								            </script>
											</div>
											</div>
										</div>
										<div class="form-group col-12">
										<div class="row" style="padding:0px 15px;">
											<div class="col-3" style="padding: 0px;">
												<label>Rooms</label><br>
												<select name="Rooms" style="height: 30px;background: #f5f5f5;" id="key3">
													<option value="1" selected="">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
												</select>
											</div>
											<div class="col-3" style="padding: 0px; margin-left: 24px;">
												<label>Adults</label><br>
												<select name="Adults"style="height: 30px;background: #f5f5f5;" id="key4">
													<option value="1" selected="">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
												</select>
											</div>
											<div class="col-3" style="padding: 0px;margin-left: 24px;">
												<label>Kids</label><br>
												<select name="Kids"style="height: 30px;background: #f5f5f5;" id="key5">
													<option value="1" selected="">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
													<option value="9">9</option>
													<option value="10">10</option>
													<option value="11">11</option>
													<option value="12">12</option>
													<option value="13">13</option>
													<option value="14">14</option>
													<option value="15">15</option>
													<option value="16">16</option>
													<option value="17">17</option>
													<option value="18">18</option>
													<option value="19">19</option>
													<option value="20">20</option>
													<option value="21">21</option>
													<option value="22">22</option>
													<option value="23">23</option>
													<option value="24">24</option>
													<option value="25">25</option>
													<option value="26">26</option>
													<option value="27">27</option>
													<option value="28">28</option>
													<option value="29">29</option>
													<option value="30">30</option>
												</select>
											</div>
										</div>
									</div>	
									<div class="form-group col-12">
										<input class="bu1" type="button" value="Search now" style="background: #98ce44; width: 100%; line-height: 30px; border: none; color: white;margin-top: 20px;" onclick="return search();">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="search-again">	
					<div class="Price">
						<span style="font-size: 17px; margin-right: 62px;">Price(avg/night)</span>
						<i class="fa fa-plus-circle" aria-hidden="true" style="color: #01b7f2;font-size: 17px;float: right;"></i>
					</div>
					<div class="Price1">
						<input type="range" name="price" min="0" max="10000000" class="range" step="1000000" oninput="document.getElementById('current-range').innerHTML = this.value" onchange="smartSearch()" value="<?php echo $key6; ?>" />
						<div class="result-range">
							<span style="color: #838383;">$0</span>
							<span style="margin-left: 145px;color: #838383;">$</span>
							<span id="current-range" style="color: #838383;"><?php echo $key6; ?></span>
						</div>	
					</div>
				</div>
				<div class="search-again">
					<div class="UserReviews">
						<span style="font-size: 17px; margin-right: 83px;">Hotel star</span>
						<i class="fa fa-plus-circle" aria-hidden="true" style="color: #01b7f2;font-size: 17px; float: right;"></i>
					</div>
					<div class="UserReviews1" style="position: relative;">
						<i class="fa fa-star" aria-hidden="true" onclick="one_star()"></i>
						<i class="fa fa-star" aria-hidden="true" onclick="two_star()"></i>
						<i class="fa fa-star" aria-hidden="true" onclick="three_star()"></i>
						<i class="fa fa-star" aria-hidden="true" onclick="four_star()"></i>
						<i class="fa fa-star" aria-hidden="true" onclick="five_star()"></i>
						<span id="current-star" style="font-size: 12px; position: absolute; right: 30px;color: #838383;">All Ratings</span>
						<script type="text/javascript">
							var element = document.getElementsByClassName("fa-star");
							for(var i=0;i<5;i++){
							  element[i].classList.remove("active");
							}
							for(var i=0;i<(<?php echo $key7 ?>);i++){
							    element[i].classList.add("active");
							}
							<?php if($key7 != 0): ?>
								document.getElementById("current-star").innerHTML =  <?php echo $key7 ?>+" star";
							<?php else: ?>
								document.getElementById("current-star").innerHTML = "All Ratings";
							<?php endif; ?>	
						</script>
					</div>

				</div>
			</div>
			<div class="result_product">
				<?php foreach($data as $rows): ?>
				<div class="img2">
					<div style="width: 230px; height: 200px;" onclick="openZoomImg()">
		              	<img src="../assets/upload/img/<?php echo $rows->photo ?>" style="height: 200px; width: 230px;object-fit: cover;">
		              	<div class="img-hidden" style="width: 230px; height: 200px;">
		                	<div class="bg-img-hidden">
		                		<i class="fa fa-plus" aria-hidden="true"></i>
		                	</div>
		              	</div>
		            </div>
		            <div class="content_search_result">
		            	<table style="width: 680px; height: 200px; margin: 0px; padding: 0px;">
		            		<tr>
		            			<td style="width: 500px; padding-left: 20px;">
		            				<div style="display: flex;">
			            				<div class="head-content" style="font-size: 14px;"><?php echo $rows->pname ?>&nbsp;</div>
			            				<?php for($i =0;$i<$rows->star;$i++): ?>
											<i class="fa fa-star" style="color: #fdb714; font-size: 14px; margin-top: 3px;" aria-hidden="true"></i>
										<?php endfor; ?>
										<?php for($i=0;$i<(5-$rows->star);$i++): ?>
											<i class="fa fa-star" style="font-size: 14px; margin-top: 3px;" aria-hidden="true"></i>
										<?php endfor; ?>
					            	</div>
					            	<div style="margin-top: 2px; font-size: 12px; float:left;"><?php echo $rows->hname ?></div>
		            			</td>
		            			<td>
		            				<?php 
		            					$totalReview = $this->modelReviews($rows->id);
		            				 ?>
		            				<?php $avg = $this->modelReviewAvg($rows->id); ?>
		            				<?php for($i =0;$i<number_format($avg->avgStar);$i++): ?>
						              <i class="fa fa-star" style="color: #fdb714;" aria-hidden="true"></i>
						            <?php endfor; ?>
						            <?php for($i=0;$i<(5-number_format($avg->avgStar));$i++): ?>
						              <i class="fa fa-star" aria-hidden="true"></i>
						            <?php endfor; ?>
		            				<div><?php echo $totalReview ?> Review</div>
		            			</td>
		            		</tr>
		            		<tr>
		            			<td style="padding-left: 20px">
		            				<div><?php echo $rows->content ?></div>
		            			</td>
		            			<td>
		            				<div style="text-align: center;font-size: 16px; margin-top: -10px;">
		            					AVG/NIGHT<br>
										<span style="color: #98ce44;">RUB <?php echo $rows->price ?></span>
										<div style="margin-top: 10px;">
											<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>" style="background: #98ce44; border: none; color: white; padding: 5px 15px;">
												Select
											</a>
										</div>
									</div>
		            			</td>
		            		</tr>
		            	</table>
		            </div>
		        </div>
		    	<?php endforeach; ?>
			</div>

		</div>		
	</div>
	
		<!-- /body -->
<div id="zoom_img" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeZoomImg()">&times;</a>
  <div class="overlay-content">
<div style="background-color: white; height: 100%; margin-top:0px; overflow: hidden;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/upload/img/photo-hotel1.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/photo-hotel2.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/photo-hotel3.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/photo-hotel4.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/photo-hotel5.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/photo-hotel6.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/photo-hotel7.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/photo-hotel8.jpg">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"  style="position: absolute;top: 50%;"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"  style="position: absolute;top: 50%;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- asdasdasd -->
    
          <!-- sadasdasdasd -->
</div>
</div>
</div>
</body>
</html>
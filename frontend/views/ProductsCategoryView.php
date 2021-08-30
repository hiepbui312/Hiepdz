<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
<script type="text/javascript">
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
      function smartSearch(){
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
     function close_smartSearch(){
       document.getElementById('smart-search').setAttribute("style","display:none;");
     }
      //---
    </script>
     <style type="text/css">
        #smart-search ul{padding:0px; margin:0px; list-style: none;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.3);cursor: pointer;}
        #smart-search ul li{border-bottom: 1px solid #f5f5f5; padding: 10px;}
        #smart-search{position: absolute; width: 200px; z-index: 1; background: white; display: none;top: 65px;}
        #smart-search a{
          color: black;
          font-size: 16px;
          margin-left: 10px;

        }
        #smart-search a:hover{
          text-decoration: none;
          color: black;
        }
      </style>
	<div class="container-fluid hotel-header-title1" style="margin-top: 0px;">
			<div class="wrapper">
				<img src="../assets/upload/img/hotel-logo.png" style="position: absolute; top: 28%;
					left: 46%;">
				<h1 style="color: white; font-size: 50px; font-weight: bold; position: absolute; top: 39%; left: 24%;text-shadow: 2px 2px 5px grey;">PLAN YOUR PERFECT ADVENTURE</h1>
				<div style="color: black; font-size: 26px; font-weight: bold; position: absolute; top: 47%; left: 32%;">GET 20% DISCOUNT ON SINGLE TOUR PACKAGE</div>
				<div class="find-hotel">
					<input class="hotel-i-t col-lg-2" type="text" value="Enter your destination or hotel name" onfocus="if(this.value == 'Enter your destination or hotel name') this.value ='';" onblur="if(this.value == '') this.value = 'Enter your destination or hotel name';" onkeyup ="smartSearch();" id="key" autocomplete="none" style="margin-right: 15px;">
					<div id="smart-search">
		              <ul>
		              </ul>
		            </div>
					<div class="hotel-i-t2 col-lg-2" style="margin-right: 15px;">
						<style type="text/css">
			             	[type="date"]::-webkit-inner-spin-button {
							  display: none;
							}
							[type="date"]::-webkit-calendar-picker-indicator {
							  opacity: 0;
							  margin-right: -30px;
							  width: 40px;
							  height: 30px;
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
					<div class="hotel-i-t2 col-lg-2" style="margin-right: 15px;">
						<style type="text/css">
			             	[type="date"]::-webkit-inner-spin-button {
							  display: none;
							}
							[type="date"]::-webkit-calendar-picker-indicator {
							  opacity: 0;
							  margin-right: -30px;
							  width: 40px;
							  height: 30px;
							}
							[type="date"] {
							  background:#f5f5f5 url('../assets/upload/img/icon-calendar.jpg') 97% 50% no-repeat ;
							}
					    </style>
			            <input class="form-control i-t1" type="date" id="key2">
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
					<select class="hotel-i-option1 col-lg-1" name="Rooms" style="background: #f5f5f5;"id="key3">
									<option value="0" selected="">Rooms</option>
									<option value="1">1</option>
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
						<select class="hotel-i-option1 col-lg-1" name="Rooms" style="background: #f5f5f5;"id="key4">
									<option value="0" selected="">Adults</option>
									<option value="1">1</option>
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
						<select class="hotel-i-option2 col-lg-1" name="Kids"style="background: #f5f5f5;"id="key5">
									<option value="0" selected="">Kids</option>
									<option value="1">1</option>
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
						<input class="hotel-i-button1 col-lg-2" type="button" value="SEARCH NOW" style="background: #01b7f2; width: 100%; border: none; color: white; font-size: 15px;"onclick="search();">
					</div>
			<input class="hotel-i-button1 col-lg-2" type="button" value="PRUCHASE NOW" style="background: #01b7f2; width: 11%; border: none; color: white; font-size: 15px; height: 30px;position: absolute; bottom: 26%; left: 39%;">
			<input class="hotel-i-button1 col-lg-2" type="button" value="LATEST HOTELS" style="background: #e01a33; width: 11%; border: none; color: white; font-size: 15px; height: 30px; position: absolute; bottom: 26%; left: 51%;">
			</div>
		</div>
	<div class="bg-body-hotel container-fluid">
		<div class="wrapper">
			<div class="menu-hotels">
				<div style="display: flex; margin-top: 30px;">
				<div style="font-size: 20px; padding-bottom: 22px;">Recommended Hotels</div>
				
				</div>		
				<div id="slider">
    				<div class="owl-carousel owl-theme">
						<?php 
				            $hotProducts = $this->modelHotProducts();
				        ?>
				        <?php foreach($hotProducts as $rows): ?>
							<div style="padding: 0px 20px; width: 300px;">
								<div class="img2"><img src="../assets/upload/img/<?php echo $rows->photo; ?>">
									<div class="t">
										<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name ?></a><br>
										<div  style="padding-left: 7%;">
											<?php for($i =0;$i<$rows->star;$i++): ?>
												<span class="fa fa-star checked"></span>
											<?php endfor; ?>
											<?php for($i=0;$i<(5-$rows->star);$i++): ?>
												<span class="fa fa-star"></span>
											<?php endfor; ?>
										</div>
										<a style="color: #98ce44;"><?php echo $rows->price ?> VND</a><a style="font-size: 10px;">AVG/NIGHT</a>
									</div>
						            <a class="bu1" style="border: none; color: white; position: absolute; right: 10px; padding: 0px 20px;bottom: 10px;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
						            	Select
						            </a>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<img src="" style="width: 50px; position: absolute; top: 0px;">
				<script type="text/javascript">
							$(document).ready(function() {
							    $('#slider .owl-carousel').owlCarousel({
							        loop:true,
							        margin:10,
							        nav:true,
							        navText: ["<img src='../assets/upload/img/Screenshot 2020-10-04 110405.png'style='width: 32px;  position: absolute;top: -44px; right: 60px;'>","<img src='../assets/upload/img/Screenshot 2020-10-04 110444.png'style='width: 35px;  position: absolute;top: -44px; right: 20px;'>"],
							        items: 4
							    })
							});
				</script>
				<div class="row" style="margin-top: 30px;">
					<!-- aaaaaa -->
					<div class="form-group col-lg-6 col-md-12 col-sm-12" style="padding:0px 20px;">
						<div style="font-size: 20px;">Hot Hotel Details</div>
						<div class="Hot-Hotel-Details-Title">
							<div class="Hot-Hotel-Details-Title1">POPULAR</div>
							<div class="Hot-Hotel-Details-Title1">LAS VEGAS</div>
							<div class="Hot-Hotel-Details-Title1">PARIS</div>
							<div class="Hot-Hotel-Details-Title1">SAN FANSISCO</div>
							<div class="Hot-Hotel-Details-Title1">FRANCE</div>
						</div>
						<div class="Hot-Hotel-Details"></div>				
					</div>
					<div class="form-group col-lg-6 col-md-12 col-sm-12" style="padding:0px 20px;">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="background: black;">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
      <div class="cham1"></div>
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1">
    	<div class="cham2"></div></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2">
    	<div class="cham3"></div></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    	<div class="hotel-comment">
            <div style="font-size: 20px;">What Travelers Say?</div>
              <div class="hotel-comment-detail">
                <i>This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings..</i>
              </div>
              <div class="bot-of-comment">
                <div class="author-comment"></div>
                <div style="margin-top: 50px; margin-left: 3%;">Jessica Brown</div>
              </div>
        </div>
    </div>
    <div class="carousel-item">
        <div class="hotel-comment">
            <div style="font-size: 20px;">What Travelers Say?</div>
            <div class="hotel-comment-detail">
                <i>This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings..</i>
            </div>
            <div class="bot-of-comment">
                <div class="author-comment"></div>
                <div style="margin-top: 50px; margin-left: 3%;">Jessica Brown</div>
            </div>
       	</div>
   	</div>
    <div class="carousel-item">
        <div class="hotel-comment">
            <div style="font-size: 20px;">What Travelers Say?</div>
              <div class="hotel-comment-detail">
                <i>This is the 3rd time I’ve used Travelo website and telling you the truth their services are always realiable and it only takes few minutes to plan and finalize your entire trip using their extremely fast website and up to date listings..</i>
              </div>
              <div class="bot-of-comment">
                <div class="author-comment"></div>
                <div style="margin-top: 50px; margin-left: 3%;">Jessica Brown</div>
              </div>
        </div>
    </div>
    </div>
    </div>
  </div>   
  <!-- aaaaaa -->
</div>	
				</div>
				<!-- aa -->
				<div style="display: flex; margin-top: 30px;">
				<div style="font-size: 20px; padding-bottom: 22px;">Travelers Choice of Hotels</div>
				<?php 
		            $travelChoiceProducts = $this->highestVoteProducts();
		        ?>
				</div>
				<div id="slider" style="padding-bottom: 70px;">
    				<div class="owl-carousel owl-theme">
				        <?php foreach($travelChoiceProducts as $rows): ?>
							<div style="padding: 0px 20px; width: 300px;">
								<div class="img2"><img src="../assets/upload/img/<?php echo $rows->photo; ?>">
									<div class="t">
										<a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name ?></a><br>
										<div  style="padding-left: 7%;">
											<?php for($i =0;$i<$rows->star;$i++): ?>
												<span class="fa fa-star checked"></span>
											<?php endfor; ?>
											<?php for($i=0;$i<(5-$rows->star);$i++): ?>
												<span class="fa fa-star"></span>
											<?php endfor; ?>
										</div>
										<a style="color: #98ce44;"><?php echo $rows->price ?> VND</a><a style="font-size: 10px;">AVG/NIGHT</a>
									</div>
									
						              <a class="bu1" style="border: none; color: white; position: absolute; right: 10px; padding: 0px 20px;bottom: 10px;" href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>">
						                Select
						              </a>
						           
								</div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<img src="" style="width: 50px; position: absolute; top: 0px;">
				<script type="text/javascript">
							$(document).ready(function() {
							    $('#slider .owl-carousel').owlCarousel({
							        loop:true,
							        margin:10,
							        nav:true,
							        navText: ["<img src='../assets/upload/img/Screenshot 2020-10-04 110405.png'style='width: 32px;  position: absolute;top: -44px; right: 60px;'>","<img src='../assets/upload/img/Screenshot 2020-10-04 110444.png'style='width: 35px;  position: absolute;top: -44px; right: 20px;'>"],
							        items: 4
							    })
							});
				</script>
				<!-- /aa -->
			</div>
		</div>
	</div>
	<div class="bg-img3" style="padding: 10px 0px;">
		<img src="../assets/upload/img/image3.png">
		<div style="position: absolute; top: 30%; left: 33%; color: white;font-weight: bold; font-size: 30px; width: 40%; height: 100px; overflow: hidden;">Tell us where you would like to go.<br>
		12,000+ Hotel and Resorts Available!</div>
		<input type="text" value="Enter destination or hotel name" onfocus="if(this.value == 'Enter destination or hotel name') this.value ='';" onblur="if(this.value == '') this.value = 'Enter destination or hotel name';" style="position: absolute; width: 16%; height: 40px; top: 30%;right: 10%; padding-left: 1%; padding-right: 1%;color: #978583;background-color: #f5f5f5;border: none;">
		<input type="button" value="SEARCH NOW" style="background-color: #98ce44; width: 16%; border: none; color: white; font-size: 15px; position: absolute; top: 50%;right: 10%; height: 40px;">
	</div>
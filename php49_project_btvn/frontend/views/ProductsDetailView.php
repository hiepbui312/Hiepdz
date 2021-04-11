<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
<?php $key = "index.php?controller=products";
      $key2 = "action=detail";
      $key3 = "id=".$id;      
?>
	<div class="hotel-detail-title container-fluid" style="margin-top: 0px;">
		<div class="wrapper">
			<span class="name-hotel"><?php echo $record->pname; ?></span>
			<div style="float: right; margin-top: 5px;">
        <span class="home-hotel-detail-title">HOME</span>
  			<span style="color: #01b7f2; padding-right: 2px;">/</span>
  			<span style="color: #fdb714;"><?php echo $record->pname; ?></span>
      </div>
		</div>
	</div>
	<div  class="content-detail-hotel">
	<div class="wrapper">
		<div class="row">
			<div class="detail-hotel col-sm-8 col-md-9">
				
				<!-- aaaa -->
				<div style="background-color: white; height: 620px; margin-top:0px; overflow: hidden;">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="../assets/upload/img/<?php echo $record->photo1; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/<?php echo $record->photo2; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/<?php echo $record->photo3; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/<?php echo $record->photo4; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/<?php echo $record->photo5; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/<?php echo $record->photo1; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/<?php echo $record->photo2; ?>">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="../assets/upload/img/<?php echo $record->photo3; ?>">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- asdasdasd -->
					<div id="hiep1" class="carousel slide" data-ride="carousel" style="position: absolute; top: 540px; left: 35px; width: 90%;">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <ol style="list-style: none; display: flex;">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
      <img src="../assets/upload/img/<?php echo $record->photo1; ?>" style="width: 85px; height: 65px; margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1">
       <img src="../assets/upload/img/<?php echo $record->photo2; ?>" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2">
       <img src="../assets/upload/img/<?php echo $record->photo3; ?>" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3">
       <img src="../assets/upload/img/<?php echo $record->photo4; ?>" style="width: 85px; height: 65px;margin-right: 15px;">
     </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4">
       <img src="../assets/upload/img/<?php echo $record->photo5; ?>" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5">
       <img src="../assets/upload/img/<?php echo $record->photo1; ?>" style="width: 85px; height: 65px;margin-right: 15px; ">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6">
       <img src="../assets/upload/img/<?php echo $record->photo2; ?>" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7">
       <img src="../assets/upload/img/<?php echo $record->photo3; ?>" style="width: 85px; height: 65px;">
    </li>
  </ol>
    </div>
    <div class="carousel-item">
      <ol style=" list-style: none; display: flex;">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
      <img src="../assets/upload/img/photo-hotel1.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1">
       <img src="../assets/upload/img/photo-hotel2.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2">
       <img src="../assets/upload/img/photo-hotel3.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3">
       <img src="../assets/upload/img/photo-hotel4.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
     </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4">
       <img src="../assets/upload/img/photo-hotel5.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5">
       <img src="../assets/upload/img/photo-hotel6.jpg" style="width: 85px; height: 65px; margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6">
       <img src="../assets/upload/img/photo-hotel7.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7">
       <img src="../assets/upload/img/photo-hotel8.jpg" style="width: 85px; height: 65px;">
    </li>
  </ol>
    </div>
    <div class="carousel-item">
      <ol style=" list-style: none; display: flex;">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
      <img src="../assets/upload/img/photo-hotel1.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1">
       <img src="../assets/upload/img/photo-hotel2.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2">
       <img src="../assets/upload/img/photo-hotel3.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3">
       <img src="../assets/upload/img/photo-hotel4.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
     </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4">
       <img src="../assets/upload/img/photo-hotel5.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="5">
       <img src="../assets/upload/img/photo-hotel6.jpg" style="width: 85px; height: 65px;margin-right: 15px; ">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="6">
       <img src="../assets/upload/img/photo-hotel7.jpg" style="width: 85px; height: 65px;margin-right: 15px;">
    </li>
    <li data-target="#carouselExampleIndicators" data-slide-to="7">
       <img src="../assets/upload/img/photo-hotel8.jpg" style="width: 85px; height: 65px;">
    </li>
  </ol>
    </div>
  </div>
  <div>
  	 <a class="carousel-control-prev" href="#hiep1" role="button" data-slide="prev" style="background-color: blue;padding: 25px 10px; font-size: 20px; color: white; background-color: #01b7f2; position: absolute; top: -1px; left: -11px; height: 67px;">
    <i class="fa fa-chevron-left" aria-hidden="true"></i>
      
  
  </a>
  <a class="carousel-control-next" href="#hiep1" role="button" data-slide="next" style="background-color: blue; padding: 25px 10px; font-size: 20px; color: white; background-color: #01b7f2;position: absolute;top: -1px; right: -35px; height: 67px;">
    <i class="fa fa-chevron-right" aria-hidden="true" ></i>
  </a>
  </div>
 
</div>

					<!-- sadasdasdasd -->
</div>
				<!-- /aaaa -->
	<div class="tab">
    <button class="tablinks active" onclick="openCity(event, 'DESCRIPTION')">DESCRIPTION</button>
    <button class="tablinks" onclick="openCity(event, 'AVALABILITY')">AVALABILITY</button>
    <button class="tablinks" onclick="openCity(event, 'REVIEWS')">REVIEWS</button>
    <button class="tablinks" onclick="openCity(event, 'WRITE')">WRITE A REVIEW</button>
  </div>
  <div id="DESCRIPTION" class="tabcontent" style="padding: 20px 15px; background-color: white; display: block;">
    <div style="margin-bottom: 20px; display: flex; ">
      <div style="display: flex;padding: 15px; padding-left: 0px; width: 70%; border: 10px solid #f5f5f5;">
        <div>
          <ul style="list-style: none; color: #01b7f2;margin:0px 15px; padding: 0px;">
            <li>TYPE:</li>
            <li>RATING STARS:</li>
            <li>COUNTRY:</li>
            <li>CITY:</li>
            <li>ADDRESS:</li>
            <li>PHONE NO:</li>
            <li>CHECK IN:</li>
            <li>CHECK OUT:</li>
            <li>DISCOUNT:</li>
          </ul>
        </div>
        <div>
          <ul style="list-style: none;padding:0px; margin-left: 30px;">
            <li>HOTEL</li>
            <li><?php echo $record->star; ?> STAR</li>
            <li>VN</li>
            <li>HA NOI</li>
            <li><?php echo $record->address; ?></li>
            <li>312312312</li>
            <li>4AM</li>
            <li>5AM</li>
            <li>50 % OFF</li>
          </ul>
        </div>
      </div>
      <div class="hotel-comment" style="border: 10px solid #f5f5f5; border-left: none;">
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
    <div style="padding:0px 20px;">
      <div style="font-size: 18px;">About Hilton Hotel and Resorts</div>
        <br>
        Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.
        <br><br>
        Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus. Etiam consectetur, orci vel rutrum volutpat, odio odio pretium nisiodo tellus libero et urna. Sed commodo ipsum ligula, id volutpat risus vehicula in. Pellentesque non massa eu nibh posuere bibendum non sed enim. Maecenas lobortis nulla sem, vel egestas dui ullamcorper ac.
        <br><br>
        Sed scelerisque lectus sit amet faucibus sodales. Proin ut risus tortor. Etiam fermentum tellus auctor, fringilla sapien et, congue quam. In a luctus tortor. Suspendisse eget tempor libero, ut sollicitudin ligula. Nulla vulputate tincidunt est non congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus at est imperdiet, dapibus ipsum vel, lacinia nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus id interdum lectus, ut elementum elit. Nullam a molestie magna. Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra.
        <br><br>
        <div style="font-size: 18px;">Policies of Hilton Hotel</div><br>
        <div style="display: flex; margin-bottom: 10px;">
          <div style="color: #01b7f2; width: 30%;">Check-in:</div> 4pm
        </div>
        <div style="display: flex;margin-bottom: 10px;">
          <div style="color: #01b7f2; width: 30%;">Check-out:</div> 12pm
        </div>
        <div style="display: flex;margin-bottom: 10px;">
          <div style="color: #01b7f2; width: 30%;">Cancellation / prepayment:</div>Cancellation and prepayment policies vary according to room type.
        </div>
        <div style="display: flex;margin-bottom: 10px;">
          <div style="color: #01b7f2; width: 165%;">Children and Extra Beds:</div>All children are welcome. Free! All children under 18 years stay free of charge when using existing beds. Any additional older children or adults are charged USD 10 per night when using existing beds. One older child or adult is charged USD 10 per person per night in an extra bed. Free! One child under 4 years stays free of charge in a crib. The maximum number of extra beds/cribs in a room is 1. Any type of extra bed or crib is upon request and needs to be confirmed by management. Additional fees are not calculated automatically in the total cost and will have to be paid for separately during your stay.
        </div>
        <div style="display: flex;margin-bottom: 10px;">
          <div style="color: #01b7f2; width: 30%;">Pets:</div>Pets are allowed. Charges may apply.
        </div>
    </div>
  </div>
  <div id="AVALABILITY" class="tabcontent" style="padding: 20px 15px; background-color: white;">
     
    <div style="display: flex;padding: 15px;width: 100%; border: 10px solid #f5f5f5;">
      
         <div class="row" style="width: 100%; margin: 0px; padding: 0px;">
          <div class="form-group col-md-6 col-lg-6 col-sm-12">
            <h4 class="title" style="margin-left: 18px;">When</h4>
            <div class="row" style="padding:0px 15px;">
            <div class="col-xs-12 col-lg-6">
            <label style="margin-left: 3px;">Check in</label><br>
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
            <input class="form-control i-t1" type="date" name="check_in" id="key1">
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
            <div class="col-xs-12 col-lg-6">
            <label>check out</label><br>
            <input class="form-control i-t2" type="date" name="check_out" id="key2">
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
          <div class="form-group col-sm-6 col-lg-4 col-md-6">
            <h4 class="title">Who</h4>
            <div class="row" style="padding:0px 15px;">
              <div class="col-4" style="padding: 0px;">
                <label>Rooms</label><br>
                <select name="Rooms" id="room" style="height: 30px;background: #f5f5f5;width: 60%;">
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
              <div class="col-4" style="padding: 0px">
                <label>Adults</label><br>
                <select name="Adults" id="adult" style="height: 30px;background: #f5f5f5;width: 60%;">
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
              <div class="col-4" style="padding: 0px;">
                <label>Kids</label><br>
                <select name="Kids" id="kid" style="height: 30px;background: #f5f5f5;width: 60%;">
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
          <div class="form-group col-md-6 col-lg-2 col-sm-6">
            <div class="c">
            <input class="bu1" type="button" value="Search now" style="background: #98ce44; width: 100%; line-height: 30px; border: none; color: white;" onclick="searchRoom()">
            </div>
          </div>
        </div>
    </div>
    <div>
      <h2 style="font-size: 1.6667em;margin: 0 0 15px;font-weight: 400;color: #2d3e52;margin: 20px 0px 20px 20px;">Available Rooms</h2>
      <div class="result_room">
        <?php $i=0; ?>
        <?php foreach($data as $rows): ?>
        <div class="img2">
          <div style="height: 158px; width: 188px;" onclick="openZoomImg()">
            <img src="../assets/upload/img/<?php echo $rows->photo; ?>" style="height: 158px; width: 188px;object-fit: cover;">
          </div>
          <div class="content_search_result">
            <table style="width: 690px;margin: 0px; padding: 0px;">
              <tr>
                <td style="width: 500px; padding-left: 20px;">
                    <div class="head-content" style="font-size: 18px;">
                      <?php echo $rows->room_name; ?>
                    </div>
                    <div style="color: #01b7f2;">Max people: <?php echo $rows->max_people; ?>
                    </div>
                </td>
                <td rowspan="2">
                  <div style="text-align: center;font-size: 16px; margin-top: -10px;">
                    AVG/NIGHT<br>
                    <?php $i++; ?>
                    <div><span style="color: #7db921;margin-right: 10px;">RUB</span><span style="color: #7db921;" id="smart-search<?php echo $i?>"><?php echo $rows->room_price ?></span></div>
                    <?php if(isset($_SESSION["customer_email"])): ?>
                    <input type="button" onclick="book<?php echo $i?>()" id="book<?php echo $i?>" value="BOOK NOW" style="background: #98ce44;padding: 10px 20px;margin-top: 10px; border: none; color: white;"/>
                    <?php else: ?>
                      <input type="button" onclick="login()" id="book<?php echo $i?>" value="BOOK NOW" style="background: #98ce44;padding: 10px 20px;margin-top: 10px; border: none; color: white;"/>
                    <?php endif; ?>
                    <!-- <input type="text" id="asd<?php echo $i?>" value="<?php echo $rows->id ?>"> -->
                  </div>                       
                </td>
              </tr>
              <tr>
                  <td style="padding-left: 20px">
                    <?php echo $rows->room_content; ?>
                  </td>
              </tr>
            </table>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
  <div id="REVIEWS" class="tabcontent" style="padding: 20px 15px; background-color: white;">
    <div style="padding: 15px;width: 100%; border: 10px solid #f5f5f5;">
      <div style="font-size: 18px;margin-left: 100px;">Ratings and reviews</div>
      <div style="display: flex;">
        <div style="padding: 10px 30px;margin-right: 20px;margin-left: 80px;">
          <div style="font-size: 50px;margin: 0px; padding: 0px;">
            <?php echo number_format($avg->avgStar, 1, '.', ''); ?>
          </div>
          <div>
            <?php for($i =0;$i<number_format($avg->avgStar);$i++): ?>
              <span class="fa fa-star checked" style="margin-top: 10px;"></span>
            <?php endfor; ?>
            <?php for($i=0;$i<(5-number_format($avg->avgStar));$i++): ?>
              <span class="fa fa-star" style="margin-top: 10px;"></span>
            <?php endfor; ?>
          </div>
          <div><?php echo $reviews; ?> reiviews</div>
          <input type="button" value="WRITE A REVIEW" style="padding:5px 40px; background-color: #98ce44;border: none;outline: none;color: #fff;font-size: 12px;margin-left: -30px;margin-top: 15px;" onclick="openCity(event, 'WRITE')">
        </div>

        <div style="padding: 10px 30px;margin-top: 20px;">
          <?php for($i=5;$i>0;$i--): ?>
              <?php 
                $id = isset($_GET["id"]) ? $_GET["id"] : 0;
                $avgStar = $this->modelAvgStar($id,$i);
              ?>
              <div style="display: flex;margin: 3px 0px;">
                <div style="margin-right: 30px;"><?php echo $i; ?></div>
                <div style="width: 400px;height: 15px; background-color: #d3d3d3;border-radius: 100px;position: relative;">
                  <div style="width: <?php echo $avgStar ?>%;height: 15px; background-color: #01b7f2;border-radius: 100px;position: absolute;top: 0; z-index: 99;"></div>
                </div>
              </div>
          <?php endfor; ?>
        </div>
      </div>
    </div>
    <div style="margin: 20px 20px;">
      <div style="display: flex;">
          <div style="font-size: 24px;">Guest Reviews</div>
          <div style="margin-top: 10px;font-size: 14px;color: #999;margin-left: 5px;">(<?php echo $reviews; ?> reiviews)</div>
      </div>
      <?php foreach ($review as $rows): ?>
      <div style="display: flex;border: 1px solid #f5f5f5;">
        <div style="width: 20%;border-right: 1px solid #f5f5f5;margin: 40px 40px;">
          <img src="../assets/upload/img/nobody.jpg" style="width: 70px; border-radius: 50%;">
          <div style=""><?php echo $rows->name; ?></div>
          <div><?php echo $rows->email; ?></div>
        </div>
        <div style="width: 85%; margin: 20px 0px;">
          <div style="display: flex;position: relative;">
            <div style="font-size: 20px;color: #01b7f2;"><?php echo $rows->title; ?></div>
            <div style="display: flex;position: absolute;right: 20px;font-size: 16px;">
              <div style="padding-right: 10px;">
                  <?php for($i =0;$i< $rows->star;$i++): ?>
                    <span class="fa fa-star checked" style="margin-top: 10px;"></span>
                  <?php endfor; ?>
                  <?php for($i=0;$i<(5- $rows->star);$i++): ?>
                    <span class="fa fa-star" style="margin-top: 10px;"></span>
                  <?php endfor; ?>
              </div>
              <div style="display: flex; margin-top: 5px;">
                <div>
                  <?php echo number_format($rows->star,1, '.', '') ?>
                </div>
                <div>
                  /5.0
                </div>
              </div>
            </div>
          </div>
          <div style="margin-top: 30px;font-size: 14px;"><?php echo $rows->review; ?></div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
  <form method="post" action="index.php?controller=reviews&action=writeReview&id=<?php echo $id ?>">
    <div id="WRITE" class="tabcontent" style="padding: 20px 15px; background-color: white;">
     <div style="display: flex;width: 100%; border: 10px solid #f5f5f5;">
        <div class="product-detail-review" style="margin: 0px; padding: 0px; width: 35%; border-right: 20px solid #f5f5f5;">
          <img src="../assets/upload/img/<?php echo $record->photo; ?>" style="width: 100%;">
          <div style="margin-top: 20px; font-size: 16px; padding: 0px 10px;"><?php echo $record->pname; ?>

          </div>
          <div style="margin-top: 0px; font-size: 12px;margin-bottom: 10px; padding: 0 10px;"><?php echo $record->hname; ?>
           </div>
           <div style="border: 1px solid #f5f5f5; padding: 5px 10px;margin-bottom: 20px;">
            <?php for($i =0;$i<$record->star;$i++): ?>
                <span class="fa fa-star checked" style="margin-top: 10px;"></span>
            <?php endfor; ?>
            <?php for($i=0;$i<(5-$record->star);$i++): ?>
                <span class="fa fa-star" style="margin-top: 10px;"></span>
            <?php endfor; ?>
             <span style="float: right;color: #9e9e9e;">1 reviews</span> 
           </div>
        </div>
        <div class="product-detail-star">
          <h2 style="font-size: 20px;margin-top: 90px;margin-left: 115px;">Your overall Rating of this property</h2>
              <i class="fa fa-star a12" style="margin-left: 130px;" aria-hidden="true" onmousemove="one_star1()"></i>
              <i class="fa fa-star a12" aria-hidden="true" onmousemove="two_star1()"></i>
              <i class="fa fa-star a12" aria-hidden="true" onmousemove="three_star1()"></i>
              <i class="fa fa-star a12" aria-hidden="true" onmousemove="four_star1()"></i>
              <i class="fa fa-star a12" aria-hidden="true" onmousemove="five_star1()"></i>
        </div>
        <input type="text" name="star" style="position: absolute;display: none;" id="current-star">
        <style type="text/css">
          .a12{
            font-size: 40px;
            color: #9e9e9e;
            margin: 20px 10px;
          }
          .checked {
            color: orange;
          }
        </style>
        <script type="text/javascript">
           function one_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
     element[0].classList.add("checked");
     document.getElementById("current-star").value = "1";
  }
  function two_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
    for(var i=0;i<2;i++){
      element[i].classList.add("checked");
    }
    document.getElementById("current-star").value = "2";
  }
  function three_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
     for(var i=0;i<3;i++){
      element[i].classList.add("checked");
    }
    document.getElementById("current-star").value = "3";
  }
  function four_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
     for(var i=0;i<4;i++){
      element[i].classList.add("checked");
    }
    document.getElementById("current-star").value = "4";
  }
  function five_star1() {
    var element = document.getElementsByClassName("a12");
    for(var i=0;i<5;i++){
      element[i].classList.remove("checked");
    }
    for(var i=0;i<5;i++){
      element[i].classList.add("checked");
    }
    document.getElementById("current-star").value = "5";
  }
        </script>
      </div>
      <div style="margin-bottom: 40px;">
        <div style="display: flex; width: 100%; padding: 40px;" >
          <div style="margin-right: 15%;">
            <div style="font-size: 18px;margin-bottom: 10px;">Booking Number</div>
            <input type="text" placeholder="Enter your booking number" style="width: 350px;padding:10px 15px; outline: none; background-color: #f5f5f5; border: none;" name="booking_number" autocomplete="OFF">
          </div>
          <div>
            <div style="font-size: 18px;margin-bottom: 10px;">Pin Code</div>
            <input type="text" placeholder="Enter your pin code" style="width: 350px;padding:10px 15px; outline: none; background-color: #f5f5f5; border: none;" name="pin_code">
          </div>
        </div>
        <div style="padding: 0px 40px;">
          <div style="font-size: 18px;margin-bottom: 10px;">Title of your review</div>
          <input type="text" placeholder="Enter your review title" style="width: 350px;padding:10px 15px; outline: none; background-color: #f5f5f5; border: none;" name="title">
        </div>
        <div style="padding: 40px 40px;">
          <div style="font-size: 18px;margin-bottom: 10px;">Your review</div>
          <!-- <input type="text" placeholder="Enter your review" style="width: 350px;height:80px;padding:0px 15px; outline: none; background-color: #f5f5f5; border: none; overflow: scroll;overflow-x: hidden;resize: none;">  -->
         <textarea style=" width: 100%;
    height: 100px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: none;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;outline: none;" name="review">
    </textarea>
        </div>
        <?php if(isset($_SESSION["customer_email"])): ?>
          <input type="submit" value="SUBMIT REVIEW" style="padding:10px 100px; background-color: #98ce44;border: none;outline: none;color: white; margin-left: 40px;font-size: 16px;">
        <?php else: ?>
          <input type="button" value="SUBMIT REVIEW" style="padding:10px 100px; background-color: #98ce44;border: none;outline: none;color: white; margin-left: 40px;font-size: 16px;" onclick="loginToReview()">
        <?php endif; ?>
        <script type="text/javascript">
          function loginToReview(){
            location.href = "index.php?&controller=login&action=login&key=<?php echo $key ?>&key2=<?php echo $key2 ?>&key3=<?php echo $key3 ?>";
          }
        </script>
      </div>
    </div>
  </form>
</div>
			<div class="bang-gia col-sm-4 col-md-3">
				<div class="logo-hotel">
					<div class="logo"><img src="../assets/upload/img/16.png"></div>
					<div style="padding-bottom: 5px;border-bottom: 1px solid #f5f5f5;">
						<span style="font-size: 18px;color: #002e4d; font-weight: bold;"><?php echo $record->pname; ?></span>
						<?php for($i=0;$i<(5-$record->star);$i++): ?>
              <span class="fa fa-star" style="float: right;margin-top: 10px;"></span>
            <?php endfor; ?>
            <?php for($i =0;$i<$record->star;$i++): ?>
              <span class="fa fa-star checked" style="float: right;margin-top: 10px;"></span>
            <?php endfor; ?>
            <br>
						<span style="color: #9a9a9a;"><?php echo $record->address; ?></span>
					</div>
					<div style="border-bottom: 1px solid #f5f5f5; padding: 10px 0px;">
						<span style="color: #9a9a9a; font-size: 14px;">AVG/NIGHT</span>
						<span style="color: #28c2f4; font-size: 18px; float: right;">$<?php echo $record->price; ?></span>
					</div>
					<div style="padding: 10px 0px;">
						<div style="color: #9a9a9a; font-size: 12px; margin-bottom: 20px;">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam.</div>
            <?php if(isset($_SESSION["customer_email"])): ?>
              <input type="button" value="SELECT" style="background: #fdb714; width: 100%; line-height: 30px; border: none; color: white; font-size: 12px; font-weight: bold; margin: 18px 0px 10px;" onclick="addToCart()">
            <script type="text/javascript">
              function addToCart(){
                <?php $idProduct = isset($_GET["id"]) ? $_GET["id"] : "" ?>
                location.href = "index.php?controller=cart&action=create&id=<?php echo $idProduct; ?>";
              }
            </script>
            <?php else: ?>
              <span style="color: #002e4d; font-size: 14px;">To save your wishlist please login.</span><br>
              <input type="button" value="LOGIN" style="background: #fdb714; width: 100%; line-height: 30px; border: none; color: white; font-size: 12px; font-weight: bold; margin: 18px 0px 10px;" onclick="login()">
            <?php endif; ?>
						<script type="text/javascript">
              function login(){
                location.href = "index.php?&controller=login&action=login&key=<?php echo $key ?>&key2=<?php echo $key2 ?>&key3=<?php echo $key3 ?>";
              }      
            </script>
					</div>
				</div>
				<div style="padding: 20px 8%; background-color: white;">
					<span style="color: #002e4d; font-size: 17px;">Why Book with us?</span>
					<div style="border-bottom: 1px solid #f5f5f5; padding: 20px 0px;">
						<i class="fa fa-facebook-official twitter" aria-hidden="true" style="float: left; margin-right: 10px;"></i>
						<span style="font-size: 14px;">135,00+ Hotels</span><br>
						<span style="color: #8383a3; font-size: 12px;">Nunc cursus libero pur congue arut nimspnty</span>
					</div>
					<div style="border-bottom: 1px solid #f5f5f5; padding: 20px 0px;">
						<i class="fa fa-facebook-official twitter" aria-hidden="true" style="float: left; margin-right: 10px;"></i>
						<span style="font-size: 14px;">Low Rates & Savings</span><br>
						<span style="color: #8383a3; font-size: 12px;">Nunc cursus libero pur congue arut nimspnty</span>
					</div>
					<div style="padding-top: 20px;">
						<i class="fa fa-facebook-official twitter" aria-hidden="true" style="float: left; margin-right: 10px;"></i>
						<span style="font-size: 14px;">Excellent Support</span><br>
						<span style="color: #8383a3; font-size: 12px;">Nunc cursus libero pur congue arut nimspnty</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
  <script type="text/javascript">
    function searchRoom(){
      var x = new Date(document.getElementById("key1").value);
      var y = new Date(document.getElementById("key2").value);
      var r = document.getElementById("room").value;
      var a = document.getElementById("adult").value;
      var k = document.getElementById("kid").value;
      var oneday = 86400000;
      var money =0;

      <?php $i=0; ?>
      <?php foreach($data as $rows): ?>
        <?php $i++; ?>
        money = <?php echo $rows->room_price ?>;
        document.getElementById("smart-search<?php echo $i; ?>").innerHTML = (money*((y-x)/oneday)*r);
        if((Number(a)+Number(k)/2)><?php echo $rows->max_people ?>){
          document.getElementById("book<?php echo $i; ?>").style.background = "#d8d8d8";
          $('#book<?php echo $i; ?>').attr("disabled", true);
        }else{
          document.getElementById("book<?php echo $i; ?>").style.background = "#98ce44";
          $('#book<?php echo $i; ?>').attr("disabled", false);
        }
      <?php endforeach; ?>
    }
    <?php $i=0; ?>
    <?php foreach($data as $rows): ?>
      <?php $i++; ?>
    function book<?php echo $i; ?>(){
      var x = document.getElementById("key1").value;
      var y = document.getElementById("key2").value;
      var r = document.getElementById("room").value;
      var a = document.getElementById("adult").value;
      var k = document.getElementById("kid").value;
      var price=document.getElementById("smart-search<?php echo $i; ?>").innerText;
       location.href = "index.php?&controller=cart&id=<?php echo $rows->id; ?>&price="+price+"&room="+r+"&key1="+x+"&key2="+y+"&adult="+a+"&kid="+k;
    }
    <?php endforeach; ?>
  </script>

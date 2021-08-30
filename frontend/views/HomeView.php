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
      <?php 
        $message = isset($_GET["message"]) ? $_GET["message"] : "";
        if($message=="checkOutSuccess"):
       ?>
       alert("Thanh toan thanh cong");
     <?php endif; ?>
      //---
    </script>
   <div id="carouselExampleControls1" class="carousel slide container-fluid carousel-animation" data-ride="carousel"> 
  <div class="carousel-inner">
    <div class="carousel-item">
      <div style="background: url('../assets/upload/images/bg.jpg'); width: 100%; height: 640px; position: relative;overflow: hidden;background-repeat: no-repeat;background-size: cover;" alt="First slide">
    <div style="position: absolute; z-index: 1;animation-name: example0;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;"><img src="../assets/upload/images/stage.png"></div>
    <div  style="animation-delay: 0.5s;position: absolute; z-index: 1;animation-name: example1;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0; bottom: 0px; left: -400px;"><img src="../assets/upload/images/tree.png"></div>
    <div  style="position: absolute; z-index: 1;animation-name: example2;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;
  bottom: 0px;top: 510px;animation-delay: 0.8s;"><img src="../assets/upload/images/shadow.png"></div>
    <div style="position: absolute; z-index: 1;animation-name: example3;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;
  bottom: 0px; right: 240px;animation-delay: 1.1s; bottom: 50px;"><img src="../assets/upload/images/brifcase.png"></div>
    <div style="bottom: 90px;position: absolute; z-index: 1;animation-name: example4;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 1.4s;"><img src="../assets/upload/images/plate.png"></div>
    <div  style="position: absolute; z-index: 1;animation-name: example5;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 1.7s; bottom: 70px;"><img src="../assets/upload/images/watch.png"></div>
    <div  style="position: absolute; z-index: 1;animation-name: example6;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2s; bottom: 195px;"><img src="../assets/upload/images/cap.png"></div>
<div  style="position: absolute; z-index: 1;animation-name: example7;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2.3s;"><img src="../assets/upload/images/plane.png"></div>
    <div  style="position: absolute; z-index: 1;animation-name: example8;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2.6s;right: 790px; color: white; font-size: 24px;text-shadow: 2px 2px 5px grey;">Welcome to My Company</div>
    <div  style="position: absolute; z-index: 1;animation-name: example9;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2.9s;right: 650px; color: white; font-size: 28px;text-shadow: 2px 2px 5px grey;">HDZ, No. 1 Travel Company In The World</div>
    <div style="width: 120px; height: 40px; border: 1px solid white;position: absolute; z-index: 1;animation-name: example10;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 3.2s; right: 950px; color: white; font-size: 20px; padding-left:  20px;padding-top: 3px;text-shadow: 2px 2px 5px grey;cursor: pointer;">Buy Now</div>
    <div style="width: 120px; height: 40px; border: 1px solid white;position: absolute; z-index: 1;animation-name: example10;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 3.3s; right: 790px; color: white; font-size: 20px; padding-left:  20px;padding-top: 3px;text-shadow: 2px 2px 5px grey; cursor: pointer;">More Info</div>
  </div>
    </div>
    <div class="carousel-item active">
       <div style="background: url('../assets/upload/images/bg1.jpg'); width: 100%; height: 640px; position: relative;overflow: hidden;" alt="Second slide">
    <div style="position: absolute; z-index: 1;animation-name: example11;
  animation-duration: 1s;  
  animation-fill-mode: forwards;animation-delay: 0.5s;
  opacity: 0;bottom: 0;"><img src="../assets/upload/images/girl.png"></div>
    <div style="position: absolute; z-index: 1;animation-name: example12;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;bottom: 95px;animation-delay: 0.8s;"><img src="../assets/upload/images/island.png"></div>
    <div style="position: absolute; z-index: 1;animation-name: example13;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;right: 1045px;animation-delay: 1s;"><img src="../assets/upload/images/ballon.png"></div>
    <div style="position: absolute; z-index: 1;animation-name: example14;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;bottom: 95px;animation-delay: 1.5s;"><img src="../assets/upload/images/plane1.png"></div>
    <div style="position: absolute; z-index: 1;animation-name: example15;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;right: 930px;animation-delay: 2s;color: white; font-size: 24px;text-shadow: 2px 2px 5px grey;">Let's <b>Discover</b> The world together!</div>
      <div style="position: absolute; z-index: 1;animation-name: example16;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;top: 200px;animation-delay: 2.5s;"><img src="../assets/upload/images/pleane.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example16;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;top: 240px;animation-delay: 2.7s;"><img src="../assets/upload/images/buil.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example16;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;top: 280px;animation-delay: 2.9s;"><img src="../assets/upload/images/watch1.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example16;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;top: 320px;animation-delay: 3.1s;"><img src="../assets/upload/images/man.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example17;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 305px;animation-delay: 3.4s;color: white; font-size: 20px;text-shadow: 2px 2px 5px grey;">Over 500 Airlines
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example18;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 305px;animation-delay: 3.6s;color: white; font-size: 20px;text-shadow: 2px 2px 5px grey;">More than 13,000 Places
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example19;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 305px;animation-delay: 3.8s;color: white; font-size: 20px;text-shadow: 2px 2px 5px grey;">Best Price Guarantee
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example20;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 305px;animation-delay: 4s;color: white; font-size: 20px;text-shadow: 2px 2px 5px grey;">Custom Care
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example21;
  animation-duration: 2s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 275px;top: 380px;animation-delay: 4.7s;color: white; font-size: 12px;background: rgba(0,0,0,0.6);padding: 5px 10px; cursor: pointer;">FINE OUT MORE
    </div>
  </div>
    </div>
    <div class="carousel-item">
      <div style="background: url('../assets/upload/images/bg2.jpg'); width: 100%; height: 640px; position: relative;overflow: hidden;" alt="Third slide">
    <div style="position: absolute; z-index: 1;animation-name: example23;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;right: 400px;animation-delay: 1s;"><img src="../assets/upload/images/balloon.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example25;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2s;"><img src="../assets/upload/images/plane2.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example22;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;top: 100px;animation-delay: 0.5s;"><img src="../assets/upload/images/cloud.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example29;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 3.3s;right: 580px;"><img src="../assets/upload/images/building3.png">
      </div>
    <div style="position: absolute; z-index: 1;animation-name: example28;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 3.2s;right: 500px;"><img src="../assets/upload/images/building3.png">
      </div>
    <div style="position: absolute; z-index: 1;animation-name: example27;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 3.1s;right: 490px;"><img src="../assets/upload/images/building3.png">
      </div>
    <div style="position: absolute; z-index: 1;animation-name: example28;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 3s;right: 490px;"><img src="../assets/upload/images/paris.png">
      </div>
    <div style="position: absolute; z-index: 1;animation-name: example26;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2.9s;right: 600px;"><img src="../assets/upload/images/italy.png">
      </div>
    <div style="position: absolute; z-index: 1;animation-name: example27;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2.8s;right: 600px;"><img src="../assets/upload/images/building.png">
      </div>
    <div style="position: absolute; z-index: 1;animation-name: example27;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2.7s;right: 470px;"><img src="../assets/upload/images/sydney.png">
      </div>
    <div style="position: absolute; z-index: 1;animation-name: example26;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2.5s;right: 530px;"><img src="../assets/upload/images/london.png">
      </div>
      <div style="position: absolute; z-index: 1;animation-name: example26;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 2.6s;right: 560px;"><img src="../assets/upload/images/newyork.png">
      </div>
      <div style="position: absolute; z-index: 1;animation-name: example24;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;animation-delay: 1.5s;"><img src="../assets/upload/images/hand.png" style="width: 565px; height: 380px;">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example15;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;right: 930px;animation-delay: 3.6s;color: white; font-size: 24px;text-shadow: 2px 2px 5px grey;">Let's <b>Discover</b> The world together!</div>
      <div style="position: absolute; z-index: 1;animation-name: example16;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;top: 200px;animation-delay: 4.1s;"><img src="../assets/upload/images/pleane.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example16;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;top: 240px;animation-delay: 4.3s;"><img src="../assets/upload/images/buil.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example16;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;top: 280px;animation-delay: 4.5s;"><img src="../assets/upload/images/watch1.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example16;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;top: 320px;animation-delay: 4.7s;"><img src="../assets/upload/images/man.png">
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example17;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 305px;animation-delay: 5s;color: white; font-size: 20px;text-shadow: 2px 2px 5px grey;">Over 500 Airlines
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example18;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 305px;animation-delay: 5.1s;color: white; font-size: 20px;text-shadow: 2px 2px 5px grey;">More than 13,000 Places
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example19;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 305px;animation-delay: 5.2s;color: white; font-size: 20px;text-shadow: 2px 2px 5px grey;">Best Price Guarantee
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example20;
  animation-duration: 1s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 305px;animation-delay: 5.3s;color: white; font-size: 20px;text-shadow: 2px 2px 5px grey;">Custom Care
    </div>
    <div style="position: absolute; z-index: 1;animation-name: example21;
  animation-duration: 2s;  
  animation-fill-mode: forwards;
  opacity: 0;left: 275px;top: 380px;animation-delay: 6.1s;color: white; font-size: 12px;background: rgba(0,0,0,0.6);padding: 5px 10px; cursor: pointer;">FINE OUT MORE
    </div>
  </div>
  </div>
  </div>
  <div class="animatione-menu">
  <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true" style="margin-left: -3px;"></span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </a>
  </div>
      <div class="wrapper">
        <div class="menu2">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="index.php?controller=products">HOTELS</a></li>
            <li><a href="index.php?controller=products">TOURS</a></li>
            <li><a href="index.php?controller=products">CARS</a></li>
            <li><a href="index.php?controller=products">CRUISES</a></li>
            <li><a href="index.php?controller=products">FLIGHTS</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <div class="search-tab-content">
        <div class="row">
          <div class="form-group col-md-6 col-lg-3 col-sm-12">
            <h4 class="title">Where</h4>
            <label>Your Destination</label><br>
            <input class="i-t" type="text" value="Enter your destination or hotel name" onfocus="if(this.value == 'Enter your destination or hotel name') this.value ='';" onblur="if(this.value == '') 
            this.value = 'Enter your destination or hotel name';" onkeyup ="smartSearch();" id="key" autocomplete="off">
            <div id="smart-search">
              <ul>
              </ul>
            </div>
          </div>
          <div class="form-group col-md-6 col-lg-4 col-sm-12">
            <h4 class="title" style="margin-left: 10px;">When</h4>
            <div class="row" style="padding:0px 15px;">
            <div class="col-xs-12 col-lg-6">
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
                 alert(x.value);
            </script>
            </div>
            <div class="col-xs-12 col-lg-6">
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
          <div class="form-group col-sm-6 col-lg-3 col-md-6">
            <h4 class="title">Who</h4>
            <div class="row" style="padding:0px 15px;">
              <div class="col-4" style="padding: 0px;">
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
              <div class="col-4" style="padding: 0px">
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
              <div class="col-4" style="padding: 0px;">
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

          <div class="form-group col-md-6 col-lg-2 col-sm-6">
            <div class="c">
            <input class="bu1" type="button" value="Search now" style="background: #98ce44; width: 100%; line-height: 30px; border: none; color: white;" onclick="return search();">
            </div>
          </div>
        </div>
      </div>
      <style type="text/css">
        #smart-search ul{padding:0px; margin:0px; list-style: none;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.3);cursor: pointer;}
        #smart-search ul li{border-bottom: 1px solid #f5f5f5; padding: 10px;}
        #smart-search{position: absolute; width: 280px; z-index: 1; background: white; display: none;top: 105px;}
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
      
    </div>
    </div>
    <div class="hotel container-fluid">
      <div class="wrapper">
        <p class="t-t">Popular Hotels</p>
      <div class="row">
          <?php 
            $hotProducts = $this->modelHotProducts();
          ?>
          <?php foreach($hotProducts as $rows): ?>
        <div class="form-group col-md-5 col-sm-12 col-lg-3" style="padding: 0px 20px;">
          <div class="img1">
            <div style="overflow: hidden; width: 100%; height: 150px;" onclick="openZoomImg()">
              <img src="../assets/upload/img/<?php echo $rows->photo; ?>">
              <div class="img-hidden">
                <div class="bg-img-hidden">
                <i class="fa fa-plus" aria-hidden="true"></i>
                </div>
              </div>
            </div>
            <div class="t">
              <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name ?></a><br>
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
    </div>
    <?php 
            $hotPlace = $this->modelListCategories();
    ?>
    <?php foreach($hotPlace as $rowsCategory): ?>
    <div class="hotel container-fluid">
      <div class="wrapper">
        <p class="t-t"><?php echo $rowsCategory->name ?></p>
        <div class="row">
          <?php 
            $products = $this->modelListProducts($rowsCategory->id);
          ?>
            <?php foreach($products as $rows): ?>
              <div class="form-group col-md-5 col-sm-12 col-lg-3" style="padding: 0px 20px;">
                <div class="img1">
                  <div style="overflow: hidden; width: 100%; height: 150px;">
                    <img src="../assets/upload/img/<?php echo $rows->photo; ?>" onclick="openZoomImg()">
                    <di v class="img-hidden">
                      <div class="bg-img-hidden">
                      <i class="fa fa-plus" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="t">
                    <a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name ?></a><br>
                    <a style="color: #98ce44;">1000 VND</a><a style="font-size: 10px;">AVG/NIGHT</a>
                  </div>
                  <input class="bu1" type="button" value="Select" style="width: 30%; border: none; color: white;">
                </div>
              </div>
            <?php endforeach; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </div> 
    <div class="bg-img container-fluid">
      <img src="../assets/upload/img/couple.png">
      <div class="title0">
      <div class="title1">Popular Destinations for Honeymoon</div>
      <div class="title2">Nunc cursus libero purusac congue arcu cursus utsed vitae pulvinar massa idporta neque purusac
      Etiam elerisque mi id faucibus iaculis vitae pulvinar.
      </div>
      <div class="img-place">
        <img src="../assets/upload/img/places01.jpg">
        <a class="title3">Paris</a>
        <a class="title4">(990+ PLACES)</a>
        <input class="bu1" type="button" value="SEE ALL" style="width: 40%; border: none; color: white;" onclick="baomoi()">
        <script type="text/javascript">
          function baomoi(){
            location.href="http://nld.com.vn/thoi-su-quoc-te/tong-thong-trump-noi-gioi-y-te-my-phong-dai-covid-19-de-kiem-nhieu-tien-hon-2020103109420898.htm";
          }
        </script>
      </div>
      <div class="img-place2">
        <img src="../assets/upload/img/places03.jpg">
        <a class="title3">Paris</a>
        <a class="title4">(990+ PLACES)</a>
        <input class="bu1" type="button" value="SEE ALL" style="width: 40%; border: none; color: white;" onclick="baomoi()">
      </div>
      <div class="img-place3">
        <img src="../assets/upload/img/places02.jpg">
        <a class="title3">Paris</a>
        <a class="title4">(990+ PLACES)</a>
        <input class="bu1" type="button" value="SEE ALL" style="width: 40%; border: none; color: white;" onclick="baomoi()">
      </div>
    </div>
    </div>
    <div class="hotel container-fluid">
      <div class="wrapper2">
        <div class="fact">Did you know?</div>
        <div class="fact2">Mauris ullamcorper nibh quis leo ultrices in hendrerit velit tristiqueut augue in nulla lacinia bibendum liberoras rutrum ac purus ut tristique.Nullam placerat lacinia dolor quis pretium. Phasellus vitae lacinia quam, at pellentesque lorem. Sed euismod turpis quis mattis fringilla.</div>
        <div class="row">
          <?php 
            $fact = $this->modelFacts();
          ?>
            <?php foreach($fact as $rows): ?>
          <div class="new-img1 form-group col-lg-5 col-sm-12">
            <img src="../assets/upload/img/<?php echo $rows->photo; ?>">
            <p><?php echo $rows->name; ?></p>
            <div><?php echo $rows->content; ?></div>
            <input class="bu1" type="button" value="SEE ALL" style="width: 15%; border: none; color: white; margin-left: 80%;margin-top: 5%;" onclick="baomoi()">
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
    <div class="bg-img2 container-fluid">
        <div class="row"style="margin-left: 12%;">
          <div class="abc form-group  col-lg-2 col-sm-5">
            <div class="abc2"><img src="../assets/upload/img/14.jpg"></div>
            <div class="abc3">
              <div class="abc3-1">Best Price Guarantee</div>
              <div class="abc3-2">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</div>
            </div>
            <div class="abc4"></div>
          </div>
          <div class="abc form-group  col-lg-2 col-sm-5">
            <div class="abc4"></div>
            <div class="abc2"><img src="../assets/upload/img/15.jpg"></div>
            <div class="abc3">
              <div class="abc3-1">Best Price Guarantee</div>
              <div class="abc3-2">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</div>
            </div>
          </div>
          <div class="abc form-group  col-lg-2 col-sm-5">
            <div class="abc4"></div>
            <div class="abc2"><img src="../assets/upload/img/16.jpg"></div>
            <div class="abc3">
              <div class="abc3-1">Best Price Guarantee</div>
              <div class="abc3-2">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</div>
            </div>
          </div>
          <div class="abc form-group  col-lg-2 col-sm-5">
            <div class="abc4"></div>
            <div class="abc2"><img src="../assets/upload/img/18.jpg"></div>
            <div class="abc3">
              <div class="abc3-1">Best Price Guarantee</div>
              <div class="abc3-2">Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massa idporta nequetiam elerisque mi id faucibus iaculis vitae pulvinar.</div>
          </div>
        </div>
      </div>
    </div>
<!-- aaa -->
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
<!-- /aaa -->
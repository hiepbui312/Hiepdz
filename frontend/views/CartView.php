<!-- load file layout chung -->
<?php $this->layoutPath = "LayoutTrangChu.php"; ?>
<div style="background-color: #f5f5f5;padding: 100px 0px;">
	<div style="background-color: white;margin: auto;width: 600px;">
		<div style="font-weight: bold;font-size: 24px;background: url(../assets/upload/img/3.jpg) no-repeat; padding: 100px 200px;object-fit: cover; width: 100%;margin-bottom: 0px;color: white;"><span style="color: #8BC34A;margin-right: 10px;">Phiếu đặt</span>phòng</div>
		<?php 
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$price = isset($_GET["price"]) ? $_GET["price"] : 0;
			$adult = isset($_GET["adult"]) ? $_GET["adult"] : 0;
			$kid = isset($_GET["kid"]) ? $_GET["kid"] : 0;
			$room = isset($_GET["room"]) ? $_GET["room"] : 0;
			$key1 = isset($_GET["key1"]) ? $_GET["key1"] : "0000-00-00";
			$key2 = isset($_GET["key2"]) ? $_GET["key2"] : "0000-00-00";
		 ?>
		<form method="post" action="index.php?controller=cart&action=create&id=<?php echo $id ?>&price=<?php echo $price ?>&room=<?php echo $room ?>&key1=<?php echo $key1 ?>&key2=<?php echo $key2 ?>&adult=<?php echo $adult ?>&kid=<?php echo $kid ?>">
			<div style="width: 100%; padding: 30px">
				<div style="display: flex;position: relative;margin-bottom: 40px;">
					<div style="font-size: 20px;color: #01b7f2;">Họ tên :</div>
					<input type="text" name="name" style="width: 400px;position: absolute;right: 0px;top: 0px; padding: 10px 20px;background-color: #d8d8d8;border: none;outline: none;" autocomplete="OFF">
				</div>
				<div style="display: flex;position: relative;margin-bottom: 40px;">
					<div style="font-size: 20px;color: #01b7f2;">Điện thoại :</div>
					<input type="text" name="phone" style="width: 400px;position: absolute;right: 0px;top: 0px; padding: 10px 20px;background-color: #d8d8d8;border: none;outline: none;"autocomplete="OFF">
				</div>
				<div style="display: flex;position: relative;margin-bottom: 40px;">
					<div style="font-size: 20px;color: #01b7f2;">Địa chỉ :</div>
					<input type="text" name="address" style="width: 400px;position: absolute;right: 0px;top: 0px; padding: 10px 20px;background-color: #d8d8d8;border: none;outline: none;"autocomplete="OFF">
				</div>
				<div style="display: flex;position: relative;margin-bottom: 40px;">
					<div style="font-size: 20px;color: #01b7f2;">Email :</div>
					<input type="text" name="email" style="width: 400px;position: absolute;right: 0px;top: 0px; padding: 10px 20px;background-color: #d8d8d8;border: none;outline: none;">
				</div>
				<div style="display: flex;position: relative;margin-bottom: 40px;">
					<div style="font-size: 20px;color: #01b7f2;">Chú thích :</div>
					<input type="text" name="chuthich" style="width: 400px;position: absolute;right: 0px;top: 0px; padding: 10px 20px;background-color: #d8d8d8;border: none;outline: none;"autocomplete="OFF">
				</div>
				<input type="submit" value="Thanh toán" style="background-color: #8BC34A;border: none;outline: none;color: white;padding: 15px 30px;margin-left: 410px;font-size: 16px;">
			</div>
		</form>
	</div>
</div>
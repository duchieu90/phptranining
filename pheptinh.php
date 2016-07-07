<?php
$loi=array();
if (isset($_POST["submit"])){

	if ($_POST['usename'] == NULL) {
		$loi["usename"] = "Xin vui long nhap Usename";
	}
	else {
		$usename=$_POST["usename"];
	}

	if ($_POST["password"] == NULL) {
		$loi["password"] = "Xin vui long nhap Password";
	}
	else{
		$password = $_POST["password"];
	}


	if ($_POST["ngay"] == "ngay" || $_POST["thang"] == "thang" || $_POST["nam"] == "nam"){
		$loi["birthday"] = "Xin vui lòng chọn birthday";
	}
	else {
		$ngay=$_POST["ngay"];
		$thang=$_POST["thang"];
		$nam=$_POST["nam"];
	}
	// var_dump($ngay);die;

	if (isset($_POST["gender"]) == NULL){
		$loi["gender"] = "Xin vui lòng chọn gender";
	}
	else{
		$gender=$_POST["gender"];
	}

	if (isset($_POST["info"]) == NULL){
		$loi["info"] = "Xin vui lòng điền thông tin";
	}
	else{
		$info=$_POST["info"];
	}

	if (isset($_POST["city"]) == NULL){
		$loi["city"] = "Xin vui lòng chọn nơi ở";
	} else{
		$city=$_POST["city"];
		
	}

	if (isset($usename) && isset($password) && isset($ngay) && isset($thang) && isset($nam) && isset($gender) && isset($info) && isset($city))
	{
		echo "Usename: $usename<br/>";
		echo "Password: $password<br/>";
		echo "Ngày sinh: $ngay/$thang/$nam<br/>";
		if ($gender==1){
		echo "Gender là: Nam<br/>";
		}
		else {
			echo "Gender la: Nữ<br/>";
		}
		echo "Thông tin: $info<br/>";
		echo "Nơi ở: ".implode(",",$city);
	}
}

?>

<!-- <?php
if(isset($_POST["submit"])){
	$pheptinh = $_POST["pheptinh"];
	if($pheptinh == 'tong'){
		$ketqua= $_POST["number1"] + $_POST["number2"];
	}
	if($pheptinh == 'hieu'){
		$ketqua= $_POST["number1"] - $_POST["number2"];
	}

	if($pheptinh == 'tich'){
		$ketqua= $_POST["number1"] * $_POST["number2"];
	}
	if($pheptinh == 'thuong'){
		$ketqua= $_POST["number1"] / $_POST["number2"];
	}
	
	echo "Ket qua la: ".$ketqua;
}
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!-- <form action="" method="post">
So thu 1
    <input type="text" name="number1">
    <select name="pheptinh">
    	<option value="tong">Tong</option>
    	<option value="hieu">Hieu</option>
    	<option value="tich">Tich</option>
    	<option value="thuong">Thuong</option>
    </select>
So thu 2    
    <input type="text" name="number2">
    
    <input type="submit" name="submit" value="Tinh">

</form> -->

<form action="pheptinh.php" method="post">
	<table>
		<tr>
			<td>Usename</td>
			<td><input type="text" size="25" name="usename"></td>
			<td><?php echo $loi["usename"];?></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" size="25" name="password"></td>
			<td><?php echo $loi["password"];?></td>
		</tr>
		<tr>
			<td>Birthday</td>
			<td>
				<select name="ngay">
				<option value="ngay">ngay</option>
					<?php
						for ($i=1; $i<=31; $i++){
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
				<select name="thang">
					<option value="thang">thang</option>
						<?php
							for ($j=1; $j<=12; $j++){
								echo "<option value='$j'>$j</option>";
							}
						?>
				</select>
				<select name="nam">
					<option value="nam">nam</option>
					<?php
						for ($k=1970; $k<=date("Y"); $k++){
							echo "<option value='$k'>$k</option>";
						}
					?>
				</select>
			</td>
			<td><?php echo $loi["birthday"];?></td>


			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="1">Male
					<input type="radio" name="gender" value="2">Female
				</td>
				<td><?php echo $loi["gender"];?></td>
			</tr>

			<tr>
				<td>Infomation</td>
				<td><textarea name="info" cols="30" rows="10"></textarea></td>
				<td><?php echo $loi["info"];?></td>
			</tr>
		</tr>

		<tr>
			<td>Thành Phố</td>
			<td>
				<input type="checkbox" name="city[]" value="Hà Nội">Hà Nội
				<input type="checkbox" name="city[]" value="Phú Thọ">Phú Thọ
				<input type="checkbox" name="city[]" value="Vĩnh Phúc">Vĩnh Phúc
			</td>
			<td><?php echo $loi["city"];?></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="submit" value="Regiter"></td>
		</tr>
	</table>

</form>

</body>
</html>
<?php
$host = "localhost";
$user = "it58160407";
$passwd = "it58160407";
$dbname = "it58160407";
$conn = new mysqli($host, $user, $passwd, $dbname);
$conn->query('SET NAMES UTF8');

$query = "SELECT * FROM provinces";
$result = $conn->query($query);
?>


<html lang = "en">
<head
	
	<meta charset = "utf-8">
	<title>Form Validation</title>

	

<script type="text/javascript"></script>
<style type="text/css">
	h3 {
		font-family: Calibri; 
		font-size: 22pt; 
		font-style: normal; 
		font-weight: bold; 
		color:#CD5C5C;
		text-align: center; 
		text-decoration: 
	}

	table {
		font-family: Calibri; 
		color:black; 
		font-size: 11pt; 
		font-style: normal;
		text-align:; 
		background-color: #FFB6C1; 
		border-collapse: collapse; 
		border: 2px 
		
	}
		table.inner{border: 0px}

.btn {
    border: none;
    color: black;
    padding: 14px 28px;
    font-size: 16px;
    cursor: pointer;
}

.success {background-color: #87CEEB;} /* Green */
.success:hover {background-color: #00FF7F;}
	

</style>
</head>
<body>
<center><button class="btn success" ><a href="http://angsila.cs.buu.ac.th/~58160407/887371/lab07/register_form.php">
Register Form</a></button>&nbsp;<button class="btn success" ><a href="http://angsila.cs.buu.ac.th/~58160407/887371/lab07/show_register.php">Show Register</a></button>&nbsp;<button class="btn success" ><a href="http://angsila.cs.buu.ac.th/~58160407/887371/lab07/er.png">ER Diagram</a></button>&nbsp;<button class="btn success" >SourceCode</button></center>


					<h3>แบบฟอร์มลงทะเบียน</h3>
<form action= "dopost.php" method = "post" class="a">
<table align="center" cellpadding = "10">
<tr>
	<td>  ชื่อ-นาสมกุล : </td>
	<td>  <input type = "text" class="text" name="name" id="name" /> </td>
</tr>

<tr>
	<td>  อีเมล :</td>
	<td>  <input type = "email" class="text" name="email" id="email" /> </td>
</tr>

<tr>
	<td>  เพศ : </td>
	<td>  <input type = "radio" class="radio" name="sex" id="sex"  value="ชาย"/>ชาย
	      <input type = "radio" class="radio" name="sex" id="sex" value="หญิง" />หญิง 
	</td>
</tr>

<tr>
	<td>  ความสนใจ : </td>
	<td>  <input type = "checkbox" class="checkbox" name="intr1" id="intr1" value="เรียน" />เรียน
	      <input type = "checkbox" class="checkbox" name="intr2" id="intr2" value="เกมส์" /> เกมส์ 
	</td>
</tr>

<tr>
	<td>  ที่อยู่ : </td>
	     <td><textarea class="text" name="address" id="address" rows="4" cols = "50"></textarea> 
	</td>
</tr>

<tr>
	<td>จังหวัด : </td>
	
	<td><select name='Provinces'>
		<?php
         while ($row = $result->fetch_object()){
         	echo "<option value='$row->PROVINCE_NAME'>$row->PROVINCE_NAME</option>";	
        }

		?>
        </td></select>
		

	<br/>
	<tr>
	<td colspan="2" align="center">
	<center><input type="submit" id="submit" value="submit" name="submit" /></td></center></tr>
</form>
	
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script >
	$('#submit').on('click',function (event) {
	var valid =true,
	errorMessage ="";
	if($('#name').val()==''){
		errorMessage ="โปรดป้อนชื่อ-นามสกุล \n";
		valid=false;
	}

	if($('#address').val()==''){
		errorMessage += "โปรดป้อนที่อยู่\n"
		valid=false;
	}

	if($('#email').val()==''){
		errorMessage += "โปรดป้อน email \n";

		valid =false;
	}
	
	if(!valid && errorMessage.length>0){
		alert(errorMessage);
		event.preventDefault();
	}
	});
</script>
</table>




</body>
</html>
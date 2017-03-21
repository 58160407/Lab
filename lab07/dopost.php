 <meta charset="utf-8">


<?php


include('db.php');

echo "<h3>View posted data:</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";
echo "<h3>View individual data:</h3>";

echo $_POST['name'] . "<br />";
echo $_POST['email'] . "<br />";
echo $_POST['address'] . "<br />";



$name = $_POST['name'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$inter = $_POST['intr1'];
$inter2 = $_POST['intr2'];
$add = $_POST['address'];
$Provinces = $_POST['Provinces'];
$in;

if ($_POST['intr1']!='' && $_POST['intr2']!=''){
 $in=$_POST['intr1'] . ',' . $_POST['intr2'];

}

if ($_POST['intr1']!='' && $_POST['intr2']==''){
 $in=$_POST['intr1'];

}if ($_POST['intr1']=='' && $_POST['intr2']!='') {
	
 $in=$_POST['intr2'];

}


if (isset($_POST['submit'])) {
    $sql = "INSERT INTO register(name,email,sex,interest,address,provinces) VALUES ('$name','$email','$sex','$in','$add','$Provinces')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();




?>

<center><button class="button" style="vertical-align:middle" name="button" onclick="li1();"><span>Register</span></button> &nbsp;
        <button class="button" style="vertical-align:middle" name="button" onclick="li2();"><span>show register</span></button></center>
<script>
    function li1() {
        window.location='http://angsila.cs.buu.ac.th/~58160407/887371/lab07/register_form.php';
    }
     function li2() {
        window.location='http://angsila.cs.buu.ac.th/~58160407/887371/lab07/show_register.php';
    }
</script>

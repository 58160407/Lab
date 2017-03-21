
<?php
include('db.php');

$query = "SELECT * FROM register";

$result = $conn->query($query);
if (!$result) die($conn->error);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>show_register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
</style>
</head>
<body>

<br>
<div class="container">
  <center><a><b><font COLOR=black size="5">รายชื่อผู้ลงทะเบียน</font></a></b></center>  <br>        
  <table class="table table-bordered" >
    <thead>
      <tr bgcolor="#CCFF99">
        <th><center>#</th>
        <th><center>ชื่อ-นามสกุล</th>
        <th><center>อีเมล์</th>
        <th><center>เพศ</th>
        <th><center>ความสนใจ</th>
        <th><center>ที่อยู่</th>
        <th><center>จังหวัด</th></center>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_array()) { ?>
      <tr bgcolor="#FFFFCC">
        <td><center><?php echo $row['id']; ?></td>
        <td><center><?php echo $row['name']; ?></td>
        <td><center><?php echo $row['email']; ?></td>
        <td><center><?php echo $row['sex']; ?></td>
        <td><center><?php echo $row['interest'];?></td>
        <td><center><?php echo $row['address']; ?></td>
        <td><center><?php echo $row['provinces']; ?></td></center>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
<center><button class="button" style="vertical-align:middle" name="button" onclick="link();"><span> Register </span></button></center>
<script>
    function link() {
        window.location='http://angsila.cs.buu.ac.th/~58160407/887371/lab07/register_form.php';
    }
</script>

<?php  
$conn->close();
?>
</body>
</html>

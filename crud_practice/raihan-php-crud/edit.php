
<?php 
require_once("db.php");

$id = $_GET['id'];
$edit = $con->query("SELECT * FROM student WHERE id=$id")->fetch_assoc();

if(isset($_POST['name'])){
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  //Update student query
  $con->query("UPDATE `student` SET `name`='$name', `phone`='$phone',`email`='$email' WHERE id=$id");
?>;

<script>
  window.location.assign("show.php");
</script>

<?php 
}
?>

<h1 style=" text-align: center;"> CRUD oparetion for practice</h1> <hr>
<body style=" background-color: darkgray;">
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form action="" method="post" class="form-control">
        <input type="text" name="name" value="<?php echo $edit['name'] ?>" class="form-control">
        <input type="text" name="phone" value="<?php echo $edit['phone'] ?>" class="form-control">
        <input type="text" name="email" value="<?php echo $edit['email'] ?>" class="form-control">
        <input type="submit" name="submit" value="submit" class="btn btn-primary p-2 mt-3">
      </form>
    </div>
  </div>
</div>
</body>
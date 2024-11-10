<?php
require_once('db.php');

$id = $_GET['id'];
$edit = $con->query("SELECT * FROM student WHERE id=$id")->fetch_assoc();

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = $con->query("UPDATE `student` SET `name`='$name', `phone`='$phone',`email`='$email' WHERE id=$id");

 
     ?>;
<script>
    window.location.assign("show.php");
</script>

<?php
}
?>;

<h1 class=" text-danger text-center bg-dark p-2 m-3 ">crud opararation practie_2</h1>

<body>
    <div class="container">
         <div class="row">
             <div class="col-md-12">
                  <form action="" method="post" class="form-control">
                    name:
                    <input type="text" name="name" value="<?php echo $edit['name'] ?>"class="form-control">
                    phone:
                    <input type="number" name="phone" value="<?php echo $edit['phone'] ?>"class="form-control">
                    email:
                    <input type="text" name="email" value="<?php echo $edit['email'] ?>"class="form-control">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary p-2 mt-3">
                  </form>
             </div>
         </div>
    </div>
</body>
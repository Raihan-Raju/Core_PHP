<?php
require_once("db.php");
// include("./assets/custom.css");

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];

  $con->query("INSERT INTO student (name, phone, email)VALUES('$name','$phone','$email')");
?>;
<script>
  window.location.assign("show.php");
</script>
<?php
}
?>;
<h1 style=" text-align: center;"> CRUD oparetion for practice</h1> <hr>
<body style=" background-color: darkgray;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <form action="" method="post" class="form-control">
          Name: <input type="text" name="name" class="form-control">
          Phone: <input type="text" name="phone" class="form-control">
          Email: <input type="text" name="email" class="form-control p-2"> <br>
          <input type="submit" name="submit" value="submit" class="btn btn-primary p-2">
        </form>
      </div>
    </div>
  </div>
</body>
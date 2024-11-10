<?php
require_once('db.php');

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $con->query("INSERT INTO student (name, phone, email)VALUE('$name','$phone','$email')");
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
                    <input type="text" name="name" value=""class="form-control">
                    phone:
                    <input type="number" name="phone" value=""class="form-control">
                    email:
                    <input type="text" name="email" value=""class="form-control">
                    <input type="submit" name="submit" value="submit" class="btn btn-primary p-2 mt-3">
                  </form>
             </div>
         </div>
    </div>
</body>
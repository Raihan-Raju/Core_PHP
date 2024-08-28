<!-- <pre> -->
<?php
require_once("db.php");

$show = $con->query("SELECT * FROM student")->fetch_all(MYSQLI_ASSOC);
// print_r($show);

?>;





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show -data</title>
</head>
<body>
<a href="insert.php"><input type="button" value="Add" class="btn btn-primary p-2 mt-3"></a>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered">
                 <tr>
                    <th>SL#</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                 </tr>
                 <?php
                 foreach($show as $id=>$show){?>

                 <tr>
                    <td><?php echo ++$id ?></td>
                    <td><?php echo $show['name'] ?></td>
                    <td><?php echo $show['phone'] ?></td>
                    <td><?php echo $show['email'] ?></td>
                    <td>
                        <a href="edit.php?id= <?php echo $show['id']?>"class="btn btn-primary">Edit</a>
                        <a href="delete.php?id= <?php echo $show['id']?>" onclick="return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                    </td>
                 </tr>

                 
               <?php }?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
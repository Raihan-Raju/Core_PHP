<!-- <pre> -->
<?php
require_once("db.php");

$show = $con->query("SELECT * FROM student")->fetch_all(MYSQLI_ASSOC);
 
// print_r($show);
?>;

<h1 style=" text-align: center;"> CRUD oparetion for practice</h1> <hr>  
<body style="background-color: darkgray;">
 <div class="container">
    <div class="row">
            <div>
               <a href="insert.php" class="btn btn-info p-2 m-2">Add</a>
            </div>
            <div class="col-md-12">
                 <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($show as $k=> $s)
                    {?>
                     <tr>
                     <td><?php echo ++$k?></td>
                     <td><?php echo $s ['name'] ?></td>
                     <td><?php echo $s ['phone'] ?></td>
                     <td><?php echo $s ['email'] ?></td>
                     <td>
                        <a href="edit.php?id= <?php echo $s['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="delete.php?id= <?php echo $s['id'] ?>" onclick="return confirm('are you sure?')" class="btn btn-danger">Delete</a>
                        </td>
                                </tr>
                    

                     <?php }?>
                 </table>
            </div>
    </div>
 </div>
    
</body>

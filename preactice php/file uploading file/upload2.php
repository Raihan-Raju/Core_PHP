  <?php
   if(isset($_POST['btnsubmit'])){
      $tmp_name=$_FILES["myfile"]["tmp_name"];
      $name=$_FILES['myfile']['name'];
      
       copy($tmp_name,"image/".$name);
        
    }
  ?>

      <div style= "text-align: center ; background-color:black";>
         <h1 style="color:white";>File uploading php</h1>

      </div>

  <div style=" width:500px;margin:10px  auto ";>
       <div style="background-color:#BBB3B2";>
       <form action="#" method="post" enctype="multipart/form-data">
      <fieldset>
            <input type="file" name="myfile"><br><br>
            <input type="submit" name="btnsubmit"><br>
      </fieldset>
    </form>

       </div>


    <?php
      if(isset($_POST['btnsubmit'])){

        echo "<img src='image/$name' width='300px'>";
      }
     ?>

  </div> <hr>

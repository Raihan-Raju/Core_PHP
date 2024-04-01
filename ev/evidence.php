<?php 
$db = new mysqli('localhost','root','','testevidence');



if(isset($_POST['btnSubmit'])){
	$mname = $_POST['mname'];
	$contact = $_POST['contact'];
	$adress = $_POST['adress'];
	$db->query(" call add_into_manufac('$mname','$adress','$contact') ");
}

if(isset($_POST['addProduct'])){
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$id = $_POST['manufac'];
	$db->query(" call insert_to_product('$pname','$price','$id') ");
}
?>

<h3>Manufacturer table:</h3>
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="mname">Name</label></td>
			<td><input type="text" name="mname" /></td>
		</tr>
		<tr>
			<td><label for="contact">Contact</label></td>
			<td><input type="text" name="contact" /></td>
		</tr>
		<tr>
			<td><label for="adress">Address</label></td>
			<td><input type="text" name="adress" /></td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" name="btnSubmit" value="submit" /></td>
		</tr>
	</table>
</form>

<h3>Product table:</h3>
<form action="#" method="post">
	<table>
		<tr>
			<td><label for="pname">Name</label></td>
			<td><input type="text" name="pname" /></td>
		</tr>
		<tr>
			<td><label for="price">Price</label></td>
			<td><input type="text" name="price" /></td>
		</tr>
		<tr>
			<td><label for="manufac">Manufacturer Name</label></td>
			<td>
			<select name="manufac">
					<?php 
						$data= $db->query("select * from manufacturerev");
					
						while(list($id,$name) = $data->fetch_row()){
							echo "<option value='$id'>$name</option>";
						}
					?>
				</select>
				
			</td>
		</tr>
		<tr> 
			<td></td>
			<td><input type="submit" name="addProduct" value="submit" /></td>
		</tr>
	</table>
</form>

<h3>View Product</h3>

<table border="1" style="border-collapse: collapse;" > 
<thead>
<tr>
	<th>Id</th>
	<th>Product Name</th>
	<th>price</th>
	<th>Manufacturer id</th>
	<th>Manufacturer Name</th>
	<th>Manufacturer Contact</th>
	<th>Manufacturer Adress</th>
	
 </tr>
</thead>
 <?php
   $show = $db->query("select * from view_product");
   while(list($id,$Name,$price,$Manufacturer_id,$Mname,$Mcontact,$Madress)=$show->fetch_row()){
	echo " <tr>
			<td>$id</td>
			<td>$Name</td>
			<td>$price</td>
			<td>$Manufacturer_id</td>
			<td>$Mname</td>
			<td>$Mcontact</td>
			<td>$Madress</td>
			
	    </tr>";
   }
 ?>
					</table>


					<form action="#" method = "POST">
				<table>
					
					<tr>
						<td><label for="trigger">manufacturer</label></td>
						<td>

                           

						</td>
					</tr>
						<tr>
							<td><input type="submit" name="delbtn" value="delete"></td>
						</tr>
				</table>

		</form>
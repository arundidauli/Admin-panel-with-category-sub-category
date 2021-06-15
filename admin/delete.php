<?php
  include('includes/config.php');

  if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from contacts where id = ".$id;
		$result = mysqli_query($connection, $sql);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
            $dir="uploads/$id";
			$sql = "delete from contacts where id=".$id;
			if(mysqli_query($connection, $sql)){
				 header('location:manage_products.php');
			}
		}
	}
?>
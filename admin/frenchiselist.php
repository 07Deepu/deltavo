
<?php  
session_start();
include('Includes/header.php');
include('Includes/sidebar.php');
include('Includes/navbar.php');
include('db/connection.php');
$limit = 15;  
if (isset($_GET["page"])) {
	$page  = $_GET["page"]; 
	} 
	else{ 
	$page=1;
	};  
$start_from = ($page-1) * $limit;  
$result = mysqli_query($conn,"SELECT * FROM franchise_login ORDER BY id ASC LIMIT $start_from, $limit");
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body> -->
<table class="table table-bordered table-striped">  
<thead>  
<tr>  
<th>SL NO</th>

<!-- <th>Actions</th>
<th>Joining Date</th> -->
<th>FULL NAME</th>
<th>MOBILE</th>
<th>EMAIL ID</th>
<th>JOINING DATE</th>
<th>LAST LOGIN</th>
</tr>  
<thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_array($result)) {  
?>  
            <tr>  
            <td><?php  echo $row['id']; ?></td>
                               
                                <td><?php  echo $row['user_name']; ?></td>
                                <td><?php  echo $row['mobile_number']; ?></td>
                                <td><?php  echo $row['members_id']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['created_date']; ?></td>
                                <td><?php  echo $row['last_login_date']; ?></td>
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>  
<?php  

$result_db = mysqli_query($conn,"SELECT COUNT(id) FROM franchise_login "); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='frenchiselist.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>

</body>
</html>
<?php 
include('Includes/footer.php');
?>
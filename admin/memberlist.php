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
$result = mysqli_query($conn,"SELECT * FROM members_signup ORDER BY id ASC LIMIT $start_from, $limit");
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
<th>id</th>  


                          
                          <th>Full name</th>
                          <th>Current Level</th>
                          <th>Sponsors Id</th>
                          <th>DOB</th>
                           <th>Members Id</th>
                           <th>Mobile</th>
                          <th>Sponsor Name</th>
                           <th>Nominee Name</th>
</tr>  
<thead>  
<tbody>  
<?php  
while ($row = mysqli_fetch_array($result)) {  
?>  
            <tr>  
          <td><?php  echo $row['id']; ?></td>
                               
                               <td><?php  echo $row['full_name']; ?></td>
                               <td><?php  echo $row['current_level']; ?></td>
                               <td><?php  echo $row['tracking_id']; ?></td>
                               <td><?php  echo $row['dob']; ?></td>
                               <td><?php  echo $row['members_id']; ?></td>
                               <td><?php  echo $row['mobile_no']; ?></td>
                               <td><?php  echo $row['tracking_id']; ?></td>
                               <td><?php  echo $row['nominee_name']; ?></td>		
            </tr>  
<?php  
};  
?>  
</tbody>  
</table>  
<?php  

$result_db = mysqli_query($conn,"SELECT COUNT(id) FROM members_signup "); 
$row_db = mysqli_fetch_row($result_db);  
$total_records = $row_db[0];  
$total_pages = ceil($total_records / $limit); 
/* echo  $total_pages; */
$pagLink = "<ul class='pagination'>";  
for ($i=1; $i<=$total_pages; $i++) {
              $pagLink .= "<li class='page-item'><a class='page-link' href='memberlist.php?page=".$i."'>".$i."</a></li>";	
}
echo $pagLink . "</ul>";  
?>

</body>
</html>
<?php 
include('Includes/footer.php');
?>
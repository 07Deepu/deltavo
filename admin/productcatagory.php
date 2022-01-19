
<?php 
session_start();
include('Includes/header.php');
include('Includes/sidebar.php');
include('Includes/navbar.php');
include('db/connection.php');

?>

  <div id="myTable_wrapper" class="dataTables_wrapper no-footer">
    <div class="dataTables_length" id="myTable"><label>Show <select name="myTable" aria-controls="myTable"
                class="">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select> entries</label></div>
    <div id="myTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder=""
                aria-controls="myTable"></label></div>
    <table class="table table-bordered table-striped table-hover dataTable no-footer" id="myTable" role="grid"
        aria-describedby="myTable">
       
		<table class="table table-bordered table-striped table-hover" id="myTable">
		<thead>
			<tr>
			   <th class="text-center" scope="col">S.L</th>
				<th class="text-center" scope="col">CATEGORY NAME</th>	
				<th class="text-center" scope="col">LINKED SUBCATEGORY</th>
				<th class="text-center" scope="col">STATUS</th>
				<th class="text-center" scope="col">CREATED DATE</th>
                <th class="text-center" scope="col">ACTIONS</th>
			</tr>
		</thead>
        <?php

$get_data = "SELECT * FROM category_table ";
$run_data = mysqli_query($conn,$get_data);
$i = 0;
while($row = mysqli_fetch_array($run_data))
{
    $sl = ++$i;
    $category_name= $row['category_name'];
    $status = $row['status'];
    
    $created_date = $row['created_date'];
    

    echo "
    <tr>
    <td class='text-center'>$sl</td>
    <td class='text-left'>$category_name</td>
    <td class='text-left'>$status</td>
    <td class='text-left'></td>
    <td class='text-left'>$created_date</td>

   
    


</tr>
    ";
}

?>
            
</table>
		<form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export Data" />
    </form>
	</div>
<?php
include('Includes/footer.php');
?>			
			
		



			

		

<?php 
session_start();
include('Includes/header.php');
include('Includes/sidebar.php');
include('Includes/navbar.php');
include('db/connection.php');

?>
<a href="pendinglist.php">PENDING LIST<a>  <br>
<a href="approvedlist.php"> APPROVED LIST<a>  <br>
<a href="rejectedlist.php"> REJECTED LIST<a>  <br>
<a href="closedlist.php"> CLOSED LIST<a> 

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
			
				<th class="text-center" scope="col">REQUESTED DATE</th>	
				<th class="text-center" scope="col">TRANSACTION ID</th>
				<th class="text-center" scope="col">FRENCHISE ID</th>
				<th class="text-center" scope="col">REQUEST AMOUNT</th>
        <th class="text-center" scope="col">COMMENTS</th>
				<th class="text-center" scope="col">ACTIONS</th>
			</tr>
		</thead>
		<?php

        	$get_data = "SELECT fcr.updated_date ,fcr.transation_id,fcr.request_amount,fcr.comments,fl.user_name,fl.members_id from franchise_credit_reports fcr , franchise_login fl where fcr.user_id=fl.user_id and fcr.status=3";
        	$run_data = mysqli_query($conn,$get_data);
			$i = 0;
        	while($row = mysqli_fetch_array($run_data))
        	{
            $sl = ++$i;
            $updated_date= $row['updated_date'];
            $transation_id = $row['transation_id'];
            $user_name= $row['user_name'];
            $members_id= $row['members_id'];
            $request_amount= $row['request_amount'];
            $comments= $row['comments'];
    
                echo "
            <tr>
            <td class='text-center'>$sl</td>
            <td class='text-left'>$updated_date</td>
            <td class='text-left'>$transation_id </td>
            <td class='text-left'>$user_name</td>
             <td class='text-left'>$members_id</td>
             <td class='text-left'>$request_amount</td>
             <td class='text-left'>$comments</td>
			
			
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
			
		



			

		

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
               <th class="text-center" scope="col">DATE and TIME</th>	
				<th class="text-center" scope="col">PERFORMANCE BONUS</th>	
				<th class="text-center" scope="col">SPONSER CLUB INCOME</th>
				<th class="text-center" scope="col">LEADERSHIP CLUB INCOME</th>
				<th class="text-center" scope="col">STAR CLUB INCOME</th>
                <th class="text-center" scope="col">DYNAMIC CLUB INCOME</th>
                <th class="text-center" scope="col">TARGET CLUB INCOME</th>
                <th class="text-center" scope="col">ROYAL CLUB INCOME</th>
                <th class="text-center" scope="col">SPECIAL CLUB INCOME</th>
                <th class="text-center" scope="col">TOTAL AMOUNT</th>
                <th class="text-center" scope="col">ADMIN CHARGE</th>
                <th class="text-center" scope="col">TDS CHARGE</th>
                <th class="text-center" scope="col">PAYBAL AMOUNT</th>
                <th class="text-center" scope="col">ACTIONS</th>
			</tr>
		</thead>
        <?php

$get_data = "SELECT * FROM member_payouts";
$run_data = mysqli_query($conn,$get_data);
$i = 0;
while($row = mysqli_fetch_array($run_data))
{
$sl = ++$i;
$created_date= $row['created_date'];
$performance_bonus = $row['performance_bonus'];
$sponsor_club_income= $row['sponsor_club_income'];
$leadership_club_income= $row['leadership_club_income'];
$star_club_income= $row['star_club_income'];
$dynamic_club_income= $row['dynamic_club_income'];
$target_club_income= $row['target_club_income'];
$royal_club_income= $row['royal_club_income'];
$special_club_income= $row['special_club_income'];
$total_amount= $row['total_amount'];
$admin_charge= $row['admin_charge'];
$TDS_charge= $row['TDS_charge'];
$payable_amount= $row['payable_amount'];




    echo "
<tr>
<td class='text-center'>$sl</td>
<td class='text-left'>$created_date</td>
<td class='text-left'>$performance_bonus </td>
<td class='text-left'>$sponsor_club_income</td>
 <td class='text-left'>$leadership_club_income</td>
 <td class='text-left'>$star_club_income</td>
 <td class='text-left'>$dynamic_club_income</td>
 <td class='text-left'>$target_club_income</td>
 <td class='text-left'>$royal_club_income</td>
 <td class='text-left'>$special_club_income</td>
 <td class='text-left'>$total_amount</td>
 <td class='text-left'>$admin_charge</td>
 <td class='text-left'>$TDS_charge</td>
 <td class='text-left'>$payable_amount</td>

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
			
		



			

		
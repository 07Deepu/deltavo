
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
				<th class="text-center" scope="col">GENERATE DATE</th>	
				<th class="text-center" scope="col">REPORT STATUS</th>
                <th class="text-center" scope="col">MEMBERS ID</th>
                <th class="text-center" scope="col">NAME</th>
                <th class="text-center" scope="col">LEVEL</th>
                <th class="text-center" scope="col">BV COUNT</th>
                <th class="text-center" scope="col">BV AMOUNT(IN INR)</th>
                <th class="text-center" scope="col">TDS AMOUNT(IN INR)</th>
                <th class="text-center" scope="col">ADMIN CHARGE (IN INR)</th>
				<th class="text-center" scope="col">TOTAL IN</th>
				<th class="text-center" scope="col">REMARKS</th>
				
			</tr>
		</thead>
			
            
</table>
		<form method="post" action="export.php">
     <input type="submit" name="export" class="btn btn-success" value="Export Data" />
    </form>
	</div>
<?php
include('Includes/footer.php');
?>			
			
		



			

		
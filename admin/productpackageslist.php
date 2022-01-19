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
               <th class="text-center" scope="col">PACKAGE IMAGE</th>	
				<th class="text-center" scope="col">PACKAGE  NAME</th>	
                <th class="text-center" scope="col">PACKAGE CODE</th>	
                <th class="text-center" scope="col">CATEGORY</th>	
			
				<th class="text-center" scope="col">DP(RS)</th>
                <th class="text-center" scope="col">BV(RS)</th>
                <th class="text-center" scope="col">PURCHASE PRICE</th>
                <th class="text-center" scope="col">STOCKS</th>
                <th class="text-center" scope="col">STATUS</th>
				<th class="text-center" scope="col"> DATE</th>
                <th class="text-center" scope="col">ACTIONS</th>
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
	
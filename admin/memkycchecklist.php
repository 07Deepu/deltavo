
<?php 
session_start();
include('Includes/header.php');
include('Includes/sidebar.php');
include('Includes/navbar.php');
include('db/connection.php');

?>
 <a href="mempendingdocument.php">PENDING DOCUMENTS<a>  <br>
 <a href="memverifieddocument.php"> VERIFIED DOCUMENTS <a>  <br>
 <a href="memkycchecklist.php"> CANCEL DOCUMENTS<a>  <br>
<a href="memnotuploaddocument.php"> NOT UPLOADED DOCUMENTS<a> 
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
				<th class="text-center" scope="col">FULL NAME</th>	
				<th class="text-center" scope="col">MOBILE</th>
				<th class="text-center" scope="col">UPLODED TYPE</th>
				
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
			
		



			

		
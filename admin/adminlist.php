<?php 
session_start();
include('Includes/header.php');
include('Includes/sidebar.php');
include('Includes/navbar.php');
include('db/connection.php');

?>


<div class="card-body">
     <div class="table-responsive">
      <div class="table-responsive">
      <?php


                $query = "SELECT * FROM admin_user ";
                $query_run = mysqli_query($conn, $query);
            ?>
            <table class="table table-borderd" id="dataTable" width="100%" cellspacing="0">
                 <thead>
                       <tr>
                          <th>SL NO</th>
                          <th>FULL NAME </th> 
                          <th>MOBILE NO </th>
                          <th>EMAIL</th>
                          <th>JOINING DATE </th>
                          <th>LAST LOGIN</th>
                          <th>Edit</th>
                          <th>Delete</th>
                       </tr>
                </thead>
                 <tbody>
                 <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['user_name']; ?></td>
                                <td><?php  echo $row['mobile_number']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['created_date']; ?></td>
                                <td><?php  echo $row['last_login_date']; ?></td>
                             
                                
                                <td>
                                    <form action="register_edit.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>

<?php 
include('Includes/footer.php');
?>




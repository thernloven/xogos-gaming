<?php include "includes/sidebar.php" ?>
<?php include "includes/navbar.php"; ?>
<div class="content">
<div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header">
                <h4 class="card-title"> All Teachers</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table tablesorter">
                        <thead class="text-primary">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th class="text-right">Edit</th>
                                <th class="text-right">Delete</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        
                        $query = "SELECT * FROM users WHERE user_role = 'teacher' ORDER BY user_id DESC ";
                        $select_student = mysqli_query($connection, $query);
                
                        while ($row = mysqli_fetch_assoc($select_student)) {
                        $user_id   = $row['user_id'];
                        $firstname = $row['firstname'];
                        $lastname  = $row['lastname'];

                        echo "<tr>";
                            echo "<td>$user_id</td>";
                            echo "<td>$firstname $lastname</td>";
                            echo "<td class='text-right'><a href='students.php?source=edit_student&edit_student={$user_id}'>Edit</a></td>";  
                            echo "<td class='text-right'><a onClick=\"javascript: return confirm('Are you sure you want to delete?'); \"href='cams.php?delete={$user_id}'>Delete</a></td>";  
                            echo "</tr>";
                        }
                        
                        ?>
                   </tbody>
                   </table>

                   <?php 
                   
                   if(isset($_GET['delete'])) {

                    $client_id = $_GET['delete'];

                    $query = "DELETE FROM users WHERE user_id = {$user_id}";
                    $delete_query = mysqli_query($connection, $query);
                     update_kids_count();
        update_kids_count_byteacher();
                    header("Location: users.php");


                   }
                   
                   
                   ?>

                </div>
              </div>
            </div>
          </div>
</div>
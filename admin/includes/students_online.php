<div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Students Online</h5>
                <h3 class="card-title"><i class="tim-icons icon-chat-33 text-info"></i><?php echo users_online();?></h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                  <div class="row">

                  <?php 

                        global $connection;   
                            
                        $session = session_id();
                        $time = time();
                        $online_firstname = $_SESSION['firstname'];
                        $time_out_in_secound = 30;
                        $time_out = $time - $time_out_in_secound;
                        
                        $query = "SELECT * FROM users_online WHERE time > '$time_out' ";
                        $select_online_parent = mysqli_query($connection, $query);
                
                        while ($row = mysqli_fetch_assoc($select_online_parent)) {
                        $online_firstname = $row['online_firstname'];
                        $online_img       = $row['online_img'];
                        
                        echo "<div class='col-lg-4 col-md-4 col-sm-4 col-4 text-center'>
                        <img style='border-radius:100%; border: 2px solid #74FFBA; height:80px' src='assets/img/parents/$online_img' alt=''>
                          <h5>$online_firstname</h5>
                        </div>";
                        }


                        ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
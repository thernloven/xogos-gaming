<div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category">Highest Progess</h5>
                <h3 class="card-title"><i class="tim-icons icon-bullet-list-67 text-success"></i> Top Players</h3>
              </div>
              <div class="card-body">
                <div class="chart-area">
                <table class="table">
                <thead class="text-primary">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th class="text-right">Score</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php 
                        
                        $query = "SELECT * FROM users WHERE user_role = 'student' ORDER BY score DESC ";
                        $select_student = mysqli_query($connection, $query);
                
                        while ($row = mysqli_fetch_assoc($select_student)) {
                        $user_id   = $row['user_id'];
                        $firstname = $row['firstname'];
                        $lastname  = $row['lastname'];
                        $score     = $row['score'];

                        echo "<tr>";
                            echo "<td>$user_id</td>";
                            echo "<td>$firstname $lastname</td>";
                            echo "<td class='text-right'>$score</td>";    
                            echo "</tr>";
                        }
                        
                        ?>
                   </tbody>
</table>
                </div>
              </div>
            </div>
          </div>
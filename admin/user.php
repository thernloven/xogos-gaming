<?php include "includes/header.php" ?>
<?php include "includes/sidebar.php" ?>
<?php include "includes/navbar.php" ?>

<?php

if(isset($_SESSION['user_id'])) {

    $the_user_id = $_SESSION['user_id'];

    $query = "SELECT * FROM users WHERE user_id = '{$the_user_id}' ";

    $select_user_profile_query = mysqli_query($connection, $query);

    while($row = mysqli_fetch_array($select_user_profile_query)) {

      $user_id   = $row['user_id'];
      $parent_id = $row['parent_id'];
      $firstname = $row['firstname'];
      $lastname  = $row['lastname'];
      $img       = $row['img'];
      $email     = $row['email'];
      $phone     = $row['phone'];
      $username  = $row['username'];
      $password  = $row['password'];
      $address   = $row['address'];
      $city      = $row['city'];
      $zip       = $row['zip'];


    }

    
}

if(isset($_POST['edit_user'])) {
    
  $firstname = $_POST['firstname'];
  $lastname  = $_POST['lastname'];
  $email     = $_POST['email'];
  $phone     = $_POST['phone'];
  $username  = $_POST['username'];
  $password  = $_POST['password'];
  $address   = $_POST['address'];
  $city      = $_POST['city'];
  $zip       = $_POST['zip'];

  $img      = $_FILES['img']['name'];
  $img_temp = $_FILES['img']['tmp_name'];

    move_uploaded_file($img_temp, "assets/img/users/$img");

    if(empty($img)) {
        
        $query = "SELECT * FROM users WHERE user_id = '{$the_user_id}' ";
        $select_image = mysqli_query($connection,$query);
            
        while($row = mysqli_fetch_array($select_image)) {
            
          $img = $row['img'];
        
        }
        
        
}

if(!empty($password)) {

  $query_password = "SELECT password FROM users WHERE user_id = '{$the_user_id}' ";
  $get_user_query = mysqli_query($connection, $query_password);
  confirmQuery($get_user_query);

  $row = mysqli_fetch_array($get_user_query);

  $db_password = $row['password'];


  if($db_password != $password) {

    $hashed_password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

  }


    

        $query = "UPDATE users SET ";
        $query .= "firstname      = '{$firstname}', ";
        $query .= "lastname       = '{$lastname}', ";
        $query .= "lastname       = '{$lastname}', ";
        $query .= "img            = '{$img}', ";
        $query .= "email          = '{$email}', ";
        $query .= "phone          = '{$phone}', ";
        $query .= "username       = '{$username}', ";
        $query .= "password       = '{$password}', ";
        $query .= "address        = '{$address}', ";
        $query .= "city           = '{$city}', ";
        $query .= "zip            = '{$zip}' ";
        $query .= "WHERE user_id  = '{$the_user_id}' ";
    
        $edit_user_query = mysqli_query($connection, $query);
    
        confirm($edit_user_query);
        
        $message = "Profile Updated!";
          update_kids_count();
    update_kids_count_byteacher();

        header("refresh:2;url=user.php");

        }

      } else {

        $message = "";

        } 

       




?>

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Profile</h5>
                <h3 class="text-center" style="color:green";> <?php echo $message ?> </h3>
              </div>
              <div class="card-body">

                  <!-- ADD PARENT MODAL -->
                  <?php if(is_parent()): ?>
                  <?php include "includes/add_extra_parent.php" ?>
                  <div class="form-group">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenterNewParent">Add Parent</button>
                  </div>
                  <?php endif ?>

                  <!-- ----------------- -->
                  <form action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <img style="height:100px; width:100px" class="avatar border-gray" src="assets/img/users/<?php echo $img;?>" alt='..'>
                        <input type="file" class="form-control" name="img" value="<?php echo $img; ?>">
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-2 pr-md-1">
                      <div class="form-group">
                        <label>Parent ID</label>
                        <input type="text" class="form-control" placeholder="Parent ID" name="parent_id" value="<?php echo $parent_id; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-5 pr-md-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $username; ?>" readonly>
                      </div>
                    </div>
                    <div class="col-md-5 px-md-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password" value="<?php echo $password; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $email; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 px-md-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="Number" name="phone" value="<?php echo $phone; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="firstname" value="<?php echo $firstname; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lastname" value="<?php echo $lastname; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="address" value="<?php echo $address; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" name="city" value="<?php echo $city; ?>">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="number" class="form-control" placeholder="ZIP Code" name="zip" value="<?php echo $zip; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-primary" name="edit_user" value="Update Profile">
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      <?php include "includes/footer.php" ?>
      
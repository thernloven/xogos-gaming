<?php include "includes/reg_header.php" ?>

<?php

if(isset($_POST['add_student'])) {

    $firstname  = $_POST['firstname'];
    $lastname   = $_POST['lastname'];
    $email      = $_POST['email'];
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $address    = $_POST['address'];
    $city       = $_POST['city'];
    $zip        = $_POST['zip'];

    $img      = $_FILES['img']['name'];
    $img_temp = $_FILES['img']['tmp_name'];

    move_uploaded_file($img_temp, "assets/img/users/$img");


    if(!empty($username) && !empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) ) {

    $firstname = mysqli_real_escape_string($connection, $firstname);
    $lastname  = mysqli_real_escape_string($connection, $lastname);
    $email     = mysqli_real_escape_string($connection, $email);
    $username  = mysqli_real_escape_string($connection, $username);
    $password  = mysqli_real_escape_string($connection, $password);
    $address   = mysqli_real_escape_string($connection, $address);
    $city      = mysqli_real_escape_string($connection, $city);
    $zip       = mysqli_real_escape_string($connection, $zip);

    $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12) );

    $query  = "INSERT INTO users(firstname, lastname, img, email, username, password, address, city, zip, student_id, user_role) ";
    $query .= "VALUES('{$firstname}', '{$lastname}', '{$img}', '{$email}', '{$username}', '{$password}', '{$address}', '{$city}', '{$zip}', '{$_SESSION['parent_id']}', 'student' ) ";
    $register_student_query = mysqli_query($connection, $query);

    if(!$register_student_query) {
        die("QUERY FAILED" . mysqli_error($connection) . '' . mysqli_errno($connection));
    }
    
    update_kids_count();
    update_kids_count_byteacher();
   
    $message = "Your registration was successful, returing to login...";

  } else {

    $message = "Fields cannot be empty";

  }

  header("refresh:2;url=../includes/login.php");

} else {
   $message = "";
}

// UPDATE KIDS COUNT

if(isset($_SESSION['add_student'])) {
  
  $the_user_id = $_SESSION['user_id'];
  $kids_count  = $_SESSION['kids_count'];
  
      $query = "UPDATE users SET kids_count = kids_count + 1 WHERE user_id = '{$the_user_id}' ";
  
      $edit_user_query = mysqli_query($connection, $query);
  
      confirm($edit_user_query);
      update_kids_count();
    update_kids_count_byteacher();

      }

?>

<style>
    .content {
        padding:50px;
    }
</style>

      <!-- End Navbar -->
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Register New Kid</h5>
                <h3 class="text-center" style="color:green";> <?php echo $message ?> </h3>
              </div>
              <div class="card-body">
                  <form action="" method="post" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <img style="height:100px; width:100px" class="avatar border-gray" src="assets/img/users/user_image.png" alt='..'>
                        <input type="file" class="form-control" name="img">
                      </div>
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" placeholder="Username" name="username">
                      </div>
                    </div>
                    <div class="col-md-6 px-md-1">
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email">
                      </div>
                    </div>
                    <div class="col-md-6 px-md-1">
                      <div class="form-group">
                        <label>Phone Number</label>
                        <input type="text" class="form-control" placeholder="Number" name="phone">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control" placeholder="First Name" name="firstname">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control" placeholder="Last Name" name="lastname">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Address" name="address">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 pr-md-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" name="city">
                      </div>
                    </div>
                    <div class="col-md-6 pl-md-1">
                      <div class="form-group">
                        <label>Postal Code</label>
                        <input type="number" class="form-control" placeholder="ZIP Code" name="zip">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <a href="index.php">
                    <input type="submit" class="btn btn-primary" name="add_student" value="Register Kid">
                    </a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

      <?php include "includes/footer.php" ?>
      
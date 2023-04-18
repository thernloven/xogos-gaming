<?php include "header.php" ?>

<?php

if(isset($_POST['add_user'])) {

    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $phone     = $_POST['phone'];
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $address   = $_POST['address'];
    $city      = $_POST['city'];
    $zip       = $_POST['zip'];


    if(!empty($username) && !empty($firstname) && !empty($lastname) && !empty($email) && !empty($password) ) {

    $firstname = mysqli_real_escape_string($connection, $firstname);
    $lastname  = mysqli_real_escape_string($connection, $lastname);
    $email     = mysqli_real_escape_string($connection, $email);
    $phone     = mysqli_real_escape_string($connection, $phone);
    $username  = mysqli_real_escape_string($connection, $username);
    $password  = mysqli_real_escape_string($connection, $password);
    $address   = mysqli_real_escape_string($connection, $address);
    $city      = mysqli_real_escape_string($connection, $city);
    $zip       = mysqli_real_escape_string($connection, $zip);

    $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12) );

    $query  = "INSERT INTO users(firstname, lastname, email, phone, username, password, address, city, zip, user_role, parent_id, teacher_id, admin_id) ";
    $query .= "VALUES('{$firstname}', '{$lastname}', '{$email}', '{$phone}', '{$username}', '{$password}', '{$address}', '{$city}', '{$zip}', 'parent', RAND()*(999-1)+5, RAND()*(999-1)+5, RAND()*(999-1)+5 ) ";
    $register_parent_query = mysqli_query($connection, $query);

    if(!$register_parent_query) {
        die("QUERY FAILED" . mysqli_error($connection) . '' . mysqli_errno($connection));
    }
    $message = "Your registration was successful";

  } else {

    $message = "Fields cannot be empty";

  }

  header("refresh:2;url=http://localhost:8888/web-development/xogos-gaming/includes/success.php");

} else {
   $message = "";
}

?>

<style>
  body {
    background-color: #1E1E2E;
    font-family: "Poppins";
    color:white;
  }

  h3, h5 {
    font-weight: 300 !important;
  }

  input {
    background-color: #27293D !important;
    border: 1px solid #C153ED !important;
    color: white !important;
  }

  label {
    color: #e5e5e5 !important;
  }

  .form-label {
    margin-top:0.5rem !important;
  }

</style>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row justify-content-center align-items-center h-100">
      <div class="col-12 col-lg-9 col-xl-7" style="padding-bottom: 50px;">
        <div class="card shadow-5-strong card-registration" style="border-radius: 15px; border:solid 1px; border-color: #C153ED; background-color: #27293D">
          <div class="card-body p-4 p-md-5">
          <h6 class="text-center" style="color:green";> <?php echo $message ?> </h6>
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Register</h3>
            <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Personal Information</h5>
            
            <form method="post" enctype="multipart/form-data">

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="firstname" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label shadow-5-strong" for="firstName">First Name</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="lastname" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Last Name</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="email" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Email</label>
                  </div>

                </div>
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="phone" id="lastName" class="form-control form-control-lg" />
                    <label class="form-label" for="lastName">Phone Number</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-12 mb-4">

                  <div class="form-outline">
                    <input type="text" name="address" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Address</label>
                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="city" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">City</label>
                  </div>

                </div>

                <div class="col-md-6 mb-4">

                  <div class="form-outline">
                    <input type="text" name="zip" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">ZIP</label>
                  </div>

                </div>
              </div>

              <h5 class="mb-4 pb-2 pb-md-0 mb-md-5">Login Information</h5>

              <div class="row">
                <div class="col-md-4 mb-5">

                  <div class="form-outline">
                    <input type="text" name="username" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Username</label>
                  </div>

                </div>

                <div class="col-md-4 mb-5">

                  <div class="form-outline">
                    <input type="password" name="password" id="firstName" class="form-control form-control-lg" />
                    <label class="form-label" for="firstName">Password</label>
                  </div>

                </div>
              </div>

              <div class="row">
              <div class="mt-4 pt-2">
                <input style="background: rgb(223,78,204);
                background: linear-gradient(90deg, rgba(223,78,204,1) 0%, rgba(223,78,204,1) 35%, rgba(192,83,237,1) 62%); border:none;" class="btn btn-primary btn-lg" type="submit" name="add_user" value="Register" />
              </div>

                <div class="ml-auto mr-auto" style="margin-top: 0.5rem";>
                  <a href="login.php">Or Login</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include "header.php" ?>


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
        <div class="card shadow-2-strong card-registration" style="border-radius: 15px; border:solid 1px; border-color: #C153ED; background-color: #27293D">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Login</h3>
            <form method="post" action="login_db.php">

              <div class="row">

                <div class="col-md-4 mb-4">

                    <div class="mt-4 pt-2" style="text-align:center;">
                    <a href="" style="background: rgb(223,78,204);
                        background: linear-gradient(90deg, rgba(223,78,204,1) 0%, rgba(223,78,204,1) 35%, rgba(192,83,237,1) 62%); border:none;" class="btn btn-primary btn-lg">Student</a>
                    </div>

                    

                </div>

                <div class="col-md-4 mb-4" style="text-align:center;">

                    <div class="mt-4 pt-2">
                    <a href="" style="background: rgb(223,78,204);
                        background: linear-gradient(90deg, rgba(223,78,204,1) 0%, rgba(223,78,204,1) 35%, rgba(192,83,237,1) 62%); border:none;" class="btn btn-primary btn-lg">Parent</a>
                    </div>

                </div>

                <div class="col-md-4 mb-4" style="text-align:center;">

                    <div class="mt-4 pt-2">
                    <a href="" style="background: rgb(223,78,204);
                        background: linear-gradient(90deg, rgba(223,78,204,1) 0%, rgba(223,78,204,1) 35%, rgba(192,83,237,1) 62%); border:none;" class="btn btn-primary btn-lg">Teacher</a>
                    </div>

                </div>

              </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
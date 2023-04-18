<!--============================
=            Footer            =
=============================-->
<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <?php 
                        
          $query = "SELECT * FROM footer_content";
          $select_menu = mysqli_query($connection, $query);
        
        
          while ($row = mysqli_fetch_assoc($select_menu)) {
          $footer_id = $row['footer_id'];
          $text      = $row['text'];
          $logo      = $row['logo'];
        
          echo "
          <a href='index.php'><img src='admin/images/$logo' alt='Logo'></a>
          <p style='color:white !important;' class='alt-color'>$text</p>
          ";
        
          }
          ?>
          <!-- description -->
                    <!-- terms list -->
          <ul class='terms-list list-inline'>

          <?php 
                        
                        $query = "SELECT * FROM footer_menu_left";
                        $select_menu = mysqli_query($connection, $query);
                      
                      
                        while ($row = mysqli_fetch_assoc($select_menu)) {
                        $footer_left_id = $row['footer_left_id'];
                        $menu      = $row['menu'];
                        $link      = $row['link'];
                      
                        echo "
                        <li class='list-inline-item'><a href='$link'>$menu</a></li> ";
                      
                        }
                        ?>

			<!-- <li class="list-inline-item"><a href="faq.html">FAQ</a></li>			 -->
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>

          <?php 
                        
	$query = "SELECT * FROM footer_menu";
	$select_menu = mysqli_query($connection, $query);


	while ($row = mysqli_fetch_assoc($select_menu)) {
	$footer_id = $row['footer_id'];
	$menu      = $row['menu'];
  $link      = $row['link'];

	echo "<ul>
  <li><a href='$link'>$menu</a></li>";

	}
	?>

          
			<li class="list-inline-item"><a rel="nofollow" href="https://thernloven.com/">Powered By thernloven</li>			
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4></h4>
          <ul>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7">
        <!-- App promotion -->
        <!-- <div class="block-2 app-promotion">
          <a href="">
            <img src="img/footer/phone-icon.png" alt="mobile-icon">
          </a>
          <p>Get the Dealsy Mobile App and Save more</p>
        </div> -->
        <!-- <div class="block-2 discount-coupon">
          <p><a href="">Join Dealsy</a> and Submit your Coupon with <a href="">124563 user</a> daily</p>
        </div> -->
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-12">
        <!-- Copyright -->
        <div class="copyright">
          <!-- <p>© 2017 Copyright Dealsy Bootstrap Template 
			<a class="privacy-link" href="privacy-policy.html">Do Not Sell My Personal Information</a>.</p> -->
        </div>
      </div>
      <div class="col-sm-6 col-12">
        <!-- Social Icons -->
        <ul class="social-media-icons text-right">
          <li><a class="fa fa-facebook" href=""></a></li>
          <li><a class="fa fa-twitter" href=""></a></li>
          <li><a class="fa fa-pinterest-p" href=""></a></li>
          <li><a class="fa fa-vimeo" href=""></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href=""><i class="fa fa-angle-double-up"></i></a>
  </div>
</footer>
<!-- CUPON MODAL -->
<!-- <div class="modal fade cupon-modal" id="cupon" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <img src="img/popular-offer/popular-offer-1.png" alt="Store Icon">
        <h4>Free Shipping on orders over $100</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h6>Copy this promo code and paste when you checkout</h6>
        <p class="coupon-code">eats-s79y5eqyueMHZ</p>
        <form action="#">
          <div class="form-group">
            <label for="">Did it work?</label>
            <div class="btn-group">
              <div class="btn btn-transparent">
                <i class="fa fa-smile-o"></i>
              </div>
              <div class="btn btn-transparent">
                <i class="fa fa-frown-o"></i>
              </div>
              <div class="btn btn-transparent">
                <i class="fa fa-star"></i>
              </div>
            </div>
            <a href="#" class="btn btn-transparent">Back to store</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div> -->
<!-- JAVASCRIPTS -->
<script src="plugins/jquery/jquery.min.js"></script>
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="plugins/tether/js/tether.min.js"></script>
<script src="plugins/raty/jquery.raty-fa.js"></script>
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/selectbox/jquery.selectbox-0.1.3.min.js"></script>
<script src="plugins/owl-carousel/owl.carousel.min.js"></script>
<script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
<script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.min.js"></script>
<script src="plugins/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="plugins/rd-nav-bar/jquery.rd-navbar.js"></script>
<script src="plugins/gdpr/core.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
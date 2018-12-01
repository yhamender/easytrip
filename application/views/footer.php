<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<footer class="py-5 bg-green">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <h3>Contact Details</h3>
        <p><i class="fa fa-flash"></i> Indirapuram Shakti Khand Ghaziabad</p>
        <p><i class="fa fa-phone"></i> Contact : 8745938938, 8745948948</p>
        <p> <i class="fa fa-cube"></i> easytrip@gmail.com |
          easytrip24@gmail.com</p>
      </div>
      <div class="col-md-3">
        <h3>About Us</h3>
        <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p>
      </div>
      <div class="col-md-3">
        <h3>Follow Us</h3>
        <ul class="list-inline">
          <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
          <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
        </ul>
      </div>
    </div>
  </div>
  <div style="background-color:#4a6356!important; height:50px; margin-top:20px; padding: 16px; color:#fff;">
    <div class="container">
      <div class="col-md-12">
        <div class="copyright">Copyrights © 2017 <a href="#">Studiotesseract</a>. All Rights Reserved</div>
        <ul class="footer-nav">
          <li><a href="#">Privacy Policy &nbsp;&nbsp;&nbsp;  |</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>/frontend-assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/frontend-assets/vendor/jquery/jquery.js"></script>
<script>
	$(document).ready(function(){
	 var arrImage=["<?php echo base_url(); ?>/frontend-assets/images/banner1.jpg"];
	 for(iData=0;iData<arrImage.length;++iData){
	   $(".banner").css("background","url('"+arrImage[iData]+"')");
	    $(".banner").css("background-size","cover");
	 }
	}); 
	</script>
</body></html>
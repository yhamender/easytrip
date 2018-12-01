<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view("header"); ?>
<div class="container">
  <div class="row top-12">
    <div class="col-md-12">
      <h1><strong>Member <span>Login </span></strong></h1>
    </div>
    <div class="col-md-6 offset-3">
	  <div class="form-group">
        <label>Email-Id:</label>
        <input type="text" name="email_id" id="email_id" class="form-control" placeholder="Email-Id">
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="text" name="password" id="password" class="form-control" placeholder="Password">
      </div>
      
      <button class="btn btn-default btn-block register-btn" name="submit">Member Registration</button>
      <br/>
    </div>
  </div>
</div>
<?php $this->load->view("footer"); ?>
<style type="text/css">
.form-control{
	margin-bottom:-5px!important;
}
</style>

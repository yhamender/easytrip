<section class="content-header">
  <h1> <?php echo $heading; ?> </h1>
</section>
<section class="content">
  <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Change Settings</h3>
    </div>
    <div class="box-body"> <?php echo form_open(base_url('admin/setting/changePassword'),array('id'=>'frmchangePassword')); ?>
      <div class="form-inline">
        <label> Email-Id: </label>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="text" class="form-control" id="email_id" name="email_id" placeholder="Email-Id">
      </div>
      <div class="form-inline">
        <label> Old-Password: </label>
        &nbsp;&nbsp;
        <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Old-Password">
      </div>
      <div class="form-inline">
        <label> New-Password: </label>
        <input type="password" class="form-control" id="new_password" name="new_password" placeholder="New-Password">
      </div>
      <div class="form-inline">
        <button class="btn btn-primary" type="submit"><i class="fa fa-plus"></i> Saved Changes</button>
      </div>
      <?php echo form_close(); ?> </div>
  </div>
</section>
<style type="text/css">
.form-inline input {
    width: 60%!important;
    display: block;
    margin-left: 12px;
}
.form-inline{
	margin-top:12px;
}
</style>

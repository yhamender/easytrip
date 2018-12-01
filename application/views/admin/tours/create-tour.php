<section class="content-header">
  <h1> <?php echo $heading; ?> </h1>
</section>
<section class="content">
  <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title"><?php echo $heading; ?></h3>
    </div>
    <div class="box-body" ng-app="tours" ng-controller="createTourContoller">
      <div class="clearfix">&nbsp;</div>
      <?php if($this->session->flashdata('status')==1){ ?>
      <div class="alert alert-success">
        <p><i class="fa fa-info-circle"></i> <?php echo $this->session->flashdata('msg'); ?></p>
      </div>
      <?php }elseif($this->session->flashdata('status')==0 && $this->session->flashdata('status')!="") { ?>
      <div class="alert alert-danger">
        <p><i class="fa fa-info-circle"></i> <?php echo $this->session->flashdata('msg'); ?></p>
      </div>
      <?php } ?>
      <div class="col-md-9"> <?php echo form_open_multipart(base_url("admin/tours/createTour"),array("id"=>"frmCreatetour")); ?>
         <div class="form-horizontal">
          <label>Tour Pics: <strong class="text-danger">*</strong></label>
          <input type="file" name="tour_image" class="form-control" ng-model="tour_pic" accept="image/*" />
          <span class="tooltips" rel="tooltip" title="Please Add The Tour Pic">?</span> </div>
         <div class="form-horizontal">
          <label>Tour Title: <strong class="text-danger">*</strong></label>
          <input type="text" name="tour_title" id="tour_title" placeholder="Tour Title" class="form-control" ng-model="tour_title" />
          <span class="tooltips" rel="tooltip" title="Please Enter The Tour Title">?</span> </div>
         <div class="form-horizontal">
          <label>Description: <strong class="text-danger">*</strong></label>
          <input type="text" name="description" id="description" placeholder="Description" class="form-control" ng-model="description" />
          <span class="tooltips" rel="tooltip" title="Please Enter The Tour Description">?</span> </div>
         <div class="form-horizontal">
          <label>Operator: <strong class="text-danger">*</strong></label>
          <input type="text" name="operator" id="operator" placeholder="Operator" class="form-control" ng-model="operator"  />
          <span class="tooltips" rel="tooltip" title="Please Enter The Operator Name">?</span> </div>
         <div class="form-horizontal">
          <label>Tour Type: <strong class="text-danger">*</strong></label>
          <input type="text" name="tour_type" id="tour_type" placeholder="Tour Type" class="form-control" ng-model="tour_type" />
          <span class="tooltips" rel="tooltip" title="Please Select The Tour Type">?</span> </div>
         <div class="form-horizontal">
          <label>Start Location: <strong class="text-danger">*</strong></label>
          <input type="text" name="start_location" id="start_location" placeholder="Tour Title" class="form-control" ng-model="start_location" />
          <span class="tooltips" rel="tooltip" title="Please Enter The Tour Start location">?</span> </div>
         <div class="form-horizontal">
          <label>End Location: <strong class="text-danger">*</strong></label>
          <input type="text" name="end_location" id="end_location" placeholder="End Location" class="form-control" ng-model="end_location" />
          <span class="tooltips" rel="tooltip" title="Please Enter The Tour End Location">?</span> </div>
         <div class="form-horizontal">
          <label>Start Date: <strong class="text-danger">*</strong></label>
          <input type="text" name="start_date" id="start_date" placeholder="Start Date" class="form-control" ng-model="start_date" />
          <span class="tooltips" rel="tooltip" title="Please Enter The Tour End Location">?</span> </div>
         <div class="form-horizontal">
          <label>Tour Duration: <strong class="text-danger">*</strong></label>
          <input type="text" name="tour_duration" id="tour_duration" placeholder="Tour Duration" class="form-control" ng-model="tour_duration" />
          <span class="tooltips" rel="tooltip" title="Please Enter The Tour Duration">?</span> </div>
         <div class="form-horizontal">
          <button class="btn btn-success pull-right button1 btn-flat"><i class="fa fa-refresh"></i> Reset Tour</button>
          <button class="btn btn-success pull-right button2 btn-flat" type="submit"><i class="fa fa-arrow-right"></i> Create New Tour</button>
        </div>
        <?php echo form_close();  ?> </div>
    </div>
  </div>
  </div>
</section>
<style type="text/css">
.form-horizontal{ margin-bottom:12px;}
.form-horizontal label{ width:15%;}
.form-horizontal input{ display:inline!important; width:80%;}
.button1{ margin-left:-106px;}
.button2{ margin-right:112px;}
.tooltips{ background:#ccc!important; padding:4px 10px!important;
left:769px; z-index: 10000000; color: #000; border-radius:50px; cursor:pointer; font-weight:900; top:2px;}
</style>
<script src="<?php echo base_url(); ?>assets/angular.js"></script>
<script src="<?php echo base_url(); ?>assets/easytrip-js.js"></script>

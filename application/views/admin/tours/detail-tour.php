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
      <div class="col-md-9">
	   <?php foreach($list_tours as $list_tour){?>
	   <img src="<?php echo base_url(); ?>/uploads/tour-images/<?php echo $list_tour->tour_image; ?>" class="img-circle img-thumbnail" style="width:255px;" />
	   <h3><?php echo $list_tour->tour_title; ?></h3>
	   <p><strong>Description:</strong> <?php echo $list_tour->description;  ?></p>
       <p><strong>Operator:</strong> <?php echo $list_tour->operator;  ?></p>
       <p><strong>Tour Type:</strong> <?php echo $list_tour->tour_type;  ?></p>
       <p><strong>Start Location:</strong> <?php echo $list_tour->start_location;  ?></p>
       <p><strong>End Location:</strong> <?php echo $list_tour->end_location;  ?></p>
       <p><strong>Start Date:</strong> <?php echo $list_tour->start_date;  ?></p>
	   <p><strong>Duration:</strong> <label class="label label-success"><?php echo $list_tour->tour_duration." days";  ?></label></p>
	   <?php } ?>
      </div>
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

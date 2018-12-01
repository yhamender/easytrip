<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->load->view("header"); ?>
<div class="clearfix">&nbsp;</div>
<div class="container-fluid banner">
  <div class="col-md-6 offset-3 text-center" style="padding-top:160px;"> 
     <h1 style="color:#FFFFFF; text-shadow:1px 1px 1px #000;">India Tours and Holidays 2018/2019</h1>
     <input type="text" name="serach" id="serach" class="form-control" />
  </div>
</div>
<div class="container">
  <div class="row">
    <?php 
  foreach($tour_lists as $tour_list){?>
    <div class="col-md-3">
	<div class="well">
	  <span class="trips-block">20% Off<br/> Today</span>
	  <img src="<?php echo base_url(); ?>/uploads/tour-images/<?php echo $tour_list['tour_image']; ?>" style="width:255px;" />
	  <div class="well-content">
      <h4><?php echo $tour_list['tour_title']; ?></h4>
      <strong>Start Location:</strong> <?php echo $tour_list['start_location']; ?><br/>
      <strong>End Location:</strong> <?php echo $tour_list['end_location']; ?><br/>
      <strong>Duration:</strong> <?php echo $tour_list['tour_duration']." days"; ?><br/>
	  <a href="#" class="btn btn-success btn-flat" style="font-family: 'Oswald', sans-serif;">View Tour</a></div></div>
    </div>
    <?php }
 ?>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
<style type="text/css">
.well{ background:#f7f4f4; box-shadow: 0 1px 8px 0 rgba(0,0,0,0.03); margin-bottom:22px;}
.well-content h4{ font-size:12px; font-weight:900;}
.well-content{ padding:12px 12px 12px 12px;}
.trips-block{ position: absolute; top: 10px; right: -8px; font-size: 14px; line-height: 21px;
font-weight: 500; text-transform: uppercase; cursor: default; z-index: 1; background: #da5869;
color: #fff; padding: 5px 10px; border-radius: 3px; text-align: center;font-family: 'Oswald', sans-serif;
}
.btn-success{background: #da5869!important; border:1px solid #da5869;}
</style>
<?php $this->load->view("footer"); ?>

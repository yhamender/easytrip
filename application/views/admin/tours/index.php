<section class="content-header">
  <h1> <?php echo $heading; ?> </h1>
</section>
<section class="content">
  <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title"><?php echo $heading; ?></h3>
    </div>
    <div class="box-body">
      <?php if($this->session->flashdata('status')==1){ ?>
        <div class="alert alert-success">
        <p><i class="fa fa-info-circle"></i> <?php echo $this->session->flashdata('msg'); ?></p>
      </div>
      <?php }elseif($this->session->flashdata('status')==0 && $this->session->flashdata('status')!="") { ?>
        <div class="alert alert-danger">
        <p><i class="fa fa-info-circle"></i> <?php echo $this->session->flashdata('msg'); ?></p>
      </div>
      <?php } ?>
	  <a href="<?php echo base_url("admin/tours/createTourPage"); ?>" class="btn btn-success btn-flat"><i class="fa fa fa-cube"></i> <span>Creating New Tours & Trips </span></a>
	  <div class="clearfix">&nbsp;</div>
        <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>Sr no.</th>
            <th>Tour Title</th>
            <th>Description</th>
            <th>Operator</th>
            <th>Tour Type</th>
            <th>Start-End Location</th>
            <th>Start-End Date</th>
			<th>Duration</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
		<?php 
		$sr_no=0;
		foreach($list_tours as $list_tour){ ?>
          <tr>
            <td><?php echo ++$sr_no;  ?></td>
            <td><?php echo $list_tour->tour_title;  ?></td>
            <td><?php echo $list_tour->description;  ?></td>
            <td><?php echo $list_tour->operator;  ?></td>
            <td style="width:100px;"><?php echo $list_tour->tour_type;  ?></td>
            <td style="width:150px;"><?php echo "( ".$list_tour->start_location."-".$list_tour->end_location." )";  ?></td>
            <td style="width:100px;"><?php echo date("d-M-Y",strtotime($list_tour->start_date));  ?></td>
			 <td style="width:100px;"><span class="label label-success"><?php echo $list_tour->tour_duration; ?> Days<span></td>
            <td style="width:100px;">
			 <a href="<?php echo base_url("admin/tours/singleTourDetail/".$list_tour->id); ?>" class="bth btn-primary btn-sm"><i class="fa fa-eye"></i></a>
			 <a href="<?php echo base_url("admin/tours/editTourPage/".$list_tour->id); ?>" class="bth btn-success btn-sm"><i class="fa fa-edit"></i></a>
			 <a href="<?php echo base_url("admin/tours/deleteTourById/".$list_tour->id); ?>" class="bth btn-warning btn-sm"><i class="fa fa-trash"></i></a>
			</td>
          </tr>
	   <?php } ?>	  
        </tbody>
      </table>
    </div>
  </div>
  <div class="modal fade" id="detailModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header bg-gray">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Registered Users Details</h4>
        </div>
        <div class="modal-body">
          <p><strong>First name:</strong> <span id="first_name"></span></p>
          <p><strong>Last name:</strong> <span id="last_name"></span></p>
          <p><strong>Email-Id:</strong> <span id="email"></span></p>
          <p><strong>Contact:</strong> <span id="contact"></span></p>
          <p><strong>Location:</strong> <span id="location"></span></p>
          <p><strong>Address:</strong> <span id="address"></span></p>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="content-header">
  <h1> <?php echo $heading; ?> </h1>
</section>
<section class="content">
  <div class="box box-default box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Create New Referral Member</h3>
    </div>
    <div class="box-body">
	 <div class="trees">
        <ul>
          <li><a href="#"><strong>(<?php echo $this->session->userdata("ADMIN_ID"); ?>)</strong><br/>
		  <?php $dataLevel=getUniqueByIdColumn("tblmembers","member_name","member_id",1000); echo $dataLevel; ?>
		   </a>
            <ul>
			  <?php $satasTree=display_children(1000, 0);
			  foreach($satasTree as $satasTrees){ ?>
			  <li><a href="#">
			   <strong>(<?php echo $satasTrees->member_id; ?>)</strong><br/>
			   <?php $dataLevel0=getUniqueByIdColumn("tblmembers","member_name","member_id",$satasTrees->member_id); echo $dataLevel0; ?></a>
				<ul>
			     <?php 
				  $satasTree1=display_children($satasTrees->member_id, 0);
				  foreach($satasTree1 as $satasTrees1){  
				  ?>
                  <li><a href="#">
				    <strong>(<?php echo $satasTrees1->member_id; ?>)</strong><br/>
				    <?php $dataLevel1=getUniqueByIdColumn("tblmembers","member_name","member_id",$satasTrees1->member_id); echo $dataLevel1; ?></a>
					 <ul>
			     <?php 
				  $satasTree2=display_children($satasTrees1->member_id, 0);
				  foreach($satasTree2 as $satasTrees2){  
				  ?>
                  <li><a href="#">
				    <strong>(<?php echo $satasTrees2->member_id; ?>)</strong><br/>
				    <?php $dataLevel2=getUniqueByIdColumn("tblmembers","member_name","member_id",$satasTrees2->member_id); echo $dataLevel2; ?></a>
					
					
				  </li>
				  <?php } ?>
                </ul>
					
				  </li>
				  <?php } ?>
                </ul>
			  </li>
			  <?php } ?>
            </ul>
          </li>
        </ul>
      </div>
	
      <!--<div class="trees">
        <ul>
          <li><a href="#"><?php echo $this->session->userdata("ADMIN_ID"); ?></a>
            <ul>
              <li> <a href="#">Child</a>
                <ul>
                  <li> <a href="#">Grand Child</a> </li>
                  <li> <a href="#">Grand Child</a> </li>
                </ul>
              </li>
              <li> <a href="#">Child</a>
                <ul>
                  <li><a href="#">Grand Child</a></li>
                  <li><a href="#">Grand Child</a></li>
                </ul>
              </li>
              <li> <a href="#">Child</a>
                <ul>
                  <li> <a href="#">Grand Child</a> </li>
                  <li> <a href="#">Grand Child</a> </li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
      </div>-->
    </div>
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
/*Now the CSS*/
* {margin: 0; padding: 0;}

.trees ul {
	padding-top: 20px; position: relative;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

.trees li {
	float: left; text-align: center;
	list-style-type: none;
	position: relative;
	padding: 20px 5px 0 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*We will use ::before and ::after to draw the connectors*/

.trees li::before, .trees li::after{
	content: '';
	position: absolute; top: 0; right: 50%;
	border-top: 1px solid #ccc;
	width: 50%; height: 20px;
}
.trees li::after{
	right: auto; left: 50%;
	border-left: 1px solid #ccc;
}

/*We need to remove left-right connectors from elements without 
any siblings*/
.trees li:only-child::after, .trees li:only-child::before {
	display: none;
}

/*Remove space from the top of single children*/
.trees li:only-child{ padding-top: 0;}

/*Remove left connector from first child and 
right connector from last child*/
.trees li:first-child::before, .trees li:last-child::after{
	border: 0 none;
}
/*Adding back the vertical connector to the last nodes*/
.trees li:last-child::before{
	border-right: 1px solid #ccc;
	border-radius: 0 5px 0 0;
	-webkit-border-radius: 0 5px 0 0;
	-moz-border-radius: 0 5px 0 0;
}
.trees li:first-child::after{
	border-radius: 5px 0 0 0;
	-webkit-border-radius: 5px 0 0 0;
	-moz-border-radius: 5px 0 0 0;
}

/*Time to add downward connectors from parents*/
.trees ul ul::before{
	content: '';
	position: absolute; top: 0; left: 50%;
	border-left: 1px solid #ccc;
	width: 0; height: 20px;
}

.trees li a{
	border: 1px solid #ccc;
	padding: 5px 10px;
	text-decoration: none;
	color: #666;
	font-family: arial, verdana, tahoma;
	font-size: 11px;
	display: inline-block;
	
	border-radius: 5px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	
	transition: all 0.5s;
	-webkit-transition: all 0.5s;
	-moz-transition: all 0.5s;
}

/*Time for some hover effects*/
/*We will apply the hover effect the the lineage of the element also*/
.trees li a:hover, .trees li a:hover+ul li a {
	background: #c8e4f8; color: #000; border: 1px solid #94a0b4;
}
/*Connector styles on hover*/
.trees li a:hover+ul li::after, 
.trees li a:hover+ul li::before, 
.trees li a:hover+ul::before, 
.trees li a:hover+ul ul::before{
	border-color:  #94a0b4;
}

/*Thats all. I hope you enjoyed it.
Thanks :)*/
</style>

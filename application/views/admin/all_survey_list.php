

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Survey
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'admin/dashboard';?>">Dashboard</a>
                    </li>
					<li class="active">
                        <i class="fa fa-arrow-circle-right"></i> All Survey List
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
                    <div class="col-lg-9" style="margin:5px 20px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i> List of Survey</h3>
                            </div>
							<div id="rating_result" style="display: none"><?php echo $ratings; ?></div>
                            <?php foreach($surve as $surv){ ?>
                            <div class="panel-body">
								<div style="margin: 0 auto" class="list-group">
								    <?php
										echo '<form method="post" id="turn_off">';
										echo '<div style="min-height: 55px" class="list-group-item">';
										echo '<span class="rating" style="float: right"><div class="rateyoS7" id="rating_'.$surv['id'].'"></div></span>';
										//echo '<span rel="'.$surv["id"].'" style="margin-top: 8px;cursor:pointer" class="badge vendor_turn_on_off">Turn off</span>';
										//echo '<a href="'.base_url().'vendor/view_survey/'.$surv['id'].'" style="margin-top: 8px" class="badge">Edit </a>';
										
										echo '<i style="margin-top: 8px" class="fa fa-arrow-circle-right"></i> '.$surv['title'];
										echo '<input type="hidden" name="id" type="text" class="form-control" value='.$surv['id'].' >';
										echo '<input type="hidden" name="is_active" type="text" class="form-control" value='.$surv['is_active'].' >';
										
										if($surv['is_active']==TRUE)
										{
											echo '<button style="margin: 0px 5px; float:right; background-color: #e7e7e7; " id="submit_addCat_btn" class="btn btn-default" name="submit">Turn Off</button>';
										}
										else
										{
											echo '<button style="margin: 0px 5px; float:right; " id="submit_addCat_btn" class="btn btn-default" name="submit">Turn on</button>';
										}
										echo '<a href="'.base_url().'admin/view_survey/'.$surv['id'].'" style="margin: 0px 5px; float:right; background-color: #D0C8C8;" class="btn btn-default">Details </a>';
										echo '</form>';
										echo '</div>';
								   
								   
										//echo '<div style="min-height: 40px" class="list-group-item">';
										//echo '<span class="rating" style="float: right"><div class="rateyoS7"></div></span>';
										//echo '<a href="" style="margin-top: 8px" class="badge">Turn off</a>';
										//echo '<a href="'.base_url().'admin/view_survey/'.$surv['id'].'" style="margin-top: 8px" class="badge">Details </a>';
										//echo '<i style="margin-top: 8px" class="fa fa-arrow-circle-right"></i> '.$surv['title'];
										//echo '</div>';
								   ?>
								</div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->



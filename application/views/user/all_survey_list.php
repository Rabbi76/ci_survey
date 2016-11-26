

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
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'user/dashboard';?>">Home</a>
                    </li>
					<li class="active">
                        <i class="fa fa-arrow-circle-right"></i> All Survey List
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
                    <div class="col-lg-8 " style="margin: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i> List of Survey</h3>
                            </div>
							<div id="rating_result" style="display: none"><?php echo $ratings; ?></div>
                            
                            <?php foreach($surve as $surv){ ?>
                            <div class="panel-body">
								<div style="margin: 0 auto" class="list-group">
								   <?php
										echo '<div style="min-height: 50px" class="list-group-item">';
										echo '<span class="rating" style="float: right"><div class="rateyoS7" id="rating_'.$surv['id'].'"></div></span>';
										//echo '<a href="" style="margin-top: 8px" class="badge">Turn off</a>';
										foreach($survey as $sur)
										{
											$check=0;
											if($surv['id']===$sur['id'])
											{
												echo '<a href="'.base_url().'user/survey_details/'.$surv['id'].'" style="margin:0px 5px; background-color: #c0C8C8; float:right" class="btn btn-default">View Answer </a>';
												$check=1;
												break;
												
											}
										}
										if($check==0)
										{
											if($surv['is_active']=="0")
											{
												echo '<a style="margin:0px 5px; background-color: #A195C9; float:right" class="btn btn-default">Survey Close </a>';
											}
											else
											{
												echo '<a href="'.base_url().'user/view_survey/'.$surv['id'].'" style="margin:0px 5px; background-color: #D0C8C8; float:right" class="btn btn-default">Answer this Survey Questions </a>';
											}
										}
										echo '<i style="margin-top: 8px" class="fa fa-arrow-circle-right"></i> '.$surv['title'];
										echo '</div>';
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



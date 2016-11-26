

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="page-header">
							Survey Result
                        </h1>
                        <ol class="breadcrumb">
                            <li >
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'vendor/dashboard';?>">Dashboard</a>
                            </li>
							<li class="active">
                        <i class="fa fa-arrow-circle-right"></i> Survey Result
                    </li>
                        </ol>
                    </div>
                </div>
              

                <div class="row">
                    <div class="col-lg-10">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i> List of Survey</h3>
                            </div>
							<div id="rating_result" style="display: none"><?php echo $ratings; ?></div>
                            <?php 
							$count=0;
							foreach($survey as $surv){ 
							$count++;
							?>
                            <div class="panel-body">
								<div style="margin: 0 auto" class="list-group">
								   <?php
										echo '<div style="min-height: 60px" class="list-group-item">';
										echo '<span class="rating" style="float: right"><div class="rateyoS7" id="rating_'.$surv['id'].'"></div></span>';
										echo '<a href="'.base_url().'vendor/survey_summery/'.$surv['id'].'" style="margin:0px 5px; background-color: #c0C8C8; float:right" class="btn btn-default">All Answer Summary</a>';
										echo '<a href="'.base_url().'vendor/user_list_survey/'.$surv['id'].'" style="margin:0px 5px; background-color: #D0C8C8; float:right" class="btn btn-default">Answers By User </a>';
										echo '<i style="margin-top: 8px" class="fa fa-arrow-circle-right"></i> '.$surv['title'];
										echo '</div>';
								   ?>
								</div>
                            </div>
                            <?php } 
							if($count==0)
							{
								echo '<div style="background:#E8E8E9; margin:18px;padding: 25%; width:95%; height:300px;text-align: center;">';
								echo '<h4>You Do not Have any survey yet!!!!!</h4>';
								echo'</div>';
							}
							?>
                        </div>
                    </div>
                </div>

                <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
                <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
                <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
      
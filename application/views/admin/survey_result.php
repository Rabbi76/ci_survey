

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Survey Result <small></small>
                        </h1>
                        <ol class="breadcrumb">
                            <li >
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'admin/dashboard';?>">Dashboard</a>
                            </li>
							<li class="active">
                        <i class="fa fa-arrow-circle-right"></i> Survey Result
                    </li>
                        </ol>
                    </div>
                </div>
              

                <div class="row">
                    <div class="col-lg-10" style="margin:5px 20px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i> List of Survey</h3>
                            </div>
							<div id="rating_result" style="display: none"><?php echo $ratings; ?></div>
                            <?php foreach($surve as $surv){ ?>
                            <div class="panel-body">
								<div style="margin: 0 auto" class="list-group">
								   <?php
										echo '<div style="min-height: 55px" class="list-group-item">';
										echo '<span class="rating" style="float: right"><div class="rateyoS7" id="rating_'.$surv['id'].'"></div></span>';
										echo '<a href="'.base_url().'admin/survey_summery/'.$surv['id'].'" style="margin: 0px 5px;  float:right; background-color: #D0C8C8;"" class="btn btn-default">All Answer Summary</a>';
										echo '<a href="'.base_url().'admin/user_list_survey/'.$surv['id'].'" style="margin: 0px 5px;  float:right; background-color: #95BDC9;" " class="btn btn-default">Answers By User </a>';
										echo '<i style="margin-top: 0px" class="fa fa-arrow-circle-right"></i> '.$surv['title'];
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
      


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small>Statistics Overview</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
							<li class="active">
                        <i class="fa fa-table"></i> Survey Result
                    </li>
                        </ol>
                    </div>
                </div>
              

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i> List of Survey You Can Answer</h3>
                            </div>
                            <?php foreach($survey as $surv){ ?>
                            <div class="panel-body">
								<div style="margin: 0 auto" class="list-group">
								   <?php
										echo '<div style="min-height: 60px" class="list-group-item">';
										echo '<span class="rating" style="float: right"><div class="rateyoS7"></div></span>';
										//echo '<a href="'.base_url().'vendor/survey_summery/'.$surv['id'].'" style="margin-top: 8px" class="badge">All Answer Summery</a>';
										echo '<a href="'.base_url().'vendor/view_survey/'.$surv['id'].'" style="margin-top: 8px" class="badge">Answer this Survey Questions </a>';
										echo '<i style="margin-top: 8px" class="fa fa-user"></i>'.$surv['title'];
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
      
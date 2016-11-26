

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Dashboard
                            </li>
                        </ol>
                    </div>
                </div>
               
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-comments fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
									<div class="huge">
										<?php
											$count=0;
											foreach($surve as $surv)
											{ $count++;}
											echo $count;
										?>
										</div>
										<?php 
										echo '<div><a href="'.base_url().'user/all_survey_list/" style="margin-top: 8px" class="badge">Total Survey</a></div>'; ?>
                                        
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url().'user/all_survey_list/'?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-green">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-wpforms fa-5x"></i>

                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
										<?php
											$count=0;
											foreach($vendors as $ven)
											{ $count++;}
											echo $count;
										?>
										</div>
										<?php 
										echo '<div><a href="'.base_url().'user/vendors/" style="margin-top: 8px" class="badge">Total Vendor</a></div>'; ?>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url().'user/vendors/'?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-yellow">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-users fa-5x" aria-hidden="true"></i>

                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
										<?php
											$count=0;
											foreach($survey as $suv)
											{ 
											if($suv['survey_id']==null)
											{
												
												break;
											}
											else 
											$count++;
											}
											echo $count;
										?>
										</div>
										<?php 
										echo '<div><a href="'.base_url().'user/given_survey_list/" style="margin-top: 8px" class="badge">Given Survey</a></div>'; ?>
                                    </div>
                                </div>
                            </div>
                            <a href="<?php echo base_url().'user/given_survey_list/'?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="panel panel-red">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-support fa-5x"></i>
                                    </div>
									<div class="col-xs-9 text-right">
                                        <div class="huge">
										<?php
											$count=0;
											foreach($message as $mes)
											{ $count++;}
											echo $count;
										?>
										</div>
										<?php 
										echo '<div><a href="'.base_url().'user/message" style="margin-top: 8px" class="badge">Support Tickets!/ Messages</a></div>'; ?>
                                    </div>
                                </div>
                            </div>
							<a href="<?php echo base_url().'user/message/'?>">
                                <div class="panel-footer">
                                    <span class="pull-left">View Details</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->


                <div class="row">
                    
                     <div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i><a href="<?php echo base_url().'user/all_survey_list';?>"> List of survey</a></h3>
                            </div>
                            <?php 
							$count_survey=0;
							foreach($surve as $sur)
							{ 
								if($count_survey<4)
								{?>
								<div class="panel-body">
									<div style="margin: 0 auto" class="list-group">
									   <?php
											
											echo '<i style="margin-top: 8px" class="fa fa-arrow-circle-right"></i>  ' .$sur['title'];
											$count_survey++;
									   ?>
									</div>
								</div>
								<?php 
								
								}
								
							}
							if($count_survey<4)
							{
								for($i=$count_survey;$i<5;$i++)
								{?>
									<div class="panel-body">
									<div style="margin: 0 auto" class="list-group">
									   <?php
											echo '';
											$count_survey++;
									   ?>
									</div>
									</div>
								<?php 
								}
							}?>
                        </div>
                    </div>
					<div class="col-lg-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i><a href="<?php echo base_url().'user/vendors';?>"> List of Vendor</a></h3>
                            </div>
                            <?php 
							$count_ven=0;
							foreach($vendors as $vendor)
							{ 
								if($count_ven<4)
								{?>
								<div class="panel-body">
									<div style="margin: 0 auto" class="list-group">
									   <?php
											
											echo '<i style="margin-top: 8px" class="fa fa-arrow-circle-right"></i>  ' .$vendor['name'];
											$count_ven++;
									   ?>
									</div>
								</div>
								<?php 
								
								}
								
							}
							if($count_ven<4)
							{
								for($i=$count_ven;$i<5;$i++)
								{?>
									<div class="panel-body">
									<div style="margin: 0 auto" class="list-group">
									   <?php
											echo '';
											$count_ven++;
									   ?>
									</div>
									</div>
								<?php 
								}
							}?>
                        </div>
                    </div>
                    
                </div>
                <!-- /.row -->

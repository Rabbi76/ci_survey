

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Survey Result <small>(User List)</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li >
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'vendor/dashboard';?>">Dashboard</a>
                            </li>
							<li >
								<i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url().'vendor/survey_result';?>"> Survey Result</a>
							</li>
							<li class="active">
								<i class="fa fa-arrow-circle-right"></i> User List
							</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
				<div class="row">
					<div class="col-lg-8">
						<div class="panel panel-default"  style="margin: 10px 40px;">
							<div class="panel-heading">
							
								<div >  
									<h4 class="panel-heading"><b>Survey Name: </b> <?php echo $survey[0]['title'];?></h4> 
								<?php//	var_dump($survey_summery); ?>
								</div>
								<div >	
									<h4 class="panel-heading"><b>Description: </b><?php echo $survey[0]['description'];?></h4> 
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						
						<a href="<?php echo base_url().'vendor/survey_summery/'.$survey[0]['id'];?>"; style="margin: 10px; font-size:20px;  float: center; min-width: 300px; "   class="btn btn-primary">All Answer Summary</a>
						
					</div>
				</div>
                <div class="row">
                    <div class="col-lg-8" style="margin: 0px 40px;" >
                       
						<h2>List of User</h2>
                        <div class="table-responsive">
						<?php
                       // echo "<pre>";
                       // var_dump($user);
                       // echo "</pre>";
                        ?>
							<table class="table table-bordered table-hover">
                                <?php
									$count_user=0;
                                    foreach($user as $us){ 
									 if($count_user==0){?>
								<thead>
                                    <tr>
                                        <th>User Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
										<th>View Answer</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
								<?php }
								
								?>
                                        <tr>
                                            <td><?php echo $us['id']; ?></td>
                                            <td><?php echo $us['name']; ?></td>
                                            <td><?php echo $us['email'];?></td>
                                            <td><?php echo '<a href="'.base_url().'vendor/survey_details/'.$survey[0]['id'].'_'.$us['id'].'" style="margin:0px 5px; background-color: #D0C8C8;" class="btn btn-default">Survey Answer </a>'; ?></td>
                                        </tr>
                                    <?php ++$count_user;} 
									//echo $count_user;
									if($count_user==0)echo '     Sorry no user give the survey.';
									
									?>
                                </tbody>
                            </table>
							
                        </div>
                    </div>
                   

                </div>
                <!-- /.row -->

            <?php
//            echo "<pre>";
//            var_dump($vendors);
//            echo "</pre>";
            ?>



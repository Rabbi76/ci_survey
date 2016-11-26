

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Survey Result <small>(Survey Summery)</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li >
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'admin/dashboard';?>">Dashboard</a>
                            </li>
							<li >
								<i class="fa fa-arrow-circle-right"></i><a href="<?php echo base_url().'admin/survey_result';?>"> Survey Result</a>
							</li>
							<li class="active">
								<i class="fa fa-arrow-circle-right"></i> Survey Summery
							</li>
                        </ol>
                    </div>
                </div>
              

                <div class="row">
                    <div class="col-lg-12">
                        <?php
                      //  echo "<pre>";
                      //  var_dump($survey);
                      //  echo "</pre>";
                        ?>
                        <div class="panel panel-default">
                            <div class="panel-heading" style="padding:10px">  
                                <h1 class="panel-title"><i class="fa fa-fw fa-desktop"></i><b> This is Summary of the Survey. Only Radio item & Check box item.</b></h1> 
							<?php//	var_dump($survey_summery); ?>
                            </div>
							<div style="background:#c2c2d6; margin: 5px 40px; ">	
								<h3 class="panel-heading"><b>Title: <?php echo $survey[0]['title'];?></b></h3> 
								<h4 class="panel-heading"><b>Description: </b><?php echo $survey[0]['description'];?></h4> 
							</div>
                            <div class="panel-heading">
							<style>
								table {
									border-collapse: collapse;
									width: 60%;
								}

								th, td {
									text-align: left;
									padding: 8px;
								}

								tr:nth-child(even){background-color: #f2f2f2}
								tr:nth-child(odd){background-color: #9DBCC2}
							</style>
                                <?php
									$count=1;
                                    foreach($survey_summery as $summery)
                                    {
										echo '<div style="background:#c2c2d6; margin:20px 20px;padding:10px">';
										echo  '<h4>'.$count.'. '.$summery['question_title'].'<small> ('.$summery['question_type'].' Option) </small></h4>';
                                        //echo "<b><h3>".$summery['question_title']."</h3></b>";
                                       // echo "<br>";
									   echo '<div style="padding: 0px  40px">';
									   echo '<table >';
									   $co=1;
									   
										echo '<tr >';	
										echo '<td style="width:10%">No</td><td style="padding-left:15px; width:70%">Option </td>&nbsp<td style="padding-right:20px; text-align: right;width:20%"> Result </td>';
										echo '</tr>';
                                        foreach($summery['result'] as $option => $total_number)
                                        {
											
											
                                            echo '<td>'.$co.'. </td><td><strong>'.$option.'</td></strong>&nbsp<td style="padding-right:30px; text-align: right"> => '.$total_number.'</td>';
											
											echo '</tr>';
                                            //echo "<br>";
											$co++;
										
                                        }
										echo "</table>";
										echo "</div>";
										echo "</div>";
										$count++;
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

      
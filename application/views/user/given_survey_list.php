

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Given Survey
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'user/dashboard';?>">Dashboard</a>
                    </li>
					<li class="active">
                        <i class="fa fa-arrow-circle-right"></i> Given Survey List
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		<?php
			//echo "<pre>";
            //var_dump($survey);
            //echo "</pre>";
		?>

        <div class="row">
                     <div class="col-lg-8 " style="margin: 10px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i> List of Survey</h3>
                            </div>
							<div id="rating_result" style="display: none"><?php echo $ratings; ?></div>
                            <?php foreach($survey as $surv)
							{ 
								if($surv['survey_id']==null)
								{
									echo '<br><p style="min-height: 40px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp You are not giving any Survey yet!!!</p>';
									break;
								}else
								{
									echo '<div class="panel-body">';
									echo '<div style="margin: 0 auto" class="list-group">';
									echo '<div style="min-height: 50px" class="list-group-item">';
									echo '<span class="rating" style="float: right"><div class="rateyoS7" id="rating_'.$surv['id'].'"></div></span>';
											//echo '<a href="" style="margin-top: 8px" class="badge">Turn off</a>';
									echo '<a href="'.base_url().'user/survey_details/'.$surv['id'].'" style="margin:0px 5px; background-color: #c0C8C8; float:right" class="btn btn-default">Detalis</a>';
									echo '<i style="margin-top: 8px" class="fa fa-arrow-circle-right"></i> '.$surv['title'];
									echo '</div>';
									   
									echo '</div>';
									echo '</div>';
								}
							}							
							?>
                        </div>
                    </div>
                </div>
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->



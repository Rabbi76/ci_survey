

<div id="page-wrapper">

    <div class="container-fluid">

      

        <div class="row">
                    <div class="col-lg-10" style="margin:20px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h1 class="page-header"><i class="fa fa-fw fa-desktop"></i> List of Survey</h1>
                            </div>
                            <div id="rating_result" style="display: none"><?php echo $ratings; ?></div>
                            <?php foreach($surve as $surv){ ?>
                            <div class="panel-body">
								<div style="margin: 0 auto" class="list-group">
								   <?php
										echo '<div style="min-height: 50px" class="list-group-item">';

										echo '<span class="rating" style="float: right"><div id="rating_'.$surv['id'].'" class="rateyoS7" rel="'.$surv['id'].'"></div></span>';

										//echo '<a href="'.$baseUrl.'Survey_list'.'" style="margin-top: 8px" class="badge">Turn off</a>';
										echo '<a href="'.base_url().'Survay_summery/sd/'.$surv['id'].'" style="margin: 0px 5px; float:right; background-color: #e7e7e7; "  class="btn btn-default">All Answer Summary</a>';
										echo '<a href="'.base_url().'user_list_survey/us/'.$surv['id'].'" style="margin: 0px 5px; float:right; background-color: #D0C8C8;" class="btn btn-default">Answers By User </a>';
										//echo '<a href="'.base_url().'Survay_details/sd/'.$surv['id'].'" style="margin-top: 8px" class="badge">Details </a>';
										//echo $surv['id']
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



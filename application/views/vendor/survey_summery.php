

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
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i> <?php echo $survey_detils['title'];?></h3>
                            </div>
                            <div class="panel-body">
                                <?php
                                    foreach($survey_summery as $summery)
                                    {
                                        echo "<h3>".$summery['question_title']."</h3>";
                                        echo "<br>";
                                        foreach($summery['result'] as $option => $total_number)
                                        {
                                            echo "<strong>".$option."</strong> => ".$total_number;
                                            echo "<br>";
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
              

      
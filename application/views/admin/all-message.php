

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Message List
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'admin/dashboard';?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Messages List
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row" style="margin:10px;">
                    <div class="col-lg-8">
                        <h2>Messages</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>user Type</th>
										<th>Subject</th>
                                        <th>All Conversation</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $co=1;
									foreach($message as $mes) {?>
                                        <tr>
                                            <td><?php echo $co; ?></td>
                                            <td><?php echo $mes['user_name']; ?></td>
                                            <td><?php echo $mes['user_type']; ?></td>
                                            <td><?php echo $mes['subject'];?></td>
											<td><?php echo '<a href="'.base_url().'admin/conversation/'.$mes['id'].'" style="margin: 0px 5px; background-color: #D0C8C8;" class="btn btn-default">Conversation </a>'; ?></td>
                                        </tr>
                                    <?php $co++;} ?>
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



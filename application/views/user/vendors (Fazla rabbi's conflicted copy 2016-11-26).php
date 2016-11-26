

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Vendors
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'user/dashboard';?>">Home</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Vendors
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8" style="margin: 15px 40px;">
                        <h2>Vendors</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Is Active</th>
										<th>View all Survey</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($vendors as $vendor){?>
                                        <tr>
                                            <td><?php echo $vendor['name']; ?></td>
                                            <td><?php echo $vendor['company']; ?></td>
                                            <td><?php echo $vendor['is_active']?"Active":"Disable"; ?></td>
                                            <td><?php echo '<a href="'.base_url().'user/view_vendor_survey/'.$vendor['id'].'" style="margin:0px 5px; background-color: #D0C8C8;" class="btn btn-default">All Survey  </a>'; ?></td>
                                        </tr>
                                    <?php } ?>
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





        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Vendors
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-table"></i> Vendors
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <h2>Vendors</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>User Name</th>
                                        <th>Company</th>
                                        <th>Is Active</th>
                                        <th>Change Type</th>
                                        <th>Remove</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($vendors as $vendor){?>
                                        <tr>
                                            <td><?php echo $vendor['name']; ?></td>
                                            <td><?php echo $vendor['username']; ?></td>
                                            <td><?php echo $vendor['company']; ?></td>
                                            <td><?php echo $vendor['is_active']?"Active":"Disable"; ?></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <h2>Add New Vendor</h2>
                        <form id="add_vendor">
                            <div class="form-group">
                                <label for="add_vendor_name">Name</label>
                                <input name="add_vendor_name" type="text" class="form-control" id="add_vendor_name" aria-describedby="emailHelp" placeholder="Name" required>

                            </div>
                            <div class="form-group">
                                <label for="add_vendor_email">Email address</label>
                                <input name="add_vendor_email" type="email" class="form-control" id="add_vendor_email" aria-describedby="emailHelp" placeholder="Enter email" required>

                            </div>
                            <div class="form-group">
                                <label for="add_vendor_username">Username</label>
                                <input name="add_vendor_username" type="text" class="form-control" id="add_vendor_username" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label for="add_vendor_password">Password</label>
                                <input name="add_vendor_password" type="password" class="form-control" id="add_vendor_password" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="add_vendor_company">Company</label>
                                <input name="add_vendor_company" type="text" class="form-control" id="add_vendor_company" placeholder="Company" required>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="add_vendor_sendMail" name="sendMail" value="true"> Email User with Credentials
                                </label>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Add</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->

            <?php
//            echo "<pre>";
//            var_dump($vendors);
//            echo "</pre>";
            ?>



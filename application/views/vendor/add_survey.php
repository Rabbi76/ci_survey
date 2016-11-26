

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Survey
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
                        <h2>Add New Survey</h2>
                        <form id="SurveyForm">
                            <div class="form-group">
                                <label for="category">Select Category:</label>
                                <select name="category" class="form-control" id="category">
                                    <?php foreach($categories as $category){?>
                                    <option value="<?php echo $category['category_id'] ?>"><?php echo $category['category_name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="newSurvey">

                                <button type="button" id="add_title_btn" class="btn btn-default">Add Title</button>
                            </div>
                        </form>
                    </div>

                </div>
                <!-- /.row -->



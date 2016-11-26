

        <div id="page-wrapper">

            <div class="container-fluid" style="min-height: 650px;">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Survey
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'vendor/dashboard';?>">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-arrow-circle-right"></i> Add Survey
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

                                    <optgroup label="<?php echo $category['category_name'] ?>">
                                        <?php foreach($sub_categories as $sub_category){?>
                                            <?php if($sub_category['category_id'] == $category['category_id']) {?>
                                                <option value="<?php echo $sub_category['sub_category_id'].'_'.$sub_category['category_id'] ?>"><?php echo $sub_category['sub_category_name'] ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </optgroup>
                                    <?php } ?>
                                </select>
                                
                            </div>
                            <div class="newSurvey">

                                <button type="button" id="add_title_btn" class="btn btn-default">Add Title</button>
                            </div>
                        </form>
						</br></br></br></br>
                    </div>
					
                </div>
                <!-- /.row -->



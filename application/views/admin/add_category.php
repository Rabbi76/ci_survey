

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Survey
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="<?php echo base_url().'admin/dashboard';?>">Dashboard</a>
                    </li>
					
                    <li class="active">
                        <i class="fa fa-arrow-circle-right"></i> Add Category
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
		<div class="row" style="margin:10px;">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							
                                <h3 class="panel-title"><i class="fa fa-fw fa-desktop"></i>  Available Categories</h3>
								<?php
									foreach($category as $cat)
									{
										echo '<div  class="list-group-item" style="margin:10px;">';
										echo '<b>'.$cat['category_name'].'</b>';
										$coun=1;
										foreach($SubCategory as $subCat)
										{
											//echo $subCat['category_id'];
											//echo $cat['category_id'];
											//echo '<br>';
											echo '<div style="margin:5px 20px;">';
											if($subCat['category_id']==$cat['category_id'])
											{
											
											echo $coun.'. '.$subCat['sub_category_name'];
											
											$coun++;
											}
											echo '</div>';
											
										}
										echo '</div>';
									}
								?>			
                            </div>
                            
                        </div>
                    </div>
        
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							<form method="post" id="add_category_form">
                                <h3 class="panel-title"><i class="fa fa-fw fa-search"></i> Add New Category Name</h3>
								
								<input  style="margin-top:5px;widows: 0 auto " name="category_name" class="form-control" type="text" required>
								<button style="margin-top: 10px;widows: 0 auto;  background-color: #e7e7e7;" id="submit_addCat_btn" class="btn btn-default" name="submit">Submit</button>
								</form>
                            </div>
                            
                        </div>
						Or,
						
						<div class="panel panel-default">
                            <div class="panel-heading">
							<form method="post" id="add_sub_category_form">
                                <h3 class="panel-title"><i class="fa fa-fw fa-search"></i> Add New Sub Category Name</h3><br>
								Select Category<select name="category_id" id="category_select" style="min-width: 120px; font-size:17px; margin:5px 20px;">
							
							<?php
								foreach($category as $cat)
								{
									echo '<option  value='.$cat['category_id'].'><h3 class="page-title">' .$cat['category_name'].'</h3>';
								}
							?>
						</select>
								<input  style="margin-top:5px;widows: 0 auto " name="sub_category_name" class="form-control" type="text" required>
								<button style="margin-top: 10px;widows: 0 auto;  background-color: #e7e7e7;" id="submit_addCat_btn" class="btn btn-default" name="submit">Submit</button>
								</form>
                            </div>
                            
                        </div>
                    </div>
        </div>
		
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->



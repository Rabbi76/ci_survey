

<div id="page-wrapper">

    <div class="container-fluid">

      <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    List of Survey by Category
                </h1>
            </div>
        </div>
		
		<div class="row">
            <div class="col-lg-10" style="margin:20px;">
                <div class="panel panel-default">
                    <div class="panel-heading">
					<form action="" method="post" id="search_survey">
					<h4>
						Category

						<select id="category_select" style="min-width: 120px;">

							<option value="0">Select
							<?php
								foreach($category as $cat)
								{
									echo '<option value='.$cat['category_id'].'><h3 class="page-title">' .$cat['category_name'].'</h3>';
								}
							?>
						</select>
						&nbsp &nbsp Sub Category

						<select id="sub_category_select" style="min-width: 120px;">

							<option value="0">Select
							<?php
								foreach($sub_category as $sub_cat)
								{
									echo '<option value='.$sub_cat['sub_category_id'].'><h3 class="page-title">' .$sub_cat['sub_category_name'].'</h3>';
								}
							?>

						</select>
						&nbsp &nbsp &nbsp &nbsp
                        <form action="" method="post" id="search_survey">

                            <input name="search"  type="text">
							&nbsp &nbsp <button style="margin-top: 10px;widows: 0 auto " id="submit_answer_btn" class="btn btn-default" name="submit">Search</button>
                        </form>
							
					</h4>
					</div>
					<div class="panel-body">

					
					</div>
                </div>
            </div>
		</div>
								

        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->



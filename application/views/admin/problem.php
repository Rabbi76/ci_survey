

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Support Tickets!
                </h1>
                <ol class="breadcrumb">
                    <li >
                        <i class="fa fa-arrow-circle-right"></i> <a href="<?php echo base_url().'admin/dashboard';?>">Admin</a>
                    </li>
 					<li class="active">
                        <i class="fa fa-arrow-circle-right"></i> Problem
                    </li>
					
                </ol>
            </div>
        </div>
        <!-- /.row -->

       <div class="row" style="margin:10px;">
			 <div class="col-lg-8">
				<?php
				//$id=$vendo[0]["id"];
				//$name=$vendo[0]["name"];
				//echo $name;
				//echo $id;
				//echo "<pre>";
				//var_dump($message);
				//echo "</pre>";
				$count=0;

				foreach($problem as $pro)
                {
					if($pro['active']==TRUE)
					{
						
						
						echo '<div style="background:#E8E8E9; margin:15px;padding: 10px">';
						
						echo '<div class="row">';
						echo '<div class="col-lg-10">';
						echo '<form method="post">';
						echo '<input type="hidden" name="prob_id" type="text" class="form-control" value='.$pro['id'].' >';
						echo '<button style="margin: 10px 0px;  float: right; max-width: 100px;" name="submit" class="btn btn-lg btn-primary btn-block" type="submit" >Done</button>';
						//echo '<a  style="margin-top: 8px; float: right; position: absolute; top: 0px; right: 0px;  " class="btn btn-primary">Done</a>';
						echo '</form>';
						
						echo '<h4><B>Name:</B> '.$pro['name'].'</h4>';
						echo '<h5><B>Email:</B> '.$pro['email'].'</h5>';
						echo '<h5><B>Company:</B> '.$pro['company'].'</h5>';
						echo '<h5><B>Date:</B> '.$pro['date'].'</h5>';
						echo '<h5><B>Problem:</B> '.$pro['problem'].'</h5>';
						echo'</div>';
						echo'</div>';
						if(strpos($pro['problem'], 'User acccount problem') !== false)
						{
						echo '<div style="background:#95BDC9; margin:15px; padding: 3px; margin-right:80px;">';
						echo '<h5><b>Dscription:</b> '.$pro['details'].'</h5>';
						echo'</div>';
						}
						else
						{
							echo '<div style="background:#95ABC9; margin:15px; padding: 3px; margin-right:80px;">';
							echo '<h5><b>Dscription:</b> '.$pro['details'].'</h5>';
							echo'</div>';
							
						}
						
						echo'</div>';
						$count=1;
					echo '<br>';
					}
				}
				//echo $count;
				if($count==0)
				{
						echo '<div style="background:#E8E8E9; margin:18px;padding: 25%; width:100%; height:400px;text-align: center;">';
						echo '<h4>No problem right now!!!!!</h4>';
						echo'</div>';
					
				}
				?>
				
				
			 </div>
                    <div class="col-lg-4" style=" float: right; margin-top:15px;">
                      
							<a href="<?php echo base_url().'admin/all_problem';?>"; style="margin: 10px; font-size:20px;  float: center; min-width: 300px; "   class="btn btn-primary">All Problem List</a>
                        
                    </div> 
        </div>
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->

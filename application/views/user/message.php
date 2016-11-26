

<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Message
                </h1>
                <ol class="breadcrumb">
                    <li >
                        <i class="fa fa-arrow-circle-right"></i> <a href="<?php echo base_url().'user/dashboard';?>">User</a>
                    </li>
 					<li class="active">
                        <i class="fa fa-arrow-circle-right"></i> Messages and Reply
                    </li>
					
                </ol>
            </div>
        </div>
        <!-- /.row -->

       <div class="row" style="margin:10px;">
			 <div class="col-lg-8">
				<?php
				$id=$user[0]["id"];
				$name=$user[0]["name"];
				//echo $name;
				//echo $id;
				//echo "<pre>";
				//var_dump($message);
				//echo "</pre>";
				$count=0;
				//echo empty($message) ? "Array is empty.": "Array is not empty.";
				foreach($message as $messag)
                {
					
						
						if($count%2==0)
							echo '<div style="background:#E8E8E9; margin:15px;padding: 10px">';
						else 
							echo '<div style="background:#E8E8E9; margin:15px;padding: 10px">';
						echo '<div class="row">';
						echo '<div class="col-lg-10">';
						echo '<h4><B>Subject:</B> '.$messag['subject'].'</h4>';
						echo'</div>';
						echo'</div>';
						echo '<div style="background:#95BDC9; margin:15px; padding: 3px; margin-right:80px;">';
						echo '<h5><b>You:</b> '.$messag['message'].'</h5>';
						echo'</div>';
						foreach($reply as $rep)
						{
							if($rep['mess_id']==$messag['id'])
							{
								if(strpos($rep['replyBy'], 'Admin') !== false)
								{	
									echo '<div style="background:#95ABC9; margin:15px;padding: 3px; text-align:right;margin-left:80px;">';
									echo '<h5>'.$rep['reply'].' <b> :Admin</b></h5>';
									//echo '<h5>'.$rep['reply'].' <b>:'.$rep['replyBy'].'</B></h5>';
									echo'</div>';
								}
								else
								{
									echo '<div style="background:#95BDC9; margin:15px;padding: 3px;margin-right:80px;">';
									//echo '<h5><B>'.$rep['replyBy'].':</B> '.$rep['reply'].'</h5>';
									echo '<h5><b>You: </b>'.$rep['reply'].'</h5>';
									echo'</div>';
								}
							}
						}
						echo '<form method="post">';
						echo '<input type="hidden" name="mess_id" type="text" class="form-control" value='.$messag['id'].' >';
						echo '<textarea style=" margin:0px;" cols="20" rows="3" name="replyto" class="form-control" placeholder="Reply" required></textarea>';
						echo '<button style="margin-top: 10px;widows: 0 auto" id="submit_answer_btn" class="btn btn-default" name="reply">reply</button>';
						echo '</form>';
						
						echo'</div>';
						$count++;
					echo '<br>';
				}
				if($count==0)
				{
					if(empty($message))
					{
						echo '<div style="background:#E8E8E9; margin:20px;padding: 25%; width:100%; height:400px;text-align: center;">';
						echo '<h4>No Message Yet !!!!!</h4>';
						echo'</div>';
					}
				}
				?>
				
				
			 </div>
                    <div class="col-lg-4" style=" float: right; margin-top:15px;">
                        <div class="panel panel-default">
                            <div class="panel-heading">
							<form method="post">
                                <h5 class="panel-title"><i class="fa fa-envelope"></i> New Message</h5>
								<br>To: Admin
								<input  style="margin-top:5px;widows: 0 auto " name="subject" class="form-control"name="searchValue" type="text" placeholder="Subject" required>
								<textarea style="margin-top: 10px;" cols="40" rows="12" name="message" class="form-control" placeholder="Dscription( problem & details information)" required></textarea>
								<button style="margin-top: 10px;widows: 0 auto" id="submit_answer_btn" class="btn btn-default" name="submit">Submit</button>
								</form>
                            </div>
                            
                        </div>
                    </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url().'js/jquery.rateyo.min.js'; ?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'js/rating.js'; ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url().'css/jquery.rateyo.min.css'; ?>"/>
        <!-- /.row -->


        <!-- Jumbotron -->
        <div class="jumbotron">
            <h1>
				<?php
				echo $survey[0]['title'];
				 ?>
			</h1>
            <p class="lead">
				<?php
				echo $survey[0]['description'];
				 ?>
			</p>
			<?php if($account_name != null && $account_name !=''){ ?>
				<p><a class="btn btn-lg btn-success" href="<?php echo $baseUrl.'user/view_survey/'.$survey[0]['id']; ?>" role="button">Take the Survey</a></p>
			<?php }else{ ?>
				<p><a class="btn btn-lg btn-success" href="<?php echo $baseUrl.'login/index/'.$survey[0]['id']; ?>" role="button">Take the Survey</a></p>
			<?php } ?>

        </div>

        <!-- Example row of columns -->
		<?php
			//$row;
			$colunt=1;
			$check=0;
			for ($x = 0; $x < 1; $x++)
			{
			
				//echo '<div class="col-lg-12">';
				echo '<div class="row">';
				echo '<br><br>';
				for ($y = 1; $y <= 3; $y++)
				{
					//var_dump($surve);
				//if($surve[$colunt]['is_active']=="1")
				//{
					echo '<div class="col-lg-4" >';
					//echo '<div  style="border:1px solid black; background-color:#D0C8C8; margin:10px; padding:10px; width:100%; height:200px; overflow:scroll;">';
					$co=rand(1,11);
					if($co==1)
					echo '<div  style=" background-color:#D0C8C8; margin:10px; padding:10px; width:100%; height:200px; ">';
					elseif($co==2)
					echo '<div  style=" background-color:#B9C995; margin:10px; padding:10px; width:100%; height:200px; ">';
					elseif($co==3)
					echo '<div  style=" background-color:#A195C9; margin:10px; padding:10px; width:100%; height:200px; ">';
					elseif($co==4)
					echo '<div  style=" background-color:#95ABC9; margin:10px; padding:10px; width:100%; height:200px; ">';
					elseif($co==5)
					echo '<div  style=" background-color:#95C9B4; margin:10px; padding:10px; width:100%; height:200px; ">';
					elseif($co==6)
					echo '<div  style=" background-color:#C9BD95; margin:10px; padding:10px; width:100%; height:200px; ">';
					elseif($co==7)
					echo '<div  style=" background-color:#C9A895; margin:10px; padding:10px; width:100%; height:200px; ">';
					elseif($co==8)
					echo '<div  style=" background-color:#A6C995; margin:10px; padding:10px; width:100%; height:200px; ">';
					elseif($co==9)
					echo '<div  style=" background-color:#95BDC9; margin:10px; padding:10px; width:100%; height:200px; ">';
					else
					echo '<div  style=" background-color:#C5A3C4; margin:10px; padding:10px; width:100%; height:200px; ">';
					
					echo '<h2>';
					echo $survey[$colunt]['title'];
					echo '</h2>';
					echo'<p><b>Description:</b> ';
					echo $survey[$colunt]['description'];
					echo '</p>';
					if($account_name != null && $account_name !='')
					{ 
						echo '<p style="font-size:15x; margin-top:8px; background-color: #F87171; float:right; right; position: absolute; bottom: 0px; right: 0px;  "><a class="btn btn-lg btn-success" href="'.$baseUrl.'user/view_survey/'.$survey[$colunt]['id'].'" role="button">Take the Survey</a></p>';
					}else{
						echo '<p style="font-size:15x; margin-top:8px; background-color: #F87171; float:right; right; position: absolute; bottom: 0px; right: 0px;  "><a class="btn btn-lg btn-success" href="'.$baseUrl.'login/index/'.$survey[$colunt]['id'].'" role="button">Take the Survey</a></p>';
					}
					//echo '<p style="font-size:15x; margin-top:8px; background-color: #F87171; float:right; right; position: absolute; bottom: 0px; right: 0px;  "><a class="btn btn-primary" href="'.$baseUrl.'login'.'" role="button">Take Survey &raquo;</a></p>';
					echo '</div>';
					echo '</div>';
					$colunt++;
					
					
				
			}
				//echo '<br><br>';
				echo '</div>';
				//echo '</div>';
			}
		
		?>
        



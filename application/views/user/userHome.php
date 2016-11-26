
<div id="page-wrapper">

    <div class="container-fluid" style="min-height: 650px;">
        
		<?php
			//$row;
			$colunt=0;
			$check=0;
			for ($x = 0; $x < 2; $x++)
			{
				//echo '<div class="col-lg-12">';
				echo '<div class="row">';
				echo '<br><br>';
				for ($y = 1; $y <= 3; $y++)
				{
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
					echo $surve[$colunt]['title'];
					echo '</h2>';
					echo'<p><b>Description:</b> ';
					echo $surve[$colunt]['description'];
					echo '</p>';
					foreach($survey as $surv)
					{
						$check=0;
						//var_dump($survey);
						//echo $surve[$colunt]['id'];
						//echo $surv['id'];
						if($surve[$colunt]['id']===$surv['id'])
						{
							echo '<a href="'.base_url().'user/survey_details/'.$surve[$colunt]['id'].'" style="font-size:15px; margin-top: 8px; float: right; position: absolute; bottom: 0px; right: 0px;  " class="btn btn-primary">View Answer</a>';
							$check=1;
							break;
						}
					}
					if($check==0)
					{
						if($surve[$colunt]['is_active']=="0")
						{
							echo '<a style="font-size:15px; margin-top:8px; background-color: #F87171; float:right; right; position: absolute; bottom: 0px; right: 0px;  " class="btn btn-default">Survey Close </a>';
						}
						else
						{
							//echo $surv['id'];
							echo '<a href="'.base_url().'user/view_survey/'.$surve[$colunt]['id'].'" style="font-size:15x; margin-top:8px; float:right; right; position: absolute; bottom: 0px; right: 0px;  " class="btn btn-lg btn-success">Answer this Survey Questions </a>';
						}
					}
                    //echo '<p><a class="btn btn-primary" href="'.$baseUrl.'user'.'" role="button">Take Survey &raquo;</a></p>';
					
					echo '</div>';
					echo '</div>';
					$colunt++;
					
					
				}
				//echo '<br><br>';
				echo '</div>';
				//echo '</div>';
			}
			
		?>
        



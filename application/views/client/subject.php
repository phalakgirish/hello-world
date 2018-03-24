<?php 
$uid=$this->session->userdata['register_id'];
//$user_id=$this->myclass->get_session_record(0);
if(isset($uid))
{
	require_once 'header.php';

}
else
{
		# code...
	require_once 'before_login.php';
}	
?>

		<div class="container">
		
		
			<div class="row grad">
				<div class="col-md-12 arrow">
					<!-- <img src="arrow3.png" width="100" height="100"> -->
				</div>
			</div>
			<div class="row grad">
				<div class="col-md-12">
					<h3 class="text-center">
						Hello <?php echo $this->session->userdata['register_name'];?><br>
					</h3>
				</div>
			</div>
			<?php
			foreach ($subject as $value) 
			{
				# code...
		
?>
			<div class="col-md-3 sub" id="sub1">
				<h5><a href="<?php echo base_url()?>client/welcome/topic/<?php echo $value['subject_id'];?>">
				<i class="fab fa-first-order"></i><br><br><?php echo $value['subject_name'];?>
				<p><small><span>553 videos  93 Goals</span></small></p>
				<p>
   				 <a href="<?php echo base_url()?>client/welcome/topic/<?php echo $value['subject_id'];?>" class="btn btn-success btn-large">
      			Start Learning
    			</a>
  				</p>
				</a></h5>
			</div>
			<?php
			}
			?>

			<!-- <div class="col-md-3 sub" id="sub1">
				<h5><a href="physics.php">
				<i class="fas fa-flask"></i><br><br>CHEMISTRY
				<p><small><span>768 videos  109 Goals</span></small></p>
				<p>
   				 <a href="physics.php" class="btn btn-success btn-large">
      			Start Learning
    			</a>
  				</p>
				</a></h5>
			</div>
			<div class="col-md-3 sub" id="sub1">
				<h5><a href="physics.php">
				<i class="fas fa-calculator"></i><br><br>MATHS
				<p><small><span>614 videos  51 Goals</span></small></p>
				<p>
   				 <a href="physics.php" class="btn btn-success btn-large">
      			Start Learning
    			</a>
  				</p>
				</a></h5>
			</div> -->
			<div class="clr"></div>

		</div>	
<?php
require_once 'footer.php';
?>

	
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="members" class="home">
	<div class="left_nav">
		<div class="left_nav_title">
					<div class="card">
						<div class="card-img">
							<img class="card-showimg" src="../images/teacher.png">
							<span class="card-title">Dr. Jun Wu (CV)</span>
						</div>
						<div class="card-content">
							<h3>Professor</h3>
							<p>PhD, Cornell University</p> 
							<p>Postdoc, MIT | Harvard Medical School</p>
							<p>wujun29@mail.sysu.edu.cn</p>
							<p>Research Associate Professor</p>
							<img class="card-titleimg" src="../images/navigator.png">
						</div>
					</div>
			<h3>Members</h3>
		</div>
		<hr>
		<div id="m_left_nav_detail" class="left_nav_detail">
			<ul>
				<li>All Members</li>
				<li>Professions</li>
				<li>Doctoral Candidates</li>
				<li>Master Candidates</li>
				<li>Former Members</li>
			</ul>
		</div>
	</div>
	<div class="right_nav">
		<div class="location">
			<span>You are here : </span>
			<h3>Members</h3>
		</div>
		<div class="m_right_content">
			<?php 
				foreach ($members as $members_item): 
			?>
				<div class="m_right_content_img">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
			   
			        <p><?php echo $members_item['name']; ?></p>
				</div>
				<div class="m_right_content_detail hide">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
					<div class="m_right_content_detail_info">
						<h2><?php echo $members_item['name']; ?></h2>
						<p><?php echo $members_item['degree']; ?></p><br>
						<p><?php echo $members_item['intro']; ?></p>
						<p>Email<?php echo $members_item['email']; ?></p>	
					</div>
					<?php if($members_item['education']){?>
					<div>
						<h3>EDUCATION</h3>
						<p><?php echo $members_item['education'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['experience']){?>
					<div>
						<h3>EXPERIENCE</h3>
						<p><?php echo $members_item['experience'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['researchInterest']){?>
					<div>
						<h3>RESEARCH INTEREST</h3>
						<p><?php echo $members_item['researchInterest'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['personalHonor']){?>
					<div>
						<h3>PERSONAL HONOR</h3>
						<p><?php echo $members_item['personalHonor'];?></p>
					</div>
					<?php }?>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="m_right_content hide">
			<?php 
				foreach ($members as $members_item): 
					if($members_item['degree'] == "Professions"){
			?>
				<div class="m_right_content_img">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
			   
			        <p><?php echo $members_item['name']; ?></p>
				</div>
				<div class="m_right_content_detail hide">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
					<div class="m_right_content_detail_info">
						<h2><?php echo $members_item['name']; ?></h2>
						<p><?php echo $members_item['degree']; ?></p><br>
						<p><?php echo $members_item['intro']; ?></p>
						<p>Email<?php echo $members_item['email']; ?></p>	
					</div>
					<?php if($members_item['education']){?>
					<div>
						<h3>EDUCATION</h3>
						<p><?php echo $members_item['education'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['experience']){?>
					<div>
						<h3>EXPERIENCE</h3>
						<p><?php echo $members_item['experience'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['researchInterest']){?>
					<div>
						<h3>RESEARCH INTEREST</h3>
						<p><?php echo $members_item['researchInterest'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['personalHonor']){?>
					<div>
						<h3>PERSONAL HONOR</h3>
						<p><?php echo $members_item['personalHonor'];?></p>
					</div>
					<?php }?>
				</div>
			<?php }endforeach; ?>
		</div>
		<div class="m_right_content hide">
			<?php 
				foreach ($members as $members_item): 
				if($members_item['degree'] == "Doctoral Candidates"){
			?>
				<div class="m_right_content_img">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
			   
			        <p><?php echo $members_item['name']; ?></p>
				</div>
				<div class="m_right_content_detail hide">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
					<div class="m_right_content_detail_info">
						<h2><?php echo $members_item['name']; ?></h2>
						<p><?php echo $members_item['degree']; ?></p><br>
						<p><?php echo $members_item['intro']; ?></p>
						<p>Email<?php echo $members_item['email']; ?></p>	
					</div>
					<?php if($members_item['education']){?>
					<div>
						<h3>EDUCATION</h3>
						<p><?php echo $members_item['education'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['experience']){?>
					<div>
						<h3>EXPERIENCE</h3>
						<p><?php echo $members_item['experience'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['researchInterest']){?>
					<div>
						<h3>RESEARCH INTEREST</h3>
						<p><?php echo $members_item['researchInterest'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['personalHonor']){?>
					<div>
						<h3>PERSONAL HONOR</h3>
						<p><?php echo $members_item['personalHonor'];?></p>
					</div>
					<?php }?>
				</div>
			<?php }endforeach; ?>
		</div>
		<div class="m_right_content hide">
			<?php foreach ($members as $members_item): if($members_item['degree'] == "Master Candidates"){?>
				<div class="m_right_content_img">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
			   
			        <p><?php echo $members_item['name']; ?></p>
				</div>
				<div class="m_right_content_detail hide">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
					<div class="m_right_content_detail_info">
						<h2><?php echo $members_item['name']; ?></h2>
						<p><?php echo $members_item['degree']; ?></p><br>
						<p><?php echo $members_item['intro']; ?></p>
						<p>Email<?php echo $members_item['email']; ?></p>	
					</div>
					<?php if($members_item['education']){?>
					<div>
						<h3>EDUCATION</h3>
						<p><?php echo $members_item['education'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['experience']){?>
					<div>
						<h3>EXPERIENCE</h3>
						<p><?php echo $members_item['experience'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['researchInterest']){?>
					<div>
						<h3>RESEARCH INTEREST</h3>
						<p><?php echo $members_item['researchInterest'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['personalHonor']){?>
					<div>
						<h3>PERSONAL HONOR</h3>
						<p><?php echo $members_item['personalHonor'];?></p>
					</div>
					<?php }?>
				</div>
			<?php }endforeach; ?>
		</div>
		<div class="m_right_content hide">
			<?php foreach ($members as $members_item): if($members_item['degree'] == "Former Members"){?>
				<div class="m_right_content_img">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
			   
			        <p><?php echo $members_item['name']; ?></p>
				</div>
				<div class="m_right_content_detail hide">
					<img src="../<?php echo $members_item['imgUrl']; ?>" >
					<div class="m_right_content_detail_info">
						<h2><?php echo $members_item['name']; ?></h2>
						<p><?php echo $members_item['degree']; ?></p><br>
						<p><?php echo $members_item['intro']; ?></p>
						<p>Email<?php echo $members_item['email']; ?></p>	
					</div>
					<?php if($members_item['education']){?>
					<div>
						<h3>EDUCATION</h3>
						<p><?php echo $members_item['education'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['experience']){?>
					<div>
						<h3>EXPERIENCE</h3>
						<p><?php echo $members_item['experience'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['researchInterest']){?>
					<div>
						<h3>RESEARCH INTEREST</h3>
						<p><?php echo $members_item['researchInterest'];?></p>
					</div>
					<?php }?>
					<?php if($members_item['personalHonor']){?>
					<div>
						<h3>PERSONAL HONOR</h3>
						<p><?php echo $members_item['personalHonor'];?></p>
					</div>
					<?php }?>
				</div>
			<?php }endforeach; ?>
		</div>
	</div>
</div>
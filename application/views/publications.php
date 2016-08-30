<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div id="publication" class="home">
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
			<h3>Publications</h3>
		</div>
		<hr>
		<div id="p_left_nav_detail" class="left_nav_detail">
			<ul>
				<h4>Book Chapter</h4>
				<li>2016</li>
				<h4>Peer Reviewed Publications</h4>
				<li>2016</li>
				<li>2015</li>
				<li>2014</li>
				<li>Before 2014</li>
			</ul>
		</div>
	</div>
	<div class="right_nav">
		<div class="location">
			<span>You are here : </span>
			<h3>Publications</h3>
		</div>
		<div class="p_right_content">
			<ul>
				<?php 
					foreach($publications as $publications_item):
						if( $publications_item['year'] == "2016" && $publications_item['classification'] == "Book Chapter"){
				?>
					<li><?php echo $publications_item['info']; ?></li>
				<?php }endforeach;?>
			</ul>
		</div>
		<div class="p_right_content">
			<ul>
				<?php 
					foreach($publications as $publications_item):
						if( $publications_item['year'] == "2016" && $publications_item['classification'] == "Peer Reviewed Publications"){
				?>
					<li><?php echo $publications_item['info']; ?></li>
				<?php }endforeach;?>
			</ul>
		</div>
		<div class="p_right_content">
			<ul>
				<?php 
					foreach($publications as $publications_item):
						if( $publications_item['year'] == "2015" && $publications_item['classification'] == "Peer Reviewed Publications"){
				?>
					<li><?php echo $publications_item['info']; ?></li>
				<?php }endforeach;?>
			</ul>
		</div>
		<div class="p_right_content">
			<ul>
				<?php 
					foreach($publications as $publications_item):
						if( $publications_item['year'] == "2014" && $publications_item['classification'] == "Peer Reviewed Publications"){
				?>
					<li><?php echo $publications_item['info']; ?></li>
				<?php }endforeach;?>
			</ul>
		</div>
		<div class="p_right_content">
			<ul>
				<?php 
					foreach($publications as $publications_item):
						if( $publications_item['year'] == "2013" && $publications_item['classification'] == "Peer Reviewed Publications"){
				?>
					<li><?php echo $publications_item['info']; ?></li>
				<?php }endforeach;?>
			</ul>
		</div>
	</div>
</div>

	<section class="footer-top-section">
		<div class="container">
			<div class="footer-top-bg">
				<img src="img/footer-top-bg.png" alt="">
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-logo text-white">
						<img src="img/footerlogo-1.png" alt="">
						<p>"CancerousTV". Life is more fun if you Play Games. Talents wins games, but teamwork and intelligence wins championships.</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Entry </h4>
						<div class="latest-blog">
							<?php 
								include 'credentials/connection.php';

								$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ORDER BY id ASC LIMIT 3");
								$i = 1;
								while ($row = mysqli_fetch_array($query)) {
								?>
								<div class="lb-item">
									<div class="lb-thumb set-bg" data-setbg="img/recent-game/4.jpg"></div>
									<div class="lb-content">
										<div class="lb-date"><?php echo $row['game_schedule']; ?></div>
										<p>
											<?php echo $row['team_captain']; ?><br/>
											(Team Captain)
										</p>
										<a href="#" class="lb-author">By Admin</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-widget mb-5 mb-md-0">
						<h4 class="fw-title">Latest Entry </h4>
						<div class="latest-blog">
							<?php 
								include 'credentials/connection.php';

								$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ORDER BY id DESC LIMIT 3");
								$i = 1;
								while ($row = mysqli_fetch_array($query)) {
								?>
								<div class="lb-item">
									<div class="lb-thumb set-bg" data-setbg="img/recent-game/4.jpg"></div>
									<div class="lb-content">
										<div class="lb-date"><?php echo $row['game_schedule']; ?></div>
										<p>
											<?php echo $row['team_captain']; ?><br/>
											(Team Captain)
										</p>
										<a href="#" class="lb-author">By Admin</a>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer-section">
		<div class="container">
			<!-- <ul class="footer-menu">
				<li><a href="index.html">Home</a></li>
				<li><a href="review.html">Games</a></li>
				<li><a href="categories.html">Blog</a></li>
				<li><a href="community.html">Forums</a></li>
				<li><a href="contact.html">Contact</a></li>
			</ul> -->
			<p class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			<script>document.write(new Date().getFullYear());</script> All rights reserved | Powered by <a href="#!" target="_blank">CorinthDev</a>
			<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
			</p>
		</div>
	</footer>
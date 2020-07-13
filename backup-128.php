<?php include '_css.php'; ?>
<style type="text/css">
    body {font-family: 'Istok Web', sans-serif;background: url("http://picjumbo.com/wp-content/uploads/HNCK2189-1300x866.jpg") no-repeat #000;background-size: cover;min-height: 100%;margin: 0;}
	.hero {position:relative; text-align: center; overflow: hidden; color: #fcfcfc; }
	.hero h1 {font-family: 'Holtwood One SC', serif;font-weight: normal;font-size: 5.4em;margin:0 0 20px; text-shadow:0 0 12px rgba(0, 0, 0, 0.5);text-transform: uppercase;letter-spacing:-1px;}
	.hero p {font-family: 'Abel', sans-serif;text-transform: uppercase; color: #5CCA87; letter-spacing: 6px;text-shadow:0 0 12px rgba(0, 0, 0, 0.5);font-size: 1.2em;}
	.hero-wrap {padding: 3.5em 10px;}
	.hero p.intro {font-family: 'Holtwood One SC', serif;text-transform: uppercase;letter-spacing: 1px;font-size: 3em;margin-bottom:-40px;}
	.hero p.year {color: #fff; letter-spacing: 20px; font-size: 34px; margin: -25px 0 25px;}
	.hero p.year i {font-size: 14px;vertical-align: middle;}
	#bracket {overflow:hidden;background-color: #e1e1e1;background-color:rgba(225,225,225,0.9);padding-top: 20px;font-size: 12px;padding: 40px 0;}
	.container {max-width: 1100px;margin: 0 auto;display:block;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display: -webkit-flex;display: flex;-webkit-flex-direction:row;flex-direction: row;}
	.split {display:block;float:left;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display:flex;width: 42%;-webkit-flex-direction:row;-moz-flex-direction:row;flex-direction:row;}
	.champion {float:left;display:block;width: 16%;-webkit-flex-direction:row;flex-direction:row;-webkit-align-self:center;align-self:center;margin-top: -15px;text-align: center;padding: 230px 0\9;} 
	.champion i {color: #a0a6a8; font-size: 45px;padding: 10px 0; }
	.round {display:block;float:left;display: -webkit-box;display: -moz-box;display: -ms-flexbox;display: -webkit-flex;display:flex;-webkit-flex-direction:column;flex-direction:column;width:95%;width:30.8333%\9;}
	.split-two {}
	.split-one .round {margin: 0 2.5% 0 0;}
	.split-two .round {margin: 0 0 0 2.5%;}
	.matchup {margin:0;width: 100%;padding: 10px 0;height:60px;-webkit-transition: all 0.2s;transition: all 0.2s;}
	.score {font-size: 11px;text-transform: uppercase;float: right;color: #2C7399;font-weight: bold;font-family: 'Roboto Condensed', sans-serif;position: absolute;right: 5px;}
	.team {padding: 0 5px;margin: 3px 0;height: 25px; line-height: 25px;white-space: nowrap; overflow: hidden;position: relative;}
	.round-two .matchup {margin:0; height: 60px;padding: 50px 0;}
	.round-three .matchup {margin:0; height: 60px; padding: 130px 0;}
	.round-details {font-family: 'Roboto Condensed', sans-serif; font-size: 13px; color: #2C7399;text-transform: uppercase;text-align: center;height: 40px;}
	.champion li, .round li {background-color: #fff;box-shadow: none; opacity: 0.45;}
	.current li {opacity: 1;}
	.current li.team {background-color: #fff;box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);opacity: 1;}
	.vote-options {display: block;height: 52px;}
	.share .container {margin: 0 auto; text-align: center;}
	.share-icon {font-size: 24px; color: #fff;padding: 25px;}
	.share-wrap {max-width: 1100px; text-align: center; margin: 60px auto;}
	.final {margin: 4.5em 0;}

	@-webkit-keyframes pulse {
	  0% {
	    -webkit-transform: scale(1);
	    transform: scale(1);
	  }

	  50% {
	    -webkit-transform: scale(1.3);
	    transform: scale(1.3);
	  }

	  100% {
	    -webkit-transform: scale(1);
	    transform: scale(1);
	  }
	}

	@keyframes pulse {
	  0% {
	    -webkit-transform: scale(1);
	    -ms-transform: scale(1);
	    transform: scale(1);
	  }

	  50% {
	    -webkit-transform: scale(1.3);
	    -ms-transform: scale(1.3);
	    transform: scale(1.3);
	  }

	  100% {
	    -webkit-transform: scale(1);
	    -ms-transform: scale(1);
	    transform: scale(1);
	  }
	}

	.share-icon {color: #fff; opacity: 0.35; }
	.share-icon:hover { opacity:1;  -webkit-animation: pulse 0.5s; animation: pulse 0.5s;}
	.date {font-size: 10px; letter-spacing: 2px;font-family: 'Istok Web', sans-serif;color:#3F915F;}



	@media screen and (min-width: 981px) and (max-width: 1099px) {
	  .container {margin: 0 1%;}
	  .champion {width: 14%;}
	  .split {width:43%; }
	  .split-one .vote-box {margin-left: 138px;}
	  .hero p.intro {font-size: 28px;}
	  .hero p.year {margin: 5px 0 10px;}

	}

	@media screen and (max-width: 980px) {
	  .container {-webkit-flex-direction:column;-moz-flex-direction:column;flex-direction:column;}
	  .split, .champion {width: 90%;margin: 35px 5%;}
	  .champion {-webkit-box-ordinal-group:3;-moz-box-ordinal-group:3;-ms-flex-order:3;-webkit-order:3;order:3;}
	  .split {border-bottom: 1px solid #b6b6b6; padding-bottom: 20px;}
	  .hero p.intro {font-size: 24px;}
	  .hero h1 {font-size: 3em; margin: 15px 0;}
	  .hero p {font-size: 1em;}
	}


	@media screen and (max-width: 400px) {

	  .split {width: 95%;margin: 25px 2.5%;}
	  .round {width:21%;}
	  .current {-webkit-flex-grow:1;-moz-flex-grow:1;flex-grow:1;}
	  .hero h1 {font-size: 2.15em; letter-spacing: 0;margin:0; }
	  .hero p.intro {font-size: 1.15em;margin-bottom: -10px;}
	  .round-details {font-size: 90%;}
	  .hero-wrap {padding: 2.5em;}
	  .hero p.year {margin: 5px 0 10px; font-size: 18px;}

	}
</style>
<body>
	<!-- Page Preloder -->
	<?php include '_preloader.php'; ?>

	<!-- Header section -->
	<?php include '_header.php'; ?>
	<!-- Header section end -->


	<!-- Latest news section -->
	<div class="latest-news-section">
		<div class="ln-title">Latest Updates</div>
		<div class="news-ticker">
			<div class="news-ticker-contant">
				<div class="nt-item"><span class="new">new</span>Check this our new schedule for tournamemt. </div>
				<div class="nt-item"><span class="strategy">strategy</span>Make the strategy and win to this tournament. </div>
				<div class="nt-item"><span class="racing">racing</span>Fast build, fast push, fast win. </div>
			</div>
		</div>
	</div>
	<!-- Latest news section end -->


	<!-- Page info section -->
	<section class="page-info-section set-bg" data-setbg="img/page-top-bg/3.jpg">
		<div class="pi-content">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-6 text-white">
						<h2>Tournament Schedule</h2>
						<p>CancerousTV</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Page info section -->


	<!-- Page section -->
	<section class="page-section review-page spad">
		<div class="row">
			<div class="col-lg-12">
				<section id="bracket">
				    <div class="container">
					    <div class="split split-one">
					        <div class="round round-one current">
					            <div class="round-details">Day 1<br/><span class="date">Bracket A</span></div>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '1' || $id == '2')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
                    				<?php include 'tournament-schedule-modal.php'; ?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if ($id == '3' || $id == '4') {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>

						        	<?php } ?>
						        </ul>  
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '5' || $id == '6')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '7' || $id == '8')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>      
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '9' || $id == '10')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>         
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '11' || $id == '12')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>     
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '13' || $id == '14')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>    
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '15' || $id == '16')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>  
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '17' || $id == '18')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>    
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '19' || $id == '20')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>      
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '21' || $id == '22')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>    
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '23' || $id == '24')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>           
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '25' || $id == '26')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>          
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '27' || $id == '28')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '29' || $id == '30')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '31' || $id == '32')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '33' || $id == '34')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '35' || $id == '36')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '37' || $id == '38')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '39' || $id == '40')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '41' || $id == '42')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '43' || $id == '44')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '45' || $id == '46')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '47' || $id == '48')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '49' || $id == '50')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '51' || $id == '52')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '53' || $id == '54')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '55' || $id == '56')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul> 
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '57' || $id == '58')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>  
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '59' || $id == '60')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>    
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '61' || $id == '62')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>     
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '63' || $id == '64')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
					        </div>  <!-- END ROUND ONE -->

					        <div class="round round-two">
					            <div class="round-details">Day 2<br/><span class="date">Bracket A</span></div>         
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>            
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>      
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>            
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>    
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>                                       
					        </div>  <!-- END ROUND TWO -->
					        
					        <div class="round round-three">
					            <div class="round-details">Day 3<br/><span class="date">Bracket A</span></div>         
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>                                       
					        </div>  <!-- END ROUND THREE -->        
					    </div> 

						<div class="champion">
					        <div class="semis-l">
					            <div class="round-details">west semifinals <br/><span class="date">March 26-28</span></div>     
					            <ul class ="matchup championship">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li></a>
					            </ul>
					        </div>
					        <div class="final">
					            <i class="fa fa-trophy"></i>
					            <div class="round-details">championship <br/><span class="date">March 30 - Apr. 1</span></div>      
					            <ul class ="matchup championship">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li></a>
					            </ul>
					        </div>
					        <div class="semis-r">       
					            <div class="round-details">east semifinals <br/><span class="date">March 26-28</span></div>     
					            <ul class ="matchup championship">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="vote-count">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="vote-count">&nbsp;</span></li></a>
					            </ul>
					        </div>  
					    </div>

					    <div class="split split-two">


					        <div class="round round-three">
					            <div class="round-details">Day 3<br/><span class="date">Bracket B</span></div>                     
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>                                       
					        </div>  <!-- END ROUND THREE -->    

					        <div class="round round-two">
					            <div class="round-details">Day 2<br/><span class="date">Bracket B</span></div>               
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>            
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>      
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>            
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>    
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>   
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>
					            <ul class="matchup">
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top">&nbsp;<span class="score">&nbsp;</span></li></a>
					                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-bottom">&nbsp;<span class="score">&nbsp;</span></li></a>
					            </ul>                                            
					        </div>  <!-- END ROUND TWO -->
					        <div class="round round-one current">
					            <div class="round-details">Day 1<br/><span class="date">Bracket B</span></div>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '65' || $id == '66')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>          
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '67' || $id == '68')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>          
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '69' || $id == '70')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>   
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '71' || $id == '72')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>        
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '73' || $id == '74')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul> 
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '75' || $id == '76')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '77' || $id == '78')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '79' || $id == '80')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '81' || $id == '82')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '83' || $id == '84')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '85' || $id == '86')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '87' || $id == '88')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '89' || $id == '90')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '91' || $id == '92')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '93' || $id == '94')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '95' || $id == '96')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '97' || $id == '98')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '99' || $id == '100')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '101' || $id == '102')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '103' || $id == '104')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '105' || $id == '106')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '107' || $id == '108')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '109' || $id == '110')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '111' || $id == '112')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '113' || $id == '114')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '115' || $id == '116')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '117' || $id == '118')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '119' || $id == '120')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '121' || $id == '122')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '123' || $id == '124')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '125' || $id == '126')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
						        <ul class="matchup">
									<?php 
										include 'credentials/connection.php';

										$query = mysqli_query($conn, "SELECT * FROM tournament_schedule ");
										$i = 1;
										while ($row = mysqli_fetch_array($query)) {
											$id = $row['id'];
										?>
										<?php 
											if (($id == '127' || $id == '128')) {
											?>
							                <a href="javascript:void(0);" data-toggle="modal" data-target="#myId<?php echo $row['id']; ?>"><li class="team team-top"><?php echo $row['team_captain']; ?><span class="score"></span></li></a>
										<?php }	?>
						        	<?php } ?>
						        </ul>
					        </div>  <!-- END ROUND ONE -->                          
					    </div>
				    </div>
				</section>
			</div>
		</div>
	</section>
	<!-- Page section end -->
	
	<!-- Footer section -->
	<?php include '_footer.php'; ?>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<?php include '_js.php'; ?>
</body>
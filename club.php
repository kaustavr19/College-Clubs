<?php $active="club"; ?>
<!DOCTYPE html><html lang="en">
	<head>
		<title>Club Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" >
		<link rel="stylesheet" type="text/css" href="plugins/video-js/video-js.css">
		<link rel="stylesheet" type="text/css" href="styles/main.css">
		<link rel="stylesheet" type="text/css" href="styles/instructors.css">
		<link rel="stylesheet" type="text/css" href="styles/instructors_responsive.css">
	</head>
	<body>
		<div class="super_container">
			<?php require "layout/header.php"; ?>
			<?php require "layout/mobile.php"; ?>
			<div class="home"></div>
			<div class="video">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2">
							<div class="video_content">
								<div class="video_container_outer">
									<div class="video_overlay d-flex flex-column align-items-start justify-content-center">
										<div>Welcome</div><div>to</div><div>College Clubs</div>
									</div>
									<div class="video_container">
										<video id="vid1" class="video-js vjs-default-skin" controls width="100%" height="100%" data-setup='{ "poster": "images/video.jpg", "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "https://youtu.be/IV3ueyrp5M4"}], "youtube": { "iv_load_policy": 1 } }'></video>
									</div>
								</div>
								<div class="register_button"><a href="#">register</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="instructors">
				<div class="instructors_background" style="background-image:url(images/instructors_background.png)"></div>
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="section_title text-center">The Core Team</h2>
						</div>
					</div>
					<div class="row instructors_row">
						<div class="col-lg-4 instructor_col">
							<div class="instructor text-center">
								<div class="instructor_image_container">
									<div class="instructor_image"><img src="images/suvra.jpg" alt=""></div>
								</div>
								<div class="instructor_name"><a href="instructors.html">Suvra Shaw</a></div>
								<div class="instructor_title">Member</div>
								<div class="instructor_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
								</div>
								<div class="instructor_social">
									<ul>
										<li><a href="https://www.facebook.com/suvrashaw"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="https://www.linkedin.com/in/suvrashaw/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
										<li><a href="https://github.com/suvrashaw/College-Clubs"><i class="fa fa-github" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 instructor_col">
							<div class="instructor text-center">
								<div class="instructor_image_container">
									<div class="instructor_image"><img src="images/chirasree.jpg" alt=""></div>
								</div>
								<div class="instructor_name"><a href=>Chirasree Chowdhury</a></div>
								<div class="instructor_title">Member</div>
								<div class="instructor_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
								</div>
								<div class="instructor_social">
									<ul>
										<li><a href="https://www.facebook.com/chirasree.chowdhury.5"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 instructor_col">
							<div class="instructor text-center">
								<div class="instructor_image_container">
									<div class="instructor_image"><img src="images/kaustav.jpg" alt=""></div>
								</div>
								<div class="instructor_name"><a href=>Kaustav Roy</a></div>
								<div class="instructor_title">Member</div>
								<div class="instructor_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
								</div>
								<div class="instructor_social">
									<ul>
										<li><a href="https://www.facebook.com/profile.php?id=100010612216032"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="https://www.linkedin.com/in/kaustav-roy-8070111a3/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-4 instructor_col">
						</div>
						<div class="col-lg-4 instructor_col">
							<div class="instructor text-center">
								<div class="instructor_image_container">
									<div class="instructor_image"><img src="images/annesha.jpg" alt=""></div>
								</div>
								<div class="instructor_name"><a href=>Annesha Basu</a></div>
								<div class="instructor_title">Member</div>
								<div class="instructor_text">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor.</p>
								</div>
								<div class="instructor_social">
									<ul>
										<li><a href="https://www.facebook.com/annesha.basu.180"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="https://www.linkedin.com/in/annesha-basu-63075b200/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!---div class="teachers">
				<div class="container">
					<div class="row">
						<div class="col">
							<h2 class="section_title text-center">Our Members</h2>
						</div>
					</div>
					<div class="row teachers_row">
						<div class="col-lg-4 col-md-6">
							<div class="teacher d-flex flex-row align-items-center justify-content-start">
								<div class="teacher_image"><div><img src="images/suvra.jpg" alt=""></div></div>
								<div class="teacher_content">
									<div class="teacher_name"><a href=>Suvra Shaw</a></div>
									<div class="teacher_title">Student</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="teacher d-flex flex-row align-items-center justify-content-start">
								<div class="teacher_image"><div><img src="images/chirashree.jpg" alt=""></div></div>
								<div class="teacher_content">
									<div class="teacher_name"><a href=>Chirashree Chowdhury</a></div>
									<div class="teacher_title">Student</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="teacher d-flex flex-row align-items-center justify-content-start">
								<div class="teacher_image"><div><img src="images/soukarja.jpg" alt=""></div></div>
								<div class="teacher_content">
									<div class="teacher_name"><a href=>Soukarja Dutta</a></div>
									<div class="teacher_title">Student</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div--->
			<?php require "layout/footer.php"; ?>
		</div>
		<script src="js/jquery-3.2.1.min.js"></script>
		<script src="styles/bootstrap4/popper.js"></script>
		<script src="styles/bootstrap4/bootstrap.min.js"></script>
		<script src="js/course.js"></script>
		<script src="plugins/video-js/video.min.js"></script>
		<script src="plugins/video-js/Youtube.min.js"></script>
		<script src="js/instructors.js"></script>
	</body>
</html>
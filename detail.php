<?php

include 'teamArray.php';
/*This should mean all the info is in $detailArray*/
$detailArray = $team[$_GET['name']];

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?= $detailArray['name']."'s Resume" ?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?=$detailArray['name'].'\'s Resume'?>>
    <meta name="author" content="Your name">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary"><?='Back to index'?></a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?=$detailArray['name']?></h1>
							    <div class="title mb-3"><?=$detailArray['desiredJobtitle'] ?></div>
							    <ul class="list-unstyled">
									<li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?=$detailArray['email'] ?></a></li>
								<li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?=$detailArray['number'] ?></a></li>
							  
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?=$detailArray['linkedIn'] ?></a></li>
					                <li class="mb-3"><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?=$detailArray['gitHub'] ?></a></li>
					                <li><a class="text-link" href="#"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?=$detailArray['website'] ?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Summary'?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?=$detailArray['summary'] ?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Work Experience'?></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
									    <?php foreach ($detailArray['jobs'] as $job) 
									    { ?>
								    <article class="resume-timeline-item position-relative pb-5">
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?=$job['title'] ?></h3>
										        <div class="resume-company-name ms-auto"><?=$job['company']?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?=$job['tenure'] ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?=$job['description'] ?></p>
										    <?php if(empty($job['Achieivements'])) {}
										    else{
										    ?>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?='Achievements:'?></h4>
										    <ul>
										    <?php foreach($job['Acheivements'] as $acheivement) {?>
											    <li><?=$acheivement?></li>
											<?php }}?>
										    </ul>
										    <?php if(empty($job['techUsed'])){ } 
										    else{
										    ?>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php 'Technologies used:'?></h4>
										    <ul class="list-inline">
										    <?php foreach($job['techUsed'] as $tech){ ?>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?= $tech?></span></li>
										<?php }?>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->

								    </article><!--//resume-timeline-item-->
								    <?php }}?>
								   

							    </div><!--//resume-timeline-->
							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Skills &amp; Tools' ?></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
						        	<?php foreach ($detailArray['skills'] as $skill => $number) { ?>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?= $skill?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?=$number?>" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
								      <?php }?>
							        </ul>
						        </div><!--//resume-skill-item-->

						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"><?='Others'?></h4>
						            <ul class="list-inline">
						            	<?php foreach($detailArray['otherSkill'] as $otherSkill) 
						            	{ ?>
							            <li class="list-inline-item"><span class="badge badge-light"><?=$otherSkill?></span></li>
						            	<?php } ?>

						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Education'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
							    	<?php foreach($detailArray['education'] as $edu) {?>
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?=$edu[0]?></div>
								        <div class="resume-degree-org"><?=$edu[1]?></div>
								        <div class="resume-degree-time"><?=$edu[2]?></div>
								    </li>
								<?php } ?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <?php if(empty($detailArray['awards'])) {}
							else{ ?>
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?='Awards'?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
							    	<?php foreach($detailArray['awards'] as $award => $desc) {?>
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>

								        <div class="resume-award-name"><?=$award?></div>
								        <div class="resume-award-desc"><?=$desc?></div>
								    </li>
								  <?php } ?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					<?php } ?>
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Languages</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold">English</span> <small class="text-muted font-weight-normal">(Native)</small></li>
								    <li class="mb-2 align-middle"><span class="resume-lang-name font-weight-bold">French</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
								    <li><span class="resume-lang-name font-weight-bold">Spanish</span> <small class="text-muted font-weight-normal">(Professional)</small></li>
							    </ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Interests</h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
								    <li class="mb-1">Climbing</li>
								    <li class="mb-1">Snowboarding</li>
								    <li class="mb-1">Cooking</li>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3">Projects</h2>
					<div class="row mt-4">
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image1.jpg" alt="Project 1" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 1</h5>
									<p class="card-text">Brief description of Project 1.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image2.jpg" alt="Project 2" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 2</h5>
									<p class="card-text">Brief description of Project 2.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="card">
								<img src="path-to-project-image3.jpg" alt="Project 3" class="card-img-top">
								<div class="card-body">
									<h5 class="card-title">Project 3</h5>
									<p class="card-text">Brief description of Project 3.</p>
									<a href="btn btn-outline-primary" href="#">Go to link</a>
								</div>
							</div>
						</div>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> by Your names</small>
    </footer>

    

</body>
</html>


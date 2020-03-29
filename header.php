<!DOCTYPE html>
<html lang="en">
<head>
	<title>माेदी अनलाइन</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome-5.0.8/css/fontawesome-all.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body  >
	
	<!-- Header -->
	<header>
		<!-- Header desktop -->
		<div class="container-menu-desktop">
			<div class="topbar">
				<div class="content-topbar container h-100">
					<div class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span><?php
							date_default_timezone_set("Asia/Kathmandu");
                            echo date('F jS,y h:i:s A');
                            ?>
							</span>

							
						</span>

						<a href="#" class="left-topbar-item">
							हाम्राे बारे
						</a>

						<a href="#" class="left-topbar-item">
							सम्पर्क
						</a>
						<a href="#" class="left-topbar-item">
							लग इन
						</a>
					</div>

					<div class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</div>
				</div>
			</div>

			<!-- Header Mobile -->
			<div class="wrap-header-mobile">
				<!-- Logo moblie -->		
				<div class="logo-mobile">
					<a href="index.php"><img src="images/icons/logo-01.png" alt="IMG-LOGO"></a>
				</div>

				<!-- Button show menu -->
				<div class="btn-show-menu-mobile hamburger hamburger--squeeze m-r--8">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</div>
			</div>

			<!-- Menu Mobile -->
			<div class="menu-mobile">
				<ul class="topbar-mobile">
					<li class="left-topbar">
						<span class="left-topbar-item flex-wr-s-c">
							<span>
                            <?php
                            echo date("Y-m-d")
                            ?>
							</span>

							
						</span>
					</li>

					<li class="left-topbar">
						<a href="#" class="left-topbar-item">
							About
						</a>

						<a href="#" class="left-topbar-item">
							Contact
						</a>

						<a href="#" class="left-topbar-item">
							Log in
						</a>
					</li>

					<li class="right-topbar">
						<a href="#">
							<span class="fab fa-facebook-f"></span>
						</a>

						<a href="#">
							<span class="fab fa-twitter"></span>
						</a>

						<a href="#">
							<span class="fab fa-pinterest-p"></span>
						</a>

						<a href="#">
							<span class="fab fa-vimeo-v"></span>
						</a>

						<a href="#">
							<span class="fab fa-youtube"></span>
						</a>
					</li>
				</ul>

				<ul class="main-menu-m">
					<li>
						<a href="index.php">Home</a>
                    </li>
                    <?php 
                                include('db/connection.php');
                                $categoryname=null;
                            
                                $query=mysqli_query($conn,"select * from category order by id   ");
                                while($row=mysqli_fetch_array($query)){
                                     $categoryname=$row['category_name'];

                                ?>

					<li>
						<a href="category_page.php?category=<?php echo $categoryname;?>"><?php echo $categoryname;?></a>
                    </li>
                                <?php }?>


				
				</ul>
			</div>
			
			<!--  -->
			<div class="wrap-logo container">
				<!-- Logo desktop -->		
				<div class="logo">
					<a href="index.php"><img src="images/icons/logo-01.png" alt="LOGO"></a>
				</div>	

				<!-- Banner -->
				<div class="banner-header">
				<?php 
					include('db/connection.php');

					$query5=mysqli_query($conn,"select * from ad order by id desc limit 1");
					$row5=mysqli_fetch_array($query5);
					?>
							<a href="#"><img src="images/<?php echo $row5['file'];?>" alt="IMG"></a>
				</div>
			</div>	
			
			<!--  -->
			<div class="wrap-main-nav">
				<div class="main-nav">
					<!-- Menu desktop -->
					<nav class="menu-desktop">
						<a class="logo-stick" href="index.php">
							<img src="images/icons/logo-01.png" alt="LOGO">
						</a>

						<ul class="main-menu">
							<li class="main-menu-active">
								<a href="index.php">गृहपृष्ठ</a>
							
                            </li>
                            <?php 
                                include('db/connection.php');
                                $categoryname=null;
                            
                                $query=mysqli_query($conn,"select * from category order by id   ");
                                while($row=mysqli_fetch_array($query)){
                                     $categoryname=$row['category_name'];

                                ?>

							<li class="mega-menu-item">
								<a href="category_page.php?category=<?php echo $categoryname;?>"><?php echo $categoryname;?></a>
								<div class="sub-mega-menu">
									<div class="tab-content">
										<div class="tab-pane show active" id="news-0" role="tabpanel">
											<div class="row">
                                            <?php 
                                                include('db/connection.php');
                                            
                                                $query1=mysqli_query($conn,"select * from news  where category='$categoryname' limit 3 ");  
                                                while($row=mysqli_fetch_array($query1)){
                                                   

                                                ?>
												<div class="col-3">
													<!-- Item post -->	
													<div>
														<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="wrap-pic-w hov1 trans-03">
															<img src="images/<?php echo $row['thumbnail'];?>" alt="IMG">
														</a>

														<div class="p-t-10">
															<h5 class="p-b-5">
																<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
                                                                    <?php echo $row['title'];?>
																</a>
															</h5>

															<span class="cl8">
																

																<span class="f1-s-3">
                                                                <?php echo date("F jS,y",strtotime($row['date']));?>
																</span>
															</span>
														</div>
                                                    </div>
                                                    
                                                </div>
                                                <?php }?>
                                                
                                            </div>              
										</div>
									</div>
								</div>
                            </li>
                                <?php }?>
						</ul>
					</nav>
				</div>
			</div>	
		</div>
	</header>

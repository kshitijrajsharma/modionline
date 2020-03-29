<?php
include('header.php');
 ?>
	<!-- Headline -->
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 size-w-0 m-tb-6 flex-wr-s-c">
				<span class="text-uppercase cl2 p-r-8">
					ट्रेन्डिगं न्यूज ः
				</span>

				<span class="dis-inline-block cl6 slide100-txt pos-relative size-w-0" data-in="fadeInDown" data-out="fadeOutDown">
				<?php 
                  include('db/connection.php');
              
                  $query=mysqli_query($conn,"select * from news order by count desc limit 3");
                  while($row=mysqli_fetch_array($query)){

                  ?>
					<span class="dis-inline-block slide100-txt-item animated visible-false" ><a class="text-dark"href="single_news.php?single=<?php echo $row["id"];  ?>">
					<?php echo $row["title"];  ?></a>
					</span>
					<?php } ?>
				</span>
			</div>

			<div class="pos-relative size-a-2 bo-1-rad-22 of-hidden bocl11 m-tb-6">
				<input class="f1-s-1 cl6 plh9 s-full p-l-25 p-r-45" type="text" name="search" placeholder="Search">
				<button class="flex-c-c size-a-1 ab-t-r fs-20 cl2 hov-cl10 trans-03">
					<i class="zmdi zmdi-search"></i>
				</button>
			</div>
		</div>
	</div>
		
	<!-- Feature post -->
	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<div class="col-md-6 p-rl-1 p-b-2">
				<?php 
					include('db/connection.php');
				
					$query=mysqli_query($conn,"select * from news order by id desc limit 1");
					$row=mysqli_fetch_array($query);
					?>
					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(images/<?php echo $row['thumbnail'];?>);">
						<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="category_page.php?category=<?php echo $row['category_name'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								<?php echo $row['category'];?>
							</a>

							<h3 class="how1-child2 m-t-14 m-b-10">
								<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="how-txt1 size-a-6 f1-l-1 cl0 hov-cl10 trans-03">
									<?php echo $row['title'];?>
								</a>
							</h3>

							<span class="how1-child2">
								<span class="f1-s-4 cl11">
									माेदी संवाददाता
								</span>

								<span class="f1-s-3 cl11 m-rl-3">
									-
								</span>

								<span class="f1-s-3 cl11">
									<?php echo date("F jS,y",strtotime($row['date']));?>
								</span>
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 p-rl-1">
					<div class="row m-rl--1">
						<div class="col-12 p-rl-1 p-b-2">
						<?php 
							include('db/connection.php');
						
							$query1=mysqli_query($conn,"select * from news order by id desc limit 1,1");
							$row=mysqli_fetch_array($query1);
							?>
							<div class="bg-img1 size-a-4 how1 pos-relative" style="background-image: url(images/images/<?php echo $row['thumbnail'];?>);">
								<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="dis-block how1-child1 trans-03"></a>
								<div class="flex-col-e-s s-full p-rl-25 p-tb-24">
									<a href="category_page.php?category=<?php echo $row['category_name'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $row['category'];?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="how-txt1 size-a-7 f1-l-2 cl0 hov-cl10 trans-03">
											<?php echo $row['title'];?>
										</a>
									</h3>
								</div>
							</div>
						</div>
						<?php 
							include('db/connection.php');
						
							$query2=mysqli_query($conn,"select * from news order by id desc limit 2,2");
							while($row=mysqli_fetch_array($query2)){

							?>

						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-5 how1 pos-relative" style="background-image: url(images/<?php echo $row['thumbnail'];?>);">
								<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="category_page.php?category=<?php echo $row['category_name'];?>" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $row['category'];?>
									</a>

									<h3 class="how1-child2 m-t-14">
										<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="how-txt1 size-h-1 f1-m-1 cl0 hov-cl10 trans-03">
											<?php echo $row['title'];?>
										</a>
									</h3>
								</div>
							</div>
						</div>
							<?php }?>
					</div>
				</div>
							
			</div>
		</div>
	</section>

	<!-- Post -->
	<section class="bg0 p-t-70">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					
					<div class="p-b-20">
					<?php 
                                include('db/connection.php');
                                $categoryname=null;
                            
                                $query=mysqli_query($conn,"select * from category order by id   ");
                                while($row=mysqli_fetch_array($query)){
                                     $categoryname=$row['category_name'];

                                ?>
						<!-- Entertainment -->
						<div class="tab01 p-b-20">
							<div class="tab01-head how2 how2-cl1 bocl12 flex-s-c m-r-10 m-r-0-sr991">
								<!-- Brand tab -->
								<h3 class="f1-m-2 cl12 tab01-title">
									<?php echo $categoryname;?>
								</h3>

								<a href="category_page.php?category=<?php echo $categoryname;?>" class="tab01-link f1-s-1 cl9 hov-cl10 trans-03">
									View all
									<i class="fs-12 m-l-5 fa fa-caret-right"></i>
								</a>
							</div>
								

							<!-- Tab panes -->
							<div class="tab-content p-t-35">
								<!-- - -->
								<div class="tab-pane fade show active" id="tab1-1" role="tabpanel">
									<div class="row">
										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->	
											<div class="m-b-30">
											<?php 
                                                include('db/connection.php');
                                            
                                                $query1=mysqli_query($conn,"select * from news  where category='$categoryname' limit 1 ");  
                                                $row1=mysqli_fetch_array($query1);
                                                   

                                                ?>
												<a href="single_news.php?single=<?php echo $row1["id"];  ?>" class="wrap-pic-w hov1 trans-03">
													<img src="images/<?php echo $row1['thumbnail'];?>" alt="IMG">
												</a>

												<div class="p-t-20">
													<h5 class="p-b-5">
														<a href="single_news.php?single=<?php echo $row1["id"];  ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
															<?php echo $row1['title'];?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
														 <?php echo $row1['category'];?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
															<?php echo date("F jS,y",strtotime($row1['date']));?>
														</span>
													</span>
												</div>
											</div>
										</div>

										<div class="col-sm-6 p-r-25 p-r-15-sr991">
											<!-- Item post -->
											<?php 
                                                include('db/connection.php');
                                            
                                                $query2=mysqli_query($conn,"select * from news  where category='$categoryname' limit 1,2 ");  
                                                while($row2=mysqli_fetch_array($query2)){
                                                   

                                                ?>	
											<div class="flex-wr-sb-s m-b-30">
												<a href="blog-detail-01.html" class="size-w-1 wrap-pic-w hov1 trans-03">
													<img src="images/<?php echo $row2['thumbnail'];?>" alt="IMG">
												</a>

												<div class="size-w-2">
													<h5 class="p-b-5">
														<a href="single_news.php?single=<?php echo $row2["id"];  ?>" class="f1-s-5 cl3 hov-cl10 trans-03">
															<?php echo $row2['title'];?>
														</a>
													</h5>

													<span class="cl8">
														<a href="#" class="f1-s-6 cl8 hov-cl10 trans-03">
														<?php echo $row2['category'];?>
														</a>

														<span class="f1-s-3 m-rl-3">
															-
														</span>

														<span class="f1-s-3">
														<?php echo date("F jS,y",strtotime($row2['date']));?>
														</span>
													</span>
												</div>
											</div>
											<?php }?>									
										</div>
									</div>
								</div>
							</div>
						</div>
												<?php }?>
					</div>
				</div>

				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!--  -->
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									सवार्धिक रूचाइएकाे
								</h3>
							</div>

							<ul class="p-t-35">
							<?php 
								include('db/connection.php');
								$i=0;
								$query=mysqli_query($conn,"select * from news order by count desc limit 6");
								while($row=mysqli_fetch_array($query)){
									$i++;

								?>
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										<?php echo $i;  ?>
									</div>

									<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										<?php echo $row["title"];  ?>
									</a>
								</li>
								<?php }?>

							</ul>
						</div>

						<!--  -->
						<div class="flex-c-s p-t-8">
						<?php 
								include('db/connection.php');
			
								$query4=mysqli_query($conn,"select * from ad order by id  limit 1,1");
								$row4=mysqli_fetch_array($query4);
								?>
							<a href="#">
								<img class="max-w-full" src="images/<?php echo $row4['file'];?>" alt="IMG">
							</a>
						</div>
						
						<!--  -->
						<div class="p-t-50">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									जाेडिनुहाेस
								</h3>
							</div>

							<ul class="p-t-35">
								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-facebook fs-16 cl0 hov-cl0">
										<span class="fab fa-facebook-f"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											6879 Fans
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Like
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-twitter fs-16 cl0 hov-cl0">
										<span class="fab fa-twitter"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											568 Followers
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Follow
										</a>
									</div>
								</li>

								<li class="flex-wr-sb-c p-b-20">
									<a href="#" class="size-a-8 flex-c-c borad-3 size-a-8 bg-youtube fs-16 cl0 hov-cl0">
										<span class="fab fa-youtube"></span>
									</a>

									<div class="size-w-3 flex-wr-sb-c">
										<span class="f1-s-8 cl3 p-r-20">
											5039 Subscribers
										</span>

										<a href="#" class="f1-s-9 text-uppercase cl3 hov-cl10 trans-03">
											Subscribe
										</a>
									</div>
								</li>
							</ul>
						</div>
						<div>
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									भर्खरै
								</h3>
							</div>

							<ul class="p-t-35">
							<?php 
								include('db/connection.php');
								$i=0;
								$query=mysqli_query($conn,"select * from news order by id desc limit 6");
								while($row=mysqli_fetch_array($query)){
									$i++;

								?>
								<li class="flex-wr-sb-s p-b-22">
									<div class="size-a-8 flex-c-c borad-3 size-a-8 bg9 f1-m-4 cl0 m-b-6">
										<?php echo $i;  ?>
									</div>

									<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="size-w-3 f1-s-7 cl3 hov-cl10 trans-03">
										<?php echo $row["title"];  ?>
									</a>
								</li>
								<?php }?>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Banner -->
	<div class="container">
		<div class="flex-c-c">
		<?php 
			include('db/connection.php');

			$query5=mysqli_query($conn,"select * from ad order by id desc limit 2,1");
			$row5=mysqli_fetch_array($query5);
			?>
			<a href="#">
				<img class="max-w-full" src="images/<?php echo $row5['file'];?>" alt="IMG">
			</a>
		</div>
	</div>

	<!-- Latest -->
	<section class="bg0 p-t-60 p-b-35">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-20">
					<div class="how2 how2-cl4 flex-s-c m-r-10 m-r-0-sr991">
						<h3 class="f1-m-2 cl3 tab01-title">
							फिचर गरिएको
						</h3>
					</div>

					<div class="row p-t-35">
					<?php 
						include('db/connection.php');
					
						$query1=mysqli_query($conn,"select * from news  where Editor='yes' limit 4 ");  
						while($row=mysqli_fetch_array($query1)){
							

						?>
						<div class="col-sm-6 p-r-25 p-r-15-sr991">
							<!-- Item latest -->	
							<div class="m-b-45">
								<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="wrap-pic-w hov1 trans-03">
									<img src="images/<?php echo $row['thumbnail'];?>" alt="IMG">
								</a>

								<div class="p-t-16">
									<h5 class="p-b-5">
										<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="f1-m-3 cl2 hov-cl10 trans-03">
											<?php echo $row['title'];?>
										</a>
									</h5>

									<span class="cl8">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											माेदी संवाददाता
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

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

				<div class="col-md-10 col-lg-4">
					<div class="p-l-10 p-rl-0-sr991 p-b-20">
						<!-- Video -->
						<div class="p-b-55">
							<div class="how2 how2-cl4 flex-s-c m-b-35">
								<h3 class="f1-m-2 cl3 tab01-title">
									फिचर गरिएको
								</h3>
							</div>

							<div>
								<div class="wrap-pic-w pos-relative">
									<img src="images/video-01.jpg" alt="IMG">

									<button class="s-full ab-t-l flex-c-c fs-32 cl0 hov-cl10 trans-03" data-toggle="modal" data-target="#modal-video-01">
										<span class="fab fa-youtube"></span>
									</button>
								</div>

								<div class="p-tb-16 p-rl-25 bg3">
									<h5 class="p-b-5">
										<a href="#" class="f1-m-3 cl0 hov-cl10 trans-03">
											Youtube Video 
										</a>
									</h5>

									<span class="cl15">
										<a href="#" class="f1-s-4 cl8 hov-cl10 trans-03">
											माेदी संवाददाता
										</a>

										<span class="f1-s-3 m-rl-3">
											-
										</span>

										<span class="f1-s-3">
											Feb 18
										</span>
									</span>
								</div>
							</div>	
						</div>
							
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-55">
							<h5 class="f1-m-5 cl0 p-b-10">
								Subscribe
							</h5>

							<p class="f1-s-1 cl0 p-b-25">
								Get all latest content delivered to your email a few times a month.
							</p>

							<form class="size-a-9 pos-relative">
								<input class="s-full f1-m-6 cl6 plh9 p-l-20 p-r-55" type="text" name="email" placeholder="Email">

								<button class="size-a-10 flex-c-c ab-t-r fs-16 cl9 hov-cl10 trans-03">
									<i class="fa fa-arrow-right"></i>
								</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
      include('footer.php');
      ?>
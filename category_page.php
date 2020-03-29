<?php
include('header.php');
 ?>
	<!-- Breadcrumb -->
	<?php 
		include('db/connection.php');
		$id=(isset($_GET['category']) ? $_GET['category'] : null);
            $page=(isset($_GET['page']) ? $_GET['page'] : null); 
            if($page=="" || $page=="1"){
                $page1=0;
            }else{
                $page1=($page*8)-8;
            }
	
		?>
	<div class="container">
		<div class="bg0 flex-wr-sb-c p-rl-20 p-tb-8">
			<div class="f2-s-1 p-r-30 m-tb-6">
				<a href="index.php" class="breadcrumb-item f1-s-3 cl9">
					Home 
				</a>

				<a href="category-02.html" class="breadcrumb-item f1-s-3 cl9">
					Category
				</a>

				<span class="breadcrumb-item f1-s-3 cl9">
					<?php echo $id;?>
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

	<!-- Page heading -->
	<div class="container p-t-4 p-b-40">
		<h2 class="f1-l-1 cl2">
			<?php echo $id;?>
		</h2>
	</div>
		
	<!-- Feature post -->
	<section class="bg0">
		<div class="container">
			<div class="row m-rl--1">
				<div class="col-md-6 p-rl-1 p-b-2">
					<?php 
							include('db/connection.php');			
							$query1=mysqli_query($conn,"select * from news where category='$id' limit $page1,1");
							$row=mysqli_fetch_array($query1);
							?>
					<div class="bg-img1 size-a-3 how1 pos-relative" style="background-image: url(images/<?php echo $row['thumbnail'];?>);">
						<a href="blog-detail-01.html" class="dis-block how1-child1 trans-03"></a>

						<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
							<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
								<?php echo $row["category"];  ?>
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
								<?php echo date("F jS,y h:i:s A",strtotime($row['date']));?>
								</span>
							</span>
						</div>
					</div>
				</div>

				<div class="col-md-6 p-rl-1">
				
					<div class="row m-rl--1">
					<?php 
						include('db/connection.php');
						$page2=$page1+1;
					
						$query2=mysqli_query($conn,"select * from news where category='$id' limit $page2,4");
						while($row=mysqli_fetch_array($query2)){

						?> 
						<div class="col-sm-6 p-rl-1 p-b-2">
							<div class="bg-img1 size-a-14 how1 pos-relative" style="background-image: url(images/<?php echo $row['thumbnail'];?>);">
								<a href="single_news.php?single=<?php echo $row["id"];  ?>" class="dis-block how1-child1 trans-03"></a>

								<div class="flex-col-e-s s-full p-rl-25 p-tb-20">
									<a href="#" class="dis-block how1-child2 f1-s-2 cl0 bo-all-1 bocl0 hov-btn1 trans-03 p-rl-5 p-t-2">
										<?php echo $row["category"];  ?>
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
	<section class="bg0 p-t-70 p-b-55">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8 p-b-80">
					<div class="row">
					<?php 
						include('db/connection.php');
						$page3=$page1+4;
						$query2=mysqli_query($conn,"select * from news where category='$id' limit $page3,8");
						while($row=mysqli_fetch_array($query2)){

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
											<?php echo date("F jS,y h:i:s A",strtotime($row['date']));?>
										</span>
									</span>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
					<ul class="pagination">
						<li class="page-item disabled">
						<a href="#" class="page-link">Prev </a> </li>

					<?php

						$sql= mysqli_query($conn,"select * from news where category='$id'");
						
						$row=mysqli_fetch_array($sql);
						$count=mysqli_num_rows($sql);
						$a=$count/8;
						ceil($a);
						for($b=1;$b<=$a;$b++){
							?>

							<li class="page-item"><a class="page-link" href="category_page.php?page=<?php echo $b;?>&category=<?php echo $row['category'];?>"
						><?php echo $b; ?></a></li>
						<?php } ?>
								<li class="page-item disabled">
										<a href="#" class="page-link">Next </a> </li>
					</ul>

					


						






					
				</div>

				<div class="col-md-10 col-lg-4 p-b-80">
					<div class="p-l-10 p-rl-0-sr991">							
						<!-- Subscribe -->
						<div class="bg10 p-rl-35 p-t-28 p-b-35 m-b-50">
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

						<!-- Most Popular -->
						<div class="p-b-23">
							<div class="how2 how2-cl4 flex-s-c">
								<h3 class="f1-m-2 cl3 tab01-title">
									Most Popular
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
						<div class="flex-c-s p-b-50">
							<a href="#">
								<img class="max-w-full" src="images/banner-02.jpg" alt="IMG">
							</a>
						</div>
						
					
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php
      include('footer.php');
      ?>
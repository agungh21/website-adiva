<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Nemesis | Minimal Blog HTML Template</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:900%7CNunito:400,700%7COswald%7CRoboto" rel="stylesheet">
		<link href="{{ url('themes/nemesis/css/animate.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ url('themes/nemesis/css/fonts.css') }}" rel="stylesheet" media="screen">
		<link href="{{ url('themes/nemesis/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">
		<link href="{{ url('themes/nemesis/css/style.css') }}" rel="stylesheet" media="screen">
	</head>
	<body>
		<div id="fbt-content-overlay" onclick="closeNav()"></div>
		<form autocomplete="off" id="search" role="search">
			<div class="input">
				<input class="search" name="search" placeholder="Search..." type="text" />
				<button class="submit fa fa-search" type="submit" value=""></button>
			</div>
			<button id="close" type="reset" value="">×</button>
		</form>
		<!-- #search -->
		<div id="page-wrapper" class="feed-view">
			<nav class="navbar navbar-expand-xl navbar-fbt fbt-nav-skin fbt_sticky_nav">
				<div class="container nav-mobile-px clearfix">
					<div class="navbar-brand order-2 order-xl-1 m-auto">
						<a href="./index.html"><img alt="Nemesis" src="{{ url('themes/nemesis/images/logo_nemesis.png') }}"></a>
					</div>
					<button aria-expanded="false" aria-label="Toggle navigation"
						class="navbar-toggler order-1 order-xl-2" data-target="#navbar-menu" data-toggle="collapse"
						type="button">☰</button>
					<div class="header-buttons order-3 order-lg-4">
						<span class="fa fa-search navbar-search search-trigger"></span>
						<span class="fbt-sidenav ml-1 active" onclick="openNav()">☰</span>
					</div>
					<div class="collapse navbar-collapse order-4 order-xl-3 clearfix" id="navbar-menu">
						<ul class="navbar-nav m-auto clearfix">
							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Home</a>
								<div class="dropdown-menu">
									<a href="./index.html" class="dropdown-item">Home 1</a>
									<a href="./index-2.html" class="dropdown-item">Home 2</a>
									<a href="./index-3.html" class="dropdown-item">Home 3</a>
									<a href="./index-7.html" class="dropdown-item">Home 4</a>
									<a href="./index-8.html" class="dropdown-item">Home 5</a>
								</div>
							</li>
							<li class="nav-item">
								<a href="./contact.html" class="nav-link">Contact</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Sport</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Policy</a>
							</li>
							<li class="nav-item dropdown">
								<a href="#" class="nav-link dropdown-toggle" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">Features</a>
								<div class="dropdown-menu">
									<a href="#" class="dropdown-item">Feature 1</a>
									<a href="#" class="dropdown-item">Feature 2</a>
									<a href="#" class="dropdown-item">Feature 3</a>
									<a href="#" class="dropdown-item">Feature 5</a>
									<a href="#" class="dropdown-item">Feature 6</a>
									<a href="#" class="dropdown-item">Feature 7</a>
								</div>
							</li>
							<li class="nav-item">
								<a href="./error.html" class="nav-link">Error Page</a>
							</li>
							<li class="nav-item">
								<a href="#" class="nav-link">Lifestyle</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- .navbar end-->
			<div class="slider-container">
				<div class="slider-container-row" id="slider-posts">
					<div class="widget fbt_fp-slider">
						<div class="widget-content">
							<div class="container">
								<div class="row align-items-center slider-width">
									<div class="col-lg-7">
										<div class="fbt-shape-container">
											<div class="fbt-item-thumbnail radius-10">
												<a class="post-image-link" href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded" data-src="{{ url('themes/nemesis/images/img-1.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
										</div>
									</div>
									<div class="col-lg-5 mt-4 mt-lg-0">
										<div class="fbt-shape-title pl-xl-5 pl-lg-4">
											<h1 class="display-4">
												<a href="./single.html">Etiam nec enim id mi maximus consequat sed ut tortor.</a>
											</h1>
											<div class="post-meta my-4">
												<span class="post-author">fbtemplates</span>
												<span class="post-date published">March 08, 2017</span>
											</div>
											<a href="./single.html">
											<span class="fbt_read_more btn btn-primary-slider radius-25 px-5 mt-2">Keep reading ...</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- .slider-container end-->
			<div class="outer-wrapper clearfix" id="outer-wrapper">
				<div class="container fbt-elastic-container">
					<div class="row justify-content-center">
						<!-- Main Wrapper -->
						<div class="fbt-main-wrapper col-xl-12">
							<div id="main-wrapper">
								<div class="main-section" id="main_content">
									<div class="blog-posts fbt-index-post-wrap card-columns">
										<div class="blog-post fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded" data-src="{{ url('themes/nemesis/images/img-2.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">June 19, 2019</span>
												</div>
												<p class="post-excerpt card-text">
													Lorem ipsum dolor sit amet,
													consectetur adipiscing elit. Donec facilisis leo et bibendum
													pretium. Suspendisse li…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded" data-src="{{ url('themes/nemesis/images/img-3.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Nunc tellus libero, tempus id luctus eget, fermentum.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">June 05, 2019</span>
												</div>
												<p class="post-excerpt card-text">
													Donec dolor elit, pellentesque a massa
													pellentesque, euismod sagittis ipsum. Nullam a diam ac turpis
													iaculis vu…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./video_post.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-4.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
												<span class="video-icon"><i class="fa fa-play"></i></span>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./video_post.html">
													The
													future of news blogger themes. Custom post carousel.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">September 13, 2018</span>
												</div>
												<p class="post-excerpt card-text">
													Fames dictumst massa massa, qui sapien
													per, mauris id sed cubilia suspendisse neque. Proin natoque
													consectetuer…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-5.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Lorem ipsum dolor sit amet. Custom Post Gallery.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">May 26, 2018</span>
												</div>
												<p class="post-excerpt card-text">
													Phasellus deserunt. Convallis
													perspiciatis fusce fermentum accumsan, arcu aliquam, velit venenatis
													augue proin,…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-6.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Lorem ipsum sit amet, consectetur adipiscing elit.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">April 02, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Phasellus deserunt. Convallis
													perspiciatis fusce fermentum accumsan, arcu aliquam, velit venenatis
													augue proin,…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-7.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Nunc accumsan ex ligula, in sapien consectetur.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 31, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Donec dolor elit, pellentesque a massa
													pellentesque, euismod sagittis ipsum. Nullam a diam ac turpis
													iaculis vu…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-8.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 30, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Lorem ipsum dolor sit amet,
													consectetur adipiscing elit. Ut porttitor leo vel nulla posuere
													accumsan. Suspendis…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-9.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Suspendisse posuere mi lacus, leo gravida eu.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 28, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Lorem ipsum dolor sit amet,
													consectetur adipiscing elit. Ut porttitor leo vel nulla posuere
													accumsan. Suspendis…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-10.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Duis tempor purus rutrum, tincidunt lacus.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 28, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Donec dolor elit, pellentesque a massa
													pellentesque, euismod sagittis ipsum. Nullam a diam ac turpis
													iaculis vu…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-11.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Vestibulum maximus ipsum lacus, tempus suscipit augue.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 28, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Lorem ipsum dolor sit amet,
													consectetur adipiscing elit. Ut porttitor leo vel nulla posuere
													accumsan. Suspendis…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-12.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Etenim semper illud extra est, quod arte comprehenditur.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 28, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Lorem ipsum dolor sit amet,
													consectetur adipiscing elit. Cum id quoque, ut cupiebat, audivisset,
													evelli iussit …
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-13.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Morbi lobortis ultricies urna, neque aliquam sit amet.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 28, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Maecenas luctus arcu porta accumsan
													viverra. Sed odio eros, dictum non augue et, tincidunt ullamcorper
													ex. Sed …
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./video_post.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-14.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
												<span class="video-icon"><i class="fa fa-play"></i></span>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./video_post.html">
													Sed odio eros, dictum non augue et, tincidunt.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 28, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Lorem ipsum dolor sit amet,
													consectetur adipiscing elit. Donec facilisis leo et bibendum
													pretium. Suspendisse l…
												</p>
											</div>
										</div>
										<div class="blog-post hentry fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-15.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Suspendisse sed tortor eget justo aliquam euismod.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 28, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Lorem ipsum dolor sit amet,
													consectetur adipiscing elit. Ut porttitor leo vel nulla posuere
													accumsan. Suspendis…
												</p>
											</div>
										</div>
										<div class="blog-post fbt-index-post card radius-10">
											<div class="fbt-post-thumbnail">
												<a href="./single.html">
												<img alt="" class="post-thumbnail lazyloaded"  data-src="{{ url('themes/nemesis/images/img-16.jpg') }}" 
													src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==">
												</a>
											</div>
											<div class="fbt-post-caption card-body">
												<h3 class="post-title h4 card-title">
													<a href="./single.html">
													Nunc accumsan ex ligula, in malesuada sapien consectetur.
													</a>
												</h3>
												<div class="post-meta">
													<span class="post-author"><a href="#">fbtemplates</a></span>
													<span class="post-date published">March 28, 2017</span>
												</div>
												<p class="post-excerpt card-text">
													Lorem ipsum dolor sit amet,
													consectetur adipiscing elit. Donec facilisis leo et bibendum
													pretium. Suspendisse l…
												</p>
											</div>
										</div>
									</div>
									<div class="blog-pager" id="blog-pager">
										<div class="list-inline">
											<a class="blog-pager-older-link list-inline-item" href="#" title="More posts">
												<div class="fbt-bp-message text-uppercase font-weight-bold">More posts</div>
												<span aria-hidden="true" class="fa fa-angle-down"></span>
											</a>
										</div>
									</div>
									<!-- #blog-pager -->
								</div>
							</div>
							<!-- #main-wrapper -->
						</div>
						<!-- .fbt-main-wrapper -->
						<!-- Sidebar Wrapper -->
						<div class="sidebar-wrapper" id="sidebar-wrapper">
							<div class="sidebar-wrapper__content">
								<div class="navigation-container clearfix">
									<span class="closebtn" onclick="closeNav()">×</span>
								</div>
								<div class="sidebar-top section" id="menu_sidebar">
									<div class="widget LinkList">
										<div class="widget-content fbt-sidebar--menu">
											<ul class="list-group">
												<li class="list-group-item"><a href="/">HOME</a></li>
												<li class="list-group-item"><a href="#">ABOUT</a></li>
												<li class="list-group-item"><a href="#">SERVICES</a></li>
												<li class="list-group-item"><a href="#">CONTACT</a></li>
												<li class="list-group-item"><a href="#">PRIVACY</a></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="sidebar section" id="main_sidebar">
									<div class="widget Label">
										<div class="fbt-sep-title">
											<h4 class="title title-heading-left">Categories</h4>
											<div class="title-sep-container">
												<div class="title-sep sep-double"></div>
											</div>
										</div>
										<div class="widget-content cloud-label--widget-content">
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Business</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Carousel</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Design</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Entertainment</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Featured</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Friends</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Home</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Lifestyle</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">People</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Slider</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Sport</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Technology</span></a>
											<a href="#"><span class="badge badge-success py-1 px-2 mb-1">Training</span></a>
										</div>
									</div>
									<div class="widget BlogArchive">
										<div class="fbt-sep-title">
											<h4 class="title title-heading-left">Archive</h4>
											<div class="title-sep-container">
												<div class="title-sep sep-double"></div>
											</div>
										</div>
										<div class="widget-content">
											<div id="ArchiveList">
												<div id="BlogArchive1_ArchiveList">
													<ul class="flat list-unstyled">
														<li class="archivedate">
															<a href="#">June<span class="post-count float-right badge badge-primary">2</span></a>
														</li>
														<li class="archivedate">
															<a href="#">September<span class="post-count float-right badge badge-primary">1</span></a>
														</li>
														<li class="archivedate">
															<a href="#">May<span class="post-count float-right badge badge-primary">1</span></a>
														</li>
														<li class="archivedate">
															<a href="#">April<span class="post-count float-right badge badge-primary">1</span></a>
														</li>
														<li class="archivedate">
															<a href="#">March<span class="post-count float-right badge badge-primary">26</span></a>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- #sidebar-wrapper -->
					</div>
				</div>
			</div>
			<div class="fbt-bottom-section clearfix" id="fbt_bottom_section">
				<div class="widget FollowByEmail" >
					<div class="widget-content">
						<div class="container">
							<div class="row justify-content-center">
								<div class="follow-by-email-inner subscriber-form col-lg-10">
									<div class="card radius-10 p-5">
										<div class="row justify-content-center align-items-center py-3">
											<div class="col-lg-3">
												<h2 class="title h1 mb-4 mb-lg-0 text-center text-lg-left">
													Subscribe to our Newsletter
												</h2>
											</div>
											<div class="col-lg-8 pl-lg-4">
												<form action="#" class="fbt-email-form" method="post" >
													<input autocomplete="off" class="follow-by-email-address" name="email" placeholder="Enter your Email" type="email">
													<input class="follow-by-email-submit" type="submit" value="Subscribe">
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- .FollowByEmail -->
			</div>
			<!-- #fbt_bottom_section -->
			<div class="fbt-bottom-shape">
				<svg class="fbt-footer-wave-big" preserveAspectRatio="none" version="1.1" viewBox="5 0 1366 222" width="100%">
					<path
						d="M-2.19,238H1366v-4.27c-67.87-24-146.44-43.08-230.75-53.19-253.33-27.78-293.94,51.64-541.13,29.89C318.08,186.31,289.49,32.92,6.9,11.73c-5.21-.42-10.56-.7-15.9-1V238Z" 
						transform="translate(9.5 -10.22)">
					</path>
				</svg>
			</div>
			<!-- .fbt-bottom-shape -->
			<div class="footer-dark pt-4" id="footer-content">
				<div class="container pb-4">
					<div class="row clearfix">
						<div class="col-lg-4">
							<div class="footer-1" id="footer-1">
								<div class="logoImage">
									<div class="widget-content">
										<img alt="" src="{{ url('themes/nemesis/images/logo-light.png') }}">
									</div>
								</div>
								<div class="widget Text">
									<div class="widget-content">
										<p>
											Phasellus deserunt. Convallis perspiciatis fusce fermentum accumsan, arcu
											aliquam, velit venenatis augue proin, enim etiam dolor.
											Mi ac lectus vitae cum, fusce purus posuere.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 ml-lg-auto">
							<div class="footer-2 section" id="footer-2">
								<div class="widget">
									<h4 class="title title-heading">
										About
									</h4>
									<div class="widget-content list-label-widget-content">
										<ul class="list-unstyled">
											<li><a class="label-name" href="#">Home</a></li>
											<li><a class="label-name" href="#">Lifestyle</a></li>
											<li><a class="label-name" href="#"> People</a></li>
											<li><a class="label-name" href="#">Slider</a></li>
											<li><a class="label-name" href="#">Sport</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2">
							<div class="footer-3 section" id="footer-3">
								<div class="widget">
									<h4 class="title title-heading">
										Categories
									</h4>
									<div class="widget-content list-label-widget-content">
										<ul class="list-unstyled">
											<li><a class="label-name" href="#">Business</a></li>
											<li><a class="label-name" href="#">Design</a></li>
											<li><a class="label-name" href="#">Lifestyle</a></li>
											<li><a class="label-name" href="#">Technology</a></li>
											<li><a class="label-name" href="#">Training</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-2 last">
							<div class="footer-4 section" id="footer-4">
								<div class="widget">
									<h4 class="title title-heading">
										Account
									</h4>
									<div class="widget-content list-label-widget-content">
										<ul class="list-unstyled">
											<li><a class="label-name" href="#">Business</a></li>
											<li><a class="label-name" href="#">Design</a></li>
											<li><a class="label-name" href="#">Entertainment</a></li>
											<li><a class="label-name" href="#">Featured</a></li>
											<li><a class="label-name" href="#">Technology</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="credits">
					<div class="container">
						<div class="row divider py-4">
							<div class="col-lg-6">
								<div class="copyright-section text-center text-lg-left">
									© <script>document.write(new Date().getFullYear());</script> Nemesis | All Rights Reserved
								</div>
							</div>
							<div class="col-lg-6">
								<div class="footer-menu section" id="footer-menu">
									<div class="widget socialList">
										<div class="widget-content">
											<ul class="nav">
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fa fa-facebook"></i></a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fa fa-twitter"></i></a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
												</li>
												<li class="nav-item">
													<a class="nav-link" href="#"><i class="fa fa-youtube-play"></i></a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- #footer-content -->
		</div>
		<!-- #page-wrapper end -->
		<script src="{{ url('themes/nemesis/js/jquery.min.js') }}"></script>
		<script src="{{ url('themes/nemesis/js/bootstrap.bundle.min.js') }}"></script>
		<script src="{{ url('themes/nemesis/js/plugins.js') }}"></script>
		<script src="{{ url('themes/nemesis/js/main.js') }}"></script>
	</body>
</html>
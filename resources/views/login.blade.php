@extends('layouts.lay')

@section('content')
	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-default" style="color: #ffffff">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user" style="background-color: #4DB6AC">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="assets/images/placeholder.jpg" class=" img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold">Nama User</span>
									<span class="media-heading text-size-mini">mail@mail.com</span>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
								<!-- Main -->
								<li class="navigation-header"><span>Menu</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="index.html"><i class="icon-home4"></i> <span>Home</span></a></li>
								<li><a href="index.html"><i class="icon-store"></i> <span>Warung</span></a></li>
								<li><a href="index.html"><i class="glyphicon glyphicon-align-center"></i>  <span>Kategori</span></a></li>
								<li><a href="index.html"><i class="icon-cart5"></i><span>Pesanan Saya</span></a></li>
								<li><a href="index.html"><i class="icon-store2"></i> <span>Buka Warung</span></a></li>
							</ul>
							<ul class="navigation navigation-main navigation-accordion">
								<!-- Main -->
								<li class="navigation-header"><span>Others</span> <i class="icon-menu" title="Main pages"></i></li>
								<li><a href="index.html"><i class="icon-cog3"></i> <span>Pengaturan</span></a></li>
								<li><a href="index.html"><i class="icon-exit"></i> <span>Keluar</span></a></li>
							</ul>
						</div>
					</div>
					<!-- /main navigation -->
				</div>
			</div>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">
				<div class="row">
						<div class="col-sm-4 col-lg-2">
							<div class="panel">
								<div class="bg-info-800 demo-color"><span>info-800</span></div>

								<div class="p-15">
									<div class="media-body">
										<strong>Info 800</strong>
										<div class="text-muted mt-5">#00838F</div>
									</div>

									<div class="media-right">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#info_800"><i class="icon-three-bars"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4 col-lg-2">
							<div class="panel">
								<div class="bg-info-800 demo-color"><span>info-800</span></div>

								<div class="p-15">
									<div class="media-body">
										<strong>Info 800</strong>
										<div class="text-muted mt-5">#00838F</div>
									</div>

									<div class="media-right">
										<ul class="icons-list">
											<li><a href="#" data-toggle="modal" data-target="#info_800"><i class="icon-three-bars"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
			<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
@endsection
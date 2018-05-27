<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Web Goner</title>

		<!-- Global stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
		<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
		<link href="assets/css/core.css" rel="stylesheet" type="text/css">
		<link href="assets/css/components.css" rel="stylesheet" type="text/css">
		<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
		<!-- /global stylesheets -->

		<!-- Core JS files -->
		<script type="text/javascript" src="{{ url('/assets/js/plugins/loaders/pace.min.js') }}"></script>
		<script type="text/javascript" src="/assets/js/core/libraries/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/core/libraries/bootstrap.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/loaders/blockui.min.js"></script>
		<!-- /core JS files -->

		<!-- Theme JS files -->
		<script type="text/javascript" src="/assets/js/plugins/forms/inputs/typeahead/handlebars.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/forms/inputs/alpaca/alpaca.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/forms/selects/select2.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/ui/prism.min.js"></script>
		<script type="text/javascript" src="/assets/js/plugins/forms/styling/uniform.min.js"></script>

		<script type="text/javascript" src="/assets/js/core/app.js"></script>
		<script type="text/javascript" src="/assets/js/pages/alpaca_basic.js"></script>
		<!-- /theme JS files -->

	</head>

	<body>
		<!-- Main navbar -->
		<div class="navbar navbar-inverse" style="background-color: #2ea9c1;">
			<div class="navbar-header">
				<ul class="nav navbar-nav pull-left visible-xs-block">
					<li><a class=""><i class="icon-arrow-left8"></i> </a></li>
				</ul>
				<a class="navbar-brand" href="index.html"><b style="font-size: 18px">Goner</b></a>
				<ul class="nav navbar-nav pull-right visible-xs-block">
					<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
				</ul>
			</div>

			<div class="navbar-collapse collapse" id="navbar-mobile">
				<ul class="nav navbar-nav">
					<li>
						<a class="sidebar-control sidebar-main-toggle hidden-xs" data-popup="tooltip" title="Collapse main" data-placement="bottom" data-container="body">
							<i class="icon-paragraph-justify3"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- /main navbar -->
		@yield('content')
	</body>
</html>

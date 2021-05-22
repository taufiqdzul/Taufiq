<head>
	<style type="text/css">
		.navbar{
			border-radius: 0px;
			background-color: #333;
		}
		.active{
			background-color: #e6e6e6;
		}
		.navbar-tulisan{
			color: #FFCC29;
		}
		.nav:hover{
			color: #FFCC29;
		}
	</style>
</head>
<nav class="navbar navbar-fixed-top navbar-tulisan">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url()."index.php/KasirController/kasir_beli_buku"; ?>">
				<img class="" src="<?php echo base_url()."assets/img/header.png" ?>" style="width:20px;">
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama_kasir'); ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo base_url()."index.php/LoginController/do_logout" ?>">Logout</a></li>
					</ul>
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

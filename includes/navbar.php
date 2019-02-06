<section id="parallax">
	<div class="parallax">

  		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
		    	<ul class="navbar-nav mr-auto">
			   	 	<li class="nav-item non-active">

			   	 	<?php if( isset($_SESSION['id']) && !empty($_SESSION['id']) ){?>
						   
			        	<h3 class="text-dark">Hello 
							<?php
								echo $_SESSION['username'];
							?>
						!</h3>

						<?php }else{ ?>
								<h3 class="text-dark">Welcome!</h3>
					<?php } ?>

			    	</li>

		    	</ul>
		    	<form class="form-inline my-2 my-lg-0">

				<?php if( isset($_SESSION['id']) && !empty($_SESSION['id']) ){?>
						    <a class="btn btn-outline-danger my-2 my-sm-0 py-1" href="index.php?logout=logout">LOGOUT</a>
						<?php }else{ ?>
						    <a class="btn btn-outline-success my-2 my-sm-0 py-1" href="registration.php">REGISTER</a>
							<a class="btn btn-outline-success my-2 my-sm-0 py-1" href="login.php">LOGIN</a>
					<?php } ?>

		    	</form>
			</div>
		</nav>

		<div class="container">
			<div class="row py-5">
				<div class="col-lg-4 p-3 wow bounceInLeft" style="background-color:#0F2B45; opacity: 0.9; margin-bottom: 0px;">
					 <a class="text-light float-left navbar-brand text-uppercase ml-5" href="index.html"><b>WuxiaWorld <span class="text-primary">Novels</span></b></a>
				</div>
			</div>
		</div>
	</div>
</section>
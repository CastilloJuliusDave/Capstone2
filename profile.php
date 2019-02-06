<?php
	include 'core/init.php';
?>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
		<?php
			include 'includes/sidebar.php';
		?>

        <!-- Page Content  -->
        <div id="content">
			<?php
				include 'includes/top_nav.php';
			?>

			<div class="row">

					<?php
						include 'includes/profile.info.php';
					?>
			</div>

            
        </div>
    </div>



  <?php
	include "includes/footer.php";
?> 

</body>

</html>
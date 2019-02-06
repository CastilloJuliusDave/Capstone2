<!-- Vendor -->
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/jquery.browser.mobile.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        
        <script src="assets/js/nanoscroller.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/magnific-popup.js"></script>
        <script src="assets/js/jquery.placeholder.js"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="assets/js/theme.js"></script>

        <!-- Theme Custom -->
        <script src="assets/js/theme.custom.js"></script>

        <!-- Theme Initialization Files -->
        <script src="assets/js/theme.init.js"></script>

	


	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/wow.js"></script>
	<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>

        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>


<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">Copyright &copy; 2018 - SPC Learner Information System Ver. 1.0</span>
						</span>

						
					</div>
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo site_url();?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
		<script src="assets/js/jquery-1.11.3.min.js"></script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo site_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="<?php echo site_url();?>assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="<?php echo site_url();?>assets/js/jquery-ui.custom.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.easypiechart.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.sparkline.index.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.flot.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.flot.pie.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->
		<script src="<?php echo site_url();?>assets/js/ace-elements.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/ace.min.js"></script>


		<script type="text/javascript">
		$("#show").click(function() {
		    $.ajax({
		        type: "POST",
		        data: {search: $('input#search').val(), field: $('select#selector').val()},
		        url: "<?php echo base_url(); ?>" + "Mycontroller/show_customers",
		        success: function(data) {
		            $("#customers-list").html(data);
		        }
		    });
		});
		</script>
		
	</body>
</html>



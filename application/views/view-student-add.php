
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>Add Student</title>

		<meta name="description" content="User login page" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php echo site_url();?>assets/font-awesome/4.5.0/css/font-awesome.min.css" />

		<!-- text fonts -->
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace.min.css" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-part2.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="<?php echo site_url();?>assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="<?php echo site_url();?>assets/js/html5shiv.min.js"></script>
		<script src="<?php echo site_url();?>assets/js/respond.min.js"></script>
		<![endif]-->


		<style type="text/css">
			.login-box {
				margin-top: 150px;
			}
			
		</style>
	</head>

	<body class="login-layout">
		<div class="main-container">
			<div class="main-content">
				<h2></h2>
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div>
							<div class="position-relative">
								<div id="login-box" class=" visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
											<h2 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Students Information
											</h2>

											<div class="space-6"></div>

											<form method="post" action="<?php echo site_url() . 'students/add/' . $class_id; ?>">
												<fieldset>
													<legend>Student's Information:</legend>
													<div class="row">
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="lrn" class="form-control" placeholder="LRN Number" value="<?= set_value('lrn') ?>" />
															</label>
															<?php echo form_error('lrn'); ?>
														</div>
														<div class="col-md-8 col-md-offset-8"">
														</div>
													</div>


													<div class="row">
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?= set_value('last_name') ?>" />
															</label>
															<?php echo form_error('last_name'); ?>
														</div>

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?= set_value('first_name') ?>" />
															</label>
															<?php echo form_error('first_name'); ?>
														</div>
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="middle_name" class="form-control" placeholder="Middle Name" value="<?= set_value('middle_name') ?>"/>
															</label>
															<?php echo form_error('middle_name'); ?>
														</div>

													</div>


													<div class="row">
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="ext_name" class="form-control" placeholder="Extension Name" value="<?= set_value('ext_name') ?>"/>
															</label>
															<?php echo form_error('ext_name'); ?>
														</div>

														

														<div class="col-md-4">
															<label class="block clearfix">
																<select name="gender" class="form-control">
																	<option value="" disabled selected hidden>Select</option>
															        <option value="M">Male</option>
															        <option value="F">Female</option>
														      </select>
															</label>
															<?php echo form_error('gender'); ?>
														</div>

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="date" name="birth_date" class="form-control" placeholder="Date of Birth" value="<?= set_value('birth_date') ?>" />
															</label>
															<?php echo form_error('birth_date'); ?>
														</div>
													</div>

													<div class="row">

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="mother_tongue" class="form-control" placeholder="Mother Tongue" value="<?= set_value('mother_tongue') ?>"/>
															</label>
															<?php echo form_error('mother_tongue'); ?>
														</div>
														

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="ethnic_group" class="form-control" placeholder="Ethnic Group" value="<?= set_value('ethnic_group') ?>"/>
															</label>
															<?php echo form_error('ethnic_group'); ?>
														</div>
														
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="religion" class="form-control" placeholder="Religion" value="<?= set_value('religion') ?>"/>
															</label>
															<?php echo form_error('religion'); ?>
														</div>
													
													</div>	

													<div class="row">

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="previous_school" class="form-control" placeholder="Previous School Attended" value="<?= set_value('previous_school') ?>"/>
															</label>
															<?php echo form_error('previous_school'); ?>
														</div>
													</div>

												</fieldset>

												<fieldset>
													<legend>Adress:</legend>

													
													<div class="row">
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="barangay" class="form-control" placeholder="Barangay" value="<?= set_value('barangay') ?>"/>
															</label>
															<?php echo form_error('barangay'); ?>
														</div>
														
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="city" class="form-control" placeholder="City" value="<?= set_value('city') ?>"/>
															</label>
															<?php echo form_error('city'); ?>
														</div>
														

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="province" class="form-control" placeholder="Province" value="<?= set_value('province') ?>"/>
															</label>
															<?php echo form_error('province'); ?>
														</div>
													</div>

												</fieldset>

												<fieldset>
													<legend>Father's Name:</legend>
													<div class="row">
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="father_firstname" class="form-control" placeholder="Father First Name" value="<?= set_value('father_firstname') ?>"/>
															</label>
														</div>
									

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="father_middlename" class="form-control" placeholder="Father Middle Name" value="<?= set_value('father_middlename') ?>"/>
															</label>
														</div>
							

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="father_lastname" class="form-control" placeholder="Father Last Name" value="<?= set_value('father_lastname') ?>"/>
															</label>
														</div>
													
													</div>

													<div class="row">
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="father_contact" class="form-control" placeholder="Father Contact Number" value="<?= set_value('father_contact') ?>"/>
															</label>
														</div>
													</div>	
											
												</fieldset>

												<fieldset>
													<legend>Mother's Maiden Name:</legend>

													<div class="row">

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="mother_first_name" class="form-control" placeholder="Mother First Name" value="<?= set_value('mother_first_name') ?>"/>
															</label>
															<?php echo form_error('mother_first_name'); ?>
														</div>
														

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="mother_middle_name" class="form-control" placeholder="Mother Middle Name" value="<?= set_value('mother_middle_name') ?>"/>
															</label>
															<?php echo form_error('mother_middle_name'); ?>
														</div>
														

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="mother_last_name" class="form-control" placeholder="Mother Last Name" value="<?= set_value('mother_last_name') ?>"/>
															</label>
															<?php echo form_error('mother_last_name'); ?>
														</div>
													</div>

													<div class="row">

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="mother_contact" class="form-control" placeholder="Mother Contact Number" value="<?= set_value('mother_contact') ?>"/>
															</label>
															<?php echo form_error('mother_contact'); ?>
														</div>
													</div>
											
												</fieldset>

												<fieldset>
													<legend>Guardian's Name:</legend>
													<div class="row">
														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="guardian_first_name" class="form-control" placeholder="Guardian First Name" value="<?= set_value('guardian_first_name') ?>"/>
															</label>
														</div>
														


														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="guardian_middle_name" class="form-control" placeholder="Guardian Middle Name" value="<?= set_value('guardian_middle_name') ?>"/>
															</label>
														</div>
												

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="guardian_last_name" class="form-control" placeholder="Guardian Last Name" value="<?= set_value('guardian_last_name') ?>"/>
															</label>
														</div>
													</div>

													<div class="row">

														<div class="col-md-4">
															<label class="block clearfix">
																<input type="text" name="guardian_relationship" class="form-control" placeholder="Guardian Relationship" value="<?= set_value('guardian_relationship') ?>"/>
															</label>
														</div>

													</div>

											
												</fieldset>
												
												<div class="space"></div>

													

												<div class="clearfix">

													<button type="submit" class=" btn  btn-primary">
														<i class="ace-icon fa fa-save"></i>
														<span class="bigger-110">Submit</span>
													</button>

													<a href="<?php echo site_url();?>"class=" btn  btn-primary">
														<i class="ace-icon fa fa-home"></i>
														<span class="bigger-110">Home</span>
													</a>
												</div>


												
											</form>
										</div><!-- /.widget-main -->
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->

								
							</div><!-- /.position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="<?php echo site_url();?>assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="<?php echo site_url();?>assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='<?php echo site_url();?>assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>

	</body>
</html>
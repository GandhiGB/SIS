

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">HOME</a>
							</li>

							<li>
								
								<?php echo "  " . strtoupper($this->uri->segment(1)); ?>
							</li>

						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">		

						<div class="row">
							<div class="col-xs-12 ">
								<!-- PAGE CONTENT BEGINS -->

								<h2></h2>




								<?php 

									if (!empty($class)) {
									
										foreach ($class as $key => $value) {
											
											echo '<div class="col-lg-3 col-md-3 col-sm-3">
													<div class="panel panel-default">
														<div class="panel-heading">
															<strong>' .$value->grade_level. '</strong>
														</div>
										
														<ul class="list-group">
															<li class="list-group-item clearfix">
																<p>
																	<span class="label lebel-default pull-right">'.$enrollment_count[$key].'</span>
																	<a href="#">'.$value->section_name .'</a>

																</p>

																<div>
																	<div class="col-lg-6 btn-group">
																	<a href="'.site_url().'students/view/'. $value->class_id .'" class="btn btn-success">View</a>
																</div>
															</li>
														</ul>
													</div>
												  </div>';

										}

									}

									else {
										echo '<div class="well well-default">
												<h4>Notice!</h4>
												<p>You may not have advisory in this level or there is no class assigned to you yet!</p>

											  </div>';
									}

								?>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

			
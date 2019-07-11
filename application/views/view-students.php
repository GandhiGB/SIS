<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>
						</ul><!-- /.breadcrumb -->
					</div>

					<div class="page-content">		

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<h4></h4>

								<a href="<?php echo site_url() . 'students/add/' . $class_id; ?>">
										<button class="btn btn-success">Add Learner</button>
								</a>

								<h4></h4>

								<div class="table-responsive">
      								<table class="table table-bordered">
        								<thead>
											<tr>
												<th>#</th>
												<th>LRN</th>
												<th>Name</th>
												<th>Gender</th>
												<th>Scholar</th>
												<th>Scholarship type</th>
												<th>Enrollment Status</th>

											</tr>
										</thead>
										<tbody>
											
											<?php 

												foreach ($enrollment as $key => $value) {
													echo '<tr>';
													echo '<td>'.($key+1).'</td>';
													echo '<td>'.$value->lrn_number.'</td>';
													echo '<td>'.strtoupper($value->last_name). ', '. strtoupper($value->first_name). '</td>';
													echo '<td>'.strtoupper($value->gender).'</td>';
													echo '<td>'.strtoupper($value->scholar).'</td>';
													echo '<td>'.strtoupper($value->scholarship_type).'</td>';
													echo '<td>'.strtoupper($value->enrollment_status).'</td>';
													echo '<tr>';																						
													}
												?>
										
											</tbody>
										</table>
									</div>
								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

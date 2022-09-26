<!DOCTYPE html>
<html lang="zxx" class="js">

<!-- HEAD -->
<?php $this->load->view('backend/includes/head'); ?>
<!-- /HEAD -->

<body class="nk-body bg-lighter npc-general has-sidebar ">
<div class="nk-app-root">
	<!-- main @s -->
	<div class="nk-main ">

		<!-- /SidBar -->
		<?php $this->load->view('backend/includes/sidebar'); ?>
		<!-- /SidBar -->
		<!-- wrap @s -->
		<div class="nk-wrap ">


			<!-- /Header -->
			<?php $this->load->view('backend/includes/header'); ?>
			<!-- /Header -->

			<!-- content @s -->
			<div class="nk-content ">
				<div class="container-fluid">
					<div class="nk-content-inner">
						<div class="nk-content-body">
							<div class="components-preview wide-md mx-auto">
								<div class="nk-block nk-block-lg">
									<div class="nk-block-head">
									</div>
									<div class="card card-bordered animated fadeIn">
										<div class="card-inner">
											<div class="card-head">
												<h5 class="card-title">Student Registration Details</h5>
											</div>
											<form action="#" method="POST" id="update_my_details">
												<div class="row g-4">
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label" for="default-03">First Name</label>
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-user"></em>
																</div>
																<input type="text" class="form-control" name="first_name" id="first_name" value="<?= $registration->first_name; ?>"  readonly>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label" for="default-03">Middle Name</label>
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-user"></em>
																</div>
																<input type="text" class="form-control" name="middle_name" id="middle_name" value="<?= $registration->middle_name; ?>" readonly>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label" for="default-03">Last Name</label>
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-user"></em>
																</div>
																<input type="text" class="form-control" name="last_name" id="last_name" value="<?= $registration->last_name; ?>" readonly>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label" for="default-03">Email</label>
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-mail"></em>
																</div>
																<input type="email" class="form-control" name="email" id="email" value="<?= $registration->email; ?>" readonly>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label" for="default-03">Cell Number</label>
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-mobile"></em>
																</div>
																<input type="text" class="form-control" name="contact" id="contact" value="<?= $registration->contact; ?>" readonly>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label" for="default-03">Whatsapp Number</label>
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-whatsapp"></em>
																</div>
																<input type="text" class="form-control" name="whatsapp" id="whatsapp" value="<?= $registration->whatsapp; ?>" readonly>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label" for="default-03">Address</label>
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-map-pin"></em>
																</div>
																<input type="text" class="form-control" name="address" id="address" value="<?= $registration->address; ?>" readonly>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label" for="default-03">School Attended</label>
															<div class="form-control-wrap">
																<div class="form-icon form-icon-left">
																	<em class="icon ni ni-home"></em>
																</div>
																<input type="text" class="form-control" name="school_attended" id="school_attended" value="<?= $registration->school_attended; ?>" readonly>
															</div>
														</div>
													</div>
													<div class="col-sm-6">
															<div class="form-group">
																<label class="form-label" for="default-03">Date of birth</label>
																<div class="form-control-wrap">
																	<div class="form-icon form-icon-left">
																		<em class="icon ni ni-calendar"></em>
																	</div>
																	<input type="text" class="form-control date-picker" name="dob" id="dob" value="<?= $registration->dob; ?>" disabled>
																</div>
															</div>
														</div>
														<div class="col-md-6">
															<div class="form-group">
																<label class="form-label" for="gender">Gender</label>
																<div class="preview-block">
																	<div class="custom-control custom-radio">
																		<input type="radio" id="male" value="1" name="customRadio" class="custom-control-input" <?php if ($registration->gender == '1') { ?> checked <?php } ?> disabled>
																		<label class="custom-control-label" for="male">Male</label>

																	</div>

																	<div class="custom-control custom-radio" style="margin-left: 10px;">
																		<input type="radio" id="female" value="0" name="customRadio" class="custom-control-input" <?php if ($registration->gender == '0') { ?> checked <?php } ?> disabled>
																		<label class="custom-control-label" for="female">Female</label>

																	</div>
																</div>
															</div>
														</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label">Degree of Interest</label>
															<div class="form-control-wrap">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Degree" name="degree_of_interest" id="degree_of_interest" disabled>
																	<?php if($registration->degree_of_interest == 'AA') { ?>
																		<option value="AA">AA</option>
																		<option value="BA">BA</option>
																		<option value="MA">MA</option>
																		<option value="Doctorate">Doctorate</option>
																		<option value="Certificate">Certificate</option>
																	<?php } elseif($registration->degree_of_interest == 'BA') { ?>
																		<option value="BA">BA</option>
																		<option value="AA">AA</option>
																		<option value="MA">MA</option>
																		<option value="Doctorate">Doctorate</option>
																		<option value="Certificate">Certificate</option>
																	<?php } elseif($registration->degree_of_interest == 'MA') { ?>
																		<option value="MA">MA</option>
																		<option value="BA">BA</option>
																		<option value="AA">AA</option>
																		<option value="Doctorate">Doctorate</option>
																		<option value="Certificate">Certificate</option>
																	<?php } elseif($registration->degree_of_interest == 'Doctorate')  { ?>
																		<option value="Doctorate">Doctorate</option>
																		<option value="MA">MA</option>
																		<option value="BA">BA</option>
																		<option value="AA">AA</option>
																		<option value="Certificate">Certificate</option>
																	<?php } elseif($registration->degree_of_interest == 'Certificate') { ?>
																		<option value="Certificate">Certificate</option>
																		<option value="Doctorate">Doctorate</option>
																		<option value="MA">MA</option>
																		<option value="BA">BA</option>
																		<option value="AA">AA</option>
																	<?php } else { ?>
																		<option value="">Select Degree</option>
																		<option value="AA">AA</option>
																		<option value="BA">BA</option>
																		<option value="MA">MA</option>
																		<option value="Doctorate">Doctorate</option>
																		<option value="Certificate">Certificate</option>
																	<?php } ?>

																</select>
															</div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div><!-- .nk-block -->
							</div><!-- .components-preview -->
						</div>
					</div>
				</div>
			</div>
			<!-- content @e -->
			<!-- footer @s -->
			<?php $this->load->view('backend/includes/footer'); ?>
			<!-- footer @e -->
		</div>
		<!-- wrap @e -->
	</div>
	<!-- main @e -->
</div>
<!-- app-root @e -->



<!-- JavaScript -->
<?php $this->load->view('backend/includes/scripts'); ?>
<!-- /JavaScript -->



</body>

</html>

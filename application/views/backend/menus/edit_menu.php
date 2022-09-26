
<!DOCTYPE html>
<html lang="zxx" class="js">


<!-- HEAD -->
<?php $this->load->view('backend/includes/head'); ?>
<!-- /HEAD-->

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
										<!--										<div class="nk-block-head-content">-->
										<!--											<h4 class="title nk-block-title">Add Menu</h4>-->
										<!--											<div class="nk-block-des">-->
										<!--												<p>You can alow display form in column as example below.</p>-->
										<!--											</div>-->
										<!--										</div>-->
									</div>
									<div class="card card-bordered">
										<div class="card-inner">
											<div class="card-head">
												<h5 class="card-title">Add Menu</h5>
											</div>
											<form action="#" method="POST" id="update_menu">
												<div class="row g-4">
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label">Parent</label>
															<div class="form-control-wrap">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Main" name="parent" id="parent">
																	<option value="0">Main</option>
																	<?php for($i=0; $i<count($parents); $i++): ?>
																		<option value="<?php echo $parents[$i]['id'] ?>" <?php if ($menu_item['parent'] == $parents[$i]['id']) {
																			echo 'selected';
																		} ?> ><?php echo $parents[$i]['name'] ?>
																		</option>
																	<?php endfor; ?>
																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="form-label" for="Name">Name</label>
															<div class="form-control-wrap">
																<input type="text" class="form-control" name="name" id="name" value="<?= $menu_item['name']?>">
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label">Fonts</label>
															<div class="form-control-wrap">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Font Icon" name="class" id="class">
																	<option value="">Select Font Icon</option>

																	<?php for($i=0; $i<count($fonts); $i++): ?>
																		<option value="<?= $fonts[$i]['class'];?>" <?php if($menu_item['class'] == $fonts[$i]['class']) {
																			echo 'selected';
																		} ?> ><?= $fonts[$i]['class'];?></option>
																	<?php endfor; ?>

																</select>
															</div>
														</div>
													</div>
													<div class="col-lg-6">
														<div class="form-group">
															<label class="form-label" for="pay-amount-1">Order</label>
															<div class="form-control-wrap">
																<input type="number" class="form-control" name="display_order" id="display_order" value="<?= $menu_item['display_order']; ?>">
																<input type="hidden" class="form-control" name="current_display_order" id="current_display_order" value="<?= $menu_item['display_order']; ?>">
															</div>
														</div>
													</div>
													<div class="col-sm-6">
														<div class="form-group">
															<label class="form-label">Routes</label>
															<div class="form-control-wrap">
																<select class="form-select form-control form-control-lg" data-search="on" data-placeholder="Select Route" name="url" id="url">
																	<option value="">Select Route</option>
																	<?php for($i=0; $i<count($routes); $i++): ?>
																		<option value="<?= $routes[$i]['route'];?>" <?php if($menu_item['url'] == $routes[$i]['route']) {
																			echo 'selected';
																		} ?> ><?= $routes[$i]['label'];?> (<?= $routes[$i]['route'];?>)</option>
																	<?php endfor; ?>
																</select>
															</div>
														</div>
													</div>
													<input type="hidden" name="id" value="<?= $menu_item['id']; ?>">
													<div class="col-12">
														<div class="form-group">
															<button type="submit" class="btn btn-lg btn-primary">Save</button>
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
<!-- JavaScript -->
<?php $this->load->view('backend/includes/scripts'); ?>
<!-- /JavaScript -->

<script>


	$(document).ready(function () {
		$("#update_menu").on('submit', (function (e) {
			e.preventDefault();
			var fd = new FormData(this);
			$.ajax({
				url: '<?php echo base_url("Menus/save_admin_edit_menu") ?>',
				data: fd,
				type: "POST",
				contentType: false,
				processData: false,
				cache: false,
				beforeSend: function(){
					imageOverlay('#update_menu','show');
				},
				complete:function(data){
					imageOverlay('#update_menu','hide');
				},
				success: function (res) {
					var res = $.parseJSON(res);
					if (res.msg_type === 'success') {
						NioApp.Toast(res.message, 'success', {position: 'top-right', icon: 'auto', ui: ''});
						setTimeout(function(){
							window.location = res.redirect_link;
						}, 2000);

					} else {
						$("#msg").html(res);
						NioApp.Toast('<h5>' + res.message + '</h5>', 'error', {position: 'top-right', icon: 'auto', ui: ''});
					}
				},
				error: function (xhr) {
					$("#msg").html("Error: - " + xhr.status + " " + xhr.statusText);
				}
			});
		}));
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		});
	});



</script>

</html>

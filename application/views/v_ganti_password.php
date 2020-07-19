<div class="row">
	<div class="col-md-12">

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Tambah Member</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<form role="form" action="<?= base_url(); ?>Auth/ganti_password" method="POST">
							<div class="form-group">
								<label for="password">PASWORD BARU</label>
								<input type="password" class="form-control" name="password" id="password"  required>
							</div>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary float-right btn-block" >Submit</button>
				</div>
			</form>
		</div>
		<!-- /.card -->
	</div>
</div>

<div class="row">
	<div class="col-md-12">

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Tambah User</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" action="<?= base_url(); ?>Master_user/aksiTambah" method="POST">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="nama User" required>
								
							</div>
							<div class="form-group">
								<label for="username">username</label>
								<input type="text" class="form-control" name="username"  required>
							</div>
							<div class="form-group">
								<label for="akses">Akses</label>
								<select name="akses" class="form-control">
									<option value="">--Pilih Akses--</option>
									<option value="ADMIN" >ADMIN</option>
									<option value="KASIR">KASIR</option>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="no_telpon">Nomor Telpon</label>
								<input type="number" class="form-control" name="no_telpon" placeholder="ex: 085313xxxx" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password"
									required>
							</div>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary float-right">Submit</button>
				</div>
			</form>
		</div>
		<!-- /.card -->
	</div>
</div>

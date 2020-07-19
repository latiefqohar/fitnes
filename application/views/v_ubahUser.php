<div class="row">
	<div class="col-md-12">

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Tambah User</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" action="<?= base_url(); ?>Master_user/aksiUbah" method="POST">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="nama User" value="<?= $user['nama']; ?>" required>
								<input type="hidden" name="id" value="<?= $user['id']; ?>">
							</div>
							<div class="form-group">
								<label for="username">username</label>
								<input type="text" class="form-control" name="username" value="<?= $user['username']; ?>"  required>
							</div>
							<div class="form-group">
								<label for="akses">Akses</label>
								<select name="akses" class="form-control">
									<option value="">--Pilih Akses--</option>
									<option value="ADMIN" <?php if($user['akses']=="ADMIN"){echo "selected";} ?>>ADMIN</option>
									<option value="KASIR" <?php if($user['akses']=="KASIR"){echo "selected";} ?>>KASIR</option>
								</select>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="no_telpon">Nomor Telpon</label>
								<input type="number" class="form-control" name="no_telpon" placeholder="ex: 085313xxxx" value="<?= $user['no_telpon']; ?>" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" class="form-control" name="password" placeholder="isi bila ingin merubah password" >
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

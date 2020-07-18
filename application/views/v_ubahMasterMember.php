<div class="row">
	<div class="col-md-12">

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Ubah Member</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" action="<?= base_url(); ?>Master_member/aksiUbah" method="POST">
				<div class="card-body">
					<div class="form-group">
						<label for="id">ID Member</label>
						<input type="text" class="form-control" name="id" value="<?= $member['id']; ?>" readonly>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" name="nama" value="<?= $member['nama']; ?>" placeholder="nama member" required>
							</div>
							<div class="form-group">
								<label for="tanggal_lahir">Tanggal Lahir</label>
								<input type="date" class="form-control" name="tanggal_lahir" value="<?= $member['tanggal_lahir']; ?>"  required>
							</div>
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<textarea name="alamat"  class="form-control"><?= $member['alamat']; ?></textarea>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="no_telpon">Nomor Telpon</label>
								<input type="number" class="form-control" name="no_telpon" value="<?= $member['no_telpon']; ?>" placeholder="ex: 085313xxxx" required>
							</div>
							<div class="form-group">
								<label for="tgl_pendaftaran">Tanggal Pendaftaran</label>
								<input type="date" class="form-control" name="tgl_pendaftaran"
								value="<?= $member['tgl_pendaftaran']; ?>" required>
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

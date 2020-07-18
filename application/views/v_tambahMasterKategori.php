<div class="row">
	<div class="col-md-12">

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Tambah Kategori</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" action="<?= base_url(); ?>Master_kategori/aksiTambah" method="POST">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">Nama</label>
								<input type="text" class="form-control" name="nama" placeholder="nama kategori" required>
							</div>
							<div class="form-group">
								<label for="harga">Harga</label>
								<input type="number" class="form-control" name="harga"  required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="bulan_aktif">Aktif Selama</label>
								<input type="number" class="form-control" name="bulan_aktif" placeholder="Dalam Bulan ex:1" required>
							</div>
							<div class="form-group">
								<label for="keterangan">Keterangan</label>
								<input type="text" class="form-control" name="keterangan"
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

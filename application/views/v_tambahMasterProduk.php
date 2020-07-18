<div class="row">
	<div class="col-md-12">

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Tambah Produk</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" action="<?= base_url(); ?>Master_produk/aksiTambah" method="POST">
				<div class="card-body">
					<div class="form-group">
						<label for="nama_produk">Nama Produk</label>
						<input type="text" class="form-control" name="nama_produk" placeholder="ex : kredit konsumer"
							required>
					</div>
					<div class="form-group">
						<label for="id_tipe">Tipe Produk</label>
						<select name="id_tipe" class="form-control" required>
							<option value="">--Pilih Tipe Produk--</option>
							<?php foreach($tipe as $t){ ?>
							<option value="<?= $t->id; ?>"><?= $t->tipe; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="bunga">Bunga</label>
								<input type="number" class="form-control" name="bunga" placeholder="Dalam %" required>
							</div>
							<div class="form-group">
								<label for="provisi">Provisi</label>
								<input type="number" class="form-control" name="provisi" placeholder="Dalam %" required>
							</div>
							<div class="form-group">
								<label for="min_jangka_waktu">Min. Jangka Waktu</label>
								<input type="number" class="form-control" name="min_jangka_waktu"
									placeholder="Dalam Bulan" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="admin">Admin</label>
								<input type="number" class="form-control" name="admin" placeholder="Dalam %" required>
							</div>
							<div class="form-group">
								<label for="id_perhitungan_bunga">Jenis Perhitungan Bunga</label>
								<select name="id_perhitungan_bunga" class="form-control" required>
									<option value="">--pilih jenis--</option>
									<?php foreach($perhitungan as $p){ ?>
									<option value="<?= $p->id; ?>"><?= $p->nama_perhitungan; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="max_jangka_waktu">Max. Jangka Waktu</label>
								<input type="number" class="form-control" name="max_jangka_waktu"
									placeholder="Dalam Bulan" required>
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

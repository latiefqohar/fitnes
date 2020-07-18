<div class="row">
	<div class="col-md-12">
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Kirim Data Ke analis</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body ">
				<form action="<?= base_url(); ?>Pengajuan/prosesKirim" method="POST">
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th width="50px">ID</th>
								<th>Nama</th>
								<th>No. Telpon</th>
								<th>Tanggal Lahir</th>
								<th>Alamat</th>
								<th>Total Pengajuan</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?= $pengajuan['id_nasabah']; ?></td>
								<td><?= $pengajuan['nama']; ?></td>
								<td><?= $pengajuan['no_telpon']; ?></td>
								<td><?= $pengajuan['tgl_lahir']; ?></td>
								<td><?= $pengajuan['alamat']; ?></td>
								<td><?= $pengajuan['jumlah_pengajuan']; ?></td>
							</tr>
						</tbody>
					</table>
					<input type="hidden" name="id" value="<?= $pengajuan['id']; ?>">
					<div class="form-group mt-5">
						<label for="analis">ANALIS</label>
						<select name="analis" class="form-control" required>
							<option value="">--Silahkan Pilih Analis--</option>
							<?php foreach($analis as $row){ ?>
							<option value="<?= $row->id; ?>"><?= $row->nama; ?></option>
							<?php } ?>
						</select>
					</div>
					<div class="form-check">
						<input type="checkbox" class="form-check-input" id="exampleCheck1" required>
						<label class="form-check-label" for="exampleCheck1"> Saya yakin akan mengirim data ini</label>
					</div>
					<button class="btn btn-primary float-right">Kirim ke analis</button>
				</form>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
</div>

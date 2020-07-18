<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Master Data Kategori</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<a href="<?= base_url(); ?>Master_kategori/tambah" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>  Tambah Kategori</a>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Nama Paket</th>
							<th>Paket Aktif</th>
							<th>Harga</th>
							<th>Keterangan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($kategori as $row){ ?>
						<tr>
							<td><?= $row->nama; ?></td>
							<td><?= $row->bulan_aktif; ?> Bulan</td>
							<td><?= $row->harga; ?></td>
							<td><?= $row->keterangan; ?></td>
							<td><a href="<?= base_url('Master_kategori/ubah/'.$row->id); ?>" class="btn btn-info mr-2"><i class="fas fa-pencil-alt"></i></a><a href="<?= base_url('Master_kategori/hapus/'.$row->id); ?>" class="btn btn-danger" ><i class="fas fa-eraser"></i></a>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
</div>

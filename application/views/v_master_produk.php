<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Master Data Produk</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<a href="<?= base_url(); ?>Master_produk/tambah" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>  Tambah Produk</a>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nama Produk</th>
							<th>Tipe</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($master as $row){ ?>
						<tr>
							<td><?= $row->id; ?></td>
							<td><?= $row->nama_produk; ?></td>
							<td><?= $row->tipe; ?></td>
							<td><a href="<?= base_url('Master_produk/ubah/'.$row->id); ?>" class="btn btn-info mr-2"><i class="fas fa-pencil-alt"></i></a><a href="<?= base_url('Master_produk/hapus/'.$row->id); ?>" class="btn btn-danger" ><i class="fas fa-eraser"></i></a>
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

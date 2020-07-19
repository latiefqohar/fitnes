<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Master Data harga</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<a href="<?= base_url(); ?>Master_harga/tambah" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>  Tambah harga</a>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID</th>
							<th>Harga Untuk</th>
							<th>harga</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($harga as $row){ ?>
						<tr>
							<td><?= $row->id; ?></td>
							<td><?= $row->lama_jam; ?> Jam</td>
							<td><?= $row->harga; ?></td>
							<td><a href="<?= base_url('Master_harga/ubah/'.$row->id); ?>" class="btn btn-info mr-2"><i class="fas fa-pencil-alt"></i></a><a href="<?= base_url('Master_harga/hapus/'.$row->id); ?>" class="btn btn-danger" ><i class="fas fa-eraser"></i></a>
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

<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Paket Aktif</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<a href="<?= base_url(); ?>Paket_aktif/tambah" class="btn btn-primary mb-3"><i class="fas fa-plus"></i>  Tambah Paket</a>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>ID Member</th>
							<th>Nama Paket</th>
							<th>Tanggal Beli</th>
							<th>Tanggal Expired</th>
							<th>Status</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($paket as $row){ ?>
						<tr>
							<td><?= $row->id_member; ?></td>
							<td><?= $row->nama; ?></td>
							<td><?= $row->tgl_beli; ?></td>
							<td><?= $row->tgl_exp; ?></td>
							<td>
                                <?php if(date("Y-m-d") > $row->tgl_exp) {?>
                                
                                <span class="badge badge-danger">Expired</span>
                                 <?php } else{ ?> 
                                <span class="badge badge-success">Aktif</span>
                                 <?php } ?>
                            </td>
							<td><a href="<?= base_url('Paket_aktif/ubah/'.$row->id); ?>" class="btn btn-info mr-2"><i class="fas fa-pencil-alt"></i></a><a href="<?= base_url('Paket_aktif/hapus/'.$row->id); ?>" class="btn btn-danger" ><i class="fas fa-eraser"></i></a>
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

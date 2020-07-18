<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Daftar Pengajuan Kredit</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th width="50px">ID</th>
							<th>Cabang Pengajuan</th>
							<th>Nama</th>
							<th>Jumlah Pengajuan</th>
							<th>Posisi</th>
							<th>Analis</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($pengajuan as $row){ ?>
						<tr>
							<td><?= $row->id_nasabah; ?></td>
							<td><?= $row->nama_cabang; ?></td>
							<td><?= $row->nama; ?></td>
							<td><?= $row->jumlah_pengajuan; ?></td>
							<td><?= $row->posisi; ?></td>
							<td><?= $row->nama_analis; ?></td>
							<td>
								<a href="<?= base_url('Pengajuan/detail/'.$row->id); ?>" class="btn btn-info btn-xs mr-2"><i class="fas fa-eye"></i></a>
								<?php if($row->posisi != "ANALIS"){ ?>
									<a href="<?= base_url('Pengajuan/kirim/'.$row->id); ?>" class="btn btn-success btn-xs"><i class="fas fa-sign-out-alt"></i></a>
								<?php } ?>	
							
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

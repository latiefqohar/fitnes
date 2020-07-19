<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Data Transaksi</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<div class="form-group mb-5">
					<form action="<?= base_url('Laporan_transaksi'); ?>" method="POST">
						<label>Cari Data Transaksi:</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="far fa-calendar-alt"></i>
								</span>
							</div>
							<input type="text" name="tanggal" class="form-control float-right" id="reservation">
							<select name="jenis_pembayaran" class="form-control ml-3">
								<option value="semua_transaksi">SEMUA TRANSAKSI</option>
								<?php
                             foreach($tipe_pembayaran as $tipe){ 
                            ?>
								<option value="<?= $tipe->jenis_transaksi; ?>"><?= $tipe->jenis_transaksi; ?></option>
								<?php
                             } 
                            ?>
							</select>
							<button class="ml-2 btn btn-primary"><i class="fas fa-search"></i></button>
						</div>
					</form>
					<!-- /.input group -->
				</div>
				<div class="info-box mb-3 bg-info mb-3">
					<span class="info-box-icon"><i class="fas fa-money-check-alt"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Total Transaksi</span>
						<span class="info-box-number">
							<h3>Rp. <?= number_format($total_transaksi['total'],0,".","."); ?></h3>
						</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<table id="example1" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Tanggal Transaksi</th>
							<th>Jenis Pembayaran</th>
							<th>Nama Member</th>
							<th>Total</th>
							<th>Kasir</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($transaksi as $row){ ?>
						<tr>
							<td><?= $row->tanggal_transaksi; ?></td>
							<td><?= $row->jenis_transaksi; ?></td>
							<td><?= $row->nama_member; ?></td>
							<td><?= $row->total; ?></td>
							<td><?= $row->kasir; ?></td>
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

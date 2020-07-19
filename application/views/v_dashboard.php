<?php
function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}
 
?>

<!-- Small boxes (Stat box) -->
<div class="row">
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-info">
			<div class="inner">
				<h3><?= $transaksi_hari_ini; ?></h3>

				<p>Transaksi Hari Ini</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>

		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-success">
			<div class="inner">
				<h3><?= rupiah($total_transaksi_hari_ini['total']); ?></h3>

				<p>Total Transaksi Hari Ini</p>
			</div>
			<div class="icon">
				<i class="ion ion-stats-bars"></i>
			</div>

		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-warning">
			<div class="inner">
				<h3><?= $total_transaksi; ?></h3>

				<p>Total Teransaksi</p>
			</div>
			<div class="icon">
				<i class="ion ion-pie-graph"></i>
			</div>

		</div>
	</div>
	<!-- ./col -->
	<div class="col-lg-3 col-6">
		<!-- small box -->
		<div class="small-box bg-danger">
			<div class="inner">
				<h3><?= $member_baru; ?></h3>
				<p>Member Baru</p>
			</div>
			<div class="icon">
				<i class="ion ion-person-add"></i>
			</div>

		</div>
	</div>
	<!-- ./col -->
</div>
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">Master Data harga</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<table class="table table-striped" id="example1">
					<thead>
						<tr>
							<th>Tanggal Transaksi</th>
							<th>Jenis Transaksi</th>
							<th>Total</th>
							<th>Kasir</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach($transaksi_terbaru as $row){ ?>
						<tr>
							<td><?= $row->tanggal_transaksi; ?></td>
							<td><?= $row->jenis_transaksi; ?></td>
							<td><?= $row->total; ?></td>
							<td><?= $row->kasir; ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
	</div>
</div>

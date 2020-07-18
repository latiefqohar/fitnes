<?php 
function rupiah($angka){	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
}
?>

<div class="row">
	<div class="col-md-3">

		<!-- Profile Image -->
		<div class="card card-primary card-outline">
			<div class="card-body box-profile">
				<div class="text-center">
					<img class="profile-user-img img-fluid img-circle"
						src="<?= base_url(); ?>upload/profil/<?= $nasabah['foto']; ?>" alt="User profile picture">
				</div>

				<h3 class="profile-username text-center"><?= $nasabah['nama']; ?></h3>

				<p class="text-muted text-center"><?= $nasabah['status_pegawai']; ?></p>

				<ul class="list-group list-group-unbordered mb-3">
					<li class="list-group-item">
						<b>Tanggal Lahir</b> <a class="float-right"><?= $nasabah['tgl_lahir']; ?></a>
					</li>
					<li class="list-group-item">
						<b>Pendidikan Terakhir</b> <a class="float-right"><?= $nasabah['tgl_lahir']; ?></a>
					</li>
					<li class="list-group-item">
						<b>Alamat</b> <a class="float-right"><?= $nasabah['alamat']; ?></a>
					</li>
					<li class="list-group-item">
						<b>Nomor Telpon</b> <a class="float-right"><?= $nasabah['no_telpon']; ?></a>
					</li>
				</ul>
			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->

		<!-- About Me Box -->
		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Pekerjaan</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<ul class="list-group list-group-unbordered mb-3">
					<li class="list-group-item">
						<b>Instansi</b> <a class="float-right"><?= $nasabah['jenis_instansi']; ?></a>
					</li>
					<li class="list-group-item">
						<b>Status Pegawai</b> <a class="float-right"><?= $nasabah['status_pegawai']; ?></a>
					</li>
					<li class="list-group-item">
						<b>Penghasilan</b> <a class="float-right"><?= $nasabah['besar_penghasilan']; ?></a>
					</li>
					<li class="list-group-item">
						<b>Lama Bekerja</b> <a class="float-right"><?= $nasabah['lama_bekerja']; ?></a>
					</li>
					<li class="list-group-item">
						<b>Lama Tinggal</b> <a class="float-right"><?= $nasabah['lama_tinggal']; ?></a>
					</li>
				</ul>

			</div>
			<!-- /.card-body -->
		</div>
		<!-- /.card -->
	</div>
	<!-- /.col -->
	<div class="col-md-9">
		<div class="card">
			<div class="card-header p-2">
				<ul class="nav nav-pills">
					<li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Data Nasabah</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="#catatan" data-toggle="tab">Catatan Pinjaman</a></li>
					<!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li> -->
				</ul>
			</div><!-- /.card-header -->
			<div class="card-body">
				<div class="tab-content">
					<div class="active tab-pane" id="activity">
						<div class="row">
							<div class="col-md-8">
								<!-- data pengajuan dan scoring -->
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Data Pengajuan Kredit</h3>
									</div>
									<!-- /.card-header -->
									<div class="card-body">
										<ul class="list-group list-group-unbordered mb-3">
											<li class="list-group-item">
												<b>Pengajuan</b> <a
													class="float-right"><b><?= rupiah($pengajuan['jumlah_pengajuan']); ?></b></a>
											</li>
											<li class="list-group-item">
												<b>Jangka Waktu</b> <a
													class="float-right"><b><?= rupiah($pengajuan['jangka']); ?>Bulan</b></a>
											</li>
										</ul>
										<div class="table-responsive" style="font-size:10pt;">
											<table class="table table-striped ">
												<tr>
													<td colspan="2"><img
															src="<?= base_url('upload/dokumen/'); ?>fktp.jpg" alt=""
															width="200px" height="150px">
													</td>
													<td colspan="2"><img
															src="<?= base_url('upload/dokumen/'); ?>fnpwp.jpg" alt=""
															width="200px" height="150px">
													</td>
												</tr>
												<tr>
													<th>Produk</th>
													<td>:<?= $pengajuan['nama_produk']; ?></td>
													<th>Pembayaran</th>
													<td>:<?= $pengajuan['pembayaran']; ?></td>
												</tr>
												<tr>
													<th>Agunan</th>
													<td>:<?= $pengajuan['status']; ?></td>
													<th>Rekening Bank</th>
													<td>:<?= $nasabah['status_rekening']; ?></td>
												</tr>
												<tr>
													<th>Status Debitur</th>
													<td>:<?= $nasabah['jenis']; ?></td>
													<th>Status Asuransi</th>
													<td>:<?= $nasabah['status_asuransi']; ?></td>
												</tr>
												<tr>
													<th>Status Debitur</th>
													<td>:<?= $nasabah['jenis']; ?></td>
													<th>Usia</th>
													<td>:<?= $nasabah['usia']; ?></td>
												</tr>
												<tr>
													<th colspan="2">Status Pernikahan</th>
													<td colspan="2">:<?= $nasabah['status']; ?></td>
												</tr>
											</table>
										</div>
									</div>
									<!-- end data pengajuan dan scoring -->
								</div>
							</div>
							<div class="col-md-4">
								<!-- scoring -->
								<div class="card card-primary">
									<div class="card-header">
										<h3 class="card-title">Scoring</h3>
									</div>
									<!-- /.card-header -->
									<div class="card-body">
										<div class="info-box mb-3 bg-info">
											<span class="info-box-icon"><i class="fas fa-tachometer-alt"></i>
												</i></span>

											<div class="info-box-content">
												<span class="info-box-text">Total SKOR</span>
												<span class="info-box-number"
													style="font-size: 15pt;"><?= $total_score; ?></span>
											</div>
											<!-- /.info-box-content -->
										</div>
										<div class="progress-group">
											Usia
											<span class="float-right"><b><?= $score['usia']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['usia']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Pendidikan
											<span class="float-right"><b><?= $score['pendidikan']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['pendidikan']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Status Perkawinan
											<span class="float-right"><b><?= $score['status']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['status']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Rekening Bank
											<span
												class="float-right"><b><?= $score['status_rekening']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['status_rekening']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Status Debitur
											<span class="float-right"><b><?= $score['jenis_kredit']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['jenis_kredit']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Status Asuransi
											<span
												class="float-right"><b><?= $score['status_asuransi']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['status_asuransi']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Jenis Instansi
											<span class="float-right"><b><?= $score['jenis_instansi']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['jenis_instansi']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Penghasilan
											<span
												class="float-right"><b><?= $score['besar_penghasilan']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['besar_penghasilan']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Status Pegawai
											<span class="float-right"><b><?= $score['status_pegawai']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['status_pegawai']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Lama Bekerja
											<span class="float-right"><b><?= $score['lama_bekerja']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['lama_bekerja']; ?>%"></div>
											</div>
										</div>
										<div class="progress-group">
											Lama Tinggal
											<span class="float-right"><b><?= $score['lama_tinggal']; ?></b>/100</span>
											<div class="progress progress-sm">
												<div class="progress-bar bg-success"
													style="width: <?= $score['lama_tinggal']; ?>%"></div>
											</div>
										</div>
										<?php if($pengajuan != "AO"){ ?>
										<button class="btn btn-block btn-primary" data-toggle="modal"
											data-target="#modal-default">PROSES</button>
										<?php } ?>
									</div>
									<!-- scoring -->
								</div>
							</div>
						</div>
					</div>
					<!-- /.tab-pane -->
					<div class="tab-pane" id="catatan">
						<!-- The timeline -->
						<div class="timeline timeline-inverse">
							<!-- timeline time label -->
							<div class="time-label">
								<span class="bg-danger">
									13 May 2020
								</span>
							</div>
							<!-- /.timeline-label -->
							<!-- timeline item -->
							<div>
								<i class="fas fa-user bg-info"></i>

								<div class="timeline-item">
									<span class="time"><i class="far fa-clock"></i> 13 May 2020</span>

									<h3 class="timeline-header border-0"><a href="#">Administrasi Kredit</a> <span
											class="text-danger"> Menolak Pengajuan</span>
									</h3>
									<div class="timeline-body">
										Data NIK tidak terdaftar di disdukcapil. Terdeteksi Fraud!
									</div>
								</div>
							</div>
							<!-- END timeline item -->
							<!-- timeline item -->
							<div>
								<i class="fas fa-sign-in-alt bg-primary"></i>

								<div class="timeline-item">
									<span class="time"><i class="far fa-clock"></i> 12 may 2020</span>

									<h3 class="timeline-header"><a href="#">Mengajukan Pinjaman</a>
										<?= rupiah(500000000); ?></h3>
								</div>
							</div>
							<!-- END timeline item -->
							<div>
								<i class="far fa-clock bg-gray"></i>
							</div>
						</div>
					</div>
					<!-- /.tab-pane -->

					<!-- <div class="tab-pane" id="settings">
						<form class="form-horizontal">
							<div class="form-group row">
								<label for="inputName" class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="inputName" placeholder="Name">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
								<div class="col-sm-10">
									<input type="email" class="form-control" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputName2" class="col-sm-2 col-form-label">Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputName2" placeholder="Name">
								</div>
							</div>
							<div class="form-group row">
								<label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
								<div class="col-sm-10">
									<textarea class="form-control" id="inputExperience"
										placeholder="Experience"></textarea>
								</div>
							</div>
							<div class="form-group row">
								<label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" id="inputSkills" placeholder="Skills">
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-sm-2 col-sm-10">
									<div class="checkbox">
										<label>
											<input type="checkbox"> I agree to the <a href="#">terms and
												conditions</a>
										</label>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-sm-2 col-sm-10">
									<button type="submit" class="btn btn-danger">Submit</button>
								</div>
							</div>
						</form>
					</div> -->
					<!-- /.tab-pane -->
				</div>
				<!-- /.tab-content -->
			</div><!-- /.card-body -->
		</div>
		<!-- /.nav-tabs-custom -->
	</div>
	<!-- /.col -->
</div>
<!-- /.row -->


<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="<?= base_url(); ?>Pengajuan/persetujuan" method="POST">
				<div class="modal-header">
					<h4 class="modal-title">Persetujuan</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<input type="hidden" name="id" value="<?= $nasabah['id']; ?>">
					<textarea name="komentar" class="form-control mb-3" rows="5" ></textarea>
					<input type="submit" class="btn btn-primary float-right " name="setujui" value="SETUJUI">
					<input type="submit" class="btn btn-danger float-right mr-2" name="tolak" value="TOLAK">
				</div>
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					
				</div>
			</form>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->

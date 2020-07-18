<div class="row">
	<div class="col-md-12">

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Tambah Paket</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" action="<?= base_url(); ?>Paket_aktif/aksiUbah" method="POST">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
							<input type="hidden" name="id" value="<?= $paket["id"]; ?>">
								<label for="nama">Nama</label>
								<select name="id_member" id="id_member" class="form-control">
									<option value="">==Pilih Member==</option>
									<?php
									 foreach($member as $mem){ 
									?>
										<option value="<?= $mem->id; ?>" <?php if($paket['id_member']==$mem->id) {echo "selected";} ?>><?= $mem->id; ?></option>
									<?php
									 } 
									?>
								</select>
							</div>
							<br>
							<div class="form-group mt-3">
								<label for="harga">Tanggal Beli</label>
								<input type="date" class="form-control" name="tgl_beli" value="<?= date('Y-m-d'); ?>" readonly>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="bulan_aktif">Paket</label>
								<select name="id_kategori" id="id_kategori" class="form-control"  onclick="cek_paket()">
									<option value="">==Pilih Paket==</option>
									<?php
									 foreach($kategori as $paket){ 
									?>
										<option value="<?= $paket->id; ?>"><?= $paket->nama; ?></option>
									<?php
									 } 
									?>
								</select>
								<span class="text-danger"> *silahkan pilih paket untuk mengaktifkan paket</span>
							</div>
							<br>
							<div class="form-group">
								<label for="keterangan">Expired</label>
								<input type="date" class="form-control" name="tgl_exp" id="tgl_exp"
									readonly required>
							</div>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary float-right">Ubah</button>
				</div>
			</form>
		</div>
		<!-- /.card -->
	</div>
</div>

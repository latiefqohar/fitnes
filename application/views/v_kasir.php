<div class="row">
	<div class="col-md-12">

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Tambah Member</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			
				<div class="card-body">
					<div class="form-group">
						<label for="id">Pilih JAM</label>
						<select class="form-control" id="paket" onclick="cek_harga()">
							<option value="">--Pilih waktu--</option>
							<?php
							 foreach($harga as $row){ ?> 
							 <option value="<?= $row->id; ?>"><?= $row->lama_jam; ?> Jam</option>
							 <?php } ?> 
							
						</select>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nama">ID Member</label>
								<input type="text" class="form-control" id="id_member" placeholder="Jika memiliki member, silahkan masukkan member" onkeypress="return runScript(event)" required>
							</div>
							<form role="form" action="<?= base_url(); ?>Kasir/bayar" method="POST">
							<div class="form-group">
								<label for="nama_member">Nama Member</label>
								<input type="text" class="form-control" name="nama_member" id="nama_member"  required readonly>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="no_telpon">HARGA</label>
								<input type="number" class="form-control" name="harga" id="harga" readonly>
							</div>
							<div class="form-group">
								<label for="diskon">DISKON</label>
								<input type="number" class="form-control" name="diskon" id="diskon" readonly
									required>
							</div>
							<div class="form-group">
								<label for="alamat">TOTAL</label>
								<h3>Rp. <span id="totalf">0</span></h3>
								<input type="hidden" name="total" id="total">
							</div>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary float-right btn-block" >BAYAR</button>
				</div>
			</form>
		</div>
		<!-- /.card -->
	</div>
</div>

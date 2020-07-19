<div class="row">
	<div class="col-md-12">

		<div class="card card-primary">
			<div class="card-header">
				<h3 class="card-title">Tambah Harga</h3>
			</div>
			<!-- /.card-header -->
			<!-- form start -->
			<form role="form" action="<?= base_url(); ?>Master_harga/aksiTambah" method="POST">
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="lama_jam">Pemakaian untuk</label>
								<input type="number" class="form-control" name="lama_jam" placeholder="Dalam Jam" required>
								
							</div>
						</div>
						<div class="col-6">
							<div class="form-group">
								<label for="harga">Harga</label>
								<input type="number" class="form-control" name="harga" placeholder="ex: 50000" required>
							</div>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary float-right">Submit</button>
				</div>
			</form>
		</div>
		<!-- /.card -->
	</div>
</div>

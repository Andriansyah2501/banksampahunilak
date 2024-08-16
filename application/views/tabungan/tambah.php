<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Data</a></li>
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/tabungan/data">Data Tabungan</a></li>
              <li class="breadcrumb-item active">Edit Data Tabungan</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">Tambah Data Tabungan</h5>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url();?>index.php/tabungan/simpan" method="post">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>Id Nasabah</label>
										<input type="text" name="id_client" class="form-control">
									</div>
									<div class="form-group">
										<label>Nama Nasabah</label>
										<input type="text" name="nama" class="form-control">
									</div>
									<div class="form-group">
										<label>Saldo</label>
										<input type="text" name="saldo" class="form-control">
									</div>
								</div>
								
							</div>
						
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>
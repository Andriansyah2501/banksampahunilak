<?php foreach($dataclient as $data) {} ?>
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
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index.php/client/data">Data Sampah</a></li>
              <li class="breadcrumb-item active">Edit Data Sampah</li>
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
						<h5 class="card-title">Edit Data Nasabah</h5>
					</div>
					<div class="card-body">
						<form action="<?php echo base_url();?>index.php/client/update" method="post">
							<div class="row">
								<div class="col-lg-4">
									<div class="form-group">
										<label>Id Client</label>
										<input type="text" name="id_client" class="form-control" required value="<?php echo $data['id_client']; ?>">
									</div>
									<div class="form-group">
										<label>Nama</label>
										<input type="text" name="nama" class="form-control" required value="<?php echo $data['nama']; ?>">
									</div>
									<div class="form-group">
										<label>Alamat</label>
										<textarea name="alamat" class="form-control" required rows="3"><?php echo $data['alamat']; ?></textarea>
									</div>
									<div class="form-group">
										<label>No HP</label>
										<textarea name="no_hp" class="form-control" required rows="3"><?php echo $data['no_hp']; ?></textarea>
									</div>
								</div>
							</div>
						
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Update Nasabah</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>
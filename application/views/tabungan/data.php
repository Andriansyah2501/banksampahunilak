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
              <li class="breadcrumb-item active">Tabungan</li>
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
						<div class="row">
							<div class="col-lg-6">
								<h5 class="card-title">Data Tabungan</h5>
							</div>
							<div class="col-lg-6 text-right">
								<a href="<?php echo base_url(); ?>index.php/tabungan/tambah"><button type="button" class="btn btn-info btn-sm"><span class="fa fa-plus"></span> Tambah Data</button></a>
                        
							
                         
                        </div>
                      </div>
							
						
					</div>
					<div class="card-body">
						<table id="example2" class="table table-bordered table-stripped">
							<thead>
								<th>No</th>
								<th>Id Nasabah</th>
								<th>Nama Nasabah</th>
								<th>Saldo</th>
								<th>Aksi</th>
							</thead>
							<tbody>
								<?php 
									$no=1;
									foreach($datatabungan as $data) {
								?>
								<tr>
									<td><?php echo $no++; ?></td>
									
									<td><?php echo $data['id_client']; ?></td>
									<td><?php echo $data['nama']; ?></td>
									<td><?php echo "Rp".number_format($data['saldo'],0,',','.'); ?></td>
									
									<td>
										<a href="<?php echo base_url(); ?>index.php/tabungan/edit/<?php echo $data['id_client']; ?>"><button type="button" class="btn btn-success btn-sm"><span class="fa fa-edit"></span></button></a> 
										<a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');" href="<?php echo base_url(); ?>index.php/tabungan/hapus/<?php echo $data['id_client']; ?>"><button type="button" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></button></a>
									</td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	  </div>
	</div>
</div>
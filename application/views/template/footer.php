 <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Ubah Password</h5>
      <form action="<?php echo base_url(); ?>index.php/dashboard/ubahpassword" method="post">
		<div class="form-group">
			<label>Password Baru</label>
			<input type="password" name="password" class="form-control">
		</div>
		<div class="form-group">
			<label>Konfirmasi Password Baru</label>
			<input type="password" name="passwordnew" class="form-control">
		</div>
		<button type="submit" class="btn btn-primary"> Submit</button>
	  </form>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Bank Sampah Universitas Lancang Kuning
    </div>
    <!-- Default to the left -->
   

  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

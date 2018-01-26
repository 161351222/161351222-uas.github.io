<section class="content">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Title</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
		
		<div style="width:70%;margin-left:150px;">
			<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Input Biodata</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="konten/simpan.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">NIM</label>
                  <div class="col-sm-10">
                    <input type="text" name="nim" value="<?php echo $_SESSION['username']; ?>" class="form-control" >
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Tanggal Lahir</label>

                  <div class="col-sm-10">
                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Jenis Kelamin</label>
					
                  <div class="col-sm-10">
					<input type="radio" name="jenis_kelamin" value="Laki-Laki"  checked>Laki-Laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Jurusan</label>

				  <div class="col-sm-10">
                    <input type="radio" name="jurusan" value="Teknik Industri"  checked>Teknik Industri<br>
					<input type="radio" name="jurusan" value="Teknik Informatika">Teknik Informatika<br>
					<input type="radio" name="jurusan" value="Teknik Mesin">Teknik Mesin<br>
					<input type="radio" name="jurusan" value="Teknik Tekstil">Teknik Tekstil<br>
                    <input type="radio" name="jurusan" value="Menejement Industri">Menejement Industri
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Tahun Masuk</label>

                  <div class="col-sm-10">
                    <input type="text" name="tahun_masuk" class="form-control" placeholder="Tahun Masuk">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">Tahun Lulus</label>

                  <div class="col-sm-10">
                    <input type="text" name="tahun_lulus" class="form-control" placeholder="Tahun Lulus">
                  </div>
                </div>
				<div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email</label>

                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="inputPassword3" placeholder="Email">
                  </div>
                </div>
				<div class="form-group">
                  <label class="col-sm-2 control-label">No. HP</label>

                  <div class="col-sm-10">
                    <input type="text" name="no_hp" class="form-control" placeholder="Nomor Hp">
                  </div>
                </div>
              </div>
			  <div class="form-group">
                  <label class="col-sm-2 control-label">Apakah anda sudah bekerja ?</label>
					
                  <div class="col-sm-10">

					<input type="radio" name="kerja" value="Ya"  checked>Ya <br>
                    <input type="radio" name="kerja" value="Tidak">Tidak
                  </div>
                </div>
              <!-- /.box-body -->
              <div class="box-footer">
			  <button type="submit" class="btn btn-info">Simpan</button>
                <button type="reset" class="btn btn-default pull-right">Batal</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
		  </div>
		  
        </div>
        <div class="box-footer">
          Footer
        </div>
    </div>
</section>
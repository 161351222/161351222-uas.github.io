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
		
		<div style="width:75%;margin-left:150px;">
			<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Form Edit Biodata</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			<?php
				$i=0;
				$sql=mysql_query("select * from data where nim='$_GET[nim]'");
				$data=mysql_fetch_array($sql);
					echo"
            <form class='form-horizontal' action='konten/update.php' method='post'>
              <div class='box-body'>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>NIM</label>

                  <div class='col-sm-10'>
                    <input type='text' name='nim' class='form-control'  value='$data[nim]'>
                  </div>
                </div>
                <div class='form-group'>
                  <label class='col-sm-2 control-label'>Nama</label>

                  <div class='col-sm-10'>
                    <input type='text' name='nama' class='form-control'  value='$data[nama]'>
                  </div>
                </div>
				<div class='form-group'>
                  <label class='col-sm-2 control-label'>Tanggal Lahir</label>

                  <div class='col-sm-10'>
                    <input type='text' name='tanggal_lahir' class='form-control'  value='$data[tanggal_lahir]'>
                  </div>
                </div>
				<div class='form-group'>
                  <label class='col-sm-2 control-label'>Jenis Kelamin</label>

                  <div class='col-sm-10'>
                    <input type='text' name='jenis_kelamin' class='form-control'  value='$data[jenis_kelamin]'>
                  </div>
                </div>
				<div class='form-group'>
                  <label class='col-sm-2 control-label'>Jurusan</label>

                  <div class='col-sm-10'>
                    <input type='text' name='jurusan' class='form-control'  value='$data[jurusan]'>
                  </div>
                </div>
				<div class='form-group'>
                  <label class='col-sm-2 control-label'>Tahun Masuk</label>

                  <div class='col-sm-10'>
                    <input type='text' name='tahun_masuk' class='form-control'  value='$data[tahun_masuk]'>
                  </div>
                </div>
				<div class='form-group'>
                  <label class='col-sm-2 control-label'>Tahun Lulus</label>

                  <div class='col-sm-10'>
                    <input type='text' name='tahun_lulus' class='form-control'  value='$data[tahun_lulus]'>
                  </div>
                </div>
				<div class='form-group'>
                  <label class='col-sm-2 control-label'>Email</label>

                  <div class='col-sm-10'>
                    <input type='email' name='email' class='form-control'  value='$data[email]'>
                  </div>
                </div>
				<div class='form-group'>
                  <label class='col-sm-2 control-label'>No. Hp</label>

                  <div class='col-sm-10'>
                    <input type='text' name='no_hp' class='form-control'  value='$data[no_hp]'>
                </div>
              </div>
			  <div class='form-group'>
                  <label class='col-sm-2 control-label'>Bekerja</label>

                  <div class='col-sm-10'>
                    <input type='text' name='kerja' class='form-control'  value='$data[kerja]'>
                  </div>
                </div>
              <!-- /.box-body -->
              <div class='box-footer'>
			  <button type='submit' class='btn btn-info'>Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
			";
		  ?>
          </div>
		  </div>
        </div>
        <div class="box-footer">
          Footer
        </div>
    </div>
</section>
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
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="konten/simpan.php" method="post">
              <div class="box-body">
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
                  <label class="col-sm-2 control-label">Angkatan</label>

                  <div class="col-sm-10">
                    <input type="text" name="angkatan" class="form-control" placeholder="Angkatan">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
			  <button type="submit" class="btn btn-info">Cek</button>
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
<section class="content">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Halaman ini khusus admin untuk mengisi job fair</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			
            <div class="box-header">
              <h3 class="box-title">JOB FAIR</h3>
              <!-- tools box -->
              <!-- /. tools -->
            </div>
            <div class="box-body">
              <form action="admin/simpan.php" method="post">
                <div class="form-group">
                  <input type="text" class="form-control" name="tanggal" placeholder="Tanggal di buka:">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subjek" placeholder="Subject :">
                </div>
                <div>
                  <textarea class="textarea" type="text" name="detail" placeholder="Deskripsi :" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                </div>
            </div>
            <div class="box-footer clearfix">
              <button type="submit" class="pull-right btn btn-success">Post
                <i class="fa fa-arrow-circle-right"></i></button>
            </div>
			</form>
          </div>
        
        <div class="box-footer">
          Footer
        </div>
    </div>
</section>
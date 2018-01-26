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
			<div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-info"></i> Infomasi!</h4>
                Pilih menu <strong>Daftar</strong> untuk melakukan registrasi status anda sebagai alumni ! <strong>(Jika Belum Mendaftar)</strong><br>
				Pilih menu <strong>Profil</strong> untuk memperbaharui informasi anda !<br>
				Pilih menu <strong>Peusahaan</strong> untuk mengelola informasi perkembangan perusahaan anda !
            </div>
			<center>
			<?php
				$cek="SELECT * FROM data WHERE nim = '$username'";
				$status=mysql_query($cek);
				if (mysql_num_rows($status) >0){
					echo "
					<button type='button' class='btn bg-blue margin disabled'>Daftar</button>
					";
				}
				else{
					 echo "
					<a href='branda.php?p=daftar'><button type='button' class='btn bg-blue margin'>Daftar</button></a>
					";
				}
			?>
				<a href='branda.php?p=profil'><button type='button' class='btn bg-orange margin'>Profil</button></a>
				<a href='branda.php?p=perus'><button type='button' class='btn bg-purple margin'>Perusahaan</button></a>
			</center>
        </div>
        <div class="box-footer">
          Footer
        </div>
    </div>
</section>
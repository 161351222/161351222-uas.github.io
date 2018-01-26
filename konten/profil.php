<section class="content">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"></h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<div style='width: 50%'>
			<div class="box-body no-padding">
			<?php
				$i=0;
				$sql=mysql_query("select * from data where nim=$username");
				while($data=mysql_fetch_array($sql)){
					$i++;
					echo"
              <table class='table table-striped'>
                <tr>
                  <td>NIM</td>
                  <td>:</td>
                  <td>$data[nim]</td>
                </tr>
                <tr>
                  <td>Nama</td>
                  <td>:</td>
                  <td>$data[nama]</td>
                </tr>
				<tr>
                  <td>Tanggal Lahir</td>
                  <td>:</td>
                  <td>$data[tanggal_lahir]</td>
                </tr>
				<tr>
                  <td>Jenis Kelamin</td>
                  <td>:</td>
                  <td>$data[jenis_kelamin]</td>
                </tr>
				<tr>
                  <td>Jurusan</td>
                  <td>:</td>
                  <td>$data[jurusan]</td>
                </tr>
				<tr>
                  <td>Tahun Masuk</td>
                  <td>:</td>
                  <td>$data[tahun_masuk]</td>
                </tr>
				<tr>
                  <td>Tahun Lulus</td>
                  <td>:</td>
                  <td>$data[tahun_lulus]</td>
                </tr>
				<tr>
                  <td>Email</td>
                  <td>:</td>
                  <td>$data[email]</td>
                </tr>
				<tr>
                  <td>No Hp</td>
                  <td>:</td>
                  <td>$data[no_hp]</td>
                </tr>
				<tr>
                  <td>Bekerja</td>
                  <td>:</td>
                  <td>$data[kerja]</td>
                </tr>
				<tr>
                  <td><a href='branda.php?p=edit&nim=$data[nim]'><button type='button' class='btn bg-orange pull-right'>Edit</button></a></td>
                  <td colspan='2'></td>
                </tr>
              </table>
			  ";
				}
				?>
			</div>
            </div>
        </div>
        <div class="box-footer">
          Footer
        </div>
    </div>
</section>
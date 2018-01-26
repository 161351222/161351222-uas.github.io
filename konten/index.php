<section class="content">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Serapan Alumni mendapatkan pekerjaan</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<?php
				$i=0;
				$k=0;
				$b=0;
				$sql1=mysql_query("SELECT * FROM data");
				while($data=mysql_fetch_array($sql1)){
					$tampil2 = mysql_query("select * from data");
					$jumlah = mysql_num_rows($tampil2);
					$status="$data[kerja]";
					if($status=='Ya'){
						$k=$k+1;
					}
					else{
					$b=$b+1;
					}
					$i++;
				}
				echo "
					Jumlah Alumni terdaftar sebanyak $i orang<br>
					Jumlah Alumni yang bekerja $k orang<br>
					Jumlah Alumni yang tidak bekerja $b orang
					";
					
			?>
        </div>
        <div class="box-footer">
          Footer
        </div>
    </div>
</section>


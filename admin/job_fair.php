<section class="content">
    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Job Fair</h3>
          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
			<ul class="timeline timeline-inverse">
				<?php
				$i=0;
				$sql=mysql_query("select * from job_fair ORDER BY id DESC");
				while($data=mysql_fetch_array($sql)){
					$i++;
					echo"
				<li>
					<div class='timeline-item'>
                      <span class='time'><i class='glyphicon glyphicon-calendar'></i>&nbsp;&nbsp;Di buka mulai :$data[tanggal]</span>
                      <h3 class='timeline-header'><a href='#'>Subjeck : </a>$data[subjek]</h3>
                      <div class='timeline-body'>
                        <strong>Detail :</strong>$data[detail]
                      </div>
                    </div>
                </li>";
				}
				?>
			</ul>
        </div>
        <div class="box-footer">
          Footer
        </div>
    </div>
</section>
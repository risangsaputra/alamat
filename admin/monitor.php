<?php

if (empty($_SESSION['username'])) {
  include "index.php";
}
else{ ?><!-- /.row -->
       <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Traffic</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Ip</th>
                  <th>Jitter</th>
                  <th>Delay</th>
                  <th>Tanggal</th>
                </tr>
                </thead>
                <tbody>
                <?php
                  include "../koneksi.php";
                  $sql = "select * from traffic ORDER BY tanggal DESC";
                  $result = mysqli_query($konek,$sql);
                  $i=1;
               
                  while ($data=mysqli_fetch_array($result)) {
                ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $data['ip']; ?></td>
                  <td><?php echo $data['jitter']; ?></td>
                  <td><?php echo $data['delay']; ?></td>
                  <td><?php echo $data['tanggal']; ?></td>
                </tr>
                <?php } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Ip</th>
                  <th>Jitter</th>
                  <th>Delay</th>
                  <th>Tanggal</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<?php } ?>
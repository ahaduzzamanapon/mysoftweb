<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="jquery.table2excel.js"></script>

<section class="content-header">
    <h1> <?=$meta_title; ?> </h1>
    <ol class="breadcrumb">
        <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active"><?=$meta_title; ?></li>
    </ol>
</section>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?=$meta_title; ?> </h3>
                    <div class="box-tools pull-right">
                        <a href="javascript:void(0)" id="export_excel" onclick="fnExcelReport()" class="btn btn-primary btn-sm">Export Excel</a>
                    </div>
                </div>

                <div class="box-body">
                    <div id="infoMessage"><?php //echo $message;?></div>
                    <?php if($this->session->flashdata('success')):?>
                    <div class="alert alert-success">
                        <a class="close" data-dismiss="alert">&times;</a>
                        <?php echo $this->session->flashdata('success');?>
                    </div>
                    <?php endif; ?>

                    <div>
                      <?php
                      $product_name=array();
                      foreach ($demo_request as $key => $drow):
                        $product_name[] = $drow->product_name;
                      endforeach;
                      $product_name = array_unique($product_name);
                      ?>
                      <div class="form-group">
                        <select name="product_name" id="product_name" class="form-control">
                          <option value="all">All</option>
                          <?php foreach ($product_name as $key => $value): ?>
                            <option value="<?=$value?>"><?=$value?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="table-responsive">
                      <table id="theTable" class="table table-bordered table-striped table-responsive data">
                          <thead>
                              <tr>
                                  <th>SL</th>
                                  <th>Product name</th>
                                  <th>Name</th>
                                  <th>Company Name</th>
                                  <th>Email</th>
                                  <th>Phone</th>
                                  <th>Customer Say</th>
                                  <th>Created</th>
                                  <th>Generate Token</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php foreach ($demo_request as $key => $drow): ?>
                              <tr>
                                  <td><?= $key+1 ?></td>
                                  <td><?php echo htmlspecialchars($drow->product_name,ENT_QUOTES,'UTF-8');?></td>
                                  <td><?php echo htmlspecialchars($drow->name,ENT_QUOTES,'UTF-8');?></td>
                                  <td><?php echo htmlspecialchars($drow->company,ENT_QUOTES,'UTF-8');?></td>
                                  <td><?php echo htmlspecialchars($drow->email,ENT_QUOTES,'UTF-8');?></td>
                                  <td><?php echo htmlspecialchars($drow->phone,ENT_QUOTES,'UTF-8');?></td>
                                  <td><?php echo htmlspecialchars($drow->customer_say,ENT_QUOTES,'UTF-8');?></td>
                                  <td><?php echo date('d-m-Y H:i:s', strtotime($drow->created_at));?></td>
                                  <td><a class="btn btn-primary btn-sm" href="<?= $drow->demo_url ?>">Generate</a></td>
                              </tr>
                              <?php endforeach;?>
                          </tbody>
                      </table>
                    </div>

                </div>
                <!-- /.box-body -->
            </div> <!-- /.box -->
        </div>
    </div> <!-- /.row -->
</section> <!-- /.content -->

<script>
  
  document.addEventListener("DOMContentLoaded", function() {
    // Filter table based on selected product name
    var table = document.getElementById('theTable');
    var rows = table.rows;
    document.getElementById('product_name').addEventListener('change', function() {
        var productName = this.value;
        if (productName === "all") {
            for (var i = 0; i < rows.length; i++) {
                rows[i].style.display = '';
            }
        } else {
            for (var i = 0; i < rows.length; i++) {
                if (rows[i].cells[1].textContent.indexOf(productName) === -1) {
                    rows[i].style.display = 'none';
                } else {
                    rows[i].style.display = '';
                }
            }
        }
    });
  });

</script>

<script>
function fnExcelReport() {
    var table = document.getElementById('theTable'); // id of table
    var tableHTML = table.outerHTML;
    var fileName = 'download.xls';

    var msie = window.navigator.userAgent.indexOf("MSIE ");
    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        dummyFrame.document.open('txt/html', 'replace');
        dummyFrame.document.write(tableHTML);
        dummyFrame.document.close();
        dummyFrame.focus();
        return dummyFrame.document.execCommand('SaveAs', true, fileName);
    } else {
        var a = document.createElement('a');
        tableHTML = tableHTML.replace(/  /g, '').replace(/ /g, '%20');
        a.href = 'data:application/vnd.ms-excel,' + tableHTML;
        a.setAttribute('download', fileName);
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    }
}
</script>

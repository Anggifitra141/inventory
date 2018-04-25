        <!-- Page-Title -->
      	<div class="row">
          	<div class="col-sm-12">
              	<h4 class="page-title" style="padding-bottom: 10px;">Data Barang Penjualan</h4>
              	<!--<p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
              	-->
          	</div>
      	</div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                        
                    <table id="b_penjualan" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th width="1">No</th>
                            <th>KD Penjualan</th>
                            <th>KD Barang</th>
                            <th>Satuan</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        	<?php $no=1; ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <button class="btn btn-warning" title="Edit"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
            $('#b_penjualan').DataTable();
                });
        </script>
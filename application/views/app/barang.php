        <!-- Page-Title -->
      	<div class="row">
          	<div class="col-sm-12">
              	<h4 class="page-title" style="padding-bottom: 10px;">Data Barang</h4>
              	<!--<p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
              	-->
          	</div>
      	</div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                        
                    <table id="barang" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th width="1">No</th>
                            <th>KD Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Harga beli</th>
                            <th>Harga Jual</th>
                            <th>Stok</th>
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
            $('#barang').DataTable();
                });
        </script>
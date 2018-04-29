		<!-- Page-Title -->
      	<div class="row">
          	<div class="col-sm-12">
              	<h4 class="page-title" style="padding-bottom: 10px;">Transaksi Pembelian</h4>
              	<!--<p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
              	-->
          	</div>
      	</div>

      	<div class="row">
            <div class="col-sm-12">
	            <div class="card-box table-responsive">
	                <div class="row" style="padding-bottom: 20px; padding-left: 10px;">
	                    <button class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
	                    <a href="<?php echo site_url('pembelian/d_pembelian') ?>" class="btn btn-warning"><i class="fa fa-reply"></i> Kembali</a>
	                </div> 
	                <table id="t_pembelian" class="table table-striped table-bordered">
	                    <thead>
	                    <tr>
	                        <th width="1">No</th>
	                        <th>Nama Barang</th>
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
	                        <td>
								<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
	                        </td>
	                    </tr>
	                    
	                    </tbody>
	                </table>
	            </div>

        		<div class="card-box">
        			<div class="row">
        				<form  action="" id="" method="post">
        					<div class="col-sm-6">
        						<div class="form-group">
        							<label class="control-label"> Tangggal</label>
        							<input type="text" name="" class="form-control">
        						</div>
        					</div>
        					<div class="col-sm-6">
        						<div class="form-group">
        							<label class="control-label"> Supplier</label>
        							<select name="" class="form-control">
        								<option>--Supplier--</option>
        								<option>AAA</option>
        							</select>
        						</div>
        					</div>
        				</form>
        			</div>
        		</div>
        		<div class="text-center">
            		<button class="btn btn-success"><i class="fa fa-refresh"></i> Proses</button>
            	</div>	

            </div>
        </div>

        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
            $('#t_pembelian').DataTable();
                });
        </script>
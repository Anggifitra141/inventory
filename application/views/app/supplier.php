      						<!-- Page-Title -->
                  <div class="row">
                      <div class="col-sm-12">
                          <h4 class="page-title" style="padding-bottom: 10px;">Supplier</h4>
                          <!--<p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
                          -->
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                        	<div class="row" style="padding-bottom: 20px;">
                        	<button class="btn btn-success" onclick="tambah_supplier()"><i class="fa fa-plus"></i> Tambah Supplier</button>
                        </div>
                                
                            <table id="supplier" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th width="1">No</th>
                                    <th>ID Supplier</th>
                                    <th>Nama Supplier</th>
                                    <th>Alamat</th>
                                    <th>Keterangan</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                	<?php $no=1; foreach ($list_supplier as $row) { ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $row->id; ?></td>
                                    <td><?php echo $row->nama; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><?php echo $row->ket; ?></td>
                                    <td>
                                    	<button class="btn btn-warning" onclick="update_supplier(<?php echo $row->id;?>)"><i class="fa fa-pencil"></i></button>
									<button class="btn btn-danger" onclick="delete_supplier(<?php echo $row->id;?>)"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Bootstrap modal -->
				<div class="modal fade" id="modal_form" role="dialog">
				<div class="modal-dialog">
				<div class="modal-content">
				  <div class="modal-header">
				    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				    <h3 class="modal-title">Form Tambah supplier</h3>
				  </div>
				  <div class="modal-body form">
				    <form action="#" id="form" class="form-horizontal">
				      <input type="hidden" value="" name="id"/>
				      <div class="form-body">
				        <div class="form-group">
				          <label class="control-label col-md-3">Nama Supplier</label>
				          <div class="col-md-9">
				            <input name="nama" placeholder="Nama supplier" class="form-control" type="text">
				          </div>
				        </div>
				        <div class="form-group">
				          <label class="control-label col-md-3">Alamat</label>
				          <div class="col-md-9">
				            <input name="alamat" placeholder="Alamat supplier" class="form-control" type="text">
				          </div>
				        </div>
				        <div class="form-group">
				          <label class="control-label col-md-3">Keterangan</label>
				          <div class="col-md-9">
						   	<input name="ket" placeholder="Keterangan" class="form-control" type="text">

				          </div>
				        </div>
				      </div>
				    </form>
				      </div>
				      <div class="modal-footer">
				        <button type="button" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
				        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				      </div>
				    </div><!-- /.modal-content -->
				  </div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
				<!-- End Bootstrap modal -->



      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

      <script type="text/javascript">
      	$(document).ready(function () {
      	$('#supplier').DataTable();
  			});

	    var save_method; //for save method string
	    var table;
	 
	 
	    function tambah_supplier()
	    {
	      save_method = 'tambah';
	      $('#form')[0].reset(); // reset form on modals
	      $('#modal_form').modal('show'); // show bootstrap modal
	    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
	    }
	 
	    function update_supplier(id)
	    {
	      save_method = 'update';
	      $('#form')[0].reset(); // reset form on modals
	 
	      //Ajax Load data from ajax
	      $.ajax({
	        url : "<?php echo site_url('app/get_supplier')?>/" + id,
	        type: "GET",
	        dataType: "JSON",
	        success: function(data)
	        {
	 
	            $('[name="id"]').val(data.id);
	            $('[name="nama"]').val(data.nama);
	            $('[name="alamat"]').val(data.alamat);
	            $('[name="ket"]').val(data.ket);
	 
	 
	            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
	            $('.modal-title').text('Form Edit Supplier'); // Set title to Bootstrap modal title
	 
	        },
	        error: function (jqXHR, textStatus, errorThrown)
	        {
	            alert('Error get data from ajax');
	        }
	    });
	    }
	 
	 
	 
	    function save()
	    {
	      var url;
	      if(save_method == 'tambah')
	      {
	          url = "<?php echo site_url('app/tambah_supplier')?>";
	      }
	      else
	      {
	        url = "<?php echo site_url('app/update_supplier')?>";
	      }
	 
	       // ajax adding data to database
	          $.ajax({
	            url : url,
	            type: "POST",
	            data: $('#form').serialize(),
	            dataType: "JSON",
	            success: function(data)
	            {
	               //if success close modal and reload ajax table
	               $('#modal_form').modal('hide');
	              location.reload();// for reload a page
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error adding / update data');
	            }
	        });
	    }
	 
	    function delete_supplier(id)
	    {
	      if(confirm('Are you sure delete this data?'))
	      {
	        // ajax delete data from database
	          $.ajax({
	            url : "<?php echo site_url('app/delete_supplier')?>/"+id,
	            type: "POST",
	            dataType: "JSON",
	            success: function(data)
	            {
	               
	               location.reload();
	            },
	            error: function (jqXHR, textStatus, errorThrown)
	            {
	                alert('Error deleting data');
	            }
	        });
	 
	      }
	    }
      </script>
      
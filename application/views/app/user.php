		<!-- Page-Title -->
      	<div class="row">
          	<div class="col-sm-12">
              	<h4 class="page-title" style="padding-bottom: 10px;">Users</h4>
              	<!--<p class="text-muted page-title-alt">Welcome to Ubold admin panel !</p>
              	-->
          	</div>
      	</div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box table-responsive">
                	<div class="row" style="padding-bottom: 20px; padding-left: 10px;">
                		<button class="btn btn-success" onclick="tambah_user()"><i class="fa fa-plus"></i> Tambah</button>
                	</div>
                        
                    <table id="user" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th width="1">No</th>
                            <th>Username</th>
                            <th>Fullname</th>
                            <th>level</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        	<?php $no=1; foreach ($list_user as $row) { ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $row->username; ?></td>
                            <td><?php echo $row->fullname; ?></td>
                            <td><?php echo $row->level; ?></td>
                            <td>
                            	<button class="btn btn-warning" onclick="update_user(<?php echo $row->id_user;?>)"><i class="fa fa-pencil"></i></button>
								<button class="btn btn-danger" onclick="delete_user(<?php echo $row->id_user;?>)"><i class="fa fa-trash"></i></button>
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
			    		<h3 class="modal-title">Form Tambah User</h3>
			  		</div>
			  	<div class="modal-body form">
				    <form action="#" id="form" class="form-horizontal">
				      	<input type="hidden" value="" name="id_user"/>
				      	<div class="form-body">
				        	<div class="form-group">
				          		<label class="control-label col-md-3">Username</label>
				          		<div class="col-md-9">
				            		<input name="username" placeholder="Username" class="form-control" type="text" required>
				          		</div>
				        	</div>
				        	<div class="form-group" id="password">
				          		<label class="control-label col-md-3">Password</label>
				          		<div class="col-md-9">
				            		<input name="password" placeholder="Password" class="form-control" type="password" required>
				          		</div>
				       	 	</div>
				        	<div class="form-group">
				          		<label class="control-label col-md-3">Fullname</label>
				          		<div class="col-md-9">
						   					<input name="fullname" placeholder="Fullname" class="form-control" type="text">
				          		</div>
				        	</div>
				        	<div class="form-group">
				          		<label class="control-label col-md-3">Level</label>
				          		<div class="col-md-9">
				   					<select name="level" class="form-control">
				   						<option>-- Pilih Level --</option>
				   						<option>admin</option>
				   						<option>petugas</option>
				   					</select>
				          		</div>
				        	</div>
				      	</div>
				    </form>
			    </div>
			    <div class="modal-footer">
			        <button type="submit" id="btnSave" onclick="save()" class="btn btn-primary">Save</button>
			        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			    </div>
			    </div><!-- /.modal-content -->
		  	</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		<!-- End Bootstrap modal -->



	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

	    <script type="text/javascript">
	      	$(document).ready(function () {
	      	$('#user').DataTable();
	  			});

		    var	save_method; //for save method string
		    var	table;
		 
		 
		    function tambah_user() {
		      	save_method = 'tambah';
		      	$('#form')[0].reset(); // reset form on modals
		      	$('#modal_form').modal('show'); // show bootstrap modal
		    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
		    }
		 
		    function update_user(id_user) {
		      	save_method = 'update';
		      	$('#form')[0].reset(); // reset form on modals
		 
		      	//Ajax Load data from ajax
		      	$.ajax({
		        	url : "<?php echo site_url('user/get_user')?>/"+id_user,
		        	type: "GET",
		        	dataType: "JSON",
		        	success: function(data)
		        	{
		 
			            $('[name="id_user"]').val(data.id_user);
			            $('[name="username"]').val(data.username);
			            $('[name="password"]').val(data.password);
			            $('[name="fullname"]').val(data.fullname);
			            $('[name="level"]').val(data.level);
		 
		 
			            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
			            $('#password').hide();
			            $('.modal-title').text('Form Edit User'); // Set title to Bootstrap modal title
		 
		        	},
		       		error: function (jqXHR, textStatus, errorThrown)
		        	{
		           	 	alert('Error get data from ajax');
		        	}
		    	});
		    }	 
		 
		    function save() {
		      	var url;
		      	if(save_method == 'tambah')
		      	{
		          url = "<?php echo site_url('user/tambah_user')?>";
		      	}
		      	else{
		        	url = "<?php echo site_url('user/update_user')?>";
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
	                	location.reload();
	            	}
	        	});
		    }
		 
		    function delete_user(id_user) {

		      	if(confirm('Are you sure delete this data?'))
		      	{
		        	// ajax delete data from database
		          	$.ajax({
		            	url : "<?php echo site_url('user/delete_user')?>/"+id_user,
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
				      
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1><?php echo $heading ?> <a href="<?php echo base_url('admin/admin/addedit')?>"><button type="submit" class="btn btn-info pull-right">Add New</button></a></h1>
    </section>

    <!-- Main content -->
    <section class="content">
		<div class="row">
			<div class="col-xs-12">
			  <div class="box box-primary">
				
				<div class="box-body table-responsive no-padding">
				  <table class="table table-hover table-bordered">
					<tr>
						<th style='width: 5%;'>ID</th>
						<th style='width: 20%;'>Name</th>					
						<th style='width: 10%;'>Email</th>
						<th style='width: 10%;'>Role</th>
						<th style='width: 10%;'>Created By</th>
						<th style='width: 10%;'></th>
					</tr>
					<?php 
					if($records){
					$i=0;
					foreach($records as $data){$i++;
					?>
						<tr class='gradeA'>
							<td><?php echo $data->adminID; ?></td>
							<td><?php echo $data->admin_name; ?></td>
							<td><?php echo $data->admin_email; ?></td>
							<td><?php echo $data->role; ?></td>
							<td><?php echo $data->admin_created_by; ?></td>
							
							<td>
								<a href="<?php echo base_url();?>admin/admin/addedit/<?php echo $data->adminID; ?>"><strong>Edit</strong></a>
								| <a  href="javascript:;" data-id="<?php echo $data->adminID; ?>" class="deletelink"><strong>Delete</strong></a>
							</td>
						</tr>
					<?php }
					}
					?>
				  </table>
				</div>
				<!-- /.box-body -->
				
				<div class="box-footer clearfix">
				  <ul class="pagination pagination-sm no-margin pull-right">
					<?php echo $pagination_links; ?>
					<input type="hidden" id="controller" value="admin" />
				  </ul>
				</div>
			  </div>
			  <!-- /.box -->
			</div>
		  </div>
		
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="dt_staff_list">
	<thead>
		<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
			<!-- <th class="min-w-125px">Event Date Time</th> -->
			<th class="min-w-125px">Category</th>
			<th class="min-w-125px">Item</th>
			<th class="min-w-125px">Centre</th>
			<th class="min-w-125px">Created Date</th> 
			<th class="min-w-125px">Status</th>
			<!-- <th class="text-end min-w-100px">Actions</th> -->
		</tr>
	</thead>
	<tbody class="text-gray-600 fw-semibold">
		<? if($inventorys){ ?>
		<? foreach ($inventorys as $key) { ?>
		<?
		$centre = get_any_table_row(array('id' => $key['centre_id']), 'centre');
		?>
		<tr>
			<td><?=$key['category']?></td>
			<td class="d-flex align-items-center">
				<!--begin::User details-->
				<div class="d-flex flex-column">
					<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1"><?=strtoupper($key['name'])?></a>
					<!-- <span>smith@kpmg.com</span> -->
				</div>
				<!--begin::User details-->
			</td>
			<td><?=$centre['name']?></td>
			<td><?=convert_date($key['create_dt'])?></td>
			<td>
				<!-- <div class="badge badge-warning fw-bold badge-lg" title="Complete staff registration details to active" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="bottom">In Review</div> -->
				<? if($key['status'] == '0'){ ?>
				<div class="badge badge-warning fw-bold badge-lg">Pending Approval</div>
				<? } ?>
				<? if($key['status'] == '1'){ ?>
				<div class="badge badge-success fw-bold badge-lg">Active</div>
				<? } ?>

				<? if($key['status'] == '2'){ ?>
				<div class="badge badge-danger fw-bold badge-lg">Rejected</div>
				<? } ?>
			</td>
			
		</tr>
		<? } ?>
		<? } ?>
	</tbody>
</table>
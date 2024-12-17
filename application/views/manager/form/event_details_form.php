<table class="table align-middle table-row-dashed fs-6 gy-5" id="dt_staff_list">
	<thead>
		<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
			<th class="min-w-125px">Event Name</th>
			<th class="min-w-125px">Event Date Time</th>
			<th class="min-w-125px">Location</th>
			<th class="min-w-125px">Recycling Centre</th>
			<th class="min-w-125px">Status</th>
			<th class="text-end min-w-100px">Actions</th>
		</tr>
	</thead>
	<tbody class="text-gray-600 fw-semibold">
		<? if($events){ ?>
		<? foreach ($events as $key) { ?>
		<?
		$centre = get_any_table_row(array('id' => $key['centre_id']), 'centre');
		?>
		<tr>
			<td class="d-flex align-items-center">
				<!--begin::User details-->
				<div class="d-flex flex-column">
					<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1"><?=strtoupper($key['name'])?></a>
					<!-- <span>smith@kpmg.com</span> -->
				</div>
				<!--begin::User details-->
			</td>
			<td><?=convert_date($key['event_dt'])?></td>
			<td><?=$key['location']?></td>
			<td><?=$centre['name']?></td>
			<td>
				<!-- <div class="badge badge-warning fw-bold badge-lg" title="Complete staff registration details to active" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="bottom">In Review</div> -->
				<div class="badge badge-warning fw-bold badge-lg">Pending Approval</div>
			</td>
			<td class="text-end">
				<a href="#" class="btn btn-light btn-primary btn-flex btn-center btn-sm view-event" data-init="<?=$key['id']?>">View</a>
				<!-- <a href="#" class="btn btn-light btn-danger btn-flex btn-center btn-sm" data-kt-menu-placement="bottom-end">Delete</a> -->
			</td>
		</tr>
		<? } ?>
		<? } ?>
	</tbody>
</table>
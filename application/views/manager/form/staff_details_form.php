<table class="table align-middle table-row-dashed fs-6 gy-5" id="dt_staff_list">
		<thead>
			<tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
				<th class="min-w-125px">Name</th>
				<th class="min-w-125px">Email</th>
				<th class="min-w-125px">Phone No.</th>
				<th class="min-w-125px">Position</th>
				<th class="min-w-125px">Joined Date</th>
				<!-- <th class="text-end min-w-100px">Actions</th> -->
			</tr>
		</thead>
		<tbody class="text-gray-600 fw-semibold">
			<? if($staffs){ ?>
			<? foreach ($staffs as $key) { ?>

			<? $users = get_any_table_row(array('id' => $key['staff_id']), 'users'); ?>

			<tr>
				<td class="d-flex align-items-center">
					<!--begin::User details-->
					<div class="d-flex flex-column">
						<a href="apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1"><?=strtoupper($users['name'])?></a>
						<!-- <span>smith@kpmg.com</span> -->
					</div>
					<!--begin::User details-->
				</td>
				<td><?=$users['email']?></td>
				<td><?=$key['phone_no']?></td>
				<td><?=strtoupper($key['position'])?></td>
				<td><?=dmy($key['create_dt'])?></td>
				<?/*
				<td class="text-end">
					<a href="#" class="btn btn-light btn-primary btn-flex btn-center btn-sm complete-register" data-kt-menu-placement="bottom-end" data-init="<?=$key['id']?>">Complete Registration</a>
					<!-- <a href="#" class="btn btn-light btn-danger btn-flex btn-center btn-sm" data-kt-menu-placement="bottom-end">Delete</a> -->
				</td>
				*/?>
			</tr>
			<? } ?>
			<? } ?>
		</tbody>
	</table>
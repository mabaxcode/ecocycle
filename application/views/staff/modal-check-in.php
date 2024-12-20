
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
                <h5 class="modal-title">Event (Volunteer/Participant) Check-In</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <p>Event Name : <b><?=$event['name']?></b></p>
                <p>Event Date : <b><?=dmy($event['event_date'])?></b></p>
                <p>Location : <b><?=$event['location']?></b></p>
                <p>Description : <b><?=$event['justification']?></b></p>

                <br>
                <div class="table-responsive">
					<table class="table table-striped gy-7 gs-7">
						<thead>
							<tr class="fw-semibold fs-6 text-gray-800 border-bottom border-gray-200">
								<th>No</th>
								<th>Participant Name</th>
								<th>Email</th>
								<th>Check-In</th>
							</tr>
						</thead>
						<tbody>
						<? $no =1; ?>
						<? if($user){ ?>
							<? foreach ($user as $key) { ?>
							<?
							$user_detail = get_any_table_row(array('id' => $key['user_id']), 'users'); 

							//$student_img = get_any_table_row(array('user_id' => $key['student_id']), 'profile_picture'); 
							?>
							<tr>
								<td><?= $no++;?></td>
								<td class="pl-0 py-4">
									<?= ucfirst($user_detail['name'])?>
								</td>
								<td>
									<?= $user_detail['email']?>
								</td>
								<td>

									<?
							    		if ($key['complete'] == 'Y') {
							    			$check = "checked";
							    		} else {
							    			$check = '';
							    		}
							    	?>


									<?/*
									<a href="#" class="btn btn-sm btn-info font-weight-bolder btn-make-attendence" data-init="<?= $key['id']?>" data-action="<?= $action?>">
									Attendence</a> */?>
									<div class="form-check form-switch form-check-custom form-check-solid">
									    <input class="form-check-input" id="attend-check-<?= $key['id']?>" type="checkbox" <?= $check?> value="Y" onchange="check_in('<?= $key['id']?>');" />
									    <label class="form-check-label" for="flexSwitchDefault">
									        <!-- Default switch -->
									    </label>
									</div>

									
								</td>
							</tr>

							<? } ?>
						<? } ?>
					</tbody>
					</table>
				</div>







            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>



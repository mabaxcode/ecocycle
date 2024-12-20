<div class="modal fade" id="modal_complete_reg" tabindex="-1" aria-hidden="true">

<script src="<?=base_url()?>assets/js/custom/apps/file-manager/list.js"></script>

<script type="text/javascript">
	var hostUrl = "http://localhost/ecocycle";
</script>

<script type="text/javascript">
    
"use strict";
var KTUsersList = function() {
    var e, t, n, r, o = document.getElementById("dt_staff_list"),
        c = () => {
            
        };

    return {
        init: function() {
            o && (o.querySelectorAll("tbody tr").forEach((e => {
                const t = e.querySelectorAll("td"),
                    n = t[3].innerText.toLowerCase();
                let r = 0,
                    o = "minutes";
                n.includes("yesterday") ? (r = 1, o = "days") : n.includes("mins") ? (r = parseInt(n.replace(/\D/g, "")), o = "minutes") : n.includes("hours") ? (r = parseInt(n.replace(/\D/g, "")), o = "hours") : n.includes("days") ? (r = parseInt(n.replace(/\D/g, "")), o = "days") : n.includes("weeks") && (r = parseInt(n.replace(/\D/g, "")), o = "weeks");
                const c = moment().subtract(r, o).format();
                t[3].setAttribute("data-order", c);
                // const l = moment(t[5].innerHTML, "DD MMM YYYY, LT").format();
                // t[5].setAttribute("data-order", l)
            })), (e = $(o).DataTable({
                info: !1,
                order: [],
                pageLength: 10,
                lengthChange: !1,
                columnDefs: [{
                    orderable: !1,
                    targets: 0
                }, {
                    orderable: !1,
                    targets: 3
                }]
            })).on("draw", (function() {
                c()
            })), document.querySelector('[data-kt-user-table-filter="search"]').addEventListener("keyup", (function(t) {
                e.search(t.target.value).draw()
            })), c(), (() => {
                const t = document.querySelector('[data-kt-user-table-filter="form"]')
            })())
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTUsersList.init()
}));

</script>

<script type="text/javascript">
	
	$(document).on('click', '.modal-check-in-v', function (e) {

		var id = $(this).data('init');

   		 e.preventDefault();
   		  $.ajax({
		        url: base_url + 'staff/modal_checkin',
		        type: "POST",
		        data: {id:id},
		        async: true,
		        success: function( response ){
		            $('#modal_complete_reg').html(response);
		            $('#modal_complete_reg').modal('show');
		        },
		        error: function(data){
		            // console.log(data);
		        },
		    });

    });

    function check_in(id)
	{   
	    // Get the checkbox element
	    const checkbox = document.getElementById('attend-check-'+id);

	    var attend = '';
	  
	    // Check if the checkbox is checked or not
	    if (checkbox.checked) {
	        attend = 'Y';
	        
	    } else {
	        attend = 'N';
	    }

	    $.ajax({
	        url: base_url + 'staff/update_attendence',
	        type: "POST",
	        data:{attend:attend,id:id},
	        async: true,
	        dataType:"json",
	        success: function( response ){
	            if (response.status == true) {
	                
	            }
	            
	        },
	        error: function(data){
	            // console.log(data);
	        },
	    });


	}

	var table_staff_complete = $('#result-staff-centres');



    var KTDatatablesDataSourceAjaxServer333 = function () {

        // This will remove the 'dtr-control' class from all rows that have it
        // $('#result-staff-centres').find('.dtr-control').removeClass('dtr-control');

        


        var initTableComplete = function () {
            var qData = {};
            // begin first table
            table_staff_complete.DataTable({
                // responsive: true,
                autoWidth: false,
                // dom: '<"top"l>rt<"bottom"ip><"clear">',
                searching: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: base_url + "staff/record_app", type: "POST",
                    data: function (d) {
                        return $.extend({}, d, {
                            "inpt_centre": $('.inpt_centre').val(),
                            "inpt_data": $('.inpt_data').val(),
                        }, qData);
                    },
                    error: function (data, textStatus, xhr) {

                    }
                },
                columns: [
                    {
                        data: 'no',
                        // width: "5%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'name',
                        width: "30%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'email',
                        width: "15%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'event',
                        width: "13%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'status',
                        // width: "5%",
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'action',
                        // width: "11%",
                        searchable: false,
                        orderable: false
                    },
                ],
                order: false,
            });
            var timeout = null;

            $('.btn-search').on('click', function (e) {
                e.preventDefault();
                e.stopImmediatePropagation();
                table_staff_complete.DataTable().columns().search().draw();
                // alert($('.inpt_month').val() + $('.inpt_year').val(),);
            });

            $('.btn-reset-search-nurse').on('click', function (e) {
                e.preventDefault();
                // $('.inpt_centre').each(function () {
                    $(this).val('');
                    $('.dt-select').val(null).trigger('change');
                // });

                table_staff_complete.DataTable().columns().search().draw();
            });



        };

        return {

            //main function to initiate the module
            init: function () {
                initTableComplete();
            }
        };
    }();

    $(document).ready(function () {
        KTDatatablesDataSourceAjaxServer333.init();

    });

    

    $(document).on('click', '.is-event-complete', function (e) {
    e.preventDefault();

        
            var id = $(this).data('init');

          
               
                Swal.fire({
                  // title: "Are you sure?",
                  text: "Is event complete ?",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#3085d6",
                  cancelButtonColor: "#d33",
                  confirmButtonText: "Yes, Complete"
                }).then((result) => {
                  if (result.isConfirmed) {



                        $.ajax({
                                url: base_url + 'staff/complete_this_event',
                                type: "POST",
                                data: {id:id},
                                dataType: "json",
                                async: true,
                                success: function( response ) {
                                    // console.log(response);
                                    if (response.status == true) {
                                        Swal.fire({
                                            text: response.msg,
                                            icon: "success",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        }).then((function(t) {
                                            if (t.isConfirmed) {
                                                // $("#modal_complete_reg").modal('hide');
                                                location.reload();
                                            }
                                        }))
                                    } else {
                                        Swal.fire({
                                            text: response.msg,
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        })
                                    }
                                }
                            });

                    
                  }
                });
         

            

            

        
    

});


$(document).on('click', '.generate-cert-btn', function (e) {
    e.preventDefault();

        
            var id = $(this).data('init');

          
               
                Swal.fire({
                  // title: "Are you sure?",
                  text: "Are you sure want to generate participant certificate ?",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#3085d6",
                  cancelButtonColor: "#d33",
                  confirmButtonText: "Yes, Generate"
                }).then((result) => {
                  if (result.isConfirmed) {



                        $.ajax({
                                url: base_url + 'staff/do_generate_cert',
                                type: "POST",
                                data: {id:id},
                                dataType: "json",
                                async: true,
                                success: function( response ) {
                                    // console.log(response);
                                    if (response.status == true) {
                                        Swal.fire({
                                            text: response.msg,
                                            icon: "success",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        }).then((function(t) {
                                            if (t.isConfirmed) {
                                                // $("#modal_complete_reg").modal('hide');
                                                location.reload();
                                            }
                                        }))
                                    } else {
                                        Swal.fire({
                                            text: response.msg,
                                            icon: "error",
                                            buttonsStyling: !1,
                                            confirmButtonText: "Ok, got it!",
                                            customClass: {
                                                confirmButton: "btn btn-primary"
                                            }
                                        })
                                    }
                                }
                            });

                    
                  }
                });
         

            

            

        
    

});




$(document).on('click', '.view-cert', function (e) {
    e.preventDefault();

    var id = $(this).data('init');  // Get data attribute



    // Send request to server to generate and view PDF
    $.ajax({
        url: base_url + 'pdfController/generate_certificate',  // URL to your CodeIgniter controller function
        type: 'POST',
        data: { id: id },
        success: function(response) {
            // Open PDF in new tab or download
            var pdfUrl = response.file_path;
            window.open(pdfUrl, '_blank');
        },
        error: function() {
            alert('Error generating PDF.');
        }
    });
});


</script>

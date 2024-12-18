<div class="modal fade" id="modal_complete_reg" tabindex="-1" aria-hidden="true">

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

$(document).on('click', '.detail-register-admin', function(e){
    var id = $(this).data('init');
    e.preventDefault();
    $.ajax({
        url: base_url + 'admin/view_centre_registation',
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


var validateStaffCompleteProcessCentre;
function completeCentreProcess(formID)
{   
    const fileFormInvent = document.getElementById(formID);
    validateStaffCompleteProcessCentre = FormValidation.formValidation(
    fileFormInvent,
    {
        fields: {
            decision: {
                validators: {
                    notEmpty: {
                        message: 'Approval decision is required',
                    }
                }
            },
        },
        plugins: {
            trigger: new FormValidation.plugins.Trigger,
            bootstrap: new FormValidation.plugins.Bootstrap5({
                rowSelector: ".fv-row",
                eleInvalidClass: "",
                eleValidClass: ""
            })
        }
    }
    );
}

$(document).on('click', '.btn-process-centre', function (e) {
    e.preventDefault();
    validateStaffCompleteProcessCentre.validate().then(function(status) {

        if (status == 'Valid') {

            var newStaffFormDataProcessInvent = $('#complete_process_centre').serialize();

          
               
                Swal.fire({
                  // title: "Are you sure?",
                  text: "Are you sure ?",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#3085d6",
                  cancelButtonColor: "#d33",
                  confirmButtonText: "Yes"
                }).then((result) => {
                  if (result.isConfirmed) {



                        $.ajax({
                                url: base_url + 'admin/do_approval_centre',
                                type: "POST",
                                data: newStaffFormDataProcessInvent,
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
                                                $("#modal_complete_reg").modal('hide');
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
         

            

            

        } else {
            swal.fire({
                text: "Before proceeding, please ensure that all mandatory fields have been completed.",
                icon: "error",
                buttonsStyling: false,
                confirmButtonText: "Ok, got it!",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-light-primary"
                }
            })
        }
    });

});

var KTModalNewTargetEditInventory = function() {
    var t, e, n, a, o, i;
    return {
        init: function() {
            (i = document.querySelector("#kt_modal_new_address")) && (o = new bootstrap.Modal(i), a = document.querySelector("#kt_modal_new_address_form"), t = document.getElementById("kt_modal_new_address_submit"), e = document.getElementById("kt_modal_new_address_cancel"), new Tagify(a.querySelector('[name="tags"]'), {
                whitelist: ["Important", "Urgent", "High", "Medium", "Low"],
                maxTags: 5,
                dropdown: {
                    maxItems: 10,
                    enabled: 0,
                    closeOnSelect: !1
                }
            }).on("change", (function() {
                n.revalidateField("tags")
            })), $(a.querySelector('[name="due_date"]')).flatpickr({
                enableTime: !0,
                dateFormat: "d, M Y, H:i"
            }), $(a.querySelector('[name="team_assign"]')).on("change", (function() {
                n.revalidateField("team_assign")
            })), n = FormValidation.formValidation(a, {
                fields: {
                    descs: {
                        validators: {
                            notEmpty: {
                                message: "Category Name is required"
                            }
                        }
                    },
                    
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function(e) {
                var workshopForm = $('#kt_modal_new_address_form').serialize();
                e.preventDefault(), n && n.validate().then((function(e) {
                    console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1,
                        // doRegister(workshopForm);
                        $.ajax({
                            url: base_url + 'admin/do_add_inventory',
                            type: "POST",
                            data: workshopForm,
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
                                            t.isConfirmed && o.hide()
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
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })), e.addEventListener("click", (function(t) {
                t.preventDefault(), Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then((function(t) {
                    t.value ? (a.reset(), o.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTModalNewTargetEditInventory.init()
}));

var KTModalNewTargetEditInventoryBlog = function() {
    var t, e, n, a, o, i;
    return {
        init: function() {
            (i = document.querySelector("#kt_modal_new_address_blog")) && (o = new bootstrap.Modal(i), a = document.querySelector("#kt_modal_new_address_form_blog"), t = document.getElementById("kt_modal_new_address_submit_blog"), e = document.getElementById("kt_modal_new_address_cancel_blog"), new Tagify(a.querySelector('[name="tags"]'), {
                whitelist: ["Important", "Urgent", "High", "Medium", "Low"],
                maxTags: 5,
                dropdown: {
                    maxItems: 10,
                    enabled: 0,
                    closeOnSelect: !1
                }
            }).on("change", (function() {
                n.revalidateField("tags")
            })), $(a.querySelector('[name="due_date"]')).flatpickr({
                enableTime: !0,
                dateFormat: "d, M Y, H:i"
            }), $(a.querySelector('[name="team_assign"]')).on("change", (function() {
                n.revalidateField("team_assign")
            })), n = FormValidation.formValidation(a, {
                fields: {
                    descs: {
                        validators: {
                            notEmpty: {
                                message: "Category Name is required"
                            }
                        }
                    },
                    
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger,
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: ".fv-row",
                        eleInvalidClass: "",
                        eleValidClass: ""
                    })
                }
            }), t.addEventListener("click", (function(e) {
                var workshopForm = $('#kt_modal_new_address_form_blog').serialize();
                e.preventDefault(), n && n.validate().then((function(e) {
                    console.log("validated!"), "Valid" == e ? (t.setAttribute("data-kt-indicator", "on"), t.disabled = !0, setTimeout((function() {
                        t.removeAttribute("data-kt-indicator"), t.disabled = !1,
                        // doRegister(workshopForm);
                        $.ajax({
                            url: base_url + 'admin/do_add_blog_cat',
                            type: "POST",
                            data: workshopForm,
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
                                            t.isConfirmed && o.hide()
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
                    }), 2e3)) : Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })), e.addEventListener("click", (function(t) {
                t.preventDefault(), Swal.fire({
                    text: "Are you sure you would like to cancel?",
                    icon: "warning",
                    showCancelButton: !0,
                    buttonsStyling: !1,
                    confirmButtonText: "Yes, cancel it!",
                    cancelButtonText: "No, return",
                    customClass: {
                        confirmButton: "btn btn-primary",
                        cancelButton: "btn btn-active-light"
                    }
                }).then((function(t) {
                    t.value ? (a.reset(), o.hide()) : "cancel" === t.dismiss && Swal.fire({
                        text: "Your form has not been cancelled!.",
                        icon: "error",
                        buttonsStyling: !1,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    })
                }))
            })))
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTModalNewTargetEditInventoryBlog.init()
}));




$(document).on('click', '.delete-ref-code', function(e){
    var id = $(this).data('init');
    e.preventDefault();

    Swal.fire({
                  // title: "Are you sure?",
                  text: "Are you sure want to remove this item?",
                  icon: "warning",
                  showCancelButton: true,
                  confirmButtonColor: "#3085d6",
                  cancelButtonColor: "#d33",
                  confirmButtonText: "Yes"
                }).then((result) => {
                  if (result.isConfirmed) {



                        $.ajax({
                                url: base_url + 'admin/delete_ref_code',
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


</script>

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

</script>

<script type="text/javascript">
"use strict";
var KTAccountSettingsSigninMethods = function() {
    var t, e, n, o, i, s, r, a, l, d = function() {
            e.classList.toggle("d-none"), s.classList.toggle("d-none"), n.classList.toggle("d-none")
        },
        c = function() {
            o.classList.toggle("d-none"), a.classList.toggle("d-none"), i.classList.toggle("d-none")
        };
    return {
        init: function() {
            var m;
            t = document.getElementById("kt_signin_change_email"), e = document.getElementById("kt_signin_email"), n = document.getElementById("kt_signin_email_edit"), o = document.getElementById("kt_signin_password"), i = document.getElementById("kt_signin_password_edit"), s = document.getElementById("kt_signin_email_button"), r = document.getElementById("kt_signin_cancel"), a = document.getElementById("kt_signin_password_button"), l = document.getElementById("kt_password_cancel"), e && (s.querySelector("button").addEventListener("click", (function() {
                    d()
                })), r.addEventListener("click", (function() {
                    d()
                })), a.querySelector("button").addEventListener("click", (function() {
                    c()
                })), l.addEventListener("click", (function() {
                    c()
                }))), t && (m = FormValidation.formValidation(t, {
                    fields: {
                        emailaddress: {
                            validators: {
                                notEmpty: {
                                    message: "Email is required"
                                },
                                emailAddress: {
                                    message: "The value is not a valid email address"
                                }
                            }
                        },
                        confirmemailpassword: {
                            validators: {
                                notEmpty: {
                                    message: "Password is required"
                                }
                            }
                        }
                    },
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row"
                        })
                    }
                }), t.querySelector("#kt_signin_submit").addEventListener("click", (function(e) {
                    
                    e.preventDefault(), console.log("click"), m.validate().then((function(e) {
                        if("Valid" == e){ 
                            /*do the process*/
                            var formData = $('#kt_signin_change_email').serialize();
                            do_change_the_email(formData);
                            
                        } else {
                            swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            })
                        }
                    }))
                }))),
                function(t) {
                    var e, n = document.getElementById("kt_signin_change_password");
                    n && (e = FormValidation.formValidation(n, {
                        fields: {
                            currentpassword: {
                                validators: {
                                    notEmpty: {
                                        message: "Current Password is required"
                                    }
                                }
                            },
                            newpassword: {
                                validators: {
                                    notEmpty: {
                                        message: "New Password is required"
                                    }
                                }
                            },
                            confirmpassword: {
                                validators: {
                                    notEmpty: {
                                        message: "Confirm Password is required"
                                    },
                                    identical: {
                                        compare: function() {
                                            return n.querySelector('[name="newpassword"]').value
                                        },
                                        message: "The password and its confirm are not the same"
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger,
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: ".fv-row"
                            })
                        }
                    }), n.querySelector("#kt_password_submit").addEventListener("click", (function(t) {
                        t.preventDefault(), console.log("click"), e.validate().then((function(t) {
                            if (t == "Valid") {

                                var formPasswordData = $('#kt_signin_change_password').serialize();
                                do_change_the_password(formPasswordData);

                            } else {
                                swal.fire({
                                    text: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: !1,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn font-weight-bold btn-light-primary"
                                    }
                                })
                            }
                        }))
                    })))
                }()
        }
    }
}();
KTUtil.onDOMContentLoaded((function() {
    KTAccountSettingsSigninMethods.init()
}));

    
function do_change_the_email(formData)
{
    $.ajax({
        url: base_url + 'app/change_email',
        type: "POST",
        data: formData,
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
                return;
            }
        }
    });
}

function do_change_the_password(formPasswordData)
{
    $.ajax({
        url: base_url + 'app/change_password',
        type: "POST",
        data: formPasswordData,
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
                return;
            }
        }
    });
}

updateProfileDetails('kt_account_profile_details_form');

var validatUpdateProfile;
function updateProfileDetails(formID)
{   
    const folderForm = document.getElementById(formID);
    validatUpdateProfile = FormValidation.formValidation(
    folderForm,
    {
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'Name is required'
                    }
                }
            },
            phone_no: {
                validators: {
                    notEmpty: {
                        message: 'Phone No. is required'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: "Email is required"
                    },
                    emailAddress: {
                        message: "The value is not a valid email address"
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'Address is required'
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

$(document).on('click', '.save-profile-change', function (e) {
    e.preventDefault();
    validatUpdateProfile.validate().then(function(status) {

        if (status == 'Valid') {

            var profileFormData = $('#kt_account_profile_details_form').serialize();

            $.ajax({
                url: base_url + 'user/update_profile',
                type: "POST",
                data: profileFormData,
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

function book_slot(id){

    $.ajax({
        url: base_url + 'user/pre_booked_event',
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


}

</script>


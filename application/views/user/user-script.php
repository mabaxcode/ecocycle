
<div class="modal fade" id="modal_complete_reg" tabindex="-1" aria-hidden="true">


<script type="text/javascript">



// $(document).on('click', '.proceed-booked', function (e) {
//     e.preventDefault();

// });

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

$(document).on('click', '.proceed-booked', function (e) {

    e.preventDefault();

    var id = $(this).data('init');

    const checkbox = document.getElementById('flexCheckDefault_eco');
    
    if (checkbox.checked) {

         Swal.fire({
          title: "Do you want to join this event?",
          // showDenyButton: true,
          showCancelButton: true,
          confirmButtonText: "Yes, Confirm",
          // denyButtonText: `Don't save`
        }).then((result) => {
          /* Read more about isConfirmed, isDenied below */
          if (result.isConfirmed) {
                // Swal.fire("Saved!", "", "success");
            $.ajax({
                url: base_url + 'user/do_booked_event',
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
                                $('#modal_complete_reg').modal('hide');
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
          } else if (result.isDenied) {
                Swal.fire("Changes are not saved", "", "info");
          }
        });


    } else {
        Swal.fire({
          title: "Alert",
          text: "Please agree with the terms and condition.",
          icon: "info"
        });
    }

    



});

</script>


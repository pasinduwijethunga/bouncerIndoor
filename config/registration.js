function registrationClient() {
    var action="add";
    var fristName = $("#fname").val();
    var lastName = $("#lname").val();
    var addesss = $("#address").val();
    var email = $("#email").val();
    var telephone = $("#teli").val();
    var fName = $("#fatherName").val();
    var fTele = $("#fteli").val();
    var mName = $("#mName").val();
    var mTele = $("#mTele").val();
    var birthDay = $("#bDay").val();
    var registationDay = $("#reDya").val();
    var teamType = $("#teamType").val();
    var coachName = $("#coachName").val();
    var pPicture = document.getElementById('pPicture').files[0];
    var slipImage = document.getElementById('bankSlip').files[0];
    var p_image_name = pPicture.name;
    var p_image_extension = p_image_name.split('.').pop().toLowerCase();
    if (jQuery.inArray(p_image_extension, ['gif', 'png', 'jpg', 'jpeg']) !== -1) {
        var slip_image = slipImage.name;
        var slip_image_extension = slip_image.split('.').pop().toLowerCase();
        if (jQuery.inArray(slip_image_extension, ['gif', 'png', 'jpg', 'jpeg']) !== -1) {
            var p_image_size = pPicture.size;
            if (!(p_image_size > 2000000)) {
                var slip_image_size = slipImage.size;
                if (!(slip_image_size > 2000000)) {
                    var form_data = new FormData();
                    form_data.append('action', action);
                    form_data.append('fName', fristName);
                    form_data.append('lName', lastName);
                    form_data.append('Raddesss', addesss);
                    form_data.append('mail', email);
                    form_data.append('tp', telephone);
                    form_data.append('fafName', fName);
                    form_data.append('fTelep', fTele);
                    // form_data.append('fTelep', fTele);
                    form_data.append('mNamas', mName);
                    form_data.append('mTelep', mTele);
                    form_data.append('bDay', birthDay);
                    form_data.append('reRegistationDay', registationDay);
                    form_data.append('Ttype', teamType);
                    form_data.append('CName', coachName);
                    form_data.append('pict', pPicture);
                    form_data.append('slip', slipImage);
                    $.ajax({
                        url: "./ajax/register-actions.php",
                        type: "post",
                        data: form_data,
                        processData: false,
                        contentType: false,
                        cache: false,
                        beforeSend: function (data) {

                        },
                        success: function (data) {
                            let res = JSON.parse(data);
                            $status=res['status'];
                            iziToast.show({
                                title: 'Hey',
                                message: $status,
                                color:'blue'
                            });
                            console.log(res);
                        }, error: function (xhr, status, error) {

                        }
                    })
                } else {
                    iziToast.show({
                        title: 'Hey',
                        message: 'slip image is very big...',
                        color:'Red'
                    });

                }
            } else {
                iziToast.show({
                    title: 'Hey',
                    message: 'profile image is very big...',
                    color:'Red'
                });
            }
        } else {
            iziToast.show({
                title: 'Hey',
                message: 'slip Image is Invalid..',
                color:'Red'
            });
        }
    } else {
        iziToast.show({
            title: 'Hey',
            message: 'image invalid',
            color:'Red'
        });
    }
}
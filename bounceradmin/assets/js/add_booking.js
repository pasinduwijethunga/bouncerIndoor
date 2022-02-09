$(document).ready(function () {
    $('#bookingForm').validate({
        rules:{
            mobile : {
                required: true,
                minlength: 10,
                number: true
            },
            nic:{
                required:true,
                minlength:10
            },
            bookFrom:{
                required:true
            },
            bookDate: {
                required: true,
            },
            doorsId:{
                required:true
            }
        }
    });

    setTimeout((hideDiv),5000)
   
})

function hideDiv(){
    $('.alert').css('display','none')
}



function loadOptionTypes(id){
    if(id == 1){ // Indoor
        $.ajax({
            url:'ajax/add-booking.php',
            type:'POST',
            data:{
                id:id,
                type:'LOAD_OPTIONS_TYPE'
            },
            success:function(data){
                var result = JSON.parse(data);
                var length = result.length;
                $('.tm').css('display','none'); // will not show turf and matting dropdown
                $('.mn').css('display','block'); // will show machine or normal dropdown
                $('.opr').css('display','block'); // will show operator dropdown


                $('#wicketsId').empty();
                $('#wicketsId').append('<option disabled selected hidden value="-1" >Select Turf Or Matting</option>');
                $('#machineNormalId').empty();
                $('#machineNormalId').append('<option value="-1" >Select Machine Or Normal</option>')
                for(let i=0; i<length; i++){
                    $('#machineNormalId').append('<option value="'+result[i]['id']+'" >'+result[i]['type']+'</option>')
                }
            }
        })
    }else if(id == 2){ // Outdoor
        $.ajax({
            url:'ajax/add-booking.php',
            type:'POST',
            data:{
                id:id,
                type:'LOAD_OPTIONS_TYPE'
            },
            success:function(data){
                var result = JSON.parse(data);
                var length = result.length;
                $('.tm').css('display','block'); // will show turf and matting dropdown
                $('.mn').css('display','none'); // will not show machine or normal dropdown
                $('.opr').css('display','none'); // will not show operator dropdown

                $('#machineNormalId').empty();
                $('#machineNormalId').append('<option  selected hidden value="" >Select Machine Or Normal</option>');
                $('#operatorId').empty();
                $('#operatorId').append('<option  selected hidden value="" >Select Operator</option>')
                $('#wicketsId').empty();
                $('#wicketsId').append('<option value="-1">Select Turf Or Matting</option>');
                for(let i=0; i<length; i++){
                    $('#wicketsId').append('<option value="'+result[i]['id']+'" >'+result[i]['type']+'</option>')
                }

                console.log(result);
            }
        })
    }else{
        // all dropdown should be show
        $('.tm').css('display','block');
        $('.mn').css('display','block');
        $('.opr').css('display','block');
    }
    
}

function loadOperators(id){
    $.ajax({
        url:'ajax/add-booking.php',
        type:'POST',
        data:{
            id:id,
            type:'LOAD_OPERATORS'
        },
        success:function(data){
            var result = JSON.parse(data);
            var length = result.length;
            $('#operatorId').empty();
            $('#operatorId').append('<option selected hidden value="" >Select Operator</option>')
            for(let i=0; i<length; i++){
                $('#operatorId').append('<option value="'+result[i]['id']+'" >'+result[i]['type']+'</option>')
            }
        }
    })
}

function placedBooking(){
    $('#bookingForm').submit();
    // $('#bookingForm').submit(function(e){
    //     // var bookDate = $('#bookDate').val();
    //     alert("checking");
    // })
}
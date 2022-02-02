$(document).ready(function () {
})

function loadOptionTypes(id){
    if(id == 1){
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
                $('#machineNormalId').empty();
                $('#machineNormalId').append('<option value="-1" >Select Machine Or Normal</option>')
                $('#wicketsId').empty();
                $('#wicketsId').append('<option disabled selected hidden value="-1" >Select Turf Or Matting</option>');
                for(let i=0; i<length; i++){
                    $('#machineNormalId').append('<option value="'+result[i]['id']+'" >'+result[i]['type']+'</option>')
                }
            }
        })
    }
    
    if(id == 2){
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
                $('#machineNormalId').empty();
                $('#machineNormalId').append('<option disabled selected hidden >Select Machine Or Normal</option>');
                $('#wicketsId').empty();
                $('#wicketsId').append('<option value="-1">Select Turf Or Matting</option>');
                for(let i=0; i<length; i++){
                    $('#wicketsId').append('<option value="'+result[i]['id']+'" >'+result[i]['type']+'</option>')
                }

                console.log(result);
            }
        })
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
            $('#operatorId').append('<option disabled selected hidden >Select Operator</option>')
            for(let i=0; i<length; i++){
                $('#operatorId').append('<option value="'+result[i]['id']+'" >'+result[i]['type']+'</option>')
            }
        }
    })
}
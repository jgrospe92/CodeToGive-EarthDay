
function registerFarmer() {

    account = {email:$("input[name='email']").val(),password:$("input[name='password']").val()};
    farmer = {
        name:$("input[name='name']").val(),
        phone:$("input[name='phone_number']").val(),
        info:$("input[name='info']").val(),
        link:$("input[name='website']").val(),
        region:$("input[name='region']").val(),
        municipality:$("input[name='municipality']").val(),
        address:$("input[name='address']").val(),
        city:$("input[name='city']").val(),
        province:$(".select-control").val(),
        postal_code:$("input[name='postal_code']").val()
        // availabilities_start:$("input[name='start_date']").val(),
        // availabilities_end:$("input[name='end_date']").val()
    }

    $.ajax({
        url:"/Register/register_farmer",
        type: 'POST',
        data: {
            "account":account,
            "farmer":farmer
        },
        success: function() {
            alert("success")
        },
        error: function() {
            alert("an error occurred")
        }
    });
}
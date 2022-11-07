function register() {
    $registerPage = $("input[name='registerPage']").val()
    switch($registerPage) {
        case "gleaner" : registerGleaner()
        case "farmer" : registerFarmer()
        case "foodbank" : registerFoodbank()
    }
}

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
    }

    $.ajax({
        url:"/Register/register_farmer",
        type: 'POST',
        data: {
            "account":account,
            "farmer":farmer
        },
        success: function() {
            window.location.href="/"
        },
        error: function() {
            alert("an error occurred")
        }
    });
}

function registerGleaner() {

    account = {email:$("input[name='email']").val(),password:$("input[name='password']").val()};
    gleaner = {
        name:$("input[name='first_name']").val()+" "+$("input[name='last_name']").val(),
        username:$("input[name='username']").val(),
        bio: $("#bioInput").val()
    }

    $.ajax({
        url:"/Register/register_gleaner",
        type: 'POST',
        data: {
            "account":account,
            "gleaner":gleaner
        },
        success: function(data) {
            window.location.href="/"
            console.log(data)
        },
        error: function() {
            alert("an error occurred")
        }
    });
}

function registerFoodbank() {

    account = {email:$("input[name='email']").val(),password:$("input[name='password']").val()};
    foodbank = {
        name:$("input[name='first_name']").val(),
        phone:$("input[name='phone']").val(),
        info:$("input[name='info']").val(),
        link:$("input[name='website']").val(),
        region:$("input[name='region']").val(),
        municipality: $("input[name='municipality']").val(),
        address:$("input[name='address']").val(),
        city:$("input[name='city']").val(),
        province:$(".select-control").val(),
        max_distance:$("input[name='distance']").val(),
        availability_start:$("input[name='start_date']").val(),
        availability_end:$("input[name='end_date']").val()
    }

    $.ajax({
        url:"/Register/register_foodbank",
        type: 'POST',
        data: {
            "account":account,
            "foodbank":foodbank
        },
        success: function() {
            window.location.href="/"
        },
        error: function() {
            alert("an error occurred")
        }
    });
}
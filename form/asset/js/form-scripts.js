$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Todos los campos son requeridos");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm() {
    // Initiate Variables With Form Content
    var First_Name = $("#First_Name").val();
    var Last_Name = $("#Last_Name").val();
    var Title = $("#Title").val();
    var Departament = $("#Departament").val();
    var Account_Name = $("#Account_Name").val();
    var Email_Address = $("#Email_Address").val();
    var Fax = $("#Fax").val();
    var Phone = $("#Phone").val();
    var Address_Street = $("#Address_Street").val();
    var Address_City = $("#Address_City").val();
    var State = $("#State").val();
    var Postal_Code = $("#Postal_Code").val();
    var Country = $("#Country").val();

    $.ajax({
        type: "POST",
        url: "http://localhost/mysql-json-rest/",
        data: "action=clients&First_Name=" + First_Name + "&Last_Name=" + Last_Name + "&Title=" + Title + "&Departament=" + Departament + "&Account_Name=" + Account_Name + "&Email_Address=" + Email_Address 
        + "&Fax=" + Fax + "&Phone=" + Phone + "&Address_Street=" + Address_Street + "&Address_City=" + Address_City + "&State=" + State + "&Postal_Code=" + Postal_Code + "&Country=" + Country,
        success: function (text) {
            if (text == "success") {
                formSuccess();
               // $(location).attr('href', 'Rockjs1.0/?p=holaProgress')
                $(".loader").fadeIn("slow");
            } else {
                formError();
                submitMSG(false, text);
            }
        }
    });
}

function formSuccess() {
    $("#contactForm")[0].reset();
    submitMSG(true, "New Client Added!")
}

function formError() {
    $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
        $(this).removeClass();
    });
}

function submitMSG(valid, msg) {
    if (valid) {
        var msgClasses = "h3 text-center tada animated text-success";
    } else {
        var msgClasses = "h3 text-center text-danger";
    }
    $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
}
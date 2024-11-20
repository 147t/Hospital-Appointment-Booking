
function validateEmail() {
    var email = document.getElementById('Email').value;
    var pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+.[a-zA-Z]{2,6}$/;
    if (email.match(pattern) === null) {
        window.alert('Please enter a valid email address');
        return false;
    }
    return true;
}

function ValidatePhone() {
    var Phone = document.getElementById("Number").value;
    var pattern = /^00962[789][0-9]{7}$/;
    if (Phone.match(pattern) === null) {
        window.alert('Please enter a valid phone number');
        return false;
    }
    return true;
}

function ValidateDate() {
    var CurrDate = new Date();
    var AppointementDate = document.getElementById("Date").value;
    if (AppointementDate < CurrDate) {
        window.alert('Please enter a valid date');
        return false;
    }
    return true;

}

function validateNotEmpty() {
    var fields = ["Name", "Email", "Number", "Date", "Time", "CDate", "Ctime", "Dep", "Doc"];
    var isValid = true;
    for (var i = 0; i < fields.length; i++) {
        var value = document.getElementById(fields[i]).value;
        if (value == "" || value == null) {
            window.alert(fields[i] + " is required");
            isValid = false;
        }
    }
    
    x =validateEmail();
    y= ValidatePhone();
    z = ValidateDate();

    return (isValid && x && y && z);
}

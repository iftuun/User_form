$(document).ready(function(){
    $("#employeeForm").submit(function(event){
<<<<<<< HEAD
        if(!validateEmail($("#emailAddress").val())){
=======
        if(!validateEmail($("$emailAddress").val())){
>>>>>>> 4e6cd55ebe764b9ac06f3db78d1141b8a520004f
            alert("Invalid email address");
            event.preventDefault();
        }

<<<<<<< HEAD
        if(!validatePassword($("#password").val())){
            alert("Invalid password");
            event.preventDefault();
        }

        if(!validatephone($("#phone").val())){
            alert("Invalid phone number");
            event.preventDefault();
        }
=======
        if(!validatePassword($("$password").val())){
            alert("Invalid password");
            event.preventDefault();
        }
>>>>>>> 4e6cd55ebe764b9ac06f3db78d1141b8a520004f
    });

    function validateEmail(email){
        const emailrex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
        return emailrex.test(email);
    }

    function validatePassword(password){
        const passrex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        return passrex.test(password);
    }
<<<<<<< HEAD

    function validatePhone(phone){
        const phoneregex = /^\d{3}-\d{3}-\d{4}$/;
        return phoneregex.test(phone);
    }
=======
>>>>>>> 4e6cd55ebe764b9ac06f3db78d1141b8a520004f
});

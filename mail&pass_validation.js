$(document).ready(function(){
    $("#employeeForm").submit(function(event){
        if(!validateEmail($("$emailAddress").val())){
            alert("Invalid email address");
            event.preventDefault();
        }

        if(!validatePassword($("$password").val())){
            alert("Invalid password");
            event.preventDefault();
        }
    });

    function validateEmail(email){
        const emailrex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
        return emailrex.test(email);
    }

    function validatePassword(password){
        const passrex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        return passrex.test(password);
    }
});

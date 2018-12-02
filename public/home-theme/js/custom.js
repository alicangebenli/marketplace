$(document).ready(function() {
    $("form[id='homeregister']").validate({
        ignore: [],
        debug: false,
        rules: {
            user_name: {
                    required : true
            },
            user_firstname:  {
                required : true,
            },
            user_lastname : {
                required : true
            },
            user_mail : {
                // Remote Yapılacak
                required : true,
                email : true
            },
            user_password : {
                required : true,
            },
            user_password2:{
                required : true,
                equalTo : "#user_password"
            }


        },
        messages: {
            user_name: "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
            user_firstname: "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
            user_lastname: "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
            user_mail: {
                required : "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
                email : "<p style='color: red;font-weight: bold'>Bu alana email girilmeli!</p>",
                remote : "Bu var"
            },
            user_password: "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
            user_password2: {
                required : "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
                equalTo: "<p style='color: red;font-weight: bold'>Her iki alanda eşleşmeli!</p>"
            }

        },
        submitHandler: function() {
            $("form[id='homeregister']").ajaxSubmit({
                success : function (data) {
                    ShowAlert(data)
                },
                error : function (jqXHR, exception) {
                    var data = [];
                    data["icon"] = "error";
                    data["title"] = "Hata";
                    data["text"] = "Çok fazla istekde bulundunuz lütfen birazdan tekrar deneyiniz!";
                    ShowAlert(data);
                }
            });
        }
    });
    $("form[id='homelogin']").validate({
        ignore: [],
        debug: false,
        rules: {
            user_name: {
                required : true
            },
            user_firstname:  {
                required : true,
            },
            user_lastname : {
                required : true
            },
            user_mail : {
                // Remote Yapılacak
                required : true,
                email : true
            },
            user_password : {
                required : true,
            },
            user_password2:{
                required : true,
                equalTo : "#user_password"
            }


        },
        messages: {
            user_name: "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
            user_firstname: "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
            user_lastname: "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
            user_mail: {
                required : "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
                email : "<p style='color: red;font-weight: bold'>Bu alana email girilmeli!</p>",
                remote : "Bu var"
            },
            user_password: "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
            user_password2: {
                required : "<p style='color: red;font-weight: bold'>Bu alan boş bırakılamaz!</p>",
                equalTo: "<p style='color: red;font-weight: bold'>Her iki alanda eşleşmeli!</p>"
            }

        }
    });
});

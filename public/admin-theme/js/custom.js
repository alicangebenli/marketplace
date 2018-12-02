$(document).ready(function() {
    $('#dataTables').DataTable({
        responsive: true,
        "language":{
            "url":"//cdn.datatables.net/plug-ins/1.10.12/i18n/Turkish.json"
        }
    });
    $( 'textarea' ).ckeditor();
    $('.phone').mask('(000) 000-0000');
    $('.money').mask('#.## TL', {reverse: true});

    // Category
    $("form[id='categorystore']").validate({
        ignore: [],
        debug: false,
        rules: {
            title: "required",
            content : "required"
        },
        messages: {
            title: "Bu alan boş bırakılamaz!",
            content : "Bu alan boş bırakılamaz!"
        },
        submitHandler: function() {
            $("form[id='categorystore']").ajaxSubmit({
                success : function (data) {
                    if(data == "ok"){
                        ShowAlert('success','Başarılı','Başaralı bir şekilde kategori eklendi!');
                    }else if(data == "no"){
                        ShowAlert('error','Hata','Bir hata oluştu. Tekrar kontrol edin!')
                    }else{
                        ShowAlert('error','Hata','Bilinmeyen bir hata!')
                    }
                }
            });
        }
    });
    $("form[id='categoryupdate']").validate({
        ignore: [],
        debug: false,
        rules: {
            category_title: "required",
        },

        messages: {
            category_title: "Bu alan boş bırakılamaz!",
        },
        submitHandler : function () {
            $("form[id='categoryupdate']").ajaxSubmit({
                success : function (data) {
                    if(data == "ok"){
                        ShowAlert('success','Başarılı','Başaralı bir şekilde kategori düzenlendi!');
                    }else if(data == "no"){
                        ShowAlert('error','Hata','Bir hata oluştu. Tekrar kontrol edin!')
                    }else{
                        ShowAlert('error','Hata','Bilinmeyen bir hata!')
                    }
                }
            });
        }

    });
    $("#categorydeletebutton").on('click',function () {
        var ids = $(this).data('item');
        swal({
            title: "Emin misin?",
            text: "Eğer silerseniz bu veriyi kaybedeceksiniz!",
            icon: "warning",
            buttons: true,
            buttons: ["Hayır", "Evet"],
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $("form[id='categorydelete']").ajaxSubmit({
                        success : function (data) {
                            if(data == "ok"){
                                $('[data-tritem='+ids+']').fadeOut();
                                ShowAlert('success','Başaralı','Başaralı bir şekilde kategori silindi.');

                            }else if(data == "no"){
                                ShowAlert('error','Hata','Bir hata oluştu. Tekrar kontrol edin!');
                            }else{
                                ShowAlert('error','Hata','Bilinmeyen bir hata!');
                            }
                        }
                    });
                } else {
                    swal("Silinmedi","","error");
                }});

    });
    // Bank
    $("form[id='bankstore']").validate({
        ignore: [],
        debug: false,
        rules: {
            title: "required",
            content : "required"
        },
        messages: {
            title: "Bu alan boş bırakılamaz!",
            content : "Bu alan boş bırakılamaz!"
        },
        submitHandler: function() {
            $("form[id='bankstore']").ajaxSubmit({
                success : function (data) {
                    if(data == "success"){
                        ShowAlert('success','Başarılı','Başaralı bir şekilde kategori eklendi!');
                    }else if(data == "no"){
                        ShowAlert('error','Hata','Bir hata oluştu. Tekrar kontrol edin!')
                    }else if(typeof data.errors !== 'undefined'){
                            var message = "";
                            for($i=0;$i<data.errors.length;$i++){
                                message =  data.errors[$i]+ "\n" + message;
                            }
                            ShowAlert('error','Hata',message);
                    }else{
                        ShowAlert('error','Hata',"Bilinmeyen bir hata oluştu!");
                    }
                }
            });
        }
    });
    $("form[id='bankupdate']").validate({
        ignore: [],
        debug: false,
        rules: {
            category_title: "required",
        },

        messages: {
            category_title: "Bu alan boş bırakılamaz!",
        },
        submitHandler : function () {
            $("form[id='bankupdate']").ajaxSubmit({
                success : function (data) {
                    if(data == "ok"){
                        ShowAlert('success','Başarılı','Başaralı bir şekilde kategori düzenlendi!');
                    }else if(data == "no"){
                        ShowAlert('error','Hata','Bir hata oluştu. Tekrar kontrol edin!')
                    }else{
                        ShowAlert('error','Hata','Bilinmeyen bir hata!')
                    }
                }
            });
        }

    });
    $("#bankdeletebutton").on('click',function () {
        var ids = $(this).data('item');
        swal({
            title: "Emin misin?",
            text: "Eğer silerseniz bu veriyi kaybedeceksiniz!",
            icon: "warning",
            buttons: true,
            buttons: ["Hayır", "Evet"],
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    $("form[id='bankdelete']").ajaxSubmit({
                        success : function (data) {
                            if(data == "ok"){
                                $('[data-tritem='+ids+']').fadeOut();
                                ShowAlert('success','Başarılı','Başarılı bir şekilde banka hesabı silindi.');

                            }else if(data == "no"){
                                ShowAlert('error','Hata','Bir hata oluştu. Tekrar kontrol edin!');
                            }else{
                                ShowAlert('error','Hata',data);
                            }

                        }
                    });
                } else {
                    swal("Silinmedi","","error");
                }});

    });
    //
    $("form[id='useradd']").validate({
        ignore: [],
        debug: false,
        rules: {
            user_name: "required",
            user_firstname : "required",
            user_lastname : "required",
            user_mail : "required",
            user_password : "required",
            user_phone : "required",
            user_balance : "required"
        },

        messages: {
            user_name: "Bu alan boş bırakılamaz!",
            user_firstname : "Bu alan boş bırakılamaz!",
            user_lastname : "Bu alan boş bırakılamaz!",
            user_mail : "Bu alan boş bırakılamaz!",
            user_password : "Bu alan boş bırakılamaz!",
            user_phone : "Bu alan boş bırakılamaz!",
            user_balance : "Bu alan boş bırakılamaz!"
        },
        submitHandler : function () {
            $("form[id='useradd']").ajaxSubmit({
               success : function (data) {
                   ShowAlert(data);
               }
            });
        }
    });
    $("form[id='userupdate']").validate({
        rules: {
            user_name: "required",
            user_firstname : "required",
            user_lastname : "required",
            user_mail : "required",
            user_phone : "required",
            user_balance : "required"
        },

        messages: {
            user_name: "Bu alan boş bırakılamaz!",
            user_firstname : "Bu alan boş bırakılamaz!",
            user_lastname : "Bu alan boş bırakılamaz!",
            user_mail : "Bu alan boş bırakılamaz!",
            user_phone : "Bu alan boş bırakılamaz!",
            user_balance : "Bu alan boş bırakılamaz!"
        },
        submitHandler : function () {
            $("form[id='useradd']").ajaxSubmit({
                success : function (data) {
                    ShowAlert(data);
                }
            });
        }
    });
    $("form[id='pageadd']").validate({
        ignore: [],
        debug: false,
        rules: {
            page_content:{
                required: function()
                {
                    CKEDITOR.instances.page_content.updateElement();
                },

                minlength:10
            },
            page_title: "required",
            page_image: "required"
        },

        messages: {
            page_title: "Bu alan boş bırakılamaz!",
            page_content:{
                required:"(Bu alan boş bırakılamaz!)",
                minlength:"Please enter 10 characters"
            },
            page_image: "Bu alan boş bırakılamaz!",
        },
        submitHandler : function () {
            $("form[id='pageadd']").ajaxSubmit({
                success : function (data) {
                    ShowAlert(data);
                }
            })
        }
    });
    $("form[id='pageupdate']").validate({
        ignore: [],
        debug: false,
        rules: {
            page_content:{
                required: function()
                {
                    CKEDITOR.instances.page_content.updateElement();
                },

                minlength:10
            },
            page_title: "required",
            page_image: "required"
        },

        messages: {
            page_title: "Bu alan boş bırakılamaz!",
            page_content:{
                required:"(Bu alan boş bırakılamaz!)",
                minlength:"Please enter 10 characters"
            },
            page_image: "Bu alan boş bırakılamaz!",

        },
        submitHandler : function () {
            $("form[id='pageupdate']").ajaxSubmit({
                success : function (data) {
                    ShowAlert(data);
                }
            })
        }

    });
    $("form[id='ticketadd']").ajaxForm({
        beforeSubmit : function () {
            $("form[id='ticketadd']").validate({
                rules: {
                    ticket_content: "required"
                },
                messages: {
                    ticket_content: "Bu alan boş bırakılamaz!",
                }

            })
        },
        success : function (data) {
            /* setTimeout(function () {
             Redirect(base_url+'/admin/ticket-preview/'+$('#ticketadd').data('id'));
             },2000);
             */
            if($("form[id='ticketadd']").valid() == true){
                ShowAlert(data);
                setTimeout(function () {
                    Redirect($("form[id='ticketadd']").data('url'));
                },2000);
            }

        }
    });
    $("form[id='commentedit']").validate({
        rules: {
            product_comment_title: "required",
            product_comment_content: "required",
        },

        messages: {
            product_comment_title: "Bu alan boş bırakılamaz!",
            product_comment_content: "Bu alan boş bırakılamaz!",

        },
        submitHandler: function(form) {
            UpdatePost($("#commentedit").data("id"),'commentedit',base_url+'/admin/comment-update');
        }
    });
    $("form[id='productadd']").validate({
        ignore: [],
        debug: false,
        rules: {
            product_title: "required",
            product_content : "required",
        },
        messages: {
            product_title: "Bu alan boş bırakılamaz!",
            product_content : "Bu alan boş bırakılamaz!",
        },
        submitHandler: function() {
            $("form[id='productadd']").ajaxSubmit({
                beforeSubmit: function() {
                    swal({
                        text : "Yükleniyor... Lütfen Bekleyiniz",
                        icon : "info",
                        button: false,
                    });
                },
                success: function (data) {
                    ShowAlert(data);
                }
            });

        }
    });
    $("form[id='productupdate']").ajaxForm({
        beforeSubmit : function () {
            $("form[id='productupdate']").validate({
                rules: {
                    product_title: "required",
                    product_content : "required",
                },

                messages: {
                    product_title: "Bu alan boş bırakılamaz!",
                    product_content : "Bu alan boş bırakılamaz!",

                },
            })
        },
        success : function (data) {
            if($("form[id='productupdate']").valid() == true){
                ShowAlert(data);
            }
        }
    });

    /* Product Update */
    $("input[id='productupdateimageupload']").on('change',function(){
        $("form[id='productupdateimageuploadform']").ajaxSubmit({
            beforeSubmit: function() {
                swal({
                    text : "Yükleniyor... Lütfen Bekleyiniz",
                    icon : "info",
                    button: false,
                });

            },
            success: function (data) {
                swal.close();
                var $url = $("div#form-group-file-image-list").data('url');
                $.ajax({
                    type: 'get',
                    url: $url,
                    success: function(result) {
                        $('div#form-group-file-image-list').html(result);
                    }
                });
                window.location.href = $("div#form-group-file-image-list").data("href");
            }
        });
    });
    $("input[id='productupdatefirstimageupload']").on('change',function(){
        $("form[id='productupdatefirstimageuploadform']").ajaxSubmit({
            beforeSubmit: function() {
                swal({
                    text : "Yükleniyor... Lütfen Bekleyiniz",
                    icon : "info",
                    button: false,
                });

            },
            success: function (data) {
                swal.close();
            }
        });
    });




    /*Customize*/
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':csrfToken
        }
    });

        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
        var durum = parseInt($("body").data("status"));

        switch (durum)
        {
            case 0 :
                toastr.error('Hata oluştu');
                break;
            case 1 :
                toastr.success('İşlem başarılı.');
                break;
            case 2 :
                toastr.info('İşlem başarılı fakat yönetici onayladıktan sonra aktifleşecektir.');
                break;

            case 3 :
                toastr.warning('Zaten daha önce yazarlık talebinde bulunmuşsunuz.');
                break;
        }
});
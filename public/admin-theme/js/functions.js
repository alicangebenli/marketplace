function UpdatePost(id,form,url,par=null) {
    if(par!=null){
        form = "#" + form;
        var veri = $(form).serialize();
        $.post(url, veri, function (data) {
            swal({
                title: data.title,
                text: data.text,
                icon: data.icon
            });
        });
    }else {
        form = "#" + form;
        var veri = $(form).serialize();
        $.post(url + "/" + id, veri, function (data) {
            swal({
                title: data.title,
                text: data.text,
                icon: data.icon
            });
        });
    }
}
function InsertPost(form,url) {
    form = "#"+form;
    var veri = $(form);
    var datas = new FormData(veri);
    $.post(url,datas,function(data) {
        swal({
            title   : data.title,
            text    : data.text,
            icon    : data.icon
        });
    });
}
function DeleteGet(url,hideitem=null) {
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
                $.get(url,function(data) {
                   if(data =="ok"){
                       swal({
                           title   : "Başaralı",
                           text    : "Başaralı şekilde silindi!",
                           icon    : "success"
                       });
                   }else{
                       swal({
                           title   : "Hata",
                           text    : "Silinme işlemi gerçekleştirilemedi",
                           icon    : "error"
                       });
                   }
                });
                if(hideitem!= null && data == "ok"){
                 HideDataItemForId(hideitem);
                }
            } else {
                swal("Silinmedi","","error");
            }});

}
function Get(url) {
    $.get(url,function(data) {
        swal({
            title   : data.title,
            text    : data.text,
            icon    : data.icon
        });
    });
}

function ShowAlert(type,title,text) {
    swal({
        icon: type,
        title: title,
        text: text,
    })
}
function HideDataItemForId(id) {
    $('[data-tritem='+id+']').fadeOut();
}
function Redirect(url) {
    document.location.href = url;
}

function NewFileInput() {
    var fileinput = $('div[id|="form-file"]').length;
    var fileinputlast = $("#fileinput").html();
    fileinputlast++;
    if(fileinput <= 5) {
        $("#form-group-file").append('<div class="col-md-2" id="form-file-'+fileinputlast+'">' +
            '<div class="form-group">' +
            '<a onclick="DeleteFileInput('+fileinputlast+')" class="btn btn-danger btn-xs">Sil</a>'+
            '<div class="image">' +
            '<img id="blah-' + fileinputlast + '" src="http://via.placeholder.com/200x150" class="img-thumbnail" style="width: 200px !important;height: 150px !important;"> ' +
            '</div> ' +
            '<div class="upload-btn-wrapper">' +
            '<button class="btn btn-success btn-xs">Gözat</button>' +
            '<input type="file" name="image[]" onchange="readURL(this,'+fileinputlast+');"/> <br />' +
            '</div>' +
            '</div></div>');

        $("div#fileinput").html(fileinputlast);
    }

}

function readURL(input,i) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#blah-'+i).attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}
function readFirstURL(input) {

    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#slah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


function DeleteFileInput(id) {
    $("#form-file-"+id).remove();
}
function productdeleteimage($url,$edit_url) {

    $.ajax({
        type: 'get',
        url: $url,
        success: function(result) {
            window.location.href = $("div#form-group-file-image-list").data("href");
        }
    });

}
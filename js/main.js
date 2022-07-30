
var form = document.querySelector("form");
var fileInput = document.querySelector("#uploader-input"),
progressArea = document.querySelector("#progress-area");
var input = document.querySelector("#uploader-input");

fileInput.onchange = ()=>{
    $(".uploader-box").css("height" , "270px");
    $(".uploading-box").css("display" , "block");
    $(".uploader-wraper").css("border-radius" , "30px 30px 0 0");

    uploadFile();

}

function uploadFile(){


    /*$("#form").on('submit',(function(e) {
        e.preventDefault();*/
        alert("2");
        $.ajax({
            url: "phpFunctions/upload.php",
            type: "POST",
            data:  new FormData(form),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend : function()
            {

            },
            success: function(data)
            {
                alert("success");
                if(data=='invalid')
                {

                }
                else
                {

                }
            },
            error: function(e)
            {
                alert("error");
            }
        });
        alert("3");

}
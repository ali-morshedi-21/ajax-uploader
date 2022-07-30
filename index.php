<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="style/main.css">

        <title>ajax - uploader</title>
    </head>
    <body>

        <div class="container">
            <div class="uploader-box">
                <div class="uploader-wraper" style="position: relative;">

                    <div class="uploader-container" style="">
                        <img src="img/photo_icon.png" width="42.5" height="42.5" alt="">
                        <p>Drop your image here or Brows</p>
                        <span>support JPG , PNG </span>
                    </div>
                    <form id="form" action="phpFunctions/upload.php" method="post" enctype="multipart/form-data">
                        <input id="uploader-input" name="image" type="file" style="position: absolute;">
                    </form>
                </div>
                <div class="uploading-box">
                    <span>uploading : </span>
                    <div class="progress">
                        <div id="progress-area" class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
    </body>
</html>
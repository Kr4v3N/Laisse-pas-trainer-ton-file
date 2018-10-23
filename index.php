<?php
$allFiles = scandir("Upload");
$files = preg_grep("/image/", $allFiles);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>

<div class="row">


    <form action="function.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
        <div class="file-field input-field">
            <div class="btn">
                <input type="file" name="img[]"  id="img"  multiple="multiple" />
                <span>Image à uploader</span>
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload one or more files">
            </div>
        </div>
        <button class="btn" type="submit" name="action">Submit<i class="material-icons right">send</i>
        </button>
    </form>
</div>
<div class="row">
    <?php foreach ($files as $file): ?>

        <div class="col s12 m6 l3">
            <div class="card">
                <div class="card-image">
                    <img src="Upload/<?php echo $file; ?>" class="responsive-img " alt="">
                </div>
                <div class="card-card-content">
                    <p class="center-align"><?php echo $file; ?></p>
                </div>
                <div class="card-action">
                    <a href="delete.php?id=<?php echo $file;?>" class="btn btn-danger" role="button">Supprimer</a>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>



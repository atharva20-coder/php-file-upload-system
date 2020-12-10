<!DOCTYPE html>
<html>
    <head>
        <title>Uploading files</title>
    </head>
<!--THERE ARE 2 WAYS OF UPLOADING IMAGES TO DATABASE 1)UPLOADING FILES TO ROOT FOLDER OF WEBSITE OR 2)UPLOADING TO WEBSITE AS A BLOB ELEMENT-->
    <body>
        <h2>UPLOADING DATA TO ROOT FOLDER OF WEBSITE</h2>
        <form action= "upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file">
            <button type="submit" name="submit">UPLOAD</button>
        </form>
        <br>
        <br>
        <br>
        <a href="delete.php">DELETE YOUR FILE HERE</a>
    </body>
</html>
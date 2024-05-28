<html>
    <body>
        <form action="file.php" method="post" enctype="multipart/form-data">
            <input type="file" name="fileToUpload">
            <br>
            <input type="submit">
        </form>
    </body>
</html>

<?php
if(isset($_FILES['fileToUpload']))
{
    $target_path="C:\yaseen/";
    $target_path=$target_path.basename($_FILES['fileToUpload']['name']);
    if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target_path))
    {
        echo "Files uploaded successfully";
    }
    else
    {
        echo "sorry,file not uploaded";
    }
}
?>
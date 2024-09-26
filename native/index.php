<?php
echo $_REQUEST['test'];
echo $_SERVER['SERVER_SOFTWARE'];
 echo$_SERVER['SERVER_PROTOCOL'];
?>
<form method="post" action=" upload.php " enctype="multipart/form-data" >
    <label>
        <input type="file" name="my_file" />
    </label>
    <input type="submit" value="send" />
</form>





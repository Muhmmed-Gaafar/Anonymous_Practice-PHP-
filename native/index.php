<?php
echo $_REQUEST['test'];

?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?> " >
    <label>
        <input type="text" name="test" />
    </label>
    <input type="submit" value="send" />
</form>





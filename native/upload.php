<?php

if(isset($_FILES["my_file"])){
var_dump($_FILES["my_file"]);
move_uploaded_file($_FILES["my_file"]["tmp_name"], "uploads/" . $_FILES["my_file"]["name"]);
}

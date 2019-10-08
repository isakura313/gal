<?php
$query = ("INSERT INTO photo (id, path, description) VALUES (NULL, '$uploadfile','$uploadname' )");
$result = mysqli_query($link, $query);
if($result==TRUE){
} else{
    echo "something bad";
}

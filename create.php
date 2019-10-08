<?php
$title = "create";

require("includes/head.inc.php");

?>
    <form enctype="multipart/form-data" action="code/act.php" method="POST" class="flex two">
    <fieldset   class='half off-fourth'>
   <h3>  Здесь вы можете импортировать файл</h3>
    <input name="userfile" type="file" / required>
   <h3>  Вводите тэг через запятую</h3>
    <label><input  type="text" placeholder="котики, отдых, остров" name="description"  required  minlength="3"  maxlength="30"></label>
    <input type="submit" value="Отправить файл" />
    </fieldset>
    </form>



</body>
</html>

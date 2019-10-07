<?php
$title = "create";

require("parts/header.php");

?>
    <form enctype="multipart/form-data" action="code/act.php" method="POST" class="flex two">
    <fieldset   class='half off-fourth'>
    <input name="userfile" type="file" />
    <label><input type="text" placeholder="введите тэги через запятую" name="description"></label>
    <input type="submit" value="Отправить файл" />
    </fieldset>
    </form>



</body>
</html>
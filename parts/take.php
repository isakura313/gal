<?php
$query = ("SELECT * FROM photo");
#здесь у нас происходит запрос
$result = mysqli_query($link, $query);
$i = 1;
echo "<div class='flex two'>";
while ($row = mysqli_fetch_array($result)) {
    $foto1[$i] = $row['path'];
    $description[$i] = $row['description'];

    echo "<div>
  <article class='card'>
    <img src=code/$foto1[$i]>
    <h2>";
    $tags = explode(",", $description[$i]);
    for ($y = 0; $y < count($tags); $y++) {
        echo "<span class='label'>
        $tags[$y]
        </span>";
    }
    echo "</h2>";

    echo "</article>
</div> ";

}

echo "</div>";

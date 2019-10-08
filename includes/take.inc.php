<?php
$query = ("SELECT * FROM photo");
$result = mysqli_query($link, $query);
$i = 1;
echo "<div class='flex two gallery'>";
while ($row = mysqli_fetch_array($result)) {
    $foto1[$i] = $row['path'];
    $description[$i] = $row['description'];
    echo "<div>
  <article class='card'>
    <img src=code/$foto1[$i]>
    </footer> <h2>
    ";
    $tags = explode(",", $description[$i]);
    for ($y = 0; $y < count($tags); $y++) {
        echo "<span class='label'>
        $tags[$y]
        </span>";
    }
    echo "</h2>
    <button class='button button_delete warning off-half half'>DELETE  </button>
    </footer>
   </article>
</div> ";

}

echo "</div>";

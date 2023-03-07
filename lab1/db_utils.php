<?php
$exist = "exist";
function mysqliQuery($link, $name_query, $query): mysqli_result|bool
{
    global $exist;
    global $g;
    try {
        $g = mysqli_query($link, $query);
        echo "$name_query успішно";
    } catch (Exception $exception) {
        if (str_contains($exception, $exist))
            echo "$name_query вже була створена.";
        else
            echo "$name_query НЕВІДОМА ПОМИЛКА!!!!";
    }
    echo "<br>";
    return $g;
}

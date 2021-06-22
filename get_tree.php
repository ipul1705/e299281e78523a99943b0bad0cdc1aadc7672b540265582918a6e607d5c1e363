<?php

function get_tree($name = "root") { //40pts
//mengambil struktur tree dari database dengan top level item sesuai input
//mengembalikan assoc array dengan property nama dan children
//dimana children adalah array of assoc array berisi child dibawah member ybs
include("config.php");

$tree = mysqli_query($con, "SELECT a.name, b.name as children FROM member a left join member b on b.parent_id = a.id ORDER BY a.parent_id ");

return $tree;
}
?>
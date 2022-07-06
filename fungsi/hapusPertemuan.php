<?php
include 'koneksi.php';
$id = 0;
if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($db, $_POST['id']);
}
if ($id > 0) {
    $checkRecord = mysqli_query($db, "SELECT * FROM pertemuan WHERE id_pertemuan =" . $id);
    $totalrows = mysqli_num_rows($checkRecord);
    if ($totalrows > 0) {
        $query = "DELETE FROM pertemuan WHERE id_pertemuan =" . $id;
        mysqli_query($db, $query);
        echo 1;
        exit;
    } else {
        echo 0;
        exit;
    }
}
echo 0;
exit;

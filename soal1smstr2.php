<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 2 nomor 1</title>
</head>
<body>

    <form action="" method="POST">
        <br>
        <table>
            <tr>
                <td><b>Masukan Angka &nbsp;</b></td>
                <td>:</td>
                <td><input type="number" name="angka"></td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td><button type="submite" name="Simpan">KIRIM </button</td>
            </tr>
        </table>
    </form>

    <?php
if (isset($_POST['Simpan'])) {
    $angka = $_POST['angka'];

    for ($i = 1; $i <= $angka; ++$i) {
        for ($a = 1; $a <= $i; ++$a) {
            echo "$a &nbsp";
        }
        echo '<br>';
    }
}
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Input Data Covid19</h2>
    <hr>
    <form action="Proses.php" method="POST">
    <table>
        <tr>
            <td>Wilayah</td>
            <td><select name="Wilayah" id="">
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Banten">Banten</option>
                <option value="Jawa Tengah">Jawa tengah</option>
            </select></td>
        </tr>
        <tr>
            <td>Jumlah Positif</td>
            <td><input type="number" name="Positif"></td>
        </tr>
        <tr>
            <td>Jumlah Dirawat</td>
            <td><input type="number" name="Dirawat"></td>
        </tr>
        <tr>
            <td>Jumlah Sembuh</td>
            <td><input type="number" name="Sembuh"></td>
        </tr>
        <tr>
            <td>Jumlah Meninggal</td>
            <td><input type="number" name="Meninggal"></td>
        </tr>
        <tr>
            <td>Nama Operator</td>
            <td><input type="txt" name="Operator"></td>
        </tr>
        <tr>
            <td>NIM Mahasiswa</td>
            <td><input type="Number" name="NIM"></td>
        </tr>
        <tr>
        <td></td>
        
        <td><button type="submit">save</button></td>
        </tr>
        
    </table>
    </form>
</body>
</html>
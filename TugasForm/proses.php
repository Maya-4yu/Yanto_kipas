<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){
    }
    ?>

    <table>
    <tr>
        <td>NISN</td>
        <td>:</td>
        <td>
            <?=$_POST['nisn']?>
        </td>
    </tr>

    <tr>
        <td>Nama Lengkap</td>
        <td> : </td>
        <td>
            <?=$_POST['namalengkap']?>
        </td>
    </tr>

    <tr>
        <td>Tempat Lahir</td> 
        <td>:</td>
        <td>
            <?=$_POST['tempatlahir']?>
        </td>
    </tr>

    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td>
            <?=$_POST['tanggal']?>
        </td>
    </tr>

    <tr>
        <td>Gender</td>
        <td>:</td>
        <td>
            <?=$_POST['gender']?>
        </td>
    </tr>

    <tr>
        <td>Agama</td>
        <td>:</td>
        <td>
            <?=$_POST['Agama']?>
        </td>
    </tr>

    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td>
            <?=$_POST['alamat']?>
        </td>
    </tr>

    <tr>
        <td>Asal Sekolah</td>
        <td>:</td>
        <td>
            <?=$_POST['asalsekolah']?>
        </td>
    </tr>
    
    <tr>
        <td>Pilihan jurusan 1</td>
        <td>:</td>
        <td>
            <?=$_POST['Jurusan1']?>
        </td>
    </tr>

    <tr>
        <td>Pilihan jurusan 2</td>
        <td>:</td>
        <td>
            <?=$_POST['Jurusan2']?>
        </td>
    </tr>

    <tr>
        <td>Pilihan jurusan 3</td>
        <td>:</td>
        <td>
            <?=$_POST['Jurusan3']?>
        </td>
    </tr>

    <tr>
        <td>Ekstrakurikuler</td>
        <td>:</td>
        <td>
        <?=implode(",",$_POST['ekskul'])?>
        </td>
    </tr>

    </table>
</body>
</html>
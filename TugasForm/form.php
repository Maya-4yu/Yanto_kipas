<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>BIODATA SISWA</h1>
    <form action="proses.php" method="post">
        <table>
        <p>Silahkan isi daftar berikut!</p>
        NISN : <input type="number" name="nisn"> <br>
        Nama Lengkap : <input type="text" name="nama lengkap"> <br>
        Tempat Lahir : <input type="text" name="tempat lahir"> <br>

        <p>
            <label>Tanggal Lahir :</label>
            <input type="date" name="tanggal">
        </p>
        <p>
            <label>Gender :</label>
            <input type="radio" name="gender" value="L">Laki-Laki
            <input type="radio" name="gender" value="P">Perempuan 
        </p>
        <p>
            <label>Agama :</label>
            <select name="Agama" id="">
                <option value="0">Silahkan pilih agama anda</option>
                <option value="1">Islam</option>
                <option value="2">Kristein</option>
                <option value="3">Katholik</option>
                <option value="4">Hindu</option>
                <option value="5">Buddha</option>
                <option value="6">Konghucu</option>
            </select>
        </p>
        <p>
            <p>Alamat :</p>
            <textarea name="alamat" cols= "50" rows="10"></textarea>
        </p>
        Asal Sekolah : <input type="text" name="asal sekolah"> <br>
        <p>
            <label>Pilihan jurusan 1 :</label>
            <select name="Jurusan" id="">
                <option value=".">Silahkan pilih jurusan anda</option>
                <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis </option>
                <option value="AKL">Akuntansi Keuangan Lembaga</option>
                <option value="PM">Pemasaran</option>
                <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
                <option value="BCF">BroadCasting & perFilman</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="PH">Perhotelan</option>
                <option value="KL">Kuliner</option>
            </select>
        </p>
        <p>
            <label>Pilihan jurusan 2 :</label>
            <select name="Jurusan" id="">
                <option value=".">Silahkan pilih jurusan anda</option>
                <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis </option>
                <option value="AKL">Akuntansi Keuangan Lembaga</option>
                <option value="PM">Pemasaran</option>
                <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
                <option value="BCF">BroadCasting & perFilman</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="PH">Perhotelan</option>
                <option value="KL">Kuliner</option>
            </select>
        </p>
        <p>
            <label>Pilihan jurusan 3 :</label>
            <select name="Jurusan" id="">
                <option value=".">Silahkan pilih jurusan anda</option>
                <option value="MPLB">Manajemen Perkantoran & Layanan Bisnis </option>
                <option value="AKL">Akuntansi Keuangan Lembaga</option>
                <option value="PM">Pemasaran</option>
                <option value="TJKT">Teknik Jaringan Komputer & Telekomunikasi</option>
                <option value="PPLG">Pengembangan Perangkat Lunak & Gim</option>
                <option value="BCF">BroadCasting & perFilman</option>
                <option value="DKV">Desain Komunikasi Visual</option>
                <option value="SP">Seni Pertunjukan</option>
                <option value="PH">Perhotelan</option>
                <option value="KL">Kuliner</option>
            </select>
        </p>
        <p>
            <Label>Ekstrakurikuler :</Label for="ekstra" name="ekskul"> </Label>>
            <input type="checkbox" name="OSIS">Organisasi Siswa Intra Sekolah (OSIS)
            <input type="checkbox" name="GDS">Gerakan Disiplin Siswa
            <input type="checkbox" name="PASKIB">Paskibraka <br>
            <input type="checkbox" name="REMAS">Remaja Masjid Al-Kautsar
            <input type="checkbox" name="ENCASA">English Club Esemkasa
            <input type="checkbox" name="PMR">Palang Merah Remaja <br>
            <input type="checkbox" name="DA">Dewan Ambalan
            <input type="checkbox" name="PA">Pecinta Alam
            <input type="checkbox" name="LH">Laskar Hijau <br>
            <input type="checkbox" name="FUTSAL">Futsal
            <input type="checkbox" name="BASKET">Basket
            <input type="checkbox" name="VOLY">Voly <br>
            <input type="checkbox" name="TEATER">Teater Kusuma
            <input type="checkbox" name="TARI">Tari
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar">
        </p>
        </table>
    </form>
</body>
</html>
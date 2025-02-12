<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form.php</title>
</head>
<body>
    <h1>BIODATA SISWA</h1>
    <form action="proses.php" method="post">
        <p>Silahkan isi daftar berikut!</p>
        NISN : <input type="number" name="nisn"> <br>
        Nama Lengkap : <input type="text" name="namalengkap"> <br>
        Tempat Lahir : <input type="text" name="tempatlahir"> <br>

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
        Asal Sekolah : <input type="text" name="asalsekolah"> <br>
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
            Ekstrakurikuler: <Label for="ekstra" name="ekskul"> </Label>
            <input type="checkbox" value="OSIS"name="ekskul[]">Organisasi Siswa Intra Sekolah (OSIS)
            <input type="checkbox" value="GDS"name="ekskul[]">Gerakan Disiplin Siswa
            <input type="checkbox" value="Paskibra"name="ekskul[]">Paskibraka <br>
            <input type="checkbox" value="Remas"name="ekskul[]">Remaja Masjid Al-Kautsar
            <input type="checkbox" value="EC"name="ekskul[]">English Club Esemkasa
            <input type="checkbox" value="PMR"name="ekskul[]">Palang Merah Remaja <br>
            <input type="checkbox" value="FS"name="ekskul[]">Futsal
            <input type="checkbox" value="Basket"name="ekskul[]">Basket
            <input type="checkbox" value="Volly"name="ekskul[]">Voly <br>
            <input type="checkbox" value="TK"name="ekskul[]">Teater Kusuma
            <input type="checkbox" value="Tari"name="ekskul[]">Tari
        </p>
        <p>
            <input type="submit" name="submit" value="Daftar">
        </p>
    </form>
</body>
</html>
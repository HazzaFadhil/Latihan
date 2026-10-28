        body { font-family: Arial, sans-serif; margin: 0; background-color: #f9f9f9; color: #333; }
        header { background: #2c3e50; color: white; padding: 15px 20px; text-align: center; }
        .container { width: 80%; margin: 20px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #3498db; color: white; }
        footer { text-align: center; margin-top: 20px; padding: 10px; color: #777; font-size: 0.9em; }

----------------------------------------------------------------------


<?php
//variabel dasar dulu
$nama_matkul = "Web Programming";
$semester = 5;
$dosen_pengampu = "Pak Ibnu & Pak Anwar";


//Array asosiasi
$data_mahasiswa = [
    [ "nama" => "Fadhil Hazza", "nim" => "411", "status" => "aktif"],
    [ "nama"=> "asep", "nim" => "41112", "status" => "aktif"],
    [ "nama"=> "jeff", "nim"=> "415151", "status" => "tidak aktif"],
    [ "nama"=> "brodi", "nim"=> "525151", "status" => "aktif"],
];

//layouting atau manggil header
include 'header.php';
?>

<!-- KONTEN UTAMA -->

<h3>Dashboard mata kuliah: <?= $nama_matkul ?> (Semester <?= $semester ?>)</h3>
<p>Dosen Pengampu: <b><?= $dosen_pengampu ?></b> </p>

<hr>

<h4>Tabel Daftar Mahasiswa</h4>
<table>
    <thead>
        <tr>
            <th>no</th>
            <th>Nama Lengkap</th>
            <th>NIM</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 1;
        //Perulangan Array
        foreach ($data_mahasiswa as $mhs):
        ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['status']; ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php
// layouting
include 'footer.php';
?>

-----------------------------------------
HEADER

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wakwaw</title>
</head>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background-color: #f9f9f9; color: #333; }
        header { background: #2c3e50; color: white; padding: 15px 20px; text-align: center; }
        .container { width: 80%; margin: 20px auto; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        table { width: 100%; border-collapse: collapse; margin-top: 15px; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #3498db; color: white; }
        footer { text-align: center; margin-top: 20px; padding: 10px; color: #777; font-size: 0.9em; }
    </style>
<body>
    <header>
        <h2>Dashboard Keterangan Mahasisa</h2>
    </header>
    <div class="container"> -->

---------------------------------------------
FOOTER 

<!-- </div>
    <footer>
        <p>&copy; 2026 - UTS Website Programming</p>
    </footer>
</body>
</html> -->
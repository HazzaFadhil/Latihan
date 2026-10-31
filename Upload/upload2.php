<?php
// Tentukan folder tujuan penyimpanan file
$target_dir = "uploads/";

// Buat folder 'uploads' secara otomatis jika belum ada
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true);
}

$pesan = "";

// Periksa apakah tombol submit sudah ditekan
if (isset($_POST['submit'])) {
    $target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
    $uploadOk = 1;

    // 1. Cek apakah file benar-benar diunggah
    if(isset($_FILES["file_upload"])) {
        $check = @filesize($_FILES["file_upload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            $pesan = "File bukan file unggahan yang valid.";
            $uploadOk = 0;
        }
    }

    // 2. Batasi ukuran file (Contoh: maksimal 5MB)
    if ($_FILES["file_upload"]["size"] > 5000000) {
        $pesan = "Maaf, ukuran file terlalu besar (Maksimal 5MB).";
        $uploadOk = 0;
    }

    // 3. Cek proses upload
    if ($uploadOk == 0) {
        if (empty($pesan)) {
            $pesan = "Maaf, file Anda gagal diunggah.";
        }
    } else {
        if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
            $pesan = "File " . htmlspecialchars(basename($_FILES["file_upload"]["name"])) . " berhasil diunggah.";
        } else {
            $pesan = "Maaf, terjadi kesalahan saat mengunggah file Anda.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File Sederhana</title>
    <link rel="stylesheet" href="style1.css">
</head>

<body>
    <header>
    </header>

    <main>
        <section>
            <fieldset>
                <legend>Upload File Sederhana</legend>
                
                <!-- Menampilkan pesan status upload -->
                <?php if (!empty($pesan)) : ?>
                    <p style="color: blue; font-weight: bold;"><?php echo $pesan; ?></p>
                <?php endif; ?>

                <form id="form" action="" method="POST" enctype="multipart/form-data">
                    <label for="file_upload">Pilih File</label> <br>
                    <input type="file" name="file_upload" id="file_upload" required> <br> <br>
                    <input type="submit" name="submit" value="Upload File"> 
                </form>
            </fieldset>
        </section>

        <!-- Bagian untuk Menuju Halaman Daftar File -->
        <section style="margin-top: 20px;">
            <a href="list.php">Lihat daftar file &rarr;</a>
        </section>
    </main>
</body>

</html>
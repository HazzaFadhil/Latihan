<?php
// Tentukan folder target yang sama
$target_dir = "uploads/";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar File</title>
    <link rel="stylesheet" href="style1.css"> <!-- Sesuaikan dengan file CSS Anda -->
</head>
<body>
    <main>
        <section>
            <fieldset>
                <legend>Daftar File yang Di-upload</legend>
                <ul>
                    <?php
                    // Cek dulu apakah foldernya ada sebelum di-scandir
                    if (is_dir($target_dir)) {
                        $files = array_diff(scandir($target_dir), array('.', '..'));

                        if (empty($files)) {
                            echo "<li>Belum ada file yang diunggah.</li>";
                        } else {
                            foreach ($files as $file) {
                                $file_path = $target_dir . $file;
                                $file_ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                                
                                echo "<li style='margin-bottom: 10px;'>";
                                echo "<a href='$file_path' target='_blank'>" . htmlspecialchars($file) . "</a>";
                                
                                // Jika filenya berupa gambar, tampilkan preview kecil
                                if (in_array($file_ext, ['jpg', 'jpeg', 'png', 'gif'])) {
                                    echo "<br><img src='$file_path' alt='$file' width='100' style='margin-top: 5px; border-radius: 4px;'>";
                                }
                                
                                echo "</li>";
                            }
                        }
                    } else {
                        echo "<li>Folder uploads belum ada.</li>";
                    }
                    ?>
                </ul>
            </fieldset>
        </section>

        <section style="margin-top: 20px;">
            <a href="upload2.php">&larr; Kembali ke Form Upload</a>
        </section>
    </main>
</body>
</html>
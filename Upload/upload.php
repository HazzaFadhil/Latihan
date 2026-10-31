
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File sederhana</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

    </header>

    <main>
        <section>
            <fieldset>
                <legend>Upload File sederhana</legend>
                <form id="form" action="upload.php" method="POST" enctype="multipart/form-data">
                    <label for="file_upload">Pilih File</label> <br>
                    <input type="file" name="file_upload" id="file_upload" required> <br> <br>
                    <input type="submit" name="submit" value="Upload File"> 
                </form>
            </fieldset>
        </section>
    </main>
</body>

</html>
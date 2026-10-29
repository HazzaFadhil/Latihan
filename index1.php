<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title>Tantangan Level Nightmare</title>
</head>

<body>
    <header>
        <h1>FORM PENDAFTARAN KERJA MAGANG</h1>
    </header>

    <main>
        <section>
            <form action="#" method="POST">
                <div>
                    <label for="nama">Namamu</label><br>
                    <input type="text" id="nama" name="nama" placeholder="Isi namamu ya" required>
                </div>

                <br>

                <div>
                    <label for="email">Emailmu</label><br>
                    <input type="email" id="email" name="email" placeholder="Isi Emailmu ya" required>
                </div>

                <br>

                <div>
                    <label for="text">Posisi yang ingin dilamar :</label>
                    <select name="posisi" id="posisi">
                        <option value="FrontEnd">FrontEnd</option>
                        <option value="BackEnd">BackEnd</option>
                        <option value="UI/UX Designer">UI/UX Designer</option>
                    </select>
                </div>

                <br>

                <div>
                    <fieldset>
                        <legend>Metode Wawancara yang Diinginkan</legend>
                        <input type="radio" id="metode" name="metode" required>
                        <label for="text">OFFLINE</label>

                        <br>
                        <input type="radio" id="metode" name="metode" required>
                        <label for="text">ONLINE</label>

                    </fieldset>
                </div>
            </form>
        </section>

        <br>

        <table border="1">
            <thead>
                <tr>
                    <th>Hari</th>
                    <th>Sesi Pagi</th>
                    <th>Sesi Siang</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><b>Senin</b></td>
                    <td colspan="2">
                        <b>full booking / mentoring akbar</b>
                    </td>
                </tr>

                <tr>
                    <td>Selasa</td>
                    <td>Mentoring Reguler A</td>
                    <td>Mentoring Reguler B</td>
                </tr>

                <tr>
                    <td><b>Rabu</b></td>
                    <td rowspan="2">
                        <b>mentor Spesial (Pagi - Siang)</b>
                    </td>
                    <td>Sesi Siang Slot 1</td>
                </tr>

                <tr>
                    <td><b>Kamis (Lanjutan Rabu)</b></td>
                    <td>Sesi Siang Slot 2</td>
                </tr>
            </tbody>
        </table>

        <br>

        <section>
            <ol>
                <li>
                    Advanced HTML
                    <ul>
                        <li>Accessibility (ARIA)</li>
                        <li>Custom Data Attribute (data-*)</li>
                    </ul>
                </li>
                <li>
                    CSS Architecture
                </li>
            </ol>
        </section>

    </main>
</body>

</html>

<!-- elemen select dgn opsi: frontend, backend, dan UI UX. 
 Buat label ketika diklik langsung mengaktifkan dropdown -->

<!-- Pengelompokan Form Komplek (fieldset & legend) didalam form tersebut ada bagian khusus utk
 milih 'metode wawancara yang diinginkan' menggunakan tombol radio (type="radio") untuk pilihan online atau offline -->

<!-- tabel multidimensi dgn colspan dan rowspan 
 Header kolom: Hari, Sesi Pagi (09.00), Sesi Siang (13.00). -->

<!-- Nested List Kompleks:
Buat sebuah nested list (list bersarang) untuk struktur hierarki modul belajar lanjutan dengan ketentuan:
1. Level 1 (Ordered List / <ol>): 1. Advanced HTML, 2. CSS Architecture.
2. Di dalam sub-poin "1. Advanced HTML", masukkan Unordered List (<ul>) berisi: Accessibility (ARIA) dan Custom Data Attributes (data-*). -->
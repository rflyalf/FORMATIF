<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bioskop Almahrya - Form Pendaftaran</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <header class="header">
            <h1>Selamat Datang di Bioskop Almahrya</h1>
            <p>Tonton sekarang juga untuk merasakan hal yang seru!</p>
        </header>

        <main class="form-container">
            <h2>Form Pendaftaran</h2>
            <form action="process.php" method="POST">
                <label for="film">Nama Film:</label>
                <select name="film" id="film" required>
                    <option value="Transformers One (2024)">Transformers One (2024)</option>
                    <option value="Malam Mencabut Nyawa (2024)">Malam Mencabut Nyawa (2024)</option>
                    <option value="Possesion: Kerasukan (2024)">Possesion: Kerasukan (2024)</option>
                    <option value="Mendung Tanpo Udan (2024)">Mendung Tanpo Udan (2024)</option>
                    <option value="Don't Move (2024)">Don't Move (2024)</option>
                    <option value="Haunted Universities 3 (2024)">Haunted Universities 3 (2024)</option>
                    <option value="Afraid (2024)">Afraid (2024)</option>
                </select>

                <label for="hari">Hari:</label>
                <select name="hari" id="hari" required>
                    <option value="Senin">Senin</option>
                    <option value="Selasa">Selasa</option>
                    <option value="Rabu">Rabu</option>
                    <option value="Kamis">Kamis</option>
                    <option value="Jumat">Jumat</option>
                    <option value="Sabtu">Sabtu</option>
                    <option value="Minggu">Minggu</option>
                </select>

                <label for="id_pelanggan">ID Pelanggan:</label>
                <select name="id_pelanggan" id="id_pelanggan" required>
                    <option value="MBV">MBV - Member VIP</option>
                    <option value="MBR">MBR - Member Regular</option>
                    <option value="MBN">MBN - Non Member</option>
                </select>

                <label for="jumlah_beli">Jumlah Beli:</label>
                <input type="number" name="jumlah_beli" id="jumlah_beli" min="1" required>

                <input type="submit" value="Hitung Total">
            </form>
        </main>
    </div>
</body>

</html>
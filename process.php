<?php
$film = $_POST['film'];
$hari = $_POST['hari'];
$id_pelanggan = $_POST['id_pelanggan'];
$jumlah_beli = (int)$_POST['jumlah_beli'];

if (in_array($hari, ['Senin', 'Selasa', 'Rabu', 'Kamis'])) {
    $harga = 35000;
} elseif (in_array($hari, ['Jumat', 'Sabtu', 'Minggu'])) {
    $harga = 40000;
} else {
    echo "Hari tidak valid!";
    exit;
}

switch ($id_pelanggan) {
    case 'MBV':
        $status = "Member VIP";
        $diskon = 0.2;
        break;
    case 'MBR':
        $status = "Member Regular";
        $diskon = 0.1;
        break;
    case 'MBN':
        $status = "Non Member";
        $diskon = 0.0;
        break;
    default:
        echo "ID Pelanggan tidak valid!";
        exit;
}

$diskon_amount = $harga * $diskon;
$subtotal = ($harga - $diskon_amount) * $jumlah_beli;
$ppn = $subtotal * 0.11;
$total_price = $subtotal + $ppn;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt - Bioskop Almahrya</title>
    <style>
        body {
            font-family: 'Courier New', Courier, monospace;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .receipt-container {
            width: 400px;
            background-color: #fff;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            color: #333;
        }

        .receipt-container h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .receipt-container p {
            margin: 5px 0;
        }

        .receipt-container .line {
            border-bottom: 1px dashed #333;
            margin: 10px 0;
        }

        .receipt-container .total {
            font-weight: bold;
        }

        .receipt-container .thanks {
            text-align: center;
            margin-top: 20px;
            font-weight: bold;
        }

        .receipt-container .link-back {
            text-align: center;
            margin-top: 10px;
        }

        .receipt-container .link-back a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>

<body>
    <div class="receipt-container">
        <h1>BIOSKOP ALMAHYRA</h1>
        <p>Jl. Siliwangi 127A, Kel.Sepanjang Jaya, Kota Bekasi</p>
        <div class="line"></div>
        <p><strong>ID PELANGGAN</strong>: <?php echo htmlspecialchars($id_pelanggan); ?></p>
        <p><strong>STATUS</strong>: <?php echo htmlspecialchars($status); ?></p>
        <p><strong>FILM</strong>: <?php echo htmlspecialchars($film); ?></p>
        <p><strong>DISKON</strong>: Rp. <?php echo number_format($diskon_amount, 0, ',', '.'); ?></p>
        <p><strong>HARGA</strong>: Rp. <?php echo number_format($harga, 0, ',', '.'); ?></p>
        <p><strong>JUMLAH BELI</strong>: <?php echo $jumlah_beli; ?></p>
        <div class="line"></div>
        <p><strong>SUBTOTAL</strong>: Rp. <?php echo number_format($subtotal, 0, ',', '.'); ?></p>
        <p><strong>PPN (11%)</strong>: Rp. <?php echo number_format($ppn, 0, ',', '.'); ?></p>
        <div class="line"></div>
        <p class="total"><strong>TOTAL</strong>: Rp. <?php echo number_format($total_price, 0, ',', '.'); ?></p>
        <div class="line"></div>
        <p class="thanks">TERIMA KASIH</p>
        <p class="link-back">INPUT LAGI >>> <a href="form.html">Kembali ke Form</a></p>
    </div>
</body>

</html>
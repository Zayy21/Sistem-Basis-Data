<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylepymnt.css">
    <title>Pembayaran</title>
</head>
<body>

<div class="container">
    <div class="header">
        <h2>Pembayaran</h2>
    </div>
    <div class="content">
        <table>
            <tr>
                <th colspan="2">NAMA</th>
                <td colspan="2">Tito Agung</td>
            </tr>
            <tr>
                <td>STICK BILLIARD</td>
                <td>2</td>
                <td>-</td>
            </tr>
            <tr>
                <td>SARUNG TANGAN</td>
                <td>2</td>
                <td>40.000</td>
            </tr>
            <tr>
                <td>MEJA</td>
                <td colspan="2">
                    <input type="button" value="-" />
                    2 JAM
                    <input type="button" value="+" />
                    70.000
                </td>
            </tr>
            <tr>
                <td colspan="3" class="total">Rp. 110.000,-</td>
            </tr>
        </table>
    </div>
    <div class="buttons">
        <button class="qris">QRIS</button>
        <button class="cash">CASH</button>
        <button class="debit">DEBIT</button>
        <button class="bayar">BAYAR</button>
    </div>
</div>

</body>
</html>

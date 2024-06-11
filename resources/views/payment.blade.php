<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 500px;
            padding: 20px;
            text-align: center;
        }
        .header {
            background-color: #3d0076;
            color: #fff;
            padding: 10px;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .content {
            margin: 20px 0;
        }
        .content table {
            width: 100%;
            border-collapse: collapse;
        }
        .content table, .content th, .content td {
            border: 1px solid #ddd;
        }
        .content th, .content td {
            padding: 8px;
            text-align: left;
        }
        .content th {
            background-color: #f4f4f4;
        }
        .total {
            font-weight: bold;
            color: #3d0076;
        }
        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }
        .buttons button {
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            flex: 1;
            margin: 0 5px;
        }
        .buttons .qris {
            background-color: #3d0076;
            color: #fff;
        }
        .buttons .cash {
            background-color: #3d0076;
            color: #fff;
        }
        .buttons .debit {
            background-color: #3d0076;
            color: #fff;
        }
        .buttons .bayar {
            background-color: #ffda00;
        }
    </style>
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

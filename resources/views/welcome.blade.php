<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            background-color: #333;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 100vh;
            position: relative;
        }
        .table-container {
            width: 90%;
            margin-top: 20px;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .table th, .table td {
            border: 1px solid #444;
            padding: 10px;
            text-align: center;
        }
        .table th {
            background-color: #444;
        }
        .table td {
            background-color: #2b2b2b;
        }
        .table .highlight {
            background-color: #4c4c4c;
        }
        .controls {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-bottom: 20px;
        }
        .control {
            text-align: center;
            background-color: #2b2b2b;
            padding: 10px;
            border-radius: 8px;
        }
        .control img {
            width: 50px;
            height: 50px;
        }
        .control button {
            background-color: #444;
            border: none;
            color: #fff;
            padding: 10px;
            margin: 5px;
            cursor: pointer;
            border-radius: 5px;
        }
        .control button:hover {
            background-color: #555;
        }
        .buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .buttons button {
            width: 50px;
            height: 50px;
            margin: 5px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
        }
        .buttons button.green {
            background-color: #4CAF50;
        }
        .buttons button.red {
            background-color: #f44336;
        }
        .buttons button:hover {
            opacity: 0.8;
        }
        .bottom-controls {
            display: flex;
            justify-content: space-around;
            width: 100%;
            padding: 20px 0 ;
            background-color: #333;
        }
        .bottom-control {
            text-align: center;
            background-color: #fff;
            color: #333;
            width: 350px;
            height: 200px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .button-min {
            border: none;
            border-top-left-radius: 50px;
            border-bottom-left-radius: 50px;
        }
        .button-plus {
            border: none;
            border-top-right-radius: 50px;
            border-bottom-right-radius: 50px;
        }
        .bottom-control button {
            background-color: #3b0a74;
            border: none;
            color: #ffd700;
            padding: 10px;
            margin: 5px;
            cursor: pointer;
            font-weight: bold;
        }
        .bottom-control button:hover {
            background-color: #5a0da9;
        }
        .bottom-buttons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .bottom-buttons button {
            width: 50px;
            height: 50px;
            margin: 5px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            font-weight: bold;
        }
        .bottom-buttons button.green {
            background-color: #4CAF50;
        }
        .bottom-buttons button.red {
            background-color: #f44336;
        }
        .bottom-buttons button:hover {
            opacity: 0.8;
        }
        .pesan-button {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 15px 25px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }
        .pesan-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Nomor Meja</th>
                    <th>Nama Penyewa</th>
                    <th>Stick</th>
                    <th>Sarung Tangan</th>
                    <th>Sisa Waktu</th>
                </tr>
            </thead>
            <tbody>
                <tr class="highlight">
                    <td>2</td>
                    <td>Revan Haikal</td>
                    <td>3</td>
                    <td>3</td>
                    <td>00:37:00</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Tito Agung</td>
                    <td>2</td>
                    <td>1</td>
                    <td>02:23:07</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Fakhri Muafa</td>
                    <td>1</td>
                    <td>1</td>
                    <td>04:12:12</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="bottom-controls">
        <div class="bottom-control">
            <img src="/images/cross.png" alt="Cross">
            <div>
                <button class="button-min">-</button>
                <span>0</span>
                <button class="button-plus">+</button>
            </div>
        </div>
        <div class="bottom-control">
            <img src="/images/gloves.png" alt="Gloves">
            <div>
                <button class="button-min">-</button>
                <span>0</span>
                <button class="button-plus">+</button>
            </div>
        </div>
        <div class="bottom-control bottom-buttons">
            <button class="green">1</button>
            <button class="green">2</button>
            <button class="red">3</button>
            <button class="green">4</button>
            <button class="green">5</button>
            <button class="green">6</button>
            <button class="red">7</button>
            <button class="green">8</button>
            <button class="green">9</button>
        </div>
    </div>

    <button class="pesan-button">Pesan</button>
</body>
</html>

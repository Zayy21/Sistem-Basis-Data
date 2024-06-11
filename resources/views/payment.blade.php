<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/stylepymnt.css">
    <title>Pembayaran</title>
    <style>
        .button { cursor: pointer; }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Pembayaran</h2>
    </div>
    <div class="content">
        <table border="1">
            <tr>
            <form method="GET" action="{{ route('welcome.page') }}">
        @csrf <!-- CSRF protection -->
        <label for="name">Enter Name:</label>
        <input type="text" id="name" name="name">
            </tr>
            <tr>
                <td>STICK BILLIARD</td>
                <td>2</td>
                <td>-</td>
            </tr>
            <tr>
                <td>SARUNG TANGAN</td>
                <td>1</td>
                <td>Rp. <span id="glovePrice">20,000</span></td>
            </tr>
            <tr>
                <td>MEJA</td>
                <td colspan="2">
                    <input type="button" value="-" class="button" id="decrementTable" />
                    <span id="hours">1</span> JAM
                    <input type="button" value="+" class="button" id="incrementTable" />
                    <span id="tablePrice">35,000</span>
                </td>
            </tr>
            <tr>
                <td colspan="3" class="total">Total: Rp. <span id="totalPrice">75,000</span></td>
            </tr>
        </table>
    </div>
    <div class="buttons">
        <button class="qris">QRIS</button>
        <button class="cash">CASH</button>
        <button class="debit">DEBIT</button>
        <div class="bottom-control bottom-buttons">
            <button class="red" data-url="{{ route('welcome.page') }}">bayar</button>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.bottom-control .red').forEach(button => {
        button.addEventListener('click', () => {
            const url = button.getAttribute('data-url');
            window.location.href = url;
        });
    });

    // Get elements
    const glovePriceElement = document.getElementById('glovePrice');
    const tablePriceElement = document.getElementById('tablePrice');
    const totalPriceElement = document.getElementById('totalPrice');
    const hoursElement = document.getElementById('hours');

    // Update prices based on backend values
    function updatePrices(glovePrice, tablePrice) {
        glovePriceElement.textContent = glovePrice.toLocaleString('id-ID');
        tablePriceElement.textContent = tablePrice.toLocaleString('id-ID');
        
        const totalPrice = glovePrice + tablePrice;
        totalPriceElement.textContent = totalPrice.toLocaleString('id-ID');
    }

    // Initial update with static prices
    updatePrices(40000, 35000);

    // Event listeners for adjusting table hours
    const decrementTableButton = document.getElementById('decrementTable');
    const incrementTableButton = document.getElementById('incrementTable');

    let tableHours = 1; // Initial value for table hours

    decrementTableButton.addEventListener('click', () => {
        if (tableHours > 1) {
            tableHours--;
            hoursElement.textContent = tableHours;
            updatePrices(40000, tableHours * 35000); // Update the total price
        }
    });

    incrementTableButton.addEventListener('click', () => {
        tableHours++;
        hoursElement.textContent = tableHours;
        updatePrices(40000, tableHours * 35000); // Update the total price
    });
</script>

</body>
</html>

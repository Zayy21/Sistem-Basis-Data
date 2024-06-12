<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Payment</title>
</head>
<body>
<div class="header">
    <h1>Pembayaran</h1>
</div>


<div class="wrapper pt-5">
    <div class="payment-table">
        <p>Table Number: <span id="tableNumber"></span></p>
    </div>
    <form id="paymentForm" action="{{ route('payments.store') }}" method="POST">
        @csrf
        <input type="hidden" name="meja" id="mejaInput">
        <div class="row">
            <div class="col-auto label-name">
                <label class="col-form-label fw-bold">NAMA</label>
            </div>
            <div class="col-auto input-name">
                <input type="text" name="name" id="nama" class="">
            </div>
        </div>
        <div class="container payment payment-stick-gloves mt-4">
            <div class="row align-items-start">
                <div class="col payment-name">STICK BILLIARD</div>
                <div class="col d-flex text-center">
                    <input type="number" id="stick_billiard" name="stick_billiard" value="1" min="1" class="form-control">
                </div>
            </div>
        </div>
        <div class="container payment payment-stick-gloves">
            <div class="row align-items-start">
                <div class="col payment-name">SARUNG TANGAN</div>
                <div class="col d-flex text-center">
                    <input type="number" id="sarung_tangan" name="sarung_tangan" value="0" min="0" class="form-control">
                </div>
            </div>
        </div>
        <div class="container payment">
            <div class="row align-items-start">
                <div class="col payment-name">JAM</div>
                <div class="col-4 d-flex text-center jam">
                    <input type="number" id="jam" name="jam" value="1" min="1" class="form-control">
                </div>
                <div class="col-2 sum fw-bold">
            Rp. <span id="total_price">110.000</span>,-
        </div>
        </div>
        <div class="container choose-payment">
            <div class="row">
                <div class="col">
                    <button type="button" class="qris choose">QRIS</button>
                </div>
                <div class="col">
                    <button type="button" class="cash choose">CASH</button>
                </div>
                <div class="col">
                    <button type="button" class="debit choose">DEBIT</button>
                </div>
                <div class="col p-0">
                    <button type="submit" class="bayar fw-bold">BAYAR</button>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Optional JavaScript; choose one of the two! -->
<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
    // Retrieve table number from URL query parameter
    const urlParams = new URLSearchParams(window.location.search);
    const tableNumber = urlParams.get('table');
    document.getElementById('mejaInput').value = tableNumber;
</script>
</body>
</html>
  <!-- Optional JavaScript; choose one of the two! -->
  <script>
        // Retrieve the selected table number from session storage
        const selectedTable = sessionStorage.getItem('selectedTable');
        if (selectedTable) {
            // Insert the selected table number into the payment table
            document.getElementById('tableNumber').textContent = selectedTable;
        }
    </script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const prices = {
        stick_billiard: 0, // Assuming price is zero or constant, put actual price if available
        sarung_tangan: 20000,
        jam: 35000
      };

      function updateTotalPrice() {
        const stickQty = parseInt(document.getElementById('stick_billiard').value) || 0;
        const sarungTanganQty = parseInt(document.getElementById('sarung_tangan').value) || 0;
        const jamQty = parseInt(document.getElementById('jam').value) || 0;
        const totalPrice = (stickQty * prices.stick_billiard) + (sarungTanganQty * prices.sarung_tangan) + (jamQty * prices.jam);
        document.getElementById('total_price').textContent = totalPrice.toLocaleString('id-ID');
      }

      document.getElementById('stick_billiard').addEventListener('input', updateTotalPrice);
      document.getElementById('sarung_tangan').addEventListener('input', updateTotalPrice);
      document.getElementById('jam').addEventListener('input', updateTotalPrice);

      document.getElementById('paymentForm').addEventListener('submit', function(event) {
        updateTotalPrice();
        const totalPrice = document.getElementById('total_price').textContent;
        alert('Total Harga: Rp. ' + totalPrice + ',-');
      });

      // Initialize total price on load
      updateTotalPrice();
    });
  </script>
</body>
</html>
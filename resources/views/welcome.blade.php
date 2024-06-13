{{-- welcome.balde.php --}}


<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">

    <title>Mod Billiard</title>
</head>
<body>
<!-- header table start -->
    <div class="container mt-4 head-table">
        <div class="row text-center fw-bold">
            <div class="col-2"><div class="text-head">NOMOR MEJA</div></div>
            <div class="col-5"><div class="text-head">NAMA PENYEWA</div></div>
            <div class="col-2"><div class="text-head">STICK</div></div>
            <div class="col-3"><div class="text-head">SISA WAKTU</div></div>
        </div>
    </div>
<!-- header table end -->
<!-- body table start -->
    <div class="container body-table py-2">
        <div class="row text-center">
            <!-- Sample rows -->
            <div class="col-2 p-0"><div class="text-body" style="border-left-style: solid; border-top-left-radius: 10px; border-bottom-left-radius: 10px;"><p>2</p></div></div>
            <div class="col-5 p-0"><div class="text-body"><p>REVAN HAIKAL</p></div></div>
            <div class="col-2 p-0"><div class="text-body"><p>3</p></div></div>
            <div class="col-3 p-0"><div class="text-body" style="border-right-style: solid; border-top-right-radius: 10px; border-bottom-right-radius: 10px;"><p>00:37:00</p></div></div>
        </div>
    </div>
<!-- body table end -->
<!-- sum stick start -->
    <!-- sum stick end -->
<!-- sum gloves start -->
    <!-- sum gloves end -->
<!-- pick table start -->
    <div class="col booking p-0">
        <div class="container booking-meja">
            <div class="row align-items-start">
                <div class="col p-0 my-2 mx-1">
                  <button class='meja' onclick="selectTable(1)" data-table="1">1</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                  <button class='meja' onclick="selectTable(2)" data-table="2">2</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                  <button class='meja' onclick="selectTable(3)" data-table="3">3</button>
                </div>
            </div>
            <div class="row align-items-center">
            <div class="col p-0 my-2 mx-1">
                  <button class='meja' onclick="selectTable(4)" data-table="4">4</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                  <button class='meja' onclick="selectTable(5)" data-table="5">5</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                  <button class='meja' onclick="selectTable(6)" data-table="6">6</button>
                </div>
            </div>
            <div class="row align-items-end">
            <div class="col p-0 my-2 mx-1">
                  <button class='meja' onclick="selectTable(7)" data-table="7">7</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                  <button class='meja' onclick="selectTable(8)" data-table="8">8</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                  <button class='meja' onclick="selectTable(9)" data-table="9">9</button>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col p-0 my-2 mx-1">
                    <a href="payment" id="lanjutButton"><button class="button-lanjut">Lanjut</button></a>
                </div>
            </div>
        </div>
    </div>
<!-- pick table end -->
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
    function selectTable(tableNumber) {
        sessionStorage.setItem('selectedTable', tableNumber);
        const lanjutButton = document.getElementById('lanjutButton');
        lanjutButton.href = `payment?table=${tableNumber}`;
        const selectedButton = document.querySelector(`.meja[data-table="${tableNumber}"]`);
        selectedButton.classList.add('pressed');
    }
    
</script>




</body>
</html>
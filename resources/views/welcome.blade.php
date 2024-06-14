<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <title>Mod Billiard</title>
    <style>
        /* .meja {
            width: 100%;
            padding: 10px;
            text-align: center;
        }
        .meja.red {
            background-color: red;
            color: white;
        }
        .meja.green {
            background-color: green;
            color: white;
        } */
    </style>
</head>
<body>
<!-- header table start -->
    <div class="container mt-4 head-table">
        <div class="row text-center fw-bold">
            <div class="col-2"><div class="text-head">NOMOR MEJA</div></div>
            <div class="col-5"><div class="text-head">NAMA PENYEWA</div></div>
            <div class="col-1"><div class="text-head">STICK</div></div>
            <div class="col-1"><div class="text-head">GLOVES</div></div>
            <div class="col-3"><div class="text-head">SISA WAKTU</div></div>
        </div>
    </div>
<!-- header table end -->
<!-- body table start -->
    <div class="container body-table py-2">
        @if(isset($payments) && count($payments) > 0)
            @foreach($payments as $payment)
                <!-- Ubah data-hours menjadi data-seconds untuk pengujian cepat -->
                <div class="row text-center payment-row" id="payment-row-{{ $payment->id }}">
                    <div class="col-2 p-0">
                        <div class="text-body" style="border-left-style: solid; border-top-left-radius: 10px; border-bottom-left-radius: 10px;">
                            <p>{{ $payment->meja }}</p>
                        </div>
                    </div>
                    <div class="col-5 p-0">
                        <div class="text-body" id="nama">
                            <p>{{ $payment->nama }}</p>
                        </div>
                    </div>
                    <div class="col-1 p-0">
                        <div class="text-body">
                            <p>{{ $payment->stick }}</p>
                        </div>
                    </div>
                    <div class="col-1 p-0">
                        <div class="text-body">
                            <p>{{ $payment->gloves }}</p>
                        </div>
                    </div>
                    <div class="col-3 p-0">
                        <div class="text-body countdown-timer" data-seconds="{{ $payment->jam * 60 }}" data-id="{{ $payment->id }}" data-meja="{{ $payment->meja }}" style="border-right-style: solid; border-top-right-radius: 10px; border-bottom-right-radius: 10px;">
                            <p class="time-remaining" id="time-remaining-{{ $payment->id }}"></p>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="row text-center">
                <div class="col npw payment p-0">
                    <div class="text-body"><p>No payments found.</p></div>
                </div>
            </div>
        @endif
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
                    <button class='meja' id="meja-1" onclick="selectTable(1)" data-table="1">1</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                    <button class='meja' id="meja-2" onclick="selectTable(2)" data-table="2">2</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                    <button class='meja' id="meja-3" onclick="selectTable(3)" data-table="3">3</button>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col p-0 my-2 mx-1">
                    <button class='meja' id="meja-4" onclick="selectTable(4)" data-table="4">4</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                    <button class='meja' id="meja-5" onclick="selectTable(5)" data-table="5">5</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                    <button class='meja' id="meja-6" onclick="selectTable(6)" data-table="6">6</button>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col p-0 my-2 mx-1">
                    <button class='meja' id="meja-7" onclick="selectTable(7)" data-table="7">7</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                    <button class='meja' id="meja-8" onclick="selectTable(8)" data-table="8">8</button>
                </div>
                <div class="col p-0 my-2 mx-1">
                    <button class='meja' id="meja-9" onclick="selectTable(9)" data-table="9">9</button>
                </div>
            </div>
            <div class="row align-items-end">
                <div class="col p-0 my-2 mx-1">
                    <a href="#" id="lanjutButton"><button class="button-lanjut">Lanjut</button></a>
                </div>
            </div>
        </div>
    </div>
<!-- pick table end -->
<!-- Optional JavaScript; choose one of the two! -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function selectTable(tableNumber) {
        const tableButton = document.getElementById(`meja-${tableNumber}`);
        if (tableButton.classList.contains('red')) {
            alert('Meja sudah terisi');
            return;
        }
        sessionStorage.setItem('selectedTable', tableNumber);
        const lanjutButton = document.getElementById('lanjutButton');
        lanjutButton.href = `payment?table=${tableNumber}`;
        tableButton.classList.add('pressed');
    }

    document.addEventListener('DOMContentLoaded', function() {
        const countdownElements = document.querySelectorAll('.countdown-timer');

        countdownElements.forEach(function(element) {
            const seconds = element.getAttribute('data-seconds');
            const timerId = element.querySelector('.time-remaining').id;
            const mejaId = element.getAttribute('data-meja');
            const localStorageKey = `countdown-${timerId}`;

            let deadline = localStorage.getItem(localStorageKey);

            if (!deadline) {
                deadline = new Date(new Date().getTime() + seconds * 1000);
                localStorage.setItem(localStorageKey, deadline);
            } else {
                deadline = new Date(deadline);
            }

            // Set the table color to red
            document.getElementById(`meja-${mejaId}`).classList.add('red');

            const interval = setInterval(function() {
                const now = new Date().getTime();
                const t = deadline - now;
                const hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((t % (1000 * 60)) / 1000);

                document.getElementById(timerId).innerHTML = `${hours}:${minutes}:${seconds}`;

                if (t < 0) {
                    clearInterval(interval);
                    document.getElementById(timerId).innerHTML = "00:00:00";
                    document.getElementById(`payment-row-${element.dataset.id}`).remove();
                    // Set the table color to green when time is up
                    const tableButton = document.getElementById(`meja-${mejaId}`);
                    tableButton.classList.remove('red');
                    tableButton.classList.add('green');
                    // Clear the localStorage item when time is up
                    localStorage.removeItem(localStorageKey);
                }
            }, 1000);
        });

        const lanjutButton = document.getElementById('lanjutButton');
        lanjutButton.addEventListener('click', function(event) {
            const selectedTable = sessionStorage.getItem('selectedTable');
            if (!selectedTable) {
                event.preventDefault();
                alert('Pilih meja terlebih dahulu');
            }
        });
    });
</script>
</body>
</html>

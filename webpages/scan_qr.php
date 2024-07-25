<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scan QR Code</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <style>
        .error-message {
            color: red;
            font-weight: bold;
            text-align: center;
            margin-top: 10px;
        }
        .qr-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 0, 0, 0.2);
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="data">
            <h1>SCAN QR CODE</h1>
        </div>
        <div style="width: 100%; margin: auto; position: relative;" id="reader">
            <div id="qr-overlay" class="qr-overlay"></div>
            <div id="error-message" class="error-message"></div>
        </div>
    </div>

    <script>
        let errorCount = 0;
        const MAX_ERRORS = 5; // Maximum number of consecutive errors before showing a warning
        const ERROR_INTERVAL = 5000; // Time in ms to reset the error count

        function onScanSuccess(decodedText, decodedResult) {
            console.log(`Scan result: ${decodedText}`, decodedResult);

            // Clear the scanner once a QR code is successfully scanned
            html5QrcodeScanner.clear();

            // Connect to Arduino IoT device or handle the scanned result
            connectToDevice(decodedText);
        }

        function onScanError(errorMessage) {
            errorCount++;
            console.error(`Scan error: ${errorMessage}`);
            
            // Show QR overlay and error message
            const overlay = document.getElementById('qr-overlay');
            const errorMsg = document.getElementById('error-message');
            
            if (errorCount >= MAX_ERRORS) {
                overlay.style.display = 'block';
                errorMsg.textContent = `Unable to scan the QR code. Please make sure the QR code is visible and try again.`;
                Swal.fire({
                    icon: 'error',
                    title: 'Scan Error',
                    text: 'Unable to scan the QR code. Please ensure it is clearly visible and try again.',
                });
                errorCount = 0; // Reset the error count after showing the warning
            } else {
                overlay.style.display = 'block';
                errorMsg.textContent = `Scanning error: ${errorMessage}. Please adjust the QR code and try again.`;
            }

            setTimeout(() => {
                overlay.style.display = 'none'; // Hide the overlay after the interval
                errorMsg.textContent = ''; // Clear the error message
                errorCount = 0; // Reset the error count after the interval
            }, ERROR_INTERVAL);
        }

        function connectToDevice(decodedText) {
            console.log(`Connecting to device with info: ${decodedText}`);
            // Add your connection logic here

            // Show success alert and redirect to dashboard.php
            Swal.fire({
                icon: 'success',
                title: 'Connected Successfully!',
                timer: 2000,
                showConfirmButton: false
            }).then(() => {
                window.location.href = 'home.php';
            });
        }

        const html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", { 
                fps: 10, 
                qrbox: 250,
                supportedScanTypes: [Html5QrcodeScanType.SCAN_TYPE_CAMERA]
            }
        );

        html5QrcodeScanner.render(onScanSuccess, onScanError);
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Searching...</title>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <div class="container">
        <div class="data">
           <h1>CONNECTING DEVICE</h1>
           <p>Searching Devices...</p>
        </div>
        <div class="card">
            <div class="circle">
                <div id="devicesList" class="devices-list"></div>
            </div>
            <div class="dot"></div>
            <div class="dot2"></div>
        </div>
        <button id="scanBtn" style="
            border-radius: 20px;
            border: 1px solid #FF7D29;
            background-color: #FF7D29;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;">Scan for Devices</button>
        <div id="loading" class="hidden">Scanning...</div>
        <button id="qrBtn" style="
            border-radius: 20px;
            border: 1px solid #FF7D29;
            background-color: #FF7D29;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 60px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;">Scan QR Code</button>
    </div>

    <script>
        document.getElementById('scanBtn').addEventListener('click', function() {
    const loadingElement = document.getElementById('loading');
    const devicesList = document.getElementById('devicesList');
    
    loadingElement.classList.remove('hidden');
    devicesList.innerHTML = '';
    
    // Simulate a delay to mimic the scanning process
    setTimeout(() => {
        loadingElement.classList.add('hidden');
        
        // Simulate sample device data
        const sampleDevices = [
            '192.168.1.101',
            '192.168.1.102',
            '192.168.1.103',
            '192.168.1.104',
            '192.168.1.105'
        ];
        
        if (sampleDevices.length > 0) {
            const circleRadius = 100; // Radius of the circle in pixels
            const centerX = 100; // Center X coordinate of the circle
            const centerY = 100; // Center Y coordinate of the circle
            
            sampleDevices.forEach((device, index) => {
                const deviceItem = document.createElement('div');
                deviceItem.className = 'device';

                // Calculate position for each device
                const angle = (index / sampleDevices.length) * 2 * Math.PI;
                const x = centerX + circleRadius * Math.cos(angle) - 15; // Subtract half the width of the icon to center it
                const y = centerY + circleRadius * Math.sin(angle) - 15; // Subtract half the height of the icon to center it

                deviceItem.style.position = 'absolute';
                deviceItem.style.left = `${x}px`;
                deviceItem.style.top = `${y}px`;
                
                // Add click event listener
                deviceItem.addEventListener('click', () => {
                    Swal.fire({
                        title: "CONNECTED SUCCESSFULLY!",
                        text: `Connected to device ${device}`,
                        icon: "success"
                    }).then(() => {
                        window.location.href = '../webpages/home.php';
                    });
                });

                devicesList.appendChild(deviceItem);
            });
        } else {
            devicesList.innerHTML = '<p>No devices found.</p>';
        }
    }, 2000); // Simulate a 2-second scan delay
});

    </script>
    <script>
        document.getElementById('qrBtn').addEventListener('click', function() {
            window.location.href = '../webpages/scan_qr.php';
        });
    </script>
</body>
</html>

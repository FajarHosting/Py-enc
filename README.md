<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redeem Code</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #1d1f20;
            color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #2a2d2e;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            text-align: center;
            max-width: 400px;
            width: 100%;
        }
        h1 {
            color: #76c7c0;
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #5c6061;
            background-color: #3b3f40;
            color: #f0f0f0;
        }
        button {
            padding: 10px 20px;
            background-color: #76c7c0;
            color: #1d1f20;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #64b0a9;
        }
        .notification {
            display: none;
            background-color: #1d1f20;
            color: #76c7c0;
            border: 1px solid #76c7c0;
            border-radius: 8px;
            padding: 20px;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            z-index: 10;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.7);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Redeem Code by FAJAR</h1>
        <input type="text" id="redeemCode" placeholder="Masukkan kode redeem">
        <button onclick="redeem()">Redeem</button>
        <div class="notification" id="notification"></div>
    </div>

    <script>
        const validCode = 'GRATISANbyFAJAR';
        const downloadLink = 'https://www.mediafire.com/file/ejds7hkq1f1avze/AIMLOCK+90%.7z/file';

        function redeem() {
            const code = document.getElementById('redeemCode').value;
            const notification = document.getElementById('notification');

            if (code === validCode) {
                notification.style.display = 'block';
                notification.innerHTML = 'SELAMAT❗❗ ANDA MENDAPATKAN FILE GRATISAN DARI CODE INI DAN ANDA AKAN MENDAPATKAN NYA DALAM HITUNGAN 25 DETIK TETAP LAH DI WEBSITE INI, TOLONG BANTU FOLLOW TIKTOK rerezz_hosting';
                setTimeout(() => {
                    window.location.href = downloadLink;
                }, 25000);
            } else {
                alert('Kode salah!');
            }
        }
    </script>
</body>
</html>

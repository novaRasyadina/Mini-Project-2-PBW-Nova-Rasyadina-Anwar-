    <?php
    $host = 'localhost';
    $db   = 'portfolio_nova';
    $user = 'root';
    $pass = '';

    $conn = new mysqli($host, $user, $pass, $db);

    if ($conn->connect_error) {
    die('Koneksi gagal: ' . $conn->connect_error);
    }

    $conn->set_charset('utf8mb4'); // ← ganti dari utf8 ke utf8mb4
    ?>
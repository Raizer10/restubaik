<?php
    // Judul halaman
    $title = "Video Autoplay Website";
    // Link video lokal atau dari internet
    $videoSrc = "wer.mp4"; // Ganti dengan URL jika dari internet
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #000;
        }
        video {
            width: 80%;
            max-width: 800px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <video autoplay muted loop>
        <source src="<?php echo $videoSrc; ?>" type="video/mp4">
        Browser Anda tidak mendukung pemutaran video.
    </video>
</body>
</html>

<?php
include 'koneksi.php'; // file koneksi ke database
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="script.js" defer></script>
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
</head>

<?php include 'navbar.php'; ?>

<body>
    <section id="home" class="home">
        <div class="home-content">
            <h1>Hi, I'm <span>Yusi Meilany</span></h1>
            <h3 class="typing-text">Informatics engineering student<span></span></h3>
            <p>I have an interest in frontend development and am learning to create aesthetic and functional websites.</p>
        </div>
    </section>

    <section id="gallery">
        <h2>Gallery</h2>
        <div class="gallery-horizontal">
            <figure><img src="images/foto1.jpg" width="150" height="200" alt="Foto 1"></figure>
            <figure><img src="images/foto2.jpg" width="150" height="200" alt="Foto 2"></figure>
            <figure><img src="images/foto3.jpg" width="150" height="200" alt="Foto 3"></figure>
            <figure><img src="images/foto4.jpg" width="150" height="200" alt="Foto 4"></figure>
        </div>
    </section>

    <section id="blog">
        <h2>Blog</h2>
        <?php
        $query = "SELECT * FROM blog ORDER BY date DESC";
        $result = mysqli_query($conn, $query) or die("Query gagal: " . mysqli_error($conn));

        while ($row = mysqli_fetch_assoc($result)) {
            echo '<article>';
            echo '<img src="' . $row['image_url'] . '" alt="Gambar Artikel" width="250">';
            echo '<h3>' . $row['title'] . '</h3>';
            echo '<p><strong>Date :</strong> ' . date("d F Y", strtotime($row['date'])) . '</p>';
            echo '<p>' . $row['content'] . '</p>';
            echo '<a href="' . $row['read_more_url'] . '" target="_blank">Read more</a>';
            echo '</article>';
        }
        ?>
    </section>

<body>  
    <section id="contact" class="contact">
        <h2>Contact</h2>
        <div class="contact-info">
            <p><i class="fas fa-envelope"></i> <a href="mailto:yusimeilany@gmail.com">yusimeilany@gmail.com</a></p>
            <p><i class="fab fa-instagram"></i> <a href="https://instagram.com/yusikendekallo_" target="_blank">@yusikendekallo_</a></p>
        </div>


        <!-- Form menggunakan method POST dan dikirim ke contact_process.php -->
        <form action="contact_process.php" method="POST">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <textarea id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
            <button type="submit">Send</button>
        </form>
    </section>
</body>
</html>
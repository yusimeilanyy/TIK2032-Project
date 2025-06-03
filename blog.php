<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "portofolio";

error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data blog dari database
$result = $conn->query("SELECT * FROM blog ORDER BY date DESC");
if (!$result) {
    die("Query gagal: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Blog</title>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="blog.css" />
</head>


<body>
<?php include 'navbar.php'; ?>
    <section id="blog">
        <h2>Blog</h2>
        <p>Notes can’t hug you, but they sure know how to comfort</p>

        <?php while ($row = $result->fetch_assoc()) : ?>
            <article>
                <img src="<?= htmlspecialchars($row['image_url']) ?>" alt="Gambar Artikel" width="250" />
                <h3><?= htmlspecialchars($row['title']) ?></h3>
                <p><strong>Date :</strong> <?= date('d F Y', strtotime($row['date'])) ?></p>
                <p><?= htmlspecialchars($row['content']) ?></p>
                <a href="<?= htmlspecialchars($row['read_more_url']) ?>" target="_blank">Read more</a>
            </article>
        <?php endwhile; ?>
    </section>
</body>
</html>

<?php $conn->close(); ?>

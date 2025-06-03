<?php
// Koneksi ke database
$host = "localhost";
$dbname = "portofolio";
$username = "root";
$password = ""; // sesuaikan password

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Ambil data gallery
    $stmt = $pdo->prepare("SELECT * FROM gallery");
    $stmt->execute();
    $photos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Gallery</title>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="gallery.css" />
</head>

<body>

<?php include 'navbar.php'; ?>

<section id="gallery">
    <h2>Gallery</h2>
    <p>Photos don’t talk, but they sure have a lot to say</p>
    <div class="gallery-horizontal">
        <?php foreach ($photos as $photo): ?>
            <figure>
                <img src="<?= htmlspecialchars($photo['image']) ?>" width="150" height="200" alt="<?= htmlspecialchars($photo['alt_text']) ?>" />
                <figcaption><?= htmlspecialchars($photo['caption']) ?></figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
</section>

</body>
</html>

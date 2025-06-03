<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="navbar.css" />
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body><!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<?php include 'navbar.php'; ?>

<body>  
    <section id="contact" class="contact">
        <h2>Contact</h2>
        <p>Messages don’t have hands, but they reach hearts</p>

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
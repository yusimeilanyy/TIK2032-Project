<?php session_start(); $name = $_SESSION['name'] ?? 'dear'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Message Sent 🎀</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <div class="thank-you-box">
    <h1>Message Received 💌</h1>
    <p>
      Thank you, <?= htmlspecialchars($name) ?>!<br />
      I’ll read it while sipping tea and smiling<br />
      <br>Stay cute and kind 𖹭.ᐟ
    </p>
  </div>

</body>
</html>
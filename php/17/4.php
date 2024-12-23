<?php
session_start();
$cookieName = "hasVisited";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $userName = $_POST['name'] ?? '';
    $_SESSION['userName'] = $userName;
    setcookie($cookieName, $userName, time() + (30 * 24 * 60 * 60));
}
$userName = $_SESSION['userName'] ?? ($_COOKIE[$cookieName] ?? null);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <?php if ($userName): ?>
        <?php if (isset($_COOKIE[$cookieName])): ?>
            <p>Welcome back, <?php echo htmlspecialchars($userName); ?>! It’s great to see you again!</p>
        <?php else: ?>
            <p>Hello, <?php echo htmlspecialchars($userName); ?>! Nice to meet you!</p>
        <?php endif; ?>
    <?php else: ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name" required>
            <input type="submit" value="Submit">
        </form>
    <?php endif; ?>
</body>
</html>

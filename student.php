<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>welcome to my page</title>
    <link rel="stylesheet" href="student.css">

    <body>


<div class="container">
    <h1>School Cookie Clicker</h1>
    <div class="cookie-container">
        <img src="images/student.png" alt="Cookie" class="cookie">
        <p class="counter">Cookies: <span id="cookie-count">0</span></p>
    </div>
    <p class="click-counter">Clicks: <span id="click-count">0</span></p>
    <button onclick="clickCookie()">Click Me!</button>
    <div class="upgrades">
        <button onclick="buyUpgrade(5, 100)">Upgrade x5 (Cost: 100)</button>
        <button onclick="buyUpgrade(50, 2000)">Upgrade x50 (Cost: 2000)</button>
        <button onclick="buyUpgrade(100, 10000)">Upgrade x100 (Cost: 10000)</button>
    </div>
</div>
<div class="cta">
    <a href="contact.php" class="button">Get Started</a>
</div>

<script src="student.js"></script>

</body>
</html>
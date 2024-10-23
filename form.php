<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Username Form</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <div class="form-container">
        <form id="usernameForm" method="POST" action="server.php">
            <h1>กรอกชื่อผู้ใช้</h1>
            <div class="input-group">
                <label for="username">ชื่อผู้ใช้</label>
                <input type="text" id="username" name="username" placeholder="คุณชื่ออะไรครับ?">
            </div>
            <button type="submit">Submit</button>
            <p id="error-message"></p>
        </form>
    </div>
    <script src="js/form.js"></script>
</body>
</html>

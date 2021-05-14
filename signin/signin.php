<!DOCTYPE html>
<html>
<head>
    <title>Signin</title>
    <link rel="stylesheet" type="text/css" href="signin.css">

</head>
<body>
<div class = "register">
    <h2>Register Here</h2>
    <form method="post" id="register" action="reg.php">
        <div class="input-group">
            <div class="input-box">
            <input type="text" name="name" class="name"
               placeholder="Enter your Full name" required><br><br>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
                <input type="text" name="uname" class="name" placeholder="Enter your username" required><br><br>
            </div>
        </div>

        <div class="input-group">

                <select id="ph" name="phonecode" style="width: 60px; padding: 0%;">
                    <option>+91</option>option>
                    <option>+99</option>option>
                    <option>+10</option>option>
                    <option>+30</option>option>
                    <option>+20</option>option>
                </select>
            <div class="input-box">

                <input type="number" name="mblno" id="num"
               placeholder="Enter your mobile number" required><br><br>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
                <input type="email" name="email" class="name"
               placeholder="Enter your Email" required><br><br>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
                <input type="password" name="pass" class="name"
               placeholder="Enter your password" required><br><br>
            </div>
        </div>

        <div class="input-group">
            <div class="input-box">
                <textarea name="address" id="" cols="30" rows="10" class="name" placeholder="Enter address"  required></textarea>&nbsp;&nbsp;<br/><br><br>
            </div>
        </div>

        <input type="submit" value="Submit" class="sub1" name="sign" >
        <input type="reset" value="Reset" class="sub1">
        <input type="button" value="Cancel" class="sub1" id="cancel" onclick="window.location.href='signin.php'">
    </form>
</div>
</body>
</html>

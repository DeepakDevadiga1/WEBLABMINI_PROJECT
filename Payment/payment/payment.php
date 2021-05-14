<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Payment</title>
    <link href="payment.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src=
                    "https://smtpjs.com/v3/smtp.js">
    </script>

    <script type="text/javascript">
    function amount()
    {
      var x=0
       while(x<=50)
       {
         x=Math.floor((Math.random() * 100) + 1);
       }
       document.getElementById('money').innerHTML='Amount:'+x;
    }
        function sendEmail() {
         
             Email.send({
                Host: "smtp.gmail.com",
                Username: "webproject7lab@gmail.com",
                Password: "webproject@4231",
                To: 'deepakdevadiga188@gmail.com',
                From: "webproject7lab@gmail.com",
                Subject: "City Transist",
                Body: "<h1 style='color: green'>City Transist</h1>" +
                     "<img src=\"../Services/images/courier.jpg\"/>"+
                    "<h2>Thank for joining with us!</h2>",
            })
                .then(function (message) {
                    alert("mail sent successfully")
                });

             Email.send({
                Host: "smtp.gmail.com",
                Username: "webproject7lab@gmail.com",
                Password: "webproject@4231",
                To: 'deepakdevadiga188@gmail.com',
                From: "webproject7lab@gmail.com",
                Subject: "City Transist",
                Body: "<h1 style='color: green'> City Transist</h1>" +
                    "<h2>Location:</h2>"+
                    "<h3>Kaikamba To Nantoor</h3>"+
                    "<h3>Mobile No:9632476906</h3>"+
                    "<h2>Thank for joining with us!</h2>",
            })
                .then(function (message) {
                    alert("mail sent successfully");
                     window.location.href="../../main/main.php";
                });
           
        }
         
   
    </script>



</head>
<body>
    <div class="wrapper">
        <h2>Payment Form</h2>
        <form  method="POST">
            <h4>Account</h4>
            <div class="input-group">
                <div class="input-box">
                    <input type="text" placeholder="Full Name" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <input type="email"
                    placeholder="Email Adress"
                    required class="name">
                    <i class="fa fa-envelope icon"></i>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                    <h4>Date of Birth</h4>
                    <input type="text" placeholder="DD" class="dob">
                    <input type="text" placeholder="MM" class="dob">
                    <input type="text" placeholder="YYYY" class="dob">
                </div>
                <div class="input-box">
                    <h4>Gender</h4>
                    <input type="radio" id="b1" name="gender" checked class="radio">
                    <label for="b1">Male</label>
                    <input type="radio" id="b2" name="gender" class="radio">
                    <label for="b2">Female</label>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <h4>Payment Details</h4>
                </div>
            </div>
            <div class="input-group">
                <div class="input-box">
                   <label id="money" style="background-color: black;color: white;" onclick="amount()" >click here</label>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card CVC" required class="name">
                    <i class="fa fa-user icon"></i>
                </div>
            </div>

            <div class="input-group">
                <div class="input-box">
                    <input type="tel" placeholder="Card Number" required class="name">
                    <i class="fa fa-credit-card icon"></i>
                </div>
            </div>


            <div class="input-group">
                <div class="input-box">
                    <button type="submit" onclick="sendEmail()">PAY NOW</button>


            </div>

                </div>
        </form>
    </div>
</body>
</html>

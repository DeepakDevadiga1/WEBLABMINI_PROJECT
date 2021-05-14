<!DOCTYPE html>
<html>
<head>
   <title>HOME</title>
   <link rel="stylesheet" type="text/css" href="main.css">
   <script type="text/javascript">
    function redirect()
    {
    window.location.href= "../Login/login.php";
    
    }
    </script>
</head>
<body>

   <header>
      <nav>
         <div class="logo">
            <h1>City Transist</h1>
         </div>
         <div class="menu">
            <a href="../Home/home1.php">Home</a>
            <a href="../Cart/cart.php">My Orders</a>
            <a href="../service/service.php">Service</a>
            <a href="#">About Us</a>
         </div>
      </nav>

         <main>
            <section>
               <h2>Welcome to City Transist</h2>
               <h3>Get your works done</h3>
               <div class="button">
                  <button onclick="redirect()">Signin To Continue</button>
               </div>
            </section>
         </main>

   </header>
</body>
</html>
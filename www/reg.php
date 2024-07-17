 <?php
require"head.php";
?>

<body>

<form action="/action_page.php">
    <div class="container">
        <br>
        <br>

        <div class="error">Kiritilayotgan malumotlar to'g'riligiga ishonch hosil qiling! </div>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Emailingizni kiriting" name="email" id="email" required>

        <label for="psw"><b>Parol</b></label>
        <input type="password" placeholder="Parolingizni kiriting" name="psw" id="psw" required>

        <label for="psw-repeat"><b>Parolni takrorlang</b></label>
        <input type="password" placeholder="Parolni takrorlang" name="psw-repeat" id="psw-repeat" required>
        <hr>
        <input type="checkbox"> Men <a href="#">Oferta va xavfsizlik</a> bilan tanishib chiqdim.

        <button type="submit" class="registerbtn">Ro'yxatdan o'tish</button>
    </div>

    <div class="container signin">
        <p>Akkountingiz bormi? <a href="#">Kirish</a>.</p>
    </div>
</form>
</body>
<?php

          require"foot.php";
          ?>
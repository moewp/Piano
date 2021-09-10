<!DOCTYPE html>
<html>

<head>
    <title>Pianist Palace</title>
    <link rel="stylesheet" type="text/css" href="anjay.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.slider').bxSlider({
                auto: true
            });
        });
    </script>
    <script type="text/javascript">
        function love() {
            document.getElementById("intro").style.color = "blue"
        }

        function normal() {
            document.getElementById("intro").style.color = "black"
        }

        function warnarandom4() {
            var warna = new Array();
            warna[0] = '#8E44AD';
            warna[1] = '#3498DB';
            warna[2] = '#95A5A6';
            warna[3] = '#1ABC9C';
            warna[4] = '#F7DC6F';
            warna[5] = '#EC7063';
            warna[6] = '#82cf97';
            warna[7] = '#F5B041';
            document.getElementById("footer").style.backgroundColor = warna[Math.floor(Math.random() * 8)];
        }

        function normalbg() {
            document.getElementById("footer").style.backgroundColor = "#333333"
        }

        function warnarandom1() {
            var warna = new Array();
            warna[0] = '#8E44AD';
            warna[1] = '#3498DB';
            warna[2] = '#95A5A6';
            warna[3] = '#1ABC9C';
            warna[4] = '#F7DC6F';
            warna[5] = '#EC7063';
            warna[6] = '#82cf97';
            warna[7] = '#F5B041';
            document.getElementById("kotak1").style.backgroundColor = warna[Math.floor(Math.random() * 8)];
        }

        function normalbg1() {
            document.getElementById("kotak1").style.backgroundColor = "#d6d8db"
        }

        function warnarandom2() {
            var warna = new Array();
            warna[0] = '#8E44AD';
            warna[1] = '#3498DB';
            warna[2] = '#95A5A6';
            warna[3] = '#1ABC9C';
            warna[4] = '#F7DC6F';
            warna[5] = '#EC7063';
            warna[6] = '#82cf97';
            warna[7] = '#F5B041';
            document.getElementById("kotak2").style.backgroundColor = warna[Math.floor(Math.random() * 8)];
        }

        function normalbg2() {
            document.getElementById("kotak2").style.backgroundColor = "#d6d8db"
        }

        function warnarandom3() {
            var warna = new Array();
            warna[0] = '#8E44AD';
            warna[1] = '#3498DB';
            warna[2] = '#95A5A6';
            warna[3] = '#1ABC9C';
            warna[4] = '#F7DC6F';
            warna[5] = '#EC7063';
            warna[6] = '#82cf97';
            warna[7] = '#F5B041';
            document.getElementById("kotak3").style.backgroundColor = warna[Math.floor(Math.random() * 8)];
        }

        function normalbg3() {
            document.getElementById("kotak3").style.backgroundColor = "#d6d8db"
        }
    </script>
</head>

<body>
    <div class="container">

        <!--menu-->
		<div class="menu">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="partiture.php">Partiture</a></li>
                <li><a href="produk.php">Market</a></li>
                <li><a href="abotus.php">About Us</a></li>
                <li><a href="regis.php">Registration</a></li>
                <li><a href="login.php">Logout</a></li>
            </ul>
        </div>

        <!-- Slider -->
        <div class="slider">
            <img src="banner.jpg" width="980px" height="500px">
            <img src="banner1.jpg" width="980px" height="500px">
        </div>

        <!-- Services -->
        <div class="services">
            <h1 id="intro" onmouseover="love()" onmouseout="normal()">Love Classical Piano!</h1>
            <p style="font-size: 30px; margin-top: 20px;"> <strong>"Works of art make rules; rules do not make works of
                    art."</strong>
                <br> -Claude Debussy</p>
        </div>

        <!-- Banner -->
        <div class="banner">
            <div class="box" id="kotak1" onmouseover="warnarandom1()" onmouseout="normalbg1()">
                <img src="sharing.png" alt="Sharing image">
                <h4>Sharing</h4>
                <p>Berbagilah pengetahuanmu seputar piano.</p>
            </div>
            <div class="box" id="kotak2" onmouseover="warnarandom2()" onmouseout="normalbg2()">
                <img src="simbol.png" alt="G Symbol">
                <h4>Partiture</h4>
                <p>Temukan lagu kesukaanmu dan mainkan.</p>
            </div>
            <div class="box" id="kotak3" onmouseover="warnarandom3()" onmouseout="normalbg3()">
                <img src="chat.png" alt="Community image">
                <h4>Community</h4>
                <p>Bergaulah dengan sesama pencinta piano.</p>
            </div>
        </div>

        <!-- Footer -->
        <div id="footer" onmouseover="warnarandom4()" onmouseout="normalbg()">
            <p>Copyright &copy; 2019</p>
        </div>
    </div>
</body>

</html>
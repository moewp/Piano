<!DOCTYPE html>
<html>

<head>
    <title>About Pianist Palace</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
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

        <div class="services">
            <h2>About Us</h2>
            <p style="font-size:30px;">Website ini merupakan tempat untuk membantu teman-teman pencinta piano untuk
                berbagi berbagai hal
                mengenai piano. Mulai dari partitur, pengetahuan umum, cara bermain piano, dan lainnya.</p>
        </div>

        <!-- Contact -->
        <br>
        <h2>Visit Us</h2>
        <div class="contactus">
            <div class="contact1">
                <h2>Contact Us</h2>
                <br>
                <img src="fb1.png" width="30px" height="30px"><a href="facebook.com" style="text-decoration: none;display: block; color: black;">
                    <b>Pianist Palace</b>
                </a>
                <br>
                <br>
                <img src="twt.png" width="30px" height="30px"><a href="twitter.com" style="text-decoration: none;display: block;color: black;">
                    <b>@PianistPalace</b>
                </a>
                <br>
                <br>
                <img src="inst.png" width="30px" height="30px"><a href="instagram.com" style="text-decoration: none;display: block;color: black;">
                    <b>PianistPalace</b>
                </a>
                <br>
                <br>
                <img src="wa.png" width="40px" height="40px"><a href="" style="text-decoration: none;display: block;color: black;">
                    <b>081123123876</b>
                </a>
                <br>
                <br>
                <img src="call.png" width="30px" height="30px"><a href="instagram.com" style="text-decoration: none;display: block;color: black;">
                    <b>085333090123</b>
                </a>
            </div>
            <div class="contact2">
                <div class="location">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.3409653298054!2d106.88528122920579!3d-6.3469075668279675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ece7b56913c3%3A0xd030b1e4515cb27!2sJalan%20Praji%20No.80%2C%20RT.2%2FRW.1%2C%20Klp.%20Dua%20Wetan%2C%20Kec.%20Ciracas%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013730!5e0!3m2!1sid!2sid!4v1566742346219!5m2!1sid!2sid"
                        width="630" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
                <br>
                <div class="form">
                    <form>
                        <table cellspacing="">
                            <tr>
                                <td><input type="text" name="nama" placeholder="Nama Depan"></td>
                                <td><input type="text" name="nama" placeholder="Nama Belakang"></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input type="email" name="email" placeholder="Email Anda"></td>
                            </tr>
                        </table>
                        <textarea rows="10" placeholder="Pesan"></textarea>
                        <br>
                        <input type="submit" name="kirim" value="Kirim">
                    </form>
                </div>
            </div>
        </div>


        <!-- Footer -->
        <div class="footer">
            <p>Copyright &copy; 2019</p>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
        <script type="text/javascript" src="js/function.js"></script>
        <title>Rekomendasi Sistem</title>
        <script type="text/javascript">
            function show(event){
                if (event == 'border_lingkaran_os') {
                    var one = 'border_lingkaran_merk';
                    var two = 'border_lingkaran_harga';
                } else if (event == 'border_lingkaran_merk'){
                    var one = 'border_lingkaran_os';
                    var two = 'border_lingkaran_harga';
                } else {
                    var one = 'border_lingkaran_os';
                    var two = 'border_lingkaran_merk';
                };
                var one = document.getElementById(one);
                one.style.visibility = 'hidden';
                var two = document.getElementById(two);
                two.style.visibility = 'hidden';
                setTimeout(function(){
                    var three = document.getElementById(event);
                    three.style.visibility = 'visible';}, 1);
                console.log('berhasil');
            }
            function visible(event){
                var three = document.getElementById(event);
                three.style.visibility = 'visible';
            }
            function hide(){
                var one = document.getElementById('border_lingkaran_os');
                one.style.visibility = 'hidden';
                var two = document.getElementById('border_lingkaran_merk');
                two.style.visibility = 'hidden';
                var three = document.getElementById('border_lingkaran_harga');
                three.style.visibility = 'hidden';
            }
        </script>
    </head>
    <body>
        <div id="header">
            <img src="img/left_batik.png" height="120px" id="left_batik" alt="left_batik">
            <img src="img/logo.png" id="logo" alt="logo">
            <div id="atas_span"><span id="semarassistant">SemarAsistant</span></div>
            <img src="img/right_batik.png" height="120px" id="right_batik" alt="right_batik">
        </div>
            
        <div id="border_lingkaran">
            <div id="border2_lingkaran">
                <div class="lingkaran" id="so"><a href="" onmouseover="show('border_lingkaran_os')">Sistem Operasi</a></div>
                <div class="lingkaran"><a href="" onmouseover="show('border_lingkaran_merk')">Merk</a></div>
                <div class="lingkaran"><a href="" onmouseover="hide()">Kamera</a></div>
                <div class="lingkaran"><a href="" onmouseover="hide()">Performance</a></div>
                <div class="lingkaran"><a href="" onmouseover="hide()">Battery Life</a></div>
                <div class="lingkaran"><a href="" onmouseover="hide()">Durability</a></div>
                <div class="lingkaran"><a href="" onmouseover="hide()">Dual SIM</a></div>
                <div class="lingkaran"><a href="" onmouseover="show('border_lingkaran_harga')">Harga</a></div>
            </div>
        </div>

        <div id="border3_lingkaran">
            <div id="border_lingkaran_os">
                <div class="lingkaran"><a href="android.php">Android</a></div>
                <div class="lingkaran"><a href="">iOS</a></div>
                <div class="lingkaran"><a href="">Blackberry</a></div>
                <div class="lingkaran"><a href="">Windows Phone</a></div>
            </div>
            <div id="border_lingkaran_merk">
                <div class="lingkaran"><a href="acer.php">Acer</a></div>
                <div class="lingkaran"><a href="">Advan</a></div>
                <div class="lingkaran"><a href="">Apple</a></div>
                <div class="lingkaran"><a href="">Axioo</a></div>
                <div class="lingkaran"><a href="">Blackberry</a></div>
                <div class="lingkaran"><a href="">Evercross</a></div>
                <div class="lingkaran"><a href="">HTC</a></div>
                <div class="lingkaran"><a href="">Huawei</a></div>
                <div class="lingkaran"><a href="">Imo</a></div>
                <div class="lingkaran"><a href="">Ktouch</a></div>
                <div class="lingkaran"><a href="">LG</a></div>
                <div class="lingkaran"><a href="">Lenovo</a></div>
                <div class="lingkaran"><a href="">Nokia</a></div>
                <div class="lingkaran"><a href="">Oppo</a></div>
                <div class="lingkaran"><a href="">Polytron</a></div>
                <div class="lingkaran"><a href="">Smartfren</a></div>
                <div class="lingkaran"><a href="">Sony</a></div>
                <div class="lingkaran"><a href="">Samsung</a></div>
            </div>
            <div id="border_lingkaran_harga">
                <div class="lingkaran"><a href="bawahsatujuta.php">&lt;1jt</a></div>
                <div class="lingkaran"><a href="">>1jt-2jt</a></div>
                <div class="lingkaran"><a href="">2jt-3jt</a></div>
                <div class="lingkaran"><a href="">4jt-5jt</a></div>
                <div class="lingkaran"><a href="">5jt-6jt</a></div>
                <div class="lingkaran"><a href="">6jt-7jt</a></div>
                <div class="lingkaran"><a href="">&gt;7jt</a></div>
            </div>
        </div>

        <div id="footer">
            <span text-align="center">&copy;SemarAssistant</span>
        </div>
       
    </body>
</html>
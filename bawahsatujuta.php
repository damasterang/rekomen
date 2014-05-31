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
    </head>
    <body>
        <div id="header">
            <img src="img/left_batik.png" height="120px" id="left_batik" alt="left_batik">
            <img src="img/logo.png" id="logo" alt="logo">
            <div id="atas_span"><span id="semarassistant">SemarAsistant</span></div>
            <img src="img/right_batik.png" height="120px" id="right_batik" alt="right_batik">
        </div>
           
          <form action="#" method="post"> 
            <table id="rekomendasi_tabel">

                <tr>
                    <td class="td1">
                        <span class="title_kategori" >OS :</span>
                    </td>
                    <td class="td2">
                        <select name="os" class="kategori_select"> 
                            <option value="">default</option> 
                            <option value="android">Android</option>
                            <option value="ios">iOS</option>
                            <option value="bb">BlackBerry</option>
                            <option value="wp">Windows Phone</option>
                        </select>
                    </td>
                    
                </tr>

                <tr>
                    <td class="td1">
                        <span class="title_kategori">Dual Sim :</span>
                    </td>
                    <td class="td2">
                        <select name="ds" class="kategori_select"> 
                            <option value="">default</option> 
                            <option value="y">Ya</option>
                            <option value="">Tidak</option>
                        </select>
                    </td>
                    
                </tr>

                <tr>
                    <td class="td1">
                        <span class="title_kategori">Memori Internal :</span>
                    </td>
                    <td class="td2">
                        <select name="mi" class="kategori_select"> 
                            <option value="">default</option> 
                            <option value="4gb">4 GB</option>
                            <option value="8gb">8 GB</option>
                            <option value="16gb">16 GB</option>
                            <option value="32gb">32 GB</option>
                            <option value="64gb">64 GB</option>
                        </select>
                    </td>
                    
                </tr>

                <tr>
                    <td class="td1">
                        <span class="title_kategori">Memori Ekternal :</span>
                    </td>
                    <td class="td2">
                        <select name="me" class="kategori_select"> 
                            <option value="">default</option> 
                            <option value="32gb">32 GB</option>
                            <option value="64gb">64 GB</option>
                        </select>
                    </td>
                    
                </tr>

                <tr>
                    <td class="td1">
                        <span class="title_kategori">RAM :</span>
                    </td>
                    <td class="td2">
                        <select name="ram" class="kategori_select"> 
                            <option value="">default</option> 
                            <option value="<1gb">&lt;1 GB</option>
                            <option value="1gb-2gb">1 GB - 2 GB</option>
                            <option value=">=3gb">&gt;=3 GB</option>
                        </select>
                    </td>
                    
                </tr>

                <tr>
                    <td class="td1">
                        <span class="title_kategori">Core Processor :</span>
                    </td>
                    <td class="td2">
                        <select name="cp" class="kategori_select"> 
                            <option value="">default</option> 
                            <option value="1core">Single core</option>
                            <option value="2core">Dual Core</option>
                            <option value="4core">Quad Core</option>
                            <option value="8core">Octa Core</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td class="td2">
                        <select name="lyr" class="kategori_select"> 
                            <option value="">default</option> 
                            <option value="3-5inc">3" - 5"</option>
                            <option value=">5inc">&gt;5"</option>
                        </select>
                    </td>
                    <td class="td3">
                        <span class="title_kategori">: Layar</span>
                    </td>
                </tr>
                
                <tr>
                  <td class="td2">
                      <select name="kp" class="kategori_select"> 
                          <option value="">default</option> 
                          <option value="4mp">&lt;4 MP</option>
                          <option value="4-8mp">4 MP - 8 MP</option>
                          <option value="9-13mp">9 MP - 13 MP</option>
                          <option value=">13gb">&gt;13 MP</option>
                      </select>
                  </td>
                  <td class="td3">
                      <span class="title_kategori">: Kamera Primer</span>
                  </td>
                </tr>

                <tr>
                  <td class="td2">
                        <select name="ks" class="kategori_select"> 
                            <option value="">default</option> 
                            <option value="vga">vga</option>
                            <option value="1-3mp">1 MP - 3 MP</option>
                            <option value=">3mp">&gt;3 MP</option>
                        </select>
                    </td>
                    <td class="td3">
                        <span class="title_kategori">: Kamera Sekunder</span>
                    </td>
                </tr>

                <tr>
                  <td class="td2">
                        <select name="bat" class="kategori_select"> 
                            <option value="">default</option> 
                            <option value="4gb">1000 mAh - 2000 mAh</option>
                            <option value="8gb">2001 mAh - 3000 mAh</option>
                            <option value="16gb">3001 mAh = 4000 mAh</option>
                            <option value="32gb">&gt; 4000 mAh</option>
                        </select>
                    </td>
                    <td class="td3">
                        <span class="title_kategori">: Baterai</span>
                    </td>
                </tr>

                <tr>
                  <td class="td2">
                        <select name="hrg" class="kategori_select" disabled> 
                            <option value="">default</option> 
                            <option value="<1jt">&lt;1.000.000</option>
                            <option value="1-2jt">1.000.0001 - 2.000.000</option>
                            <option value="2jt-3jtb">2.000.001 = 3.000.000</option>
                            <option value="3jt-4jtb">3.000.001 = 4.000.000</option>
                            <option value="4jt-5jtb">4.000.001 = 5.000.000</option>
                            <option value="5jt-6jtb">5.000.001 = 6.000.000</option>
                            <option value="6jt-7jtb">6.000.001 = 7.000.000</option>
                            <option value=">7jt">&gt;7.000.000</option>
                        </select>
                    </td>
                    <td class="td3">
                        <span class="title_kategori">: Harga</span>
                    </td>
                </tr>

                <tr>
                    <td colspan="4" id="tombol_submit_rekomendasi">
                        <input type="submit" value="submit">
                    </td>
                </tr>
            </table>
        </form>
        <div id="kontent1">
          <div id="kontent2"></div>
        </div>
        <div id="footer">
            <span text-align="center">&copy;SemarAssistant</span>
        </div>
       
    </body>
</html>
<link rel="stylesheet" href="asset/pre.css">
<h1>Cara Menampilkan Data Dari Database</h1>
    <p><ol>
    <li>Sebelumnya kamu harus mempelajari Cara input data terlebih dahulu <a href="route.php?p=carainputdenganphp">Cara input dengan PHP</a></li>
    <li>Tambahkan kode berikut pada <b>index.php</b> untuk mengakses data dan letakan diantara diantara h1 dan form, seperti gambar dibawah ini.</li>
    <pre>&#x3C;h4&#x3E;&#x3C;a href=&#x22;data.php&#x22;&#x3E;Data&#x3C;/a&#x3E;&#x3C;/h4&#x3E;</pre><br>
    <img src="https://i.ibb.co/C1697J5/image.png" style="width:100%;height:100%;">
    <br>
    <br>
    <li>Tampilan pada index.php seperti dibawah ini</li>
    <img src="https://i.ibb.co/4KWJzGp/image.png" style="width:100%;height:100%;">
    <li>Tambahkan file dengan nama <b>data.php</b> dan tambahkan kode dibawah kedalam file data.php yang terdapat pada folder CaraInputData </li>
    <pre>
&#x3C;!doctype html&#x3E;
&#x3C;html lang=&#x22;en&#x22;&#x3E;
&#x3C;head&#x3E;
    &#x3C;meta charset=&#x22;utf-8&#x22;&#x3E;
    &#x3C;meta name=&#x22;viewport&#x22; content=&#x22;width=device-width, initial-scale=1&#x22;&#x3E;
    &#x3C;title&#x3E;Data Barang&#x3C;/title&#x3E;
    &#x3C;link href=&#x22;https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css&#x22; rel=&#x22;stylesheet&#x22; integrity=&#x22;sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi&#x22; crossorigin=&#x22;anonymous&#x22;&#x3E;
&#x3C;/head&#x3E;
  &#x3C;div class=&#x22;container&#x22;&#x3E;
  &#x3C;table class=&#x22;table&#x22;&#x3E;
  &#x3C;thead&#x3E;
    &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;No&#x3C;/th&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;Nama Barang&#x3C;/th&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;Harga&#x3C;/th&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;Deskripsi&#x3C;/th&#x3E;    
    &#x3C;/tr&#x3E; 
  &#x3C;/thead&#x3E;
  &#x3C;tbody&#x3E;
    &#x3C;?php 
          include (&#x27;koneksi.php&#x27;); 
          $conn=mysqli_query($conn,&#x22;select * from barang&#x22;);
          $no=1;
          while($h=mysqli_fetch_array($conn)){
    ?&#x3E;
    &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;row&#x22;&#x3E;&#x3C;?=$no++;?&#x3E;&#x3C;/th&#x3E;
      &#x3C;td&#x3E;&#x3C;?=$h[&#x27;nm_brg&#x27;];?&#x3E;&#x3C;/td&#x3E;
      &#x3C;td&#x3E;&#x3C;?=$h[&#x27;hrg&#x27;];?&#x3E;&#x3C;/td&#x3E;
      &#x3C;td&#x3E;&#x3C;?=$h[&#x27;desk&#x27;];?&#x3E;&#x3C;/td&#x3E;
    &#x3C;/tr&#x3E;
    &#x3C;?php
       }
    ?&#x3E;
  &#x3C;/tbody&#x3E;
  &#x3C;/table&#x3E;   
  &#x3C;/div&#x3E; 
&#x3C;/body&#x3E;
&#x3C;/html&#x3E;
</pre><br>
<li>hasilnya data.php seperti dibawah ini</li>
<img src="https://i.ibb.co/dgC2V4q/image.png" style="width:100%;height:100%;">
    </ol></p>
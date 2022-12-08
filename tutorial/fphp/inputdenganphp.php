<link rel="stylesheet" href="asset/pre.css">
<h1>Cara Input dengan PHP</h1>
                <p><ol>
                <li>Langkah pertama jalankan localhost kamu, buatlah sebuah database dengan nama <b>inputdata</b></li>
                <li>Salin Kode untuk membuat tabel barang</li>
                <pre>CREATE TABLE `inputdata`.`barang` (`id_brg` INT(10) NOT NULL AUTO_INCREMENT , `nm_brg` VARCHAR(50) NOT NULL , `hrg` INT(12) NOT NULL , `desk` VARCHAR(100) NOT NULL , PRIMARY KEY (`id_brg`)) ENGINE = InnoDB;</pre>
                <br>
                <li>klik pada bagian SQL, pastekan kodenya dan kirim</li>
                <img src="https://i.ibb.co/9nJZzJx/create-database-and-table.png" style="width:80%;height:50%;">
                <br>
                <br>
                <li>Buatlah sebuah folder dengan nama <b>CaraInputData</b></li>
                <li>Didalam folder tersebut buatlah folder dengan nama <b>koneksi.php</b>, masukan kode dibawah ini dalam file koneksi.php</li>
<pre>
&#x3C;?php
$servername = &#x22;localhost&#x22;;
$username = &#x22;root&#x22;;
$password = &#x22;&#x22;;
$db = &#x22;inputdata&#x22;;

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn-&#x3E;connect_error) {
  die(&#x22;Connection failed: &#x22; . $conn-&#x3E;connect_error);
}
?&#x3E;
</pre>
<br>
<li>Buatlah file <b>index.php</b> dan masukan kode dibawah ini ke dalam file index.php</li>
<pre>
&#x3C;!doctype html&#x3E;
    &#x3C;html lang=&#x22;en&#x22;&#x3E;
    &#x3C;head&#x3E;
        &#x3C;meta charset=&#x22;utf-8&#x22;&#x3E;
        &#x3C;meta name=&#x22;viewport&#x22; content=&#x22;width=device-width, initial-scale=1&#x22;&#x3E;
        &#x3C;title&#x3E;Input barang dengan php&#x3C;/title&#x3E;
        &#x3C;link href=&#x22;https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css&#x22; rel=&#x22;stylesheet&#x22; integrity=&#x22;sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi&#x22; crossorigin=&#x22;anonymous&#x22;&#x3E;
    &#x3C;/head&#x3E;
    &#x3C;body&#x3E;
        &#x3C;div class=&#x22;container&#x22;&#x3E;
        &#x3C;h1&#x3E;Cara Input dengan PHP&#x3C;/h1&#x3E;
            &#x3C;form method=&#x22;POST&#x22; action=&#x22;prosesinput.php&#x22; &#x3E;
                &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label for=&#x22;exampleFormControlInput1&#x22; class=&#x22;form-label&#x22;&#x3E;Nama Barang&#x3C;/label&#x3E;
                &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; name=&#x22;nm_brg&#x22; placeholder=&#x22;Nama Barang&#x22;&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label for=&#x22;exampleFormControlInput1&#x22; class=&#x22;form-label&#x22;&#x3E;Harga barang&#x3C;/label&#x3E;
                &#x3C;input type=&#x22;number&#x22; class=&#x22;form-control&#x22; name=&#x22;hrg&#x22; placeholder=&#x22;Harga barang&#x22;&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                &#x3C;label for=&#x22;exampleFormControlTextarea1&#x22; class=&#x22;form-label&#x22;&#x3E;Deskripsi&#x3C;/label&#x3E;
                &#x3C;textarea class=&#x22;form-control&#x22; name=&#x22;desk&#x22;&#x3E;&#x3C;/textarea&#x3E;
                &#x3C;/div&#x3E;
                &#x3C;input type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22; name=&#x22;simpan&#x22; value=&#x22;SIMPAN&#x22;&#x3E;
            &#x3C;/form&#x3E;
        &#x3C;/div&#x3E;
    &#x3C;/body&#x3E;
    &#x3C;/html&#x3E;
</pre>
<br>
<li>buatlah file dengan nama <b>prosesinput.php</b> dan masukan kode dibawah dalam file prosesinput.php</li>
<pre>
&#x3C;?php
include(&#x27;koneksi.php&#x27;);
if (isset($_POST[&#x27;simpan&#x27;])){
&#x9;$nama_barang=$_POST[&#x27;nm_brg&#x27;];
&#x9;$harga=$_POST[&#x27;hrg&#x27;];
&#x9;$deskripsi=$_POST[&#x27;desk&#x27;];

&#x9;$conn=mysqli_query($conn,&#x22;INSERT INTO barang VALUES
&#x9;(null,&#x27;$nama_barang&#x27;,&#x27;$harga&#x27;,&#x27;$deskripsi&#x27;)&#x22;);
&#x9;if($conn){
&#x9;&#x9;echo&#x22;&#x3C;script&#x3E;alert(&#x27;DATA BERHASIL DISIMPAN!&#x27;);&#x3C;/script&#x3E;&#x22;;
        header(&#x22;Location:index.php&#x22;);
&#x9;}else{
&#x9;&#x9;echo&#x22;&#x3C;script&#x3E;alert(&#x27;DATA GAGAL DISIMPAN!&#x27;);&#x3C;/script&#x3E;&#x22;;
&#x9;}
}
?&#x3E;
</pre>
<br>
<li>Buka Browser kamu, akses pada <b>localhost/carainputdata</b> dan hasilnya</li>
<img src="https://i.ibb.co/FnR9FDj/form.png" style="width:80%;height:50%;">

<br>
<li>Lakukan input data dan silahkan kamu cek tabel barang pada database inputdata, hasil yang saya input seperti dibawah ini</li>
<img src="https://i.ibb.co/8XPLZFg/image.png" style="width:80%;height:50%;">
<br>
<br>
<a onclick="window.open('//eltontry.com/c7i21hniy?key=45a3df06096b97bc085ee8e81ac4c556')" href="https://download937.mediafire.com/h89qbcbzgm6g/g8lveu0nqp3dndm/CaraInputData.rar"><button class="btn btn-info btn-sm"><i>Download</i></button></a>
</ol>
</p>
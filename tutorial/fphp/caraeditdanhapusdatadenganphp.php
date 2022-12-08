<link rel="stylesheet" href="asset/pre.css">
<h1>Cara Edit dan Hapus Data dengan PHP</h1>
<p><ol>
    <li>Untuk membuat edit dengan php kamu harus melihat latihan sebelumnya <a href="route.php?p=carainputdenganphp">Cara input dengan PHP</a> dan <a href="route.php?p=caramenampilkandatadaridatabase">Cara menampilkan data dari database</a></li>
    <li>Langkah pertama yang kamu lakukan adalah dengan copy code dibawah ini dan pastekan didalam tbody pada pada file <b>data.php</b></li>
    <pre>
&#x3C;td&#x3E;
&#x3C;a href=&#x22;edit.php?id=&#x3C;?=$h[&#x27;id_brg&#x27;]?&#x3E;&#x22;&#x3E;&#x3C;button class=&#x22;btn btn-info btn-sm&#x22;&#x3E;&#x3C;i&#x3E; EDIT&#x3C;/i&#x3E;&#x3C;/button&#x3E;&#x3C;/a&#x3E;
&#x3C;a onclick=&#x22;return confirm(&#x27;apakah anda yakin? &#x27;);&#x22; href=&#x22;hapus.php?id=&#x3C;?=$h[&#x27;id_brg&#x27;] ?&#x3E;&#x22;&#x3E;&#x3C;button class=&#x22;btn btn-danger btn-sm&#x22;&#x3E;&#x3C;i&#x3E;HAPUS&#x3C;/i&#x3E;&#x3C;/button&#x3E;&#x3C;/a&#x3E;
&#x3C;/td&#x3E;</pre>
<img src="https://i.ibb.co/8X3KXnZ/image.png" style="width:100%;height:100%;">
<br>
<br>
<li>Perintah ini digunakan untuk mengalihkan ke halaman tambah data dan letakan didalam file <b>data.php</b> </li>
<pre>&#x3C;h4&#x3E;&#x3C;a href=&#x22;index.php&#x22;&#x3E;+Data&#x3C;/a&#x3E;&#x3C;/h4&#x3E;</pre>
<img src="https://i.ibb.co/2PXxRYH/image.png" style="width:100%;height:100%;">
<br>
<br>
<li>dan hasilnya pada data.php seperti ini</li>
<img src="https://i.ibb.co/WFs09Rw/image.png" style="width:100%;height:100%;">
<li>Sekarang kamu dapat membuat file baru dengan nama <b>edit.php</b> dan copykan kode dibawah ini kedalam file edit.php</li>
<pre>&#x3C;!doctype html&#x3E;
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
            &#x3C;h4&#x3E;&#x3C;a href=&#x22;data.php&#x22;&#x3E;Data&#x3C;/a&#x3E;&#x3C;/h4&#x3E;
            
            &#x3C;?php
            include (&#x27;koneksi.php&#x27;);
            $id = $_GET[&#x27;id&#x27;];
            $conn = mysqli_query($conn,&#x22;select * from barang where id_brg=&#x27;$id&#x27;&#x22;);
            while($h = mysqli_fetch_array($conn)){
            ?&#x3E;            
            &#x3C;form method=&#x22;POST&#x22; action=&#x22;prosesedit.php&#x22; &#x3E;
                    &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                    &#x3C;label for=&#x22;exampleFormControlInput1&#x22; class=&#x22;form-label&#x22;&#x3E;Nama Barang&#x3C;/label&#x3E;
                    &#x3C;input type=&#x22;hidden&#x22; class=&#x22;form-control&#x22; name=&#x22;id_brg&#x22; value=&#x22;&#x3C;?=$h[&#x27;id_brg&#x27;];?&#x3E;&#x22;&#x3E;
                    &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; name=&#x22;nm_brg&#x22; value=&#x22;&#x3C;?=$h[&#x27;nm_brg&#x27;];?&#x3E;&#x22;&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                    &#x3C;label for=&#x22;exampleFormControlInput1&#x22; class=&#x22;form-label&#x22;&#x3E;Harga barang&#x3C;/label&#x3E;
                    &#x3C;input type=&#x22;number&#x22; class=&#x22;form-control&#x22; name=&#x22;hrg&#x22; value=&#x22;&#x3C;?=$h[&#x27;hrg&#x27;];?&#x3E;&#x22;&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;div class=&#x22;mb-3&#x22;&#x3E;
                    &#x3C;label for=&#x22;exampleFormControlTextarea1&#x22; class=&#x22;form-label&#x22;&#x3E;Deskripsi&#x3C;/label&#x3E;
                    &#x3C;textarea class=&#x22;form-control&#x22; name=&#x22;desk&#x22;&#x3E;&#x3C;?=$h[&#x27;desk&#x27;];?&#x3E;&#x3C;/textarea&#x3E;
                    &#x3C;/div&#x3E;
                    &#x3C;input type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22; value=&#x22;EDIT&#x22;&#x3E;
                &#x3C;/form&#x3E;
                &#x3C;?php
                 }
                 ?&#x3E;
            &#x3C;/div&#x3E;
        &#x3C;/body&#x3E;
&#x3C;/html&#x3E;
</pre>
<br>
<li>jangan lupa buat file <b>prosesedit.php</b> seperti biasanya masukan kode dibawah ini </li>
<pre>&#x3C;?php 
// koneksi database
include (&#x27;koneksi.php&#x27;);

// menangkap data yang di kirim dari form
$id = $_POST[&#x27;id_brg&#x27;];
$nama_barang = $_POST[&#x27;nm_brg&#x27;];
$harga = $_POST[&#x27;hrg&#x27;];
$deskripsi = $_POST[&#x27;desk&#x27;];

// update data ke database
mysqli_query($conn,&#x22;update barang set nm_brg=&#x27;$nama_barang&#x27;, hrg=&#x27;$harga&#x27;, desk=&#x27;$deskripsi&#x27; where id_brg=&#x27;$id&#x27;&#x22;);
echo &#x22;&#x3C;script&#x3E;window.location.href=&#x27;data.php&#x27;&#x3C;/script&#x3E;&#x22;;
?&#x3E;</pre>
<li>sehingga ketika kamu klik edit seperti pada poin nomor 4 maka hasil pada edit.php seperti ini
<img src="https://i.ibb.co/r5vcVbZ/image.png" style="width:100%;height:100%;">
<li>Oke sekarang kita berhasil untuk membuat edit data barang.</li>
<li>Sekarang kita akan membuat <b>hapus.php</b></li>
<pre>
&#x3C;?php 
// koneksi database
include (&#x27;koneksi.php&#x27;);
// menangkap data id yang di kirim dari url
$id = $_GET[&#x27;id&#x27;]; 
// menghapus data dari database
mysqli_query($conn,&#x22;delete from barang where id_brg=&#x27;$id&#x27;&#x22;);
echo &#x22;&#x3C;script&#x3E;window.location.href=&#x27;data.php&#x27;&#x3C;/script&#x3E;&#x22;;
?&#x3E;
</pre>
<li>oke deh selesai</li>
</li>
</ol></p>
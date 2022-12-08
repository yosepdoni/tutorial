<script>
    // 1. tangkap element dengan class menu
const menu = document.querySelector(".navbar-nav");

// 2. jika element dengan class menu diklik
menu.addEventListener('click', function(e) {
    // 3. maka ambil element apa yang diklik oleh user
    const targetMenu = e.target;

    // 4. lalu cek, jika element itu adalah link dengan class menu__link
    if(targetMenu.classList.contains('nav-link')) {
            
        // 5. maka ambil menu link yang aktif
        const menuLinkActive = document.querySelector("ul li a.active");

        // 6. lalu cek, Jika menu link active ada dan menu yang di klik user adalah menu yang tidak sama dengan menu yang aktif, (cara cek-nya yaitu dengan membandingkan value attribute href-nya)
        if(menuLinkActive !== null && targetMenu.getAttribute('href') !== menuLinkActive.getAttribute('href')) {

            // 7. maka hapus class active pada menu yang sedang aktif
            menuLinkActive.classList.remove('active');
        }

        // 8. terakhir tambahkan class active pada menu yang di klik oleh user
        targetMenu.classList.add('active');
    }
});
  </script>
  <style>
    ul.navbar-nav li a.active {
    background-color: green;
    }
    .dropdown:hover > .dropdown-menu, .dropend:hover > .dropdown-menu{display:block;}
    .navbar{
    list-style-type: none;
    /* overflow: hidden; */
    top: 0;
    left:0;
    right:0;
    width: 100%;
    position: fixed;
    z-index: 0;

}
</style>   
    <nav class="navbar navbar-expand-lg navbar-dark" style="background:#000000B9;">
      <div class="container-fluid">
        <a class="navbar-brand" href="r.php?p=home">
        <img src="https://img.icons8.com/color/2x/material-ui.png" alt="" width="40" height="30" class="d-inline-block">
        Tingbers
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="r.php?p=ZiqoqoqoqUao">Tutorial </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="r.php?p=eMny1">Earn Money </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Download Aplikasi
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">DATABASE</a></li>
                <li><a class="dropdown-item" onclick="window.open('//eltontry.com/bum0sebt?key=240f75055615b4972ea5a6007a7e523a')" href="https://downloadsapachefriends.global.ssl.fastly.net/8.1.10/xampp-windows-x64-8.1.10-0-VS16-installer.exe?from_af=true" value="xampp_2022">Xampp terbaru 2022</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">MICROSOFT OFFICE WORD</a></li>
                 <li><a class="dropdown-item" onclick="window.open('//www.profitablegatetocontent.com/bum0sebt?key=240f75055615b4972ea5a6007a7e523a')" href="https://www.nesabamedia.com/download-microsoft-office-2010">2010 full version</a></li>
                 <li class="btn-group dropend">
                  <a class="dropdown-item dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    2013
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" onclick="window.open('//eltontry.com/jtu9iamhn?key=91c18512ef98596d734fa33a3ba69ad1')" href="https://download2262.mediafire.com/bb9o2sin5wvg/wx9yln0shxbi1hc/msopis2013_instllx64july2022.rar">2013 64 bit</a></li>
                    <li><a class="dropdown-item" onclick="window.open('//eltontry.com/jtu9iamhn?key=91c18512ef98596d734fa33a3ba69ad1')" href="https://download2287.mediafire.com/fvv738x0tzig/xb5sweyun7z8459/msopis2013_instllx86july2022.rar">2013 32 bit</a></li>
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <a class="nav-link active" aria-current="page" href="#" style="color:#B2B2B2;">Hosting</a>
        </div>
      </div>
    </nav>
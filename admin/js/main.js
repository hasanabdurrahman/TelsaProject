document.addEventListener('DOMContentLoaded', function () {
  var dropdownButtons = document.querySelectorAll('.btn-menu-sidebar');
  var submenuItems = document.querySelectorAll('.sub-menu');

  dropdownButtons.forEach(function (dropdownButton, index) {
    dropdownButton.addEventListener('click', function () {
      // Menghapus kelas 'active' dari semua tombol dropdown
      dropdownButtons.forEach(function (button) {
        button.classList.remove('active');
      });

      // Menambahkan kelas 'active' pada tombol yang sedang diklik
      dropdownButton.classList.add('active');

      // Menutup dropdown yang sedang terbuka (jika ada)
      document.querySelectorAll('.dropdown-menu').forEach(function (menu) {
        menu.classList.remove('show');
      });

      // Mencari dropdown-menu yang sesuai dengan indeks tombol yang diklik
      var dropdownMenu = dropdownButton.nextElementSibling;

      // Menambahkan kelas 'show' pada dropdown-menu yang sesuai
      if (dropdownMenu) {
        dropdownMenu.classList.toggle('show');
      }
    });
  });

  // Tambahkan event listener untuk setiap submenu
  submenuItems.forEach(function (submenuItem) {
    submenuItem.addEventListener('click', function () {
      // Menutup dropdown saat submenu diklik
      var openDropdown = this.closest('.dropdown');
      if (openDropdown) {
        openDropdown.classList.remove('show');
      }

      // Tambahkan logika untuk mengubah konten col-9 sesuai dengan submenu yang diklik
      var clickedSubmenu = this.getAttribute('href').substring(1); // Ambil nama submenu dari href
      loadContent(clickedSubmenu); // Panggil fungsi untuk memuat konten
    });
  });

  // Fungsi untuk memuat konten sesuai dengan submenu yang diklik
  function loadContent(submenu) {
    // Lakukan AJAX atau modifikasi DOM untuk mengganti konten col-9
    // Contoh sederhana: Ganti teks col-9 dengan nama submenu
    document.querySelector('.col-9').innerHTML = 'Content for ' + submenu;
  }
});

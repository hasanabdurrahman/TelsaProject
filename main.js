$(document).ready(function () {
  // Menangani hover pada elemen dengan class "img-fluid1"
  $(".img-fluid1").hover(
    function () {
      // Mengganti gambar saat dihover
      $(this).attr("src", "image/cart-menu2.png");
    },
    function () {
      // Mengembalikan gambar ke gambar awal saat hover dihentikan
      $(this).attr("src", "image/cart-menu.png");
    }
  );

  // Menangani hover pada elemen dengan class "img-fluid2"
  $(".img-fluid2").hover(
    function () {
      // Mengganti gambar saat dihover
      $(this).attr("src", "image/help-menu2.png");
    },
    function () {
      // Mengembalikan gambar ke gambar awal saat hover dihentikan
      $(this).attr("src", "image/help-menu.png");
    }
  );

  // Menangani hover pada elemen dengan class "img-fluid3"
  $(".img-fluid3").hover(
    function () {
      // Mengganti gambar saat dihover
      $(this).attr("src", "image/sign-in-menu2.png");
    },
    function () {
      // Mengembalikan gambar ke gambar awal saat hover dihentikan
      $(this).attr("src", "image/sign-in-menu.png");
    }
  );

  // Menangani hover pada elemen dengan class "img-fluid4"
  $(".img-fluid4").hover(
    function () {
      // Mengganti gambar saat dihover
      $(this).attr("src", "image/sign-up-menu2.png");
    },
    function () {
      // Mengembalikan gambar ke gambar awal saat hover dihentikan
      $(this).attr("src", "image/sign-up-menu.png");
    }
  );

  // Menangani hover pada elemen dengan class "img-fluid5"
  $(".img-fluid5").hover(
    function () {
      // Mengganti gambar saat dihover
      $(this).attr("src", "image/back2.png");
    },
    function () {
      // Mengembalikan gambar ke gambar awal saat hover dihentikan
      $(this).attr("src", "image/back.png");
    }
  );

  $(".faq-toggle").click(function(){
    var faqContainer = $(this).closest('.faq'); // Temukan kontainer FAQ yang terkait dengan tombol yang diklik
    var faqText = faqContainer.find('.faq-text'); // Cari elemen FAQ-text dalam kontainer FAQ yang sama

    faqText.toggle(); // Ganti status tampilan FAQ-text (tampilkan/sembunyikan)

    // Ganti ikon chevron sesuai dengan status FAQ-text
    if (faqText.is(":visible")) {
        faqContainer.find('.fa-chevron-up').show();
        faqContainer.find('.fa-chevron-down').hide();
    } else {
        faqContainer.find('.fa-chevron-up').hide();
        faqContainer.find('.fa-chevron-down').show();
    }
});
});

const profileImage = document.querySelector(".nav-profil1 img");
const logoutPopup = document.getElementById("logout-popup");
const cancelLogoutButton = document.getElementById("cancel-logout");

// Menampilkan pop-up menu logout saat gambar profil diklik
profileImage.addEventListener("click", function () {
  logoutPopup.style.display = "block";
});

// Menutup pop-up menu logout saat tombol "Batal" diklik
cancelLogoutButton.addEventListener("click", function () {
  logoutPopup.style.display = "none";
});

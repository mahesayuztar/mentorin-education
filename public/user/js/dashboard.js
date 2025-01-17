// history.pushState(null, null, document.URL);
// window.addEventListener('popstate', function () {
//     history.pushState(null, null, document.URL);
// });

// setInterval(function(){
//   window.location.reload();
//   window.stop();
// },100);

// Mendapatkan semua elemen menu
const allSideMenu = document.querySelectorAll('.navigation li a');

allSideMenu.forEach(item => {
    item.addEventListener('click', function () {
        // Menghapus class "hovered" dari semua elemen menu
        allSideMenu.forEach(menu => {
            menu.classList.remove('hovered');
        });
        // Menambahkan kembali class "hovered" pada elemen yang diklik
        this.classList.add('hovered');
    });
});

// list.forEach((item) => item.addEventListener("mouseover", activeLink));

// menu toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
};

history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});

// var delay = 100;
// var isClicked = false;
// var button = document.getElementById("tombol_submit");
// button.addEventListener("click", function() {
//     delay = 9999999;
//     isClicked = !isClicked;
// });
// setInterval(function(){
//     if(isClicked==false){
//         window.location.reload();
//         window.stop();
//     }   
// },delay);

var now = notedTime*(notedTime<600)+599*(notedTime>=600);
var nowKolom = Math.ceil((600-now)/60);
var nowRoll = now%60;

function showNextQuestion(questionNumber) {
    // Mendapatkan semua elemen div soal
    var allQuestions = document.querySelectorAll('.soal-pointer');

    // Menyembunyikan semua div soal
    allQuestions.forEach(function(question) {
        question.style.display = 'none';
    });

    // Menampilkan div soal yang sesuai dengan nomor soal yang diklik
    var currentQuestion = document.getElementById('soal' + questionNumber);
    if (currentQuestion==null){
        var currentQuestion = document.getElementById('soal' + (questionNumber-1));
    }
    if (currentQuestion) {
        currentQuestion.style.display = 'block';
    }
    nowKolom = Math.ceil(parseInt(questionNumber)/50);
    if(Math.ceil(parseInt(questionNumber)/50)!=Math.ceil(parseInt(questionNumber-1)/50)){
        Swal.fire({
          title: 'Kolom '+(nowKolom-1)+' berakhir',
          text: "Soal pada kolom "+(nowKolom-1)+' sudah habis. Tes dilanjutkan kepada kolom selanjutnya.',
          icon: 'warning',
          timer: 2000,
          position: 'top',
          confirmButtonColor: '#3085d6'
        });
        nowRoll = 60;
        now = now - now%60;
        updateWaktu();
    }
}

function showPickQuestion(questionNumber, jawaban){
    document.getElementById('answer' + (questionNumber-1) + jawaban).checked = true;
    showNextQuestion(questionNumber);
    if(questionNumber>"500"){
        document.getElementById('tombol_submit').click();
    }
}


function updateWaktu() {
    var menit = (nowRoll-(nowRoll%60))/60;
    var detik = nowRoll%60;
    

    // Tambahkan nol di depan jika angka kurang dari 10
    menit = (menit < 10 ? "0" : "") + menit;
    detik = (detik < 10 ? "0" : "") + detik;

    var waktuString = menit + ":" + detik;
    var allTimers = document.querySelectorAll('.timer-pointer');

    // Menyembunyikan semua div soal
    allTimers.forEach(function(timer) {
        timer.innerHTML = waktuString;
    });
    nowRoll-=1;
    now-=1;
    if(now<0){
        document.getElementById('tombol_submit').click();
    }
}

function resetWaktu() {
    
    var detik = (nowRoll)%60;
    // Reset div waktu setiap menit
    if (detik == -1) {
        Swal.fire({
          title: 'Waktu kolom habis',
          text: "Waktu pada kolom "+(nowKolom-1)+' sudah habis. Tes dilanjutkan kepada kolom selanjutnya.',
          icon: 'warning',
          timer: 2000,
          position: 'top',
          confirmButtonColor: '#3085d6'
        });
        nowRoll = 60;
        updateWaktu();
        // document.getElementById("timer").innerHTML = "00:00:00";
        nowKolom+=1;
        showNextQuestion(50*(nowKolom-1)+1);
    }
}

// Update waktu setiap detik
setInterval(updateWaktu, 1000);

// Reset waktu setiap menit
setInterval(resetWaktu, 1000);

setTimeout(function () {
    Swal.fire({
      title: 'Waktu sudah habis',
      text: "Waktu untuk tes ini sudah berakhir. Konfirmasi untuk melihat rekap hasil pengerjaan tes.",
      icon: 'warning',
      allowOutsideClick: false,
      allowEscapeKey: false,
      allowEnterKey: false,
      confirmButtonColor: '#3085d6'
    }).then((result)=>{
        if(result.value){
            var button = document.getElementById("tombol_submit");

            button.click();
        }
    });
},now*1000);
history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});

// var delay = 100;
// var isClicked = false;
// var button = document.getElementById("dummy_button");
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


var manyDone = 0;

///////////////////////////////////////////////////////////////////////////
// Supaya jawaban tidak hilang ketika reload

function setSessionItem(name, value) {
    var mySession;
    try {
        mySession = JSON.parse(localStorage.getItem('mySession'));
    } catch (e) {
        console.log(e);
        mySession = {};
    }

    mySession[name] = value;

    mySession = JSON.stringify(mySession);

    localStorage.setItem('mySession', mySession);
}

function getSessionItem(name) {
    var mySession = localStroage.getItem('mySession');
    if (mySession) {
        try {
            mySession = JSON.stringify(mySession);
            return mySession[name];
        } catch (e) {
            console.log(e);
        }
    }
}

function restoreSession(data) {
    for (var x in data) {
        //use saved data to set values as needed
        console.log(x, data[x]);
    }
}

window.addEventListener('load', function(e) {
    var mySession = localStorage.getItem('mySession');
    if (mySession) {
        try {
            mySession = JSON.parse(localStorage.getItem('mySession'));
        } catch (e) {
            console.log(e);
            mySession = {};
        }
        restoreSession(mySession);
    } else {
        localStorage.setItem('mySession', '{}');
    }

    setSessionItem('foo', Date.now()); //should change each time

    if (!mySession.bar) {
        setSessionItem('bar', Date.now()); //should not change on refresh
    }
}, false);

///////////////////////////////////////////////////////////////////////////

function showQuestion(questionNumber) {
    // Mendapatkan semua elemen div soal
    var allQuestions = document.querySelectorAll('.soal-pointer');

    // Menyembunyikan semua div soal
    allQuestions.forEach(function(question) {
        question.style.display = 'none';
    });

    var allButtons = document.querySelectorAll('.btn-number');
    allButtons.forEach(function(button) {
        button.classList.remove('active');
    });

    // Menampilkan div soal yang sesuai dengan nomor soal yang diklik
    var currentQuestion = document.getElementById('soal' + questionNumber);
    var currentButton = document.getElementById('button' + questionNumber);
    if (currentQuestion) {
        currentQuestion.style.display = 'block';
        currentButton.classList.add('active');
    }
}

function previousQuestion() {
    var i = 0;
    var presentQuestion = 0;
    var allQuestions = document.querySelectorAll('.soal-pointer');
    allQuestions.forEach(function(question) {
        var computedStyle = window.getComputedStyle(question);
        var displayAttribute = computedStyle.getPropertyValue('display');
        if(displayAttribute=="block") presentQuestion = i;
        i++;
    });
    if (presentQuestion > 0) {
        presentQuestion--;
        showQuestion(presentQuestion);
    }
}

function nextQuestion(max) {
    var i = 0;
    var presentQuestion = 0;
    var allQuestions = document.querySelectorAll('.soal-pointer');
    allQuestions.forEach(function(question) {
        var computedStyle = window.getComputedStyle(question);
        var displayAttribute = computedStyle.getPropertyValue('display');
        if(displayAttribute=="block") presentQuestion = i;
        i++;
    });
    if (presentQuestion < max) {
        presentQuestion++;
        showQuestion(presentQuestion);
    }
}

function markAsDoubt() {
    var i = 0;
    var presentQuestion = 0;
    var isDoubt = false;
    var allQuestions = document.querySelectorAll('.soal-pointer');
    allQuestions.forEach(function(question) {
        var computedStyle = window.getComputedStyle(question);
        var displayAttribute = computedStyle.getPropertyValue('display');
        if(displayAttribute=="block"){
            presentQuestion = i;
        }
        i++;
    });
    var currentButton = document.getElementById('button' + presentQuestion);
    isDoubt = currentButton.classList.contains('flagged');
    currentButton.classList.toggle('flagged', !isDoubt);
    if(currentButton.classList.contains('isDone')==true){
        currentButton.classList.remove('flagged');
        currentButton.classList.remove('isDone');
        currentButton.classList.add('done');
    }
    else if(currentButton.classList.contains('done')==true){
        currentButton.classList.remove('done');
        currentButton.classList.add('flagged');
        currentButton.classList.add('isDone');
    }
}

function markedAsDone(questionNumber){
    var currentButton = document.getElementById('button' + (questionNumber-1));
    var radioButtons = document.getElementsByName("answer"+questionNumber);

      // Loop through each radio button
      for (var i = 0; i < radioButtons.length; i++) {
        // Check if the current radio button is checked
        if (radioButtons[i].checked == true && currentButton.classList.contains('done')==false) {
          manyDone+=1;
          // If you want to break the loop after finding the checked radio button
          // you can use `break;` statement here
        }
      }
    if(currentButton.classList.contains('flagged')==true){
        currentButton.classList.add('isDone');
    }
    else{
        currentButton.classList.add('done');
    }
    
    
    var progressBar = document.getElementById('progress');
    progressBar.value=Math.floor(manyDone/manySoals*100);
}

function startTimer() {
    var startTimeClient = startTime; // Waktu mulai dalam milidetik
    var count = 0;
    // Fungsi yang akan dipanggil setiap detik untuk memperbarui timer
    function updateTimer() {
        count++;
        var elapsedTime = startTimeClient-count; // Waktu yang telah berlalu sejak waktu mulai dalam milidetik
        var hours = Math.floor(elapsedTime / (60 * 60)); // Hitung jam
        var minutes = Math.floor((elapsedTime % (60 * 60)) / (60)); // Hitung menit
        var seconds = Math.floor((elapsedTime % 60)); // Hitung detik

        // Format waktu dalam format HH:MM:SS
        var formattedTime = pad(hours) + ':' + pad(minutes) + ':' + pad(seconds);

        // Perbarui elemen timer dengan waktu yang telah diformat
        document.getElementById('timer').innerText = formattedTime;
    }

    // Fungsi untuk menambah nol di depan angka jika angka < 10
    function pad(num) {
        return (num < 10) ? '0' + num : num;
    }

    // Panggil updateTimer setiap detik
    setInterval(updateTimer, 1000);
}

function showSubmit(){
    var allButtons = document.querySelectorAll('.btn-number');
    var isDoubt = false;
    allButtons.forEach(function(button) {
        if(button.classList.contains('flagged')){
            isDoubt = true;
        }
    });
    Swal.fire({
          title: 'Apakah anda yakin untuk menyelesaikan tes?',
          text: "Silakan periksa kembali setiap soal dengan teliti dan cermat. Untuk menyelesaikan tes, silahkan memilih OK.",
          icon: 'question',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'OK',
          cancelButtonText: 'Kembali',
          reverseButtons: true
        }).then((result) => {
          if (result.value) {
            if(isDoubt){
                Swal.fire({
                      title: 'Anda memiliki soal dengan label ragu-ragu',
                      text: "Silakan periksa kembali setiap soal dengan teliti dan cermat. Untuk menyelesaikan tes, silahkan memilih OK.",
                      icon: 'warning',
                      showCancelButton: true,
                      confirmButtonColor: '#3085d6',
                      cancelButtonColor: '#d33',
                      confirmButtonText: 'OK',
                      cancelButtonText: 'Kembali',
                      reverseButtons: true
                    }).then((result) => {
                      if (result.value) {
                        document.getElementById('tombol_submit').click();
                    }
                });
            }
            else document.getElementById('tombol_submit').click();
        }
    });
}

// Panggil fungsi startTimer untuk memulai timer
startTimer();
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
},startTime*1000);

// function checkJawaban(jawabanNumber, soalNumber){
//     document.getElementById(soalNumber+jawabanNumber).checked = true;
// }


// var buttons = document.querySelectorAll('#questionNumbers button');
//         buttons.forEach(button => {
//             button.addEventListener('click', function() {
//                 buttons.forEach(btn => btn.classList.remove('active')); // Hapus kelas 'active' dari semua tombol
//                 this.classList.add('active'); // Tambahkan kelas 'active' ke tombol yang diklik

//                 var questionNumber = this.value;
//                 var soal_i = soalData[questionNumber].isi_soal;
//                 // Lakukan permintaan AJAX untuk memuat soal yang dipilih
//                 // dan perbarui bagian soal pada halaman tanpa me-refresh
//                 document.getElementById('questionText').innerText = 'Soal ' + questionNumber;
//             });
//         });

//         // Variabel untuk menyimpan nomor soal saat ini
//         var currentQuestion = 1;

//         // Variabel untuk menyimpan status ragu-ragu
//         var isDoubt = false;

//         // Fungsi untuk memperbarui tampilan soal berdasarkan nomor soal saat ini
//         function updateQuestion() {
//             // Lakukan permintaan AJAX untuk memuat soal yang dipilih
//             // dan perbarui bagian soal pada halaman tanpa me-refresh
//             document.getElementById('questionText').innerText = 'Soal ' + currentQuestion;
//         }

//         // Fungsi untuk navigasi ke soal sebelumnya
//         function previousQuestion() {
//             if (currentQuestion > 1) {
//                 currentQuestion--;
//                 updateQuestion();
//                 // Hapus kelas 'active' dari tombol sekarang
//                 document.querySelector('#questionNumbers .btn.active').classList.remove('active');
//                 // Tambahkan kelas 'active' ke tombol sebelumnya
//                 document.querySelector('#questionNumbers .btn[value="' + currentQuestion + '"]').classList.add('active');
//             }
//         }

//         // Fungsi untuk navigasi ke soal selanjutnya
//         function nextQuestion() {
//             // Anda dapat menyesuaikan logika ini sesuai dengan jumlah total soal
//             if (currentQuestion < 3) {
//                 currentQuestion++;
//                 updateQuestion();
//                 // Hapus kelas 'active' dari tombol sekarang
//                 document.querySelector('#questionNumbers .btn.active').classList.remove('active');
//                 // Tambahkan kelas 'active' ke tombol selanjutnya
//                 document.querySelector('#questionNumbers .btn[value="' + currentQuestion + '"]').classList.add('active');
//             }
//         }

//         function markAsDoubt() {
//             isDoubt = !isDoubt; // Toggle status ragu-ragu
//             var activeButton = document.querySelector('#questionNumbers .btn.active');
//             activeButton.classList.toggle('flagged', isDoubt);
//         }

//         // Tambahkan kelas 'active' ke tombol nomor soal pertama saat halaman dimuat
//         document.querySelector('#questionNumbers .btn[value="1"]').classList.add('active');

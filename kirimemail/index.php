<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <title>Kirim email</title>
 <link rel="stylesheet" type="text/css" href="index.css">
 <link rel="icon" type="image/png" href="KirimEmail.png" >
</head>

<body>





<div class="container-form-utama">
<div class="email-container">
<p class="email-tujuan">To: <a href="mailto:emailtujuan@gmail.com" id="emailLink">emailtujuan@gmail.com</a></p>
      
      <hr class="custom-hr">
      <p class="tanggal" id="tanggalText"></p>
        <div class="header">
        <h1 id="judulEmail">Judul Email</h1>
        </div>

        <div class="content">
            <p style="word-wrap: break-word; margin-right: 0px;">Welcome to our service. Here's some important information for you. 
              Untuk mendesain email dengan lebar 600px dan panjang yang fleksibel, kita akan menggunakan HTML dan CSS inline, karena ini adalah praktik terbaik dalam desain email untuk memastikan kompatibilitas lintas klien email. Email HTML biasanya dibangun dengan tabel untuk mengontrol layout, karena dukungan CSS yang lebih kompleks seringkali terbatas di klien email.
              Ketika Anda mengirim kode HTML melalui email atau platform lain, beberapa email client atau platform email dapat memproses kode HTML dengan cara yang berbeda. Ini dapat menyebabkan beberapa masalah dengan tampilan HTML, terutama jika email client atau platform tersebut memiliki kebijakan keamanan yang membatasi penggunaan CSS atau JavaScript tertentu.
            </p>
        </div>

        <div class="lampiran">
  <p style="word-wrap: break-word; margin-right: 0px;">Lampiran:</p>
  <div id="imageAttachments"></div> <!-- Container for image attachments -->
</div>


        <p class="informasi">
            Email ini dikirim oleh <a href="mailto:tangguh880@gmail.com" class="email-link">tangguh880@gmail.com</a>. Anda dapat menghubungi saya melalui email ini jika Anda memiliki pertanyaan atau perlu berkomunikasi dengan saya.
        </p>
        
        <hr>
        <p class="sosmed">social media :</p>
        <div class="icon-container">
            <!-- Tombol Instagram -->
            <a href="https://www.instagram.com/tangguh_s_80?igsh=eDk2YW4xcmoxMXhm" class="icon-button" target="_blank">
                <div class="instagram-logo"></div>
            </a>
        
            <!-- Tombol Twitter -->
            <a href="https://x.com/TANGGUH990?s=09" class="icon-button" target="_blank">
                <div class="twitter-logo"></div>
            </a>
        
            <!-- Tombol YouTube -->
            <a href="https://youtube.com/@Tangguh_Sarwono?si=YPpb5cCzXYHtxZEN" class="icon-button" target="_blank">
                <div class="youtube-logo"></div>
            </a>
        </div>

        <div class="footer">
            © 2024 PHP Mail. All rights reserved.
        </div>

    </div>
</div>



<div class="container-form-kedua">

<div class="container-form">
  <h2>Kirim Email</h2>
  <form method="POST" action="kirim.php" enctype="multipart/form-data"  accept-charset="UTF-8">
    <div class="form-group">
      <input type="text" id="nama" name="nama" placeholder="Nama">
    </div>
    <div class="form-group">
    <input type="email" id="emailInput" name="email" placeholder="Email tujuan" oninput="updateEmail()">
    </div>
    <!-- Tambahkan ini untuk tanggal -->
    <div class="form-group">
    <input type="text" name="tanggal" id="tanggalInput" placeholder="Tanggal" oninput="updateTanggal()">
    </div>
    <!-- Tambahkan ini untuk judul -->
    <div class="form-group">
    <input type="text" name="judul" id="judulInput" placeholder="Judul" oninput="updateJudul()">
    </div>
    <div class="form-group">
      <input type="text" name="subjek" placeholder="Subjek">
    </div>
    <div class="form-group">
      <textarea id="myTextarea" name="pesan" placeholder="Pesan"></textarea>
    </div>




 
    <div class="button-container">
  <!-- Input file dengan kemampuan memilih banyak file, disembunyikan secara default -->
  <input type="file" id="fileInput" name="lampiran[]" multiple style="display: none;" onchange="handleFileSelection()">
  
  <!-- Tombol Lampirkan File -->
  <button type="button" class="attach-button" onclick="document.getElementById('fileInput').click();">
    <ion-icon name="attach-outline"></ion-icon> 
  </button>

  <!-- Tombol Emoji -->
  <button type="button" class="emoji-button" onclick="openEmojiPicker();">
    <ion-icon name="happy-outline"></ion-icon>
  </button>
</div>


<!-- Container untuk Emoji Picker -->
<div id="emojiPicker" class="emoji-picker">
  <!-- Tempat untuk menambahkan emoji-emoji -->
  <span>😀</span> <span>😁</span> <span>😂</span> <!-- Tambahkan lebih banyak emoji sesuai kebutuhan -->
</div>


<!-- Tempat untuk menampilkan informasi file -->
<div id="fileInfo"></div>







    <div class="form-group">
      <input type="submit" name="kirim" value="Kirim">
    </div>
  </form>
</div>


</div>




<div class="space">
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
        <div class="particle"></div>
    </div>

<script>

function openEmojiPicker() {
  var picker = document.getElementById("emojiPicker");
  picker.style.display = picker.style.display === 'none' ? 'block' : 'none'; // Toggle display
}

// Fungsi untuk menangani pemilihan emoji
document.getElementById("emojiPicker").addEventListener('click', function(e) {
  if (e.target.tagName === 'SPAN') {
    var emoji = e.target.textContent;
    var textarea = document.getElementById("myTextarea");
    textarea.value += emoji; // Menambahkan emoji ke textarea
  }
});







var allFiles = []; // Array to store all selected files

function handleFileSelection() {
  var fileInput = document.getElementById('fileInput');
  // Add newly selected files to the allFiles array
  Array.from(fileInput.files).forEach(file => {
    allFiles.push(file);
  });

  displayFileInfo();
}

function displayFileInfo() {
  var fileInfoContainer = document.getElementById('fileInfo');
  fileInfoContainer.innerHTML = ''; // Clear previous content

  var imageContainer = document.getElementById('imageAttachments');
  imageContainer.innerHTML = ''; // Clear previous images

  // Loop through all stored files
  allFiles.forEach((file, index) => {
    var fileDetailContainer = document.createElement('div');
    fileDetailContainer.className = 'file-details-container';

    // Title for each file, starting with "File 1"
    var fileTitle = `<h4 class="file-title">File ${index + 1}</h4>`;

    // File information
    var fileInfo = `<p class="file-details">Name: ${file.name}, Size: ${file.size} bytes, Type: ${file.type || 'Unknown'}</p>`;
    fileDetailContainer.innerHTML = fileTitle + fileInfo;

    // "X" button to remove file
    var deleteButton = document.createElement('span');
    deleteButton.innerHTML = '&#10006;'; // "X" symbol
    deleteButton.className = 'delete-file';
    deleteButton.onclick = function() { deleteFile(index); };
    fileDetailContainer.appendChild(deleteButton);

    // Add file detail container to DOM
    fileInfoContainer.appendChild(fileDetailContainer);

    // Check if the file is an image and display it
    if (file.type.startsWith('image/')) {
      var reader = new FileReader();
      reader.onload = function(e) {
        var img = new Image();
        img.src = e.target.result;
        img.style.maxWidth = '200px'; // Set max width for image
        img.style.maxHeight = '200px'; // Set max height for image
        img.style.marginTop = '10px';
        img.style.marginRight = '10px'
        imageContainer.appendChild(img);
      };
      reader.readAsDataURL(file);
    }
  });
}

function deleteFile(index) {
  // Remove file from the allFiles array
  allFiles.splice(index, 1);

  // Redisplay file information
  displayFileInfo();
}





























document.getElementById('myTextarea').addEventListener('input', function() {
  const inputText = this.value; // Mendapatkan teks dari textarea
  const paragraphs = inputText.split('\n'); // Memisahkan teks berdasarkan baris baru (newline)

  // Mengganti konten dalam div .content dengan paragraf yang dipisahkan
  const contentDiv = document.querySelector('.content');
  contentDiv.innerHTML = ''; // Menghapus konten yang ada sebelumnya

  // Membuat paragraf baru untuk setiap baris dalam textarea
  paragraphs.forEach(function(paragraphText) {
    const paragraph = document.createElement('p');
    paragraph.textContent = paragraphText;
    contentDiv.appendChild(paragraph);
  });
});



function updateJudul() {
        var judul = document.getElementById('judulInput').value;
        document.getElementById('judulEmail').textContent = judul;
    }

window.onload = function() {
        setTanggalSaatIni();
    };

    function setTanggalSaatIni() {
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = today.getMonth(); // Januari adalah 0!
        var yyyy = today.getFullYear();
        var tanggalSaatIni = dd + ' ' + getMonthName(mm) + ' ' + yyyy;

        document.getElementById('tanggalText').textContent = tanggalSaatIni;
        document.getElementById('tanggalInput').value = tanggalSaatIni;
    }

    function updateTanggal() {
        var tanggal = document.getElementById('tanggalInput').value;
        document.getElementById('tanggalText').textContent = tanggal;
    }

    function getMonthName(monthIndex) {
        var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 
                      'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        return months[monthIndex];
    }








function updateEmail() {
        var email = document.getElementById('emailInput').value;
        var emailLink = document.getElementById('emailLink');
        emailLink.href = 'mailto:' + email;
        emailLink.textContent = email;
    }








var textarea = document.getElementById('myTextarea');

textarea.addEventListener('input', function () {
  this.style.height = 'auto'; // Set tinggi ke auto terlebih dahulu
  this.style.height = (this.scrollHeight) + 'px'; // Atur tinggi sesuai dengan tinggi konten
});



function animateLoading() {
    let elem = document.getElementById("loadingBar");
    let container = document.querySelector(".loading-container");
    let width = 1;
    let id = setInterval(frame, 20);

    function frame() {
        if (width >= 100) {
            clearInterval(id);
            container.style.display = 'none'; // Menyembunyikan container setelah loading selesai
        } else {
            width++; 
            elem.style.width = width + '%'; 
        }
    }
}

animateLoading();


</script>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>

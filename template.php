<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #D0E1F9;
        }

        .email-tujuan {
    margin-right: 30px;
    text-align: right;
    padding-top: 10px;
    margin-bottom: 0px;
    position: relative;
}

.email-tujuan a {
    color: #4D648D; /* Warna biru */
    text-decoration: none; /* Menghilangkan garis bawah default */
}

.email-tujuan a:hover {
    text-decoration: underline; /* Menambahkan garis bawah saat hover */
}


.email-container.custom-hr {
    color:  #4D648D;
    padding-bottom: 10px;
}

.tanggal {
    padding-top: -20px;
    margin-left: 30px;
    text-align: left;
    color: #1E1F26;
    margin-bottom: 10px;
    position: relative; 
}




        
        .header {
            padding-top: 0px;
            background-color:  #4D648D;
            color:#D0E1F9;
            border-radius: 0px;
            padding: 5px;
            text-align: center; 
            align-items: center;
            justify-content: center;
        }

.header h1 {
    font-size: 20px;
    margin: 0; 
    padding: 0; 
}


        .content {
            max-width: 600px;
            height: auto;
            background-color: #4D648D;
            padding: 20px;
            text-align: left;
            color: #D0E1F9;
            margin-top: 30px;
            margin-bottom: 30px;
            margin-left: 30px; 
            margin-right: 30px; 
            display: inline-block;
            border-style: dashed; 
            border-width: 2px; 
            border-color: #D0E1F9;
            box-shadow: 4px 4px 5px 0px rgba(0, 0, 0, 0.2);
        }




        .informasi {
            margin-left: 30px; 
            margin-right: 30px;
            color: #1E1F26;
            text-align: justify;
            margin-bottom: 30px;
        }

.email-tujuan{
    color: #1E1F26;
}
.email-link {
    color: #4D648D; /* Mengatur warna teks menjadi biru */
    text-decoration: none; /* Opsional, untuk menghilangkan garis bawah pada tautan */
}

.email-link:hover {
    text-decoration: underline; /* Opsional, menambahkan garis bawah saat mouse hover */
}


.sosmed{
    color: #1E1F26;
    margin-left: 30px;
}

.icon-container {
    display: flex;
    justify-content: flex-start;
    margin-left: 30px;
    margin-bottom: 30px;
}

.icon-button {
    margin-right: 10px; /* Margin kanan untuk setiap tombol */
}

.icon-button:last-child {
    margin-right: 0; /* Menghilangkan margin kanan untuk tombol terakhir */
}

.icon-button {
    background-size: cover;
    background-position: center;
    border: none;
    cursor: pointer;
    background-color: #4D648D;
    width: 40px; /* Atur lebar tombol */
    height: 40px; /* Atur tinggi tombol */
    border-radius: 50%; /* Membuat tombol bulat */
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

.instagram-logo {
    width: 100%;
    height: 100%;
    border-radius: 0;
    background-image: url('https://i.pinimg.com/564x/16/d0/d5/16d0d5d7bab0549c90be42fa645ddd3b.jpg');
    background-size: cover;
    background-position: center;
}

.twitter-logo {
    width: 100%;
    height: 100%;
    border-radius: 0;
    background-image: url('https://i.pinimg.com/564x/79/d0/39/79d03930e51d90b2d3a4781cadc5fa31.jpg');
    background-size: cover;
    background-position: center;
}

.youtube-logo {
    width: 100%;
    height: 100%;
    border-radius: 0;
    background-image: url('https://i.pinimg.com/564x/6d/bd/c4/6dbdc4ccec7a1ab4a2ab7f2449a743c4.jpg');
    background-size: cover;
    background-position: center;
}















        .footer {
            background: #4D648D;
            color: #D0E1F9;
            text-align: center;
            padding: 10px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    
<div class="email-container">
    <p class="email-tujuan">To: <a href="mailto:{{email}}">{{email}}</a></p>

    <hr class="custom-hr" style="color:#4D648D">
    <p class="tanggal">{{tanggal}}</p>
    <div class="header">
        <h1>{{judul}}</h1>
    </div>

    <div class="content">
        {{pesan}}
    </div>





        <p class="informasi">
            Email ini dikirim oleh <a href="mailto:tangguh880@gmail.com" class="email-link">tangguh880@gmail.com</a>. Anda dapat menghubungi saya melalui email ini jika Anda memiliki pertanyaan atau perlu berkomunikasi dengan saya.
        </p>
        
        <hr style="color:#4D648D">
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

    <table>
        <tr>
            <td id="design" class="design2" style="-webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;">
              <img class="CToWUd" 
                   src="https://media.giphy.com/media/v1.Y2lkPTc5MGI3NjExcnJzZTZyN3R1cndsdmV1OXIwNDk3djJ1bGQydzQzYXZscmR6aHdybiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9cw/HUFKrZzsduQamUK8qp/giphy.gif" 
                   alt="animation footer" 
                   width="600" 
                   height="124" 
                   data-bit="iit" 
                   draggable="false" 
                   oncontextmenu="return false;"
                   style="-webkit-user-select: none; -moz-user-select: none; -ms-user-select: none; user-select: none;">
            </td>
          </tr>
        </table>
    

        
        

        <div class="footer">
            © 2024 PHP Mail. All rights reserved.
        </div>
    </div>




</body>
</html>
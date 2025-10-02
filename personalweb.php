<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Pribadi</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="foto-profil">
            <img src="profile.jpg" alt="Foto Profil">
        </div>
        
        <?php
            echo "<h1>Farid Maulana</h1>";
        ?>
        
        <p class="deskripsi">Mahasiswa S1 Sistem Informasi di Telkom University yang bersemangat dalam bidang teknologi dan inovasi. Berpengalaman bekerja dalam tim dan menyelesaikan masalah. Saat ini mencari kesempatan untuk belajar dan mengembangkan kemampuan di bidang teknologi informasi dan bisnis.</p>
        
        <div class="social-links">
            <div class="social-media">
                <a href="https://github.com/faridzzz24" class="social-link github" target="_blank" rel="noopener noreferrer">
                    <i class="ri-github-fill"></i>
                </a>
                <span class="label">GitHub</span>
            </div>

            <div class="social-media">
                <a href="https://linkedin.com/in/frdzz24" class="social-link linkedin" target="_blank" rel="noopener noreferrer">
                    <i class="ri-linkedin-box-fill"></i>
                </a>
                <span class="label">LinkedIn</span>
            </div>

            <div class="social-media">
                <a href="https://instagram.com/_ridz24" class="social-link instagram" target="_blank" rel="noopener noreferrer">
                    <i class="ri-instagram-fill"></i>
                </a>
                <span class="label">Instagram</span>
            </div>
            <div class="social-media">
                <a href="cv.html" class="social-link cv-link">
                    <i class="ri-file-text-line"></i>
                </a>
                <span class="label">Lihat CV</span>
            </div>
            
            <table>
                <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                    <th>Kelas</th>
                </tr>
                <?php
                    echo "<tr>";
                    echo "<td>Farid Maulana</td>";
                    echo "<td>102022400039</td>";
                    echo "<td>Sistem Informasi</td>";
                    echo "<td>SI4809</td>";
                    echo "</tr>";
                ?>
            </table>
        </div>
    </div>
</body>
</html>
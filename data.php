<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <!-- My CSS -->
</head>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
  <path fill="#ffda06" fill-opacity="1" d="M0,160L15,138.7C30,117,60,75,90,80C120,85,150,139,180,144C210,149,240,107,270,106.7C300,107,330,149,360,176C390,203,420,213,450,224C480,235,510,245,540,256C570,267,600,277,630,256C660,235,690,181,720,165.3C750,149,780,171,810,186.7C840,203,870,213,900,224C930,235,960,245,990,213.3C1020,181,1050,107,1080,96C1110,85,1140,139,1170,165.3C1200,192,1230,192,1260,202.7C1290,213,1320,235,1350,240C1380,245,1410,235,1425,229.3L1440,224L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path>
</svg>

<body style="background-color: #FF007A ;">
  <center>
    <h1>Input Data Jurusan</h1>
    <img src="poltek.png" width="300px">
    <br><br>
    <form action="include.php" method="post">
      <table>
        <tr>
          <td>NPM</td>
          <td>: <input type="text" name="NPM" size="11" required></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>: <input type="text" name="Nama" size="20"></td>
        </tr>
        <tr>
          <td>Kelas</td>
          <td>: <input type="text" name="Kelas" size="20"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td>: <input type="text" name="Alamat" size="11"></td>
        </tr>
        <tr>
          <td><input type="submit" name="kirim" value="kirim"></td>
          <td><input type="reset" name="batal" value="batal"></td>
        </tr>
  </center>
  </table>
  </form>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffda06" fill-opacity="1" d="M0,128L26.7,133.3C53.3,139,107,149,160,138.7C213.3,128,267,96,320,117.3C373.3,139,427,213,480,218.7C533.3,224,587,160,640,133.3C693.3,107,747,117,800,112C853.3,107,907,85,960,106.7C1013.3,128,1067,192,1120,208C1173.3,224,1227,192,1280,165.3C1333.3,139,1387,117,1413,106.7L1440,96L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"></path>
  </svg>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Intelli-Egg</title>
  <link rel="icon" type="image/x-icon" href="../images/logo-home.png">
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="../assets/css/main.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body class="index-page">
  <div style="text-align: center; padding: 20px; background-color: #A27C5A; margin: 0; display: flex; align-items: center; justify-content: center;">
    <h3 style="color: #FFA458; margin: 0;">Intelli-Egg</h3>
    <img src="../images/logo-home.png" alt="logo" style="width: 60px; height: 30px; margin-right: 10px;">
  </div>

  <header id="header" class="header d-flex flex-column justify-content-center">
    <i class="header-toggle d-xl-none bi bi-list"></i>
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="home.php" class="active"><i class="bi bi-house navicon"></i><span>Home</span></a></li>
        <li><a href="calendar.php"><i class="bi bi-calendar-check navicon"></i><span>Calendar</span></a></li>
        <li><a href="temp_humid.php"><i class="bi bi-thermometer navicon"></i><span>Temp & Humid</span></a></li>
        <li><a href="camera.php"><i class="bi bi-camera-fill navicon"></i><span>Camera</span></a></li>
        <li><a href="settings.php"><i class="bi bi-gear-fill navicon"></i><span>Settings</span></a></li>
      </ul>
    </nav>
  </header>
  <style>
    body{
      background-color: #FDD9A4;
    }
    .container {
      padding: 2em;
      display: flex;
      flex-direction: column;
      align-items: center;
     
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 2em;
    }

    th, td {
      border: 1px solid black;
      padding: 0.5em;
      text-align: center;
      color:white;
    }
    h1{
        margin: 0%;
    }

    th {
      background-color: #D49057;
    }

    button {
      background-color: #D2B48C;
      color: #F2E6D9;
      padding: 0.5em 1em;
      border: none;
      cursor: pointer;
      border-radius: 5px;
    }
    .menu {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 20%;
  height: 100%;
  background-color: #58422F;
  color: #F2E6D9;
  padding: 2em;
  text-align: center;
  z-index: 10;
}
    @media (max-width: 768px) {
      .container {
        padding: 1em;
      }
      

      table {
        font-size: 12px;
      }
    }
  </style>
  <main class="main">
      <div class="container"> 
    <h2 style="color:#FFA458; background-color:white; border-radius:50px; padding:5px 20px 5px 20px;">Egg Incubator</h2>
    <table>
      <thead>
        <tr>
          <th>Time of Day</th>
          <th>Temperature</th>
          <th>Humidity</th>
          <th>Date</th>
          <th>Time</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="background-color: #E7BA89;">Early Morning</td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
        </tr>
        <tr>
          <td style="background-color: #E7BA89;">Late Morning</td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
        </tr>
        <tr>
          <td style="background-color: #E7BA89;">Early Afternoon</td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
        </tr>
        <tr>
          <td style="background-color: #E7BA89;">Late Afternoon</td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
        </tr>
        <tr>
          <td style="background-color: #E7BA89;">Early Evening</td>
          <td style="background-color: white;"></td>  
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
        </tr>
        <tr>
          <td style="background-color: #E7BA89;">Night</td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
        </tr>
      </tbody>
    </table>

    <h2 style="color:#FFA458; background-color:white; border-radius:50px; padding:5px 20px 5px 20px;">Egg Fertility</h2>
    <table>
      <thead>
        <tr>
          <th>Week</th>
          <th>Row</th>
          <th>Column</th>
          <th>Results</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="background-color: #E7BA89;">1st Week</td>
            <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td><button>View More</button></td>
        </tr>
        <tr>
          <td style="background-color: #E7BA89;">2nd Week</td>
           <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td><button>View More</button></td>
        </tr>
        <tr>
          <td style="background-color: #E7BA89;">3rd Week</td>
            <td style="background-color: white;"></td>
          <td style="background-color: white;"></td>
          <td><button>View More</button></td>
        </tr>
        <tr>
          <td style="background-color: #E7BA89;">Total Fertile Eggs</td>
            <td style="background-color: white;"></td>
            <td style="background-color: white;"></td>
            <td><button>View More</button></td>
        </tr>
      </tbody>
    </table>
  </div>

      </div>
  </main>

  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/typed.js/typed.umd.js"></script>
  <script src="../assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="../assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>

</body>

</html>

<?php
date_default_timezone_set('Asia/Kolkata');
$currentDate = date('l d F, Y');
$currentTime = date('h:i:s A');
?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    
  <meta charset="UTF-8">
  <title>Geek Infotech | Data Engineering & Database Development Training</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
    }

    .portal-header {
      width: 100%;
      background: linear-gradient(to right, #004e92, #000428);
      color: #ffffff;
      padding: 6px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 13px;
      box-shadow: 0 2px 6px rgba(0,0,0,0.2);
    }

    .left-info {
      font-weight: 550;
    }

    .right-info {
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 15px;
      color: #00e6e6;
    }

    .right-info span {
      color: #ff0000;
      font-weight: bold;
    }

    @media (max-width: 600px) {
      .portal-header {
        flex-direction: column;
        text-align: center;
        padding: 8px;
        gap: 4px;
      }
    }
  </style>
    
</head>
    
<body>

  <!-- ===== Student Portal Header ===== -->
  <div class="portal-header">
    <div class="left-info">
      <span id="date"><?php echo $currentDate; ?></span> |
      <span id="time"><?php echo $currentTime; ?></span>
    </div>
    <div class="right-info">
      <i class="fa-solid fa-graduation-cap"></i>
      Student Portal – <strong>Geek Infotech</strong>
      <span>Coming Soon !!</span>
    </div>
  </div>

  <!-- ===== Live Time Update Script ===== -->
  <script>
    function updateDateTime() {
      const now = new Date();
      const dateOptions = { weekday: 'long', day: '2-digit', month: 'long', year: 'numeric' };
      const timeOptions = { hour: '2-digit', minute: '2-digit', second: '2-digit', hour12: true };

      document.getElementById('date').textContent = now.toLocaleDateString('en-IN', dateOptions);
      document.getElementById('time').textContent = now.toLocaleTimeString('en-IN', timeOptions);
    }
    setInterval(updateDateTime, 1000);
    updateDateTime();
  </script>

</body>
</html>
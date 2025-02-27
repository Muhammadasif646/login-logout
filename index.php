<?php




session_start();
if (!isset($_SESSION['user'])) {
    header("location:login.php");
    exit();
}





?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
<body>
  <div class="container">
    <nav class="navbar">
      <section class="profile">
        <img class="avatar" src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1976&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="avatar">
        <span class="nav-text name">
          <p>Shrinithi Murali</p>
          <p><?php echo htmlspecialchars($_SESSION['user']); ?></p>
        </span>
      </section>
      <hr>
      <section class="main">
        <div class="nav-item">
          <span class="material-symbols-rounded">
            home
          </span>
          <span class="nav-text">Dashboard</span>
        </div>
        <div class="nav-item">
          <span class="material-symbols-rounded">
            person
          </span>
          <span class="nav-text">Audience</span>
        </div>
        <div class="nav-item">
          <span class="material-symbols-rounded">
            article
          </span>
          <span class="nav-text">Posts</span>
        </div>
        <div class="nav-item current">
          <span class="material-symbols-rounded">
            calendar_month
          </span>
          <span class="nav-text">Schedules</span>
        </div>
      </section>
      <hr>
      <section class="others">
        <div class="nav-item">
          <span class="material-symbols-outlined">
            settings
          </span>
          <span class="nav-text">Settings</span>
        </div>
        <div class="nav-item">
          <span class="material-symbols-outlined">
            help
          </span>
          <span class="nav-text">Help</span>
        </div>
       <a href="logout.php"> <div class="logout nav-item">
          <span class="material-symbols-outlined">
            logout
          </span>
          <span class="nav-text">Logout Account</span>
        </div></a>
      </section>
      <button class="toggle" onclick="toggleNavbar()">
        <span class="material-symbols-outlined">
          chevron_left
        </span>
      </button>
    </nav>
    <main align="center">
      <h1>hello</h1>
    </main>
  </div>
  <script src="file.js"></script>
</body>
</body>
</html>
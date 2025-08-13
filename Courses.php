<?php
  require_once '../Model/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pacer-Link - Learning Portal</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <style>

    body 
    {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #ececec;
      color: #333;
    }

    nav 
    {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: rgb(179, 27, 0);
      padding: 10px 20px;
    }

    nav .logo 
    {
      color: #fff;
      font-size: 22px;
      font-weight: bold;
      text-transform: uppercase;
    }

    nav .links 
    {
      display: flex;
      gap: 15px;
    }

    nav .links a 
    {
      background: #fff;
      color: rgb(179, 27, 0);
      padding: 8px 15px;
      font-size: 14px;
      border-radius: 4px;
      text-decoration: none;
      transition: 0.3s;
    }

    nav .links a:hover 
    {
      background: #fff0f0;
      color: rgb(179, 27, 0);
    }

    .container 
    {
      max-width: 1100px;
      margin: 50px auto;
      padding: 20px;
      background: white;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    h2 
    {
      text-align: center;
      color: rgb(179, 27, 0);
      margin-bottom: 30px;
    }

    .courses 
    {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      justify-content: center;
    }

    .course-card 
    {
      background: #f9f9f9;
      border-radius: 10px;
      padding: 20px;
      width: 280px;
      box-shadow: 0 1px 5px rgba(0,0,0,0.1);
      transition: transform 0.3s;
    }

    .course-card:hover 
    {
      transform: translateY(-5px);
    }

    .course-card h3 
    {
      color: #222;
      margin-bottom: 10px;
    }

    .course-card p
     {
      font-size: 14px;
      color: #555;
    }

    .course-card .enroll-btn
     {
      margin-top: 10px;
      display: inline-block;
      padding: 8px 12px;
      background-color: rgb(179, 27, 0);
      color: white;
      border-radius: 5px;
      font-size: 14px;
      text-decoration: none;
    }

    .guidelines 
    {
      margin-top: 50px;
    }

    .guidelines ul 
    {
      list-style: disc;
      padding-left: 20px;
    }

    .guidelines li 
    {
      margin: 10px 0;
      font-size: 15px;
    }
  </style>
</head>
<body>

<nav>
  <div class="logo">Pacer-Link</div>
  <div class="links">
    <a href="../index.php">Home</a>
    <a href="Booking.php">Booking</a>
    <a href="contact.php">Contact</a>
    <a href="Sign-Up.php">Sign-Up</a>
    <a href="UserDash.php">Dash</a>
    <a href="AdminDash.php">ADash</a>
  </div>
</nav>

<div class="container">
  <h2>Explore Our Courses</h2>
  <div class="courses">
    <div class="course-card">
      <h3>Networking Basics</h3>
      <p>Understand how computers and systems connect in modern infrastructure.</p>
      <a href="#" class="enroll-btn">Enroll</a>
    </div>
    <div class="course-card">
      <h3>Intro to Cybersecurity</h3>
      <p>Protect your systems and data from common security threats.</p>
      <a href="#" class="enroll-btn">Enroll</a>
    </div>
    <div class="course-card">
      <h3>Hardware Troubleshooting</h3>
      <p>Learn how to identify and fix basic hardware issues.</p>
      <a href="#" class="enroll-btn">Enroll</a>
    </div>
    <div class="course-card">
      <h3>Software Essentials</h3>
      <p>Install, configure, and maintain software on any OS.</p>
      <a href="#" class="enroll-btn">Enroll</a>
    </div>
    <div class="course-card">
      <h3>Remote Support Tools</h3>
      <p>Use TeamViewer, AnyDesk and more to assist users remotely.</p>
      <a href="#" class="enroll-btn">Enroll</a>
    </div>
  </div>

  <div class="guidelines">
    <h2>10 Basic Troubleshooting Guidelines</h2>
    <ul>
      <li>Restart the device – it resolves many temporary issues.</li>
      <li>Check power and cable connections.</li>
      <li>Ensure the software is up to date.</li>
      <li>Run a basic virus/malware scan.</li>
      <li>Clear cache and temporary files if a program is slow.</li>
      <li>Check error messages and Google them.</li>
      <li>Try the software on another device if possible.</li>
      <li>Disable and re-enable network or USB devices.</li>
      <li>Uninstall and reinstall problematic applications.</li>
      <li>Ask for help via live chat or submit a support ticket.</li>
    </ul>
  </div>
</div>

</body>
</html>

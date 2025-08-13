<?php
    session_start();
    if ($_SESSION['role'] !== 'user') {
        header("Location: Sign-Up.php");
        exit;
    }
  require_once "../Model/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Booking - Pacer-Link</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <style>
    body 
    {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #e7e2dd;
      color: #3a3a3a;
      line-height: 1.5;
    }

    nav 
    {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #b31b00;
      padding: 12px 30px;
      box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
    }

    nav .logo 
    {
      color: white;
      font-size: 22px;
      font-weight: 700;
      letter-spacing: 1.5px;
      text-transform: uppercase;
    }

    nav .links 
    {
      display: flex;
      gap: 20px;
    }

    nav .links a 
    {
      color: #b31b00;
      background: white;
      padding: 10px 18px;
      border-radius: 6px;
      font-weight: 600;
      font-size: 15px;
      text-decoration: none;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: all 0.3s ease;
    }

    nav .links a:hover 
    {
      background-color: #7f1400;
      color: white;
      box-shadow: 0 4px 12px rgba(179, 27, 0, 0.6);
    }

    .form-container 
    {
      max-width: 700px;
      margin: 40px auto 60px;
      background-color: #fff9f6;
      padding: 35px 40px;
      border-radius: 12px;
      box-shadow: 0 8px 20px rgba(179, 27, 0, 0.15);
      border: 1px solid #e1d7d1;
    }

    .form-container h2 
    {
      font-size: 28px;
      color: #b31b00;
      text-align: center;
      margin-bottom: 30px;
      font-weight: 700;
      letter-spacing: 1.2px;
    }

    label 
    {
      display: block;
      margin-bottom: 6px;
      font-weight: 600;
      font-size: 16px;
      color: #4a4a4a;
    }

    input[type="text"],
    input[type="email"],
    textarea 
    {
      width: 100%;
      padding: 14px 15px;
      border: 1.8px solid #d4ccc5;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 400;
      color: #4a4a4a;
      transition: border-color 0.3s ease;
      box-sizing: border-box;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    textarea:focus
     {
      border-color: #b31b00;
      outline: none;
      box-shadow: 0 0 6px rgba(179, 27, 0, 0.4);
    }

    textarea 
    {
      resize: vertical;
      min-height: 110px;
      font-family: inherit;
    }

    .Choose
    {
      margin: 12px 0 25px;
    }

    .Choose label 
    {
      display: inline-block;
      margin-right: 25px;
      font-size: 15px;
      color: #555;
      cursor: pointer;
      user-select: none;
      position: relative;
      padding-left: 28px;
      line-height: 22px;
    }

    .Choose input[type="radio"] 
    {
      position: absolute;
      left: 0;
      top: 1px;
      width: 18px;
      height: 18px;
      cursor: pointer;
      accent-color: #b31b00;
    }

    .submit-btn 
    {
      display: block;
      margin: 35px auto 0;
      padding: 14px 40px;
      background-color: #b31b00;
      color: white;
      font-size: 18px;
      font-weight: 700;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
      box-shadow: 0 5px 15px rgba(179, 27, 0, 0.4);
    }

    .submit-btn:hover 
    {
      background-color: #7f1400;
      box-shadow: 0 7px 20px rgba(179, 27, 0, 0.7);
    }

    @media (max-width: 480px) 
    {
      .form-container 
      {
        margin: 20px 15px 50px;
        padding: 30px 20px;
      }

      nav 
      {
        padding: 12px 15px;
      }

      nav .links 
      {
        gap: 12px;
      }

      nav .links a 
      {
        padding: 8px 12px;
        font-size: 13px;
      }

      .submit-btn 
      {
        width: 100%;
        padding: 14px 0;
      }

      .Choose label 
      {
        margin-right: 15px;
        font-size: 14px;
      }
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
  </div>
</nav>

<div class="form-container">
  <form method="GET" action="../Controller/userRead.php">
    <input type="text" name="id" value="">
    <button class="submit-btn">Read</button>
  </form>
  <form method="GET" action="../Controller/UserUpdate.php">
    <input type="text" name="id" value="">
    <button class="submit-btn">update</button>
  </form>
  <form method="GET" action="../Controller/UserDelete.php">
    <input type="text" name="id" value="">
    <button class="submit-btn">delete</button>
  </form>
</div>

</body>
</html>

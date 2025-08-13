<?php
  require_once '../Controller/Login.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Pacer-Link Sign In</title>
  <style>
    
    body 
    {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f4f4f4;
      color: #333;
    }

    nav 
    {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #b31b00;
      padding: 14px 30px;
      box-shadow: 0 3px 8px rgba(0,0,0,0.15);
    }

    nav .logo 
    {
      color: white;
      font-size: 20px;
      font-weight: 700;
      letter-spacing: 1.3px;
      text-transform: uppercase;
    }

    nav .links 
    {
      display: flex;
      gap: 18px;
    }

    nav .links a 
    {
      color: #b31b00;
      background-color: #e0e5e6;
      padding: 10px 18px;
      border-radius: 6px;
      font-weight: 600;
      font-size: 15px;
      text-decoration: none;
      box-shadow: 0 2px 6px rgba(0,0,0,0.1);
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav .links a:hover 
    {
      background-color: #7f1400;
      color: white;
      box-shadow: 0 4px 14px rgba(179, 27, 0, 0.6);
    }

    .container 
    {
      max-width: 400px;
      margin: 60px auto;
      padding: 40px 35px;
      background-color: white;
      border-radius: 12px;
      box-shadow: 0 10px 25px rgba(179, 27, 0, 0.1);
      text-align: center;
    }

    .heading 
    {
      font-size: 28px;
      font-weight: 700;
      margin-bottom: 30px;
      color: #b31b00;
      letter-spacing: 1.1px;
    }

    form 
    {
      display: flex;
      flex-direction: column;
      gap: 22px;
      text-align: left;
    }

    .Sign-Up 
    {
      position: relative;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] 
    {
      width: 100%;
      padding: 14px 16px;
      font-size: 16px;
      border: 1.8px solid #d4ccc5;
      border-radius: 8px;
      transition: border-color 0.3s;
      outline: none;
      box-sizing: border-box;
      background-color: #fafafa;
      color: #444;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus 
    {
      border-color: #b31b00;
      box-shadow: 0 0 8px rgba(179, 27, 0, 0.4);
      background-color: #fff;
    }

    label 
    {
      position: absolute;
      top: 12px;
      left: 18px;
      color: #999;
      font-size: 14px;
      pointer-events: none;
      transition: 0.2s ease all;
      background-color: white;
      padding: 0 6px;
    }

    label
    {
      top: -10px;
      left: 14px;
      font-size: 12px;
      color: #b31b00;
      font-weight: 600;
      letter-spacing: 0.8px;
    }

    .Button-container 
    {
      display: flex;
      justify-content: center;
    }

    .Button 
    {
      background-color: #b31b00;
      color: white;
      padding: 14px 40px;
      font-size: 17px;
      font-weight: 700;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s;
      box-shadow: 0 6px 16px rgba(179, 27, 0, 0.4);
      user-select: none;
    }

    .Button:hover 
    {
      background-color: #7f1400;
      box-shadow: 0 8px 22px rgba(179, 27, 0, 0.7);
      transform: scale(1.05);
    }

    .Button:focus 
    {
      outline: none;
      transform: scale(1.05);
      box-shadow: 0 0 10px 3px rgba(179, 27, 0, 0.9);
    }

    @media (max-width: 480px) 
    {
      nav 
      {
        padding: 12px 18px;
      }

      nav .links a 
      {
        padding: 8px 12px;
        font-size: 14px;
      }

      .container 
      {
        margin: 40px 15px;
        padding: 30px 25px;
      }

      .heading 
      {
        font-size: 24px;
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
  </div>
</nav>

<div class="container">
  <div class="heading">Sign In to your account</div>
  <form class="form" method="POST" action="../Controller/Login.php">
    <div class="Sign-Up">
      <input
        required
        autocomplete="off"
        type="text"
        name="username"
        id="username"
        placeholder=" "
      />
      <label for="username">Username</label>
    </div>

    <div class="Sign-Up">
      <input
        required
        autocomplete="off"
        type="email"
        name="email"
        id="email"
        placeholder=" "
      />
      <label for="email">Email</label>
    </div>

    <div class="Sign-Up">
      <input
        required
        autocomplete="off"
        type="password"
        name="password"
        id="password"
        placeholder=" "
      />
      <label for="password">Password</label>
    </div>

    <div class="btn-container">
      <button type="submit" class="Button">Submit</button>
    </div>
  </form>
</div>

</body>
</html>

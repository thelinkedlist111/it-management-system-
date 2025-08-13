<?php
  require_once '../Model/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Contact Us - Pacer-Link</title>
  <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    rel="stylesheet"
  />
  <style>
    body 
    {
      margin: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f5f5;
      color: #333;
    }

    nav 
    {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #b31b00;
      padding: 14px 30px;
      box-shadow: 0 3px 8px rgba(0, 0, 0, 0.15);
    }

    nav .logo 
    {
      color: white;
      font-size: 22px;
      font-weight: 700;
      letter-spacing: 1.2px;
      text-transform: uppercase;
    }

    nav .links 
    {
      display: flex;
      gap: 18px;
    }

    nav .links a 
    {
      background-color: white;
      color: #b31b00;
      padding: 10px 18px;
      border-radius: 6px;
      font-size: 15px;
      font-weight: 600;
      text-decoration: none;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      transition: background-color 0.3s ease, color 0.3s ease;
    }

    nav .links a:hover 
    {
      background-color: #7f1400;
      color: white;
      box-shadow: 0 4px 14px rgba(179, 27, 0, 0.6);
    }

    .contact-container 
    {
      max-width: 720px;
      margin: 60px auto;
      background: white;
      padding: 35px 40px;
      border-radius: 14px;
      box-shadow: 0 12px 28px rgba(179, 27, 0, 0.1);
      text-align: center;
    }

    .contact-container h2 
    {
      font-size: 28px;
      margin-bottom: 28px;
      font-weight: 700;
      color: #b31b00;
      letter-spacing: 1.1px;
    }

    .contact-item 
    {
      display: flex;
      align-items: center;
      margin: 25px 0;
      font-size: 17px;
      color: #444;
      justify-content: center;
      gap: 18px;
      max-width: 500px;
      margin-left: auto;
      margin-right: auto;
    }

    .contact-item .icon 
    {
      background-color: #b31b00;
      color: white;
      border-radius: 50%;
      width: 44px;
      height: 44px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 22px;
      flex-shrink: 0;
      box-shadow: 0 4px 10px rgba(179, 27, 0, 0.3);
    }

    .contact-item a 
    {
      color: #0056b3;
      font-weight: 700;
      text-decoration: none;
      transition: color 0.3s;
    }

    .contact-item a:hover 
    {
      color: #003d7a;
      text-decoration: underline;
    }

    h3 
    {
      margin-top: 50px;
      font-weight: 600;
      color: #333;
      letter-spacing: 0.8px;
    }

    .social-media 
    {
      margin-top: 25px;
      display: flex;
      justify-content: center;
      gap: 22px;
    }

    .social-media a 
    {
      background-color: #b31b00;
      color: white;
      width: 52px;
      height: 52px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 50%;
      font-size: 24px;
      box-shadow: 0 6px 18px rgba(179, 27, 0, 0.35);
      transition: background-color 0.3s;
      text-decoration: none;
    }

    .social-media a:hover 
    {
      background-color: #003d7a;
      box-shadow: 0 8px 24px rgba(0, 61, 122, 0.7);
    }

    @media (max-width: 600px) 
    {
      nav 
      {
        padding: 12px 18px;
      }
      nav .links a 
      {
        padding: 8px 14px;
        font-size: 14px;
      }
      .contact-container 
      {
        margin: 40px 15px;
        padding: 25px 20px;
      }
      .contact-item 
      {
        flex-direction: column;
        gap: 10px;
        font-size: 16px;
      }
      .contact-item .icon 
      {
        width: 36px;
        height: 36px;
        font-size: 20px;
      }
      .social-media 
      {
        gap: 16px;
      }
      .social-media a 
      {

        width: 44px;
        height: 44px;
        font-size: 20px;
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
    <a href="AdminDash.php">ADash</a>
  </div>
</nav>

<div class="contact-container">
  <h2>Contact Us</h2>

  <div class="contact-item">
    <div class="icon"><i class="fas fa-map-marker-alt"></i></div>
    <p>72 Mosadak St., Dokki, Giza 12311, Egypt</p>
  </div>

  <div class="contact-item">
    <div class="icon"><i class="fas fa-phone-alt"></i></div>
    <p><a href="tel:+20237484639">+2 (02) 37484639</a></p>
  </div>

  <div class="contact-item">
    <div class="icon"><i class="fas fa-envelope"></i></div>
    <p><a href="mailto:tamer.seida@pacer-consultants.com">tamer.seida@pacer-consultants.com</a></p>
    <p><a href="mailto:projects@pacer-consultants.com">projects@pacer-consultants.com</a></p>
  </div>

  <h3>Follow Us</h3>
  <div class="social-media">
    <a href="https://www.facebook.com/tamer.abouseida" target="_blank" aria-label="Facebook" rel="noopener noreferrer">
      <i class="fab fa-facebook-f"></i>
    </a>
    <a href="https://www.instagram.com/pacerconsultants/" target="_blank" aria-label="Instagram" rel="noopener noreferrer">
      <i class="fab fa-instagram"></i>
    </a>
  </div>
</div>

</body>
</html>

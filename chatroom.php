<?php
  require_once '../Model/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Pacer-Link - Chatroom</title>
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
      max-width: 600px;
      margin: 50px auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .container h2 
    {
      color: rgb(179, 27, 0);
      margin-bottom: 20px;
    }

    .hidden 
    {
      display: none;
    }

    input[type="text"] 
    {
      width: 80%;
      padding: 12px;
      font-size: 16px;
      margin-bottom: 20px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    .btn 
    {
      padding: 10px 20px;
      background-color: rgb(179, 27, 0);
      color: white;
      border: none;
      border-radius: 4px;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn:hover 
    {
      background-color: #a62000;
    }

    .chat-box 
    {
      height: 300px;
      overflow-y: auto;
      background: #f7f7f7;
      padding: 10px;
      margin-top: 20px;
      border-radius: 6px;
      text-align: left;
    }

    .chat-box p 
    {
      margin: 5px 0;
    }

    .chat-input 
    {
      display: flex;
      margin-top: 10px;
    }

    .chat-input input 
    {
      flex: 1;
      padding: 10px;
      font-size: 14px;
      border-radius: 4px 0 0 4px;
      border: 1px solid #ccc;
    }

    .chat-input button 
    {
      padding: 10px 15px;
      background: rgb(179, 27, 0);
      color: white;
      border: none;
      border-radius: 0 4px 4px 0;
      cursor: pointer;
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

<div class="container" id="code-form">
  <h2>Enter Chatroom Code</h2>
  <input type="text" id="chatCode" />
  <br />
  <button class="btn" onclick="checkCode()">Enter Chatroom</button>
</div>

<div class="container hidden" id="chatroom">
  <h2>Live Chatroom</h2>
  <div class="chat-box" id="chatBox">
    <p><em>Welcome to the chatroom!</em></p>
  </div>
  <div class="chat-input">
    <input type="text" id="chatMessage" placeholder="Type a message..." />
    <button onclick="sendMessage()">Send</button>
  </div>
</div>

<script>
  const Pass = "PACER2025";

  function checkCode() 
  {
    const input = document.getElementById("chatCode").value.trim();
    if (input === Pass) 
    {
      document.getElementById("code-form").classList.add("hidden");
      document.getElementById("chatroom").classList.remove("hidden");
    } 
    else 
    {
      alert("Inavalid Chatroom Code.");
    }
  }

  function sendMessage() 
  {
    const messageInput = document.getElementById("chatMessage");
    const message = messageInput.value.trim();
    if (message)
    {
      const chatBox = document.getElementById("chatBox");
      const newMsg = document.createElement("p");
      newMsg.textContent = "You: " + message;
      chatBox.appendChild(newMsg);
      chatBox.scrollTop = chatBox.scrollHeight;
      messageInput.value = "";
    }
  }
</script>

</body>
</html>

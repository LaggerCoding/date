<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
     <style>
        body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }
    button {
      border: none;
      border-radius: 8px;
      font-size: 16px;
      padding: 10px 20px;
      cursor: pointer;
      transition: all 0.2s ease;
    }
     </style>
</head>
<body>
    <div class="container">
       
        <?php
        $name = $_REQUEST['name'];

        echo "<h1>Well $name are you available on 14th of feburary or the coming weekend of that month?</h1>"
        
        ?>
        
        <h5>pls say yes😶‍🌫️</h5>
        <div class="buttons">
            <button id="yesBtn1" onclick="window.location.href='will.html'">Yes</button>
            <button id="yesBtn2" onclick="window.location.href='will.html'">Yes</button>
        </div>
    </div>
</body>
</html>
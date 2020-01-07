<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>PHP GRAPH - LEVEL</title>
    <!-- FONT: LATO -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
    <!-- FONT: FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <!-- CSS: MY STYLE -->
    <link rel="stylesheet" href="style.css">

  </head>




  <body>
    <h1>Hello World</h1>

    <form id="myForm">
      <label for="name">nome:</label>
      <input type="text" name="name" value="nuovo nome"><br>
      <label for="lastname">descrizione:</label>
      <input type="text" name="lastname" value="nuova descrizione"><br>
      <input type="submit" name="submit" value="nuova configurazione">
    </form>

    <div id="container" class="container">
    </div>


    <!-- JS: JQUERY -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- JS: MOMENT -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
    <!-- JS: CHART-JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.js"></script>
    <!-- JS: HANDLEBARS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.0/handlebars.min.js" charset="utf-8"></script>
    <!-- TEMPLATE: MESSAGE MENU -->
    <script id="box-template" type="text/x-handlebars-template">
      <div class="box">
        <p>{{ nome }} - {{ descrizione }}</p>
      </div>
    </script>
   <!-- JS: MY SCRIPT -->
   <script src="script.js" charset="utf-8"></script>

  </body>
</html>

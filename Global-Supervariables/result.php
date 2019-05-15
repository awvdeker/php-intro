<?php
  session_start();
?>

<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <!-- tabs with javascript plug in to display certain divs -->
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
      <a class="nav-link" id="postGet-tab" data-toggle="tab" href="#postGet" role="tab" aria-controls="postGet" aria-selected="true">POST and GET</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="serverGlobal-tab" data-toggle="tab" href="#serverGlobal" role="tab" aria-controls="serverGlobal" aria-selected="false">$_SERVER</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="sessionGlobal-tab" data-toggle="tab" href="#sessionGlobal" role="tab" aria-controls="sessionGlobal" aria-selected="false">$_SESSION</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="cookieGlobal-tab" data-toggle="tab" href="#cookieGlobal" role="tab" aria-controls="cookieGlobal" aria-selected="false">$_COOKIE</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="requestGlobal-tab" data-toggle="tab" href="#requestGlobal" role="tab" aria-controls="requestGlobal" aria-selected="false">$_REQUEST</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="filesGlobal-tab" data-toggle="tab" href="#filesGlobal" role="tab" aria-controls="filesGlobal" aria-selected="false">$_FILES</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="envGlobal-tab" data-toggle="tab" href="#envGlobal" role="tab" aria-controls="envGlobal" aria-selected="false">$_ENV</a>
    </li>
  </ul>
  <div class="tab-content" id="myTabContent">
    <!-- $_POST and $_GET -->
    <div class="tab-pane fade" id="postGet" role="tabpanel" aria-labelledby="postGet-tab">
      <p>Variables sent via POST<p>
      <p>Top 5 Tv shows</p>
      <ol>
        <li><?php echo $_POST["tvshow1"]; ?></li>
        <li><?php echo $_POST["tvshow2"]; ?></li>
        <li><?php echo $_POST["tvshow3"]; ?></li>
        <li><?php echo $_POST["tvshow4"]; ?></li>
        <li><?php echo $_POST["tvshow5"]; ?></li>
      </ol>
      <p>Top 5 Movies</p>
      <ol>
        <li><?php echo $_POST["movie1"]; ?></li>
        <li><?php echo $_POST["movie2"]; ?></li>
        <li><?php echo $_POST["movie3"]; ?></li>
        <li><?php echo $_POST["movie4"]; ?></li>
        <li><?php echo $_POST["movie5"]; ?></li>
      </ol>
      <br/>
      <p>Variables sent via GET<p>
      <p>Favourite Country : <?php echo $_GET["favouritecountry"]; ?></p>
      <p>Worst movie ever seen : <?php echo $_GET["worstmovie"]; ?></p>
      <br/>
    </div>

    <!-- $_SERVER -->
    <div class="tab-pane fade" id="serverGlobal" role="tabpanel" aria-labelledby="serverGlobal-tab">
      <p>$_SERVER variables :</p>
      <br/>
      <p>$_SERVER['SCRIPT_NAME'] --> <?php echo $_SERVER['SCRIPT_NAME']; ?></p>
      <p>$_SERVER['HTTP_HOST'] --> <?php echo $_SERVER['HTTP_HOST']; ?></p>
      <p>$_SERVER['PHP_SELF'] --> <?php echo $_SERVER['PHP_SELF']; ?></p>
      <p>$_SERVER['SERVER_ADDR'] --> <?php echo $_SERVER['SERVER_ADDR']; ?></p>
      <p>$_SERVER['SERVER_NAME'] --> <?php echo $_SERVER['SERVER_NAME']; ?></p>
      <p>$_SERVER['REMOTE_ADDR'] --> <?php echo $_SERVER['REMOTE_ADDR']; ?></p>
      <p>$_SERVER['REMOTE_HOST'] --> <?php echo $_SERVER['REMOTE_HOST']; ?></p>
      <p>$_SERVER['REMOTE_PORT'] --> <?php echo $_SERVER['REMOTE_PORT']; ?></p>
      <p>$_SERVER['SCRIPT_FILENAME'] --> <?php echo $_SERVER['SCRIPT_FILENAME']; ?></p>
      <p>$_SERVER['SERVER_PORT'] --> <?php echo $_SERVER['SERVER_PORT']; ?></p>
      <p>$_SERVER['SCRIPT_URI'] --> <?php echo $_SERVER['SCRIPT_URI']; ?></p>
      <br/>
    </div>

    <!-- $_SESSION -->
    <div class="tab-pane fade" id="sessionGlobal" role="tabpanel" aria-labelledby="sessionGlobal-tab">
      <p>$_SESSION variables :</p>
      <br/>
      <p>$_SESSION['actor'] --> <?php echo $_SESSION['actor']; ?></p>
      <p>$_SESSION['actress'] --> <?php echo $_SESSION['actress']; ?></p>
      <br/>
    </div>

    <!-- $_COOKIE -->
    <div class="tab-pane fade" id="cookieGlobal" role="tabpanel" aria-labelledby="cookieGlobal-tab">
      <p>$_COOKIE variables :</p>
      <br/>
      <?php
        if (isset($_COOKIE['place'])){
          echo "<p>cookie variable --> ".$_COOKIE['place']."</p>";
        }
      ?>
      <br/>
    </div>

    <!-- $_REQUEST -->
    <div class="tab-pane fade" id="requestGlobal" role="tabpanel" aria-labelledby="requestGlobal-tab">
      <p>$_REQUEST variables : An associative array that by default contains the contents of $_GET, $_POST and $_COOKIE.</p>
      <br/>
      <!-- foreach: loop through the associative array ($_REQUEST) -->
      <table>
      <?php foreach($_REQUEST as $key => $value): ?>
      <tr>
	      <td><?php echo $key; ?></td>
	      <td><?php echo $value; ?></td>
      </tr>
      <?php endforeach; ?>
      </table>

      <br/>
    </div>

    <!-- $_FILES -->
    <div class="tab-pane fade" id="filesGlobal" role="tabpanel" aria-labelledby="filesGlobal-tab">
      <p>$_FILES variables : An associative array of items uploaded to the current script via the HTTP POST method</p>
      <br/>
      <!-- foreach: loop through the associative array ($_FILES) -->
      <table>
      <?php foreach($_FILES as $key => $value): ?>
      <tr>
	      <td><?php echo $key; ?></td>
	      <td><?php echo $value; ?></td>
      </tr>
      <?php endforeach; ?>
      </table>

      <br/>
    </div>

    <!-- $_ENV -->
    <div class="tab-pane fade" id="envGlobal" role="tabpanel" aria-labelledby="envGlobal-tab">
      <p>$_ENV variables : An associative array of variables passed to the current script via the environment method</p>
      <br/>
      <!-- foreach: loop through the associative array ($_ENV) -->
      <!-- Loop through the data and post it in a table (as key => value)-->

      <table>
      <?php foreach($_ENV as $key => $value): ?>
      <tr>
	      <td><?php echo $key; ?></td>
	      <td><?php echo $value; ?></td>
      </tr>
      <?php endforeach; ?>
      </table>

      <br/>
    </div>

  </div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>

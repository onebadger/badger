<?php
if(isset($_POST['user_phone']) && empty($_POST['user_second_name'])) {
  $message = 'First name: ' .$_POST['user_first_name'] . "\n"
    .'Second name: ' .$_POST['user_second_name'] . "\n"
    .'Email: ' .$_POST['user_email'] . "\n"
    .'Phone: ' .$_POST['user_phone'] . "\n"
    .'Comment: ' .$_POST['user_comment'];
  mail('yakov.barsukov@gmail.com', 'badger.one call back form', $message);
} else {
  header('Refresh: 3; URL=index.html');
  exit(0);
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Jakov</title>
</head>

<body>
  <style>
    .container {
      max-width: 892px;
    }

    a {
      text-decoration: none !important;
    }

    ion-icon {
      font-size: 40px;
    }

    .wrapper {
      min-height: calc(100vh - 134px);
    }

  </style>
  <div class="wrapper">
  <div class="container">
    <div class="mx-auto pt-5">
      <h2 id="callback" class="text-muted">#callback</h2>
      <div>
        <p class="h4 mx-auto mb-3">Thanks! The form has been sent.</p>
        <p class="h4 mx-auto mt-5"><a href="index.html">back</a></p>

      </div>
    </div>
    </div>
  </div>
  <footer class="pt-5 pb-3">
    <div class="container footer">
      <div>Jakov Barsukov</div>
      <div>
        <a href="https://github.com/onebadger" target="_blank">
          <ion-icon name="logo-github"></ion-icon>
        </a>
        <a href="https://twitter.com/yakov_barsukov" target="_blank">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
        <a href="https://www.facebook.com/yakov.barsukov" target="_blank">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/ionicons@4.5.5/dist/ionicons.js"></script>
</body>

</html>

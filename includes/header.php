<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>
    <link type="text/css" rel="stylesheet" href="/styles/redesign/header.css" />
    <!-- <link type="text/css" rel="stylesheet" href="/styles/redesign/footer2.css" /> -->
    <link type="text/css" rel="stylesheet" href="/dev-tools/styles.css" />
    <link type="text/css" rel="stylesheet" href="/styles/redesign/general.css" />
    <link type="text/css" rel="stylesheet" href="/css-redesign/footer.css" />
    <?php
        if (!empty($banner_title)){
            echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"/styles/redesign/banner.css\">";
        }
        if (!empty($t)) {
            echo $t;
        }
    ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,600|Playfair+Display" rel="stylesheet">
  </head>
  <body onload="document.querySelector('html').focus();">
    <div id="wrapper" class="">
      <div id="menu">
        <div id="" class="title-space-l"></div>
          <div id="site-title">
              <a href="/">Zero Time</a>
          </div>
          <div id="" class="title-space-r"></div>
          <div id="nav-div">
            <nav>
                <a class="nav-link " href="/">HOME</a>
                <a class="nav-link " href="/product/">PRODUCT</a>
                <a class="nav-link " href="/faq/">FAQ</a>
            </nav>
          </div>
      </div>
      <?php
      if (!empty($banner_title)){
          require($_SERVER['DOCUMENT_ROOT'] . "/includes/banner.php");
      }

      ?>
      <div id="content" class="">

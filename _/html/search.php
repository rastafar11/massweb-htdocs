<!DOCTYPE html>
<html>
  <head>
    <title>MassBase -- Search</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Bree+Serif|Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="_/css/mystyles.css" rel="stylesheet" media="screen">
  </head>
  <body id="search" background="images/misc/background.jpg">
    
    <section class="container">
      <div class="content row">
        <?php include "_/components/php/header.php"; ?>
        <section class="main col col-lg-12 text-center" >
            <?php include "_/components/php/searchForm.php"; ?>
        </section>
      </div><!-- content -->
      <section class="container col col-sm-12">
        <?php include "_/components/php/footer.php"; ?>  
      </section>
    </section><!-- container -->

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/myscript.js"></script>
    <script src="_/js/jquery.validate.min.js"></script>
  </body>
</html>

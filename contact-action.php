<?php 

  if(isset($_POST['name'])) {
    $name = strip_tags(htmlspecialchars($_POST['name']));
    $phone = strip_tags(htmlspecialchars($_POST['phone']));
    $email = strip_tags(htmlspecialchars($_POST['email']));
    $msg = strip_tags(htmlspecialchars($_POST['message']));
  }

  include('header.php'); 

?>

  <!-- Pagina context -->
  <div class="container">

    <h3 class="my-4">Bedankt <?php echo $name; ?>, </h3>

    <!-- context rij -->
    <div class="row">
      <div class="col-lg-12">
        <div class="card h-100">
          <h3 class="card-header">Onderstaande gegevens zijn door ons ontvangen:</h3>
          <div class="card-body">
            <div class="display-5"><?php echo $msg; ?></div>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Tel: <?php echo $phone; ?></li>
            <li class="list-group-item">E-mail: <?php echo $email; ?></li>
          </ul>
        </div>
      </div>
    </div>
    <p><h6>Wij nemen z.s.m. contact met u op.</h6></p>
    <!-- /.row -->

  </div>
  <!-- /.container -->

<?php include('footer.php'); ?>
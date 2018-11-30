    <!-- Pagina context -->
    <div class="container">

      <!-- Pagina titel -->
      <h1 class="mt-4 mb-3">Contact</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Contact</li>
      </ol>

      <!-- Context rij -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <!-- Maks solutions logo -->
          <img src="ms-logo.jpg" height="200" width="200" />
        </div>
        <!-- Contact gegevens kolom -->
        <div class="col-lg-4 mb-4">
          <h3>Contactgegevens</h3>
          <p>
            Stolwijkstraat 8
            <br>3079 DN Rotterdam
            <br>
          </p>
          <p>
            <abbr title="Phone">T</abbr>: (123) 456-7890
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:support@makssolutions.com">support@makssolutions.com
            </a>
          </p>
          <p>
            <abbr title="Hours">B</abbr>: Maandag - Vrijdag: 9:00u tot 17:00u
          </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Formulier -->
      <!-- Om de email adres,bericht, naam en telefoon te maken ga naar contact-action.php -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Stuur een bericht</h3>
          <form action="contact-action.php" method="post" name="sentMessage" id="contactForm" novalidate>
            <div class="control-group form-group">
              <div class="controls">
                <label>Naam:</label>
                <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Vul hier je naam in..">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefoon:</label>
                <input type="tel" class="form-control" name="phone" id="phone" required data-validation-required-message="Vul hier je telefoonnummer in..">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>E-mailadres:</label>
                <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Vul hier je e-mail in..">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Bericht:</label>
                <textarea rows="10" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Plaats hier je opmerking.." maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- Succes of foute berichten. -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Verzenden</button>
			<div id="reset"></div>
                <button type="reset" class="btn btn-primary">Reset</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

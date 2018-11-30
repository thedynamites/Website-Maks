    <head>
    <link href="css/navbar.css" rel="stylesheet">
  </head>

  <body>
    <?php
    
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "producten";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT productid, productname, descript, price FROM siervuurwerk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<h4 class="my-0 font-weight-normal">';
        echo $row["productname"];
        echo '</h4>';   
    }
} else {
    echo "0 results";
}
// Close connection
$conn->close();
    ?>
    <?php
    while($row = $result->fetch_assoc()) {
    }
    ?>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4"><?php echo $row["productname"]?></h1>
    </div>
    <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">test</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
      </div>
	
          <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
      </div>
          <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
      </div>
          <div class="container">
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Red star selection</h4>
            <h6 class="my-0 font-weight-normal">Vuurwerk pakket</h6>
          </div>
        <div class="card-header">
            <img src="css/images/redstar.jpg" alt="Red star selection" style="width:300px;">
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">&euro;80 <small class="text-muted">per stuk</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li><select name="users">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              </select> pakketten (maximaal 6)</li>
            </ul>
            <button onclick="location.href='mailto:makstennebroek@hotmail.com';" type="button" class="btn btn-lg btn-block btn-outline-primary">In winkelwagen</button>
          </div>
        </div>
      </div>
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="row">
          <div class="col-12 col-md">
            <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
          </div>
          <div class="col-6 col-md">
          </div>
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
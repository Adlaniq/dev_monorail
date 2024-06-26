<!DOCTYPE html>
<html style="font-size: 16px;" lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="KL Monorail, INTUITIVE">
  <meta name="description" content="">
  <title>Check Ticket</title>
  <link rel="stylesheet" href="nicepage.css" media="screen">
  <link rel="stylesheet" href="guest.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 5.2.4, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">


  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "images/rapidkl-logo.png"
}</script>
  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="guest">
  <meta property="og:type" content="website">

</head>

<body class="u-body u-custom-color-3 u-xl-mode" data-lang="en">
  <header class="u-clearfix u-custom-color-1 u-header u-header" id="sec-766a">
    <div class="u-clearfix u-sheet u-sheet-1">
      <nav
        class="u-align-left u-font-size-14 u-menu u-menu-one-level u-menu-open-right u-nav-spacing-25 u-offcanvas u-menu-1"
        data-responsive-from="MD">
        <div class="menu-collapse">
          <a class="u-button-style u-custom-text-active-color u-custom-text-color u-nav-link" href="#"
            style="padding: 4px 0px; font-size: calc(1em + 8px);">
            <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 302 302">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-7b92"></use>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
              id="svg-7b92" x="0px" y="0px" viewBox="0 0 302 302" style="enable-background:new 0 0 302 302;"
              xml:space="preserve" class="u-svg-content">
              <g>
                <rect y="36" width="302" height="30"></rect>
                <rect y="236" width="302" height="30"></rect>
                <rect y="136" width="302" height="30"></rect>
              </g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
              <g></g>
            </svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-unstyled u-nav-1">
          <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                href="/dev_monorail/index.html">Home</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                href="/dev_monorail/calculate.php">Buy</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                href="/dev_monorail/purchase.php">Purchases</a>
            </li>
            <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                href="/dev_monorail/logout.php">Logout</a>
            </li>
          </ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div
            class="u-align-center u-container-style u-custom-color-1 u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2">
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                    href="/dev_monorail/index.html">Home</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                    href="/dev_monorail/calculate.php">Buy</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                    href="/dev_monorail/purchase.php">Purchases</a>
                </li>
                <li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-3-base u-text-white"
                    href="/dev_monorail/logout.php">Logout</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav>
      <a href="/dev_monorail/index.html" class="u-image u-logo u-image-1" data-image-width="240" data-image-height="101">
        <img src="images/rapidkl-logo.png" class="u-logo-image u-logo-image-1">
      </a>
    </div>
  </header>
  <section class="u-clearfix u-image u-section-1" id="sec-76e7" data-image-width="1500" data-image-height="844">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-body-alt-color u-text-1">Ticket Search</h1>
      <div class="u-align-center u-container-style u-group u-radius-39 u-shape-round u-white u-group-1">
        <div class="u-container-layout u-container-layout-1">

          <?php
          if (isset($_POST['inputnumber'])) { //check if form was submitted
            $input = $_POST['search']; //get input text
          
            $message = $input;
          }
          ?>
          <form action="" method="post"
            class="u-border-3 u-border-grey-30 u-grey-25 u-radius-29 u-search u-search-left u-search-1">
            <button class="u-search-button" type="submit" name="inputnumber">
              <span class="u-search-icon u-spacing-10">
                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 56.966 56.966">
                  <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-5b41"></use>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                  id="svg-5b41" x="0px" y="0px" viewBox="0 0 56.966 56.966"
                  style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" class="u-svg-content">
                  <path
                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z">
                  </path>
                </svg>
              </span>
            </button>
            <input class="u-search-input" type="search" name="search" value="" placeholder="Transaction ID">
          </form>

          <div class="u-table u-table-responsive u-table-1">
            <table class="u-table-entity">
              <colgroup>
                <col width="14.2%">
                <col width="14.2%">
                <col width="14.2%">
                <col width="14.2%">
                <col width="15.1%">
                <col width="13.8%">
                <col width="14.300000000000011%">
              </colgroup>


              <?php
              if (isset($message)) {

                // Creating database connection
                $conn = new mysqli('db','php_docker','password','monoraildb');

                // Checking connection
                if ($conn == false) {
                  die("ERROR: Could not connect. " . $conn->connect_error);
                }

                // Creating the sql command
                $sql = "SELECT * FROM ticket WHERE identification LIKE '%$input%'";

                if ($result = $conn->query($sql)) {
                  if ($result->num_rows > 0) {

                    echo '<thead class="u-grey-50 u-table-header u-table-header-1">';
                    echo '<tr style="height: 49px;">';
                    echo '<th class="u-border-1 u-border-grey-50 u-table-cell">NAME</th>';
                    echo '<th class="u-border-1 u-border-grey-50 u-table-cell">TRANS ID</th>';
                    echo '<th class="u-border-1 u-border-grey-50 u-table-cell">FROM</th>';
                    echo '<th class="u-border-1 u-border-grey-50 u-table-cell">TO</th>';
                    echo '<th class="u-border-1 u-border-grey-50 u-table-cell">CATEGORY</th>';
                    echo '<th class="u-border-1 u-border-grey-50 u-table-cell">TRIP</th>';
                    echo '<th class="u-border-1 u-border-grey-50 u-table-cell">AMOUNT</th>';
                    echo '<th class="u-border-1 u-border-grey-50 u-table-cell">TIMESTAMP</th>';
                    echo '</tr>';
                    echo '</thead>';

                    while ($row = $result->fetch_array()) {
                      echo '<tbody class="u-table-body">';
                      echo '<tr style="height: 60px;">';
                      echo '<td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['namess'] . '</td>';
                      echo '<td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['identification'] . '</td>';
                      echo '<td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['from_dest'] . '</td>';
                      echo '<td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['to_dest'] . '</td>';
                      echo '<td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['category'] . '</td>';
                      echo '<td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['trip'] . '</td>';
                      echo '<td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . number_format($row['price'], 2) . "</td>";
                      echo '<td class="u-border-1 u-border-grey-40 u-border-no-left u-border-no-right u-table-cell">' . $row['date_now'] . "</td>";
                      '</td>';
                      echo '</tr>';
                      echo '</tbody>';
                    }
                    echo '</table>';
                    // Free result set
                    $result->free();



                  } else {
                    echo "No records matching your query is found.";
                  }
                }
                // Close connection
                $conn->close();
              }
              ?>
          </div>
        </div>
      </div>
    </div>
  </section>




</body>

</html>
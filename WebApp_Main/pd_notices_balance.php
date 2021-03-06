<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Notices - Balance</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="js/vendor/modernizr.js"></script>
    <link rel="shortcut icon" href="img/favicon.ico" />
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-2 columns" id="mainLogo">
            	<img src="img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
            <div class="small-10 columns" id="pageTitle">
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="right header">Personal Dashboard</h1>
            	<h2 id="titleHeader" class="text-right header">Notices</h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div class="row">
    	<div class="small-4 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Balance</p>
        </div>
    </div>
    <div class="row" id="balanceChart">
    	<div class="small-10 small-centered columns">
            <div class="small-7 columns" id="balanceItems">
                <h5 class="chartItem"> Furniture Replacement</h5>	
                	<div class="balanceLine">
                    </div>
                <h5 class="chartItem"> Payment</h5>
            </div>
            <div class="small-5 columns" id="balancePrices">
         		<h5 class=" text-right chartPrice">$ 250</h5>
                <div class="balanceLine">
                    </div>
                <h5 class=" text-right chartPrice">$ 50</h5>
            </div>
        </div>
    </div>
     <div class="row" id="balanceTotal">
    	<div class="small-10 small-centered columns">
            <div class="small-8 columns text-center">
                <h4 class="chartItemTotal">Total Amount Due :</h4>
            </div>
            <div class="small-4 small-push-2 columns">
         		<h5 class="chartPriceTotalNum" style=" font-family:'caviar_dreamsbold';">$ 300</h5>
            </div>
        </div>
    </div>
    <div class="filler"> </div>
    </section>
    <footer>
        <?php
            include('includes/footer.php');
        ?>
    </footer>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/main.js"></script>
  </body>
</html>

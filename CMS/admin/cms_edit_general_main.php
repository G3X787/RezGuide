<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Rezguide Edit General Main Menu</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link href="css/cms_styles.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="../img/favicon.ico" />
    <script src="../js/vendor/modernizr.js"></script>
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-3 columns" id="mainLogo">
            	<img src="../img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
            <div class="small-9 columns" id="pageTitle">
            	<div id="headerContainer">
            	<h1 id="titleDirectory" class="header">Fanshawe Rezguide</h1>
            	<h2 id="titleHeader" class="text-right header">General</h2>
                </div>
            </div>
        </div>
    </header>
    <div class="row iconRow">
    	<div class="small-6 small-centered columns text-center">
        	<div class="row">
            	<div class="menu">
                    <ul class="genMenu-icons">
                        <li>
                            <a class="botAnchor" href="cms_edit_general_city_select.php">
                            <div class="row">
                                <div class="small-4 columns">
                                    <img onMouseOver="swapDark('0')" onMouseOut="swapLight('0')" class="botImg" id="cityIcon" src="../img/cms-city.png" alt="City">
                                </div>
                                <div class="small-8 columns">
                                    <p class="dashboardText text-justify header"> City </p>
                                </div>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a class="botAnchor" href="cms_edit_general_directory_select.php">
                            <div class="row">
                                <div class="small-4 columns">
                                    <img onMouseOver="swapDark('1')" onMouseOut="swapLight('1')" class="botImg" id="directIcon" src="../img/cms-directory.png" alt="Directory">
                                </div>
                                <div class="small-8 columns">
                                    <p class="dashboardText text-justify header"> Directory </p>
                                </div>
                            </div>
                            </a>
                        </li>
                        <li>
                            <a class="botAnchor" href="cms_edit_general_information_select.php">
                            <div class="row">
                                <div class="small-4 columns">
                                    <img onMouseOver="swapDark('2')" onMouseOut="swapLight('2')" class="botImg" id="infoIcon" src="../img/cms-info.png" alt="Information">
                                </div>
                                <div class="small-8 columns">
                                    <p id="infoTitle" class="dashboardText text-justify header"> Information </p>
                                </div>
                            </div>
                            </a>
                        </li>
                    </ul>
                </div>
        	</div>
        </div>
    </div>
    <div class="filler"> </div>
    <footer>
    	<div class="row text-center">
        	<div class="small-6 small-centered columns">
                <nav class="row">
                    <div class="small-12 columns">
                        <ul id="footerNav">
                            <li>
                                <a class="botAnchor" href="cms_main.php">
                                <img onMouseOver="swapDark('3')" onMouseOut="swapLight('3')" class="botImg" src="../img/homeIcon.png" alt="Home">
                                <p class="menuText header">Home</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_add_main.php">
                                <img onMouseOver="swapDark('4')" onMouseOut="swapLight('4')" class="botImg" src="../img/addIcon.png" alt="Add">
                                <p class="menuText header">Add</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_edit_main.php">
                                <img onMouseOver="swapDark('5')" onMouseOut="swapLight('5')" class="botImg" src="../img/editNavIcon.png" alt="Edit">
                                <p class="menuText header">Edit</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="cms_users_main.php">
                                <img onMouseOver="swapDark('6')" onMouseOut="swapLight('6')" class="botImg" src="../img/usersNavIcon.png" alt="Users">
                                <p class="menuText header">Users</p>
                                </a>
                            </li>
                            <li>
                                <a class="botAnchor" href="includes/caller.php?caller_id=logout">
                                <img onMouseOver="swapDark('7')" onMouseOut="swapLight('7')" class="botImg" src="../img/logoutIcon.png" alt="Logout">
                                <p class="menuText header">Logout</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
        	</div>
        </div>
    </footer>
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="../js/main.js"></script>
  </body>
</html>

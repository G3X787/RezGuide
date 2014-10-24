<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fanshawe Student Union - Contests</title>
    <link rel="stylesheet" href="css/foundation.css" />
	<script src="js/vendor/modernizr.js"></script>
    
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/jquery.nicescroll.js"></script> 
    
    <script>

	$(document).ready(

    function() {

        $(".accordionScroll").niceScroll({cursorcolor:"#518d84",cursorwidth: "10px", cursorborder:"none"}); 
   	 });
	 </script>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    
    <link rel="shortcut icon" href="img/favicon.ico" />
  </head>
  <body>
    <header>
    	<div class="row" id="headerRow">
        	<div class="small-3 columns" id="mainLogo">
            	<img src="img/FINAL_LOGO.png" alt="Reznet"> 
            </div>
            <div class="small-9 columns" id="pageTitle">
            	<div id="headerContainerSolo">
            	<h2 id="titleHeaderSolo" class="text-right header"><span class="kern">F</span><span class="kern">S</span><span class="kern">U</span></h2>
                </div>
            </div>
        </div>
    </header>
    <section class="mainContent">
    <div class="row">
    	<div class="small-10 small-centered columns text-center">
    		<p id="noticeTitle" class="header">Contests</p>
        </div>
    </div>
    <div class="row">
    <div class="small-8 small-centered columns">
    	<div class="accordionScroll">
    	<dl class="accordion" data-accordion>
        	<dd class="accordionBottom">
                <a href="#panel1" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Fanshawe's Got Talent<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                <div id="panel1" class="content"> 
                    <p class="complaintDate">November 18</p>
                    <p class="location">Forwell Hall</p>
                    <p>Can you sing, play a musical instrument, juggle, dance or unicycle? Do you own, or have access to a ventriloquist dummy? If you answered yes to any of those questions, or possess another talent that you wish to show off, then we want you to enter the Fanshawe Student Union’s third annual Fanshawe’s Got Talent competition.</p>
                    <a href="#"><p>More Info</p></a>
                </div>
            </dd>
            <dd class="accordionBottom">
                <a href="#panel2" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Knights Tickets <span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                <div id="panel2" class="content"> 
                    <p class="complaintDate">October 3</p>
                    <p class="location">Forwell Hall</p>
                    <p>The Fanshawe Student Union is giving away two pairs of tickets to the London Knights’ game on October 3rd against the Kitchener Rangers. The game takes place at Budweiser Gardens, and starts at 7:30 pm.</p>
                    <a href="#"><p>More Info</p></a>
                </div>
            </dd>
            <dd class="accordionBottom">
                <a href="#panel3" class="accordionLink accordionTitle" onClick="highlightLink2(this);">NHL Pool<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                <div id="panel3" class="content">
                    <p class="complaintDate">September 15</p>
                    <p class="location">Forwell Hall</p>
                    <p>Open to all Fanshawe students. One entry per person and you could win up to $150 Downtown London Dollars!</p>
                    <a href="#"><p>More Info</p></a>
                </div>
            </dd>
            <dd class="accordionBottom">
                <a href="#panel4" class="accordionLink accordionTitle" onClick="highlightLink2(this);">Microsoft Surface Tablet<span class="right accordionDropDownIcon"><img class="imgswap" src="img/accordionArrowDown.png" alt="Click For more Information."></span> </a>
                <div id="panel4" class="content"> 
                    <p class="complaintDate">September 15</p>
                    <p class="location">Forwell Hall</p>
                    <p>Simply enter with your email address and student number for a chance to win a Microsoft Surface Tablet. Must be a Full-Time student to enter.</p>
                    <a href="#"><p>More Info</p></a>
                </div>
            </dd>
        
        
        </dl>
        </div>
        </div>
    </div>
    
    <div class="row">
        	<div class="small-5 small-push-4 columns">
            	<div class="profileNav2">
            		<ul class="pagination"> 
                		<li><a href="fsu_events.php"><img id="prevArrow" src="img/profilePrevArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                    	<li><a href="fsu_general.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="currentPage"></a></li> 
                    	<li><a href="fsu_events.php"><img src="img/profilePageIcon.png" height="20px" width="20px" alt="emptyPage"></a></li> 
                        <li><a href="fsu_contests.php"><img src="img/profileCurrentPage.png" height="20px" width="20px" alt="emptyPage"></a></li>
                    	 
                    	<li class="arrow unavailable"><a href="#"><img id="nextArrow" src="img/profileNextArrow.png" height="20px" width="20px" alt="previous"></a></li> 
                 	</ul>
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
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js/main.js"></script>
  </body>
</html>

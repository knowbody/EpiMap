<?php 

echo <<<END
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>epimap</title>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='description' content=''>
    <meta name='author' content=''>

    <!-- Le styles -->
    <link href='assets/css/bootstrap.css' rel='stylesheet'>
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href='assets/css/bootstrap-responsive.css' rel='stylesheet'>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src='assets/js/html5shiv.js'></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel='apple-touch-icon-precomposed' sizes='144x144' href='http://www.iconsdb.com/icons/preview/orange/hospital-4-xxl.png'>
    <link rel='apple-touch-icon-precomposed' sizes='114x114' href='http://www.iconsdb.com/icons/preview/orange/hospital-4-xxl.png'>
      <link rel='apple-touch-icon-precomposed' sizes='72x72' href='http://www.iconsdb.com/icons/preview/orange/hospital-4-xxl.png'>
                    <link rel='apple-touch-icon-precomposed' href='http://www.iconsdb.com/icons/preview/orange/hospital-4-xxl.png'>
                                   <link rel='shortcut icon' href='http://www.iconsdb.com/icons/preview/orange/hospital-4-xxl.png'>
		
	<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
     google.load('visualization', '1', {'packages': ['geochart']});
     google.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Tweets'],
          ['Germany', 200],
          ['United States', 300],
          ['Brazil', 400],
          ['Canada', 500],
          ['France', 600],
          ['Russia', 700],
		  ['Ghana', 150],
		  ['Italy', 273],
		  ['France', 175],
		  ['China', 30],
		  ['Iran', 45],
		  ['Australia', 349],
		  ['Mozambique', 75],
		  ['South Africa', 230],
		  ['Nigeria', 186],
		  ['Kenya', 80],
		  ['Peru', 34],
		  ['India', 423]
        ]);

        var options = {
		};
		
        var chart = new google.visualization.GeoChart(document.getElementById('chart_div'));
        chart.draw(data, options);
    };
    </script>	
		
	 <script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
		
     google.load('visualization', '1', {'packages': ['geochart']});	
     google.setOnLoadCallback(drawMarkersMap2);
	 	
      function drawMarkersMap2() {
      var data = google.visualization.arrayToDataTable([
        ['City',   'Tweets', 'Threat Level'],
        ['Rome',      27614,    2],
        ['Milan',     1324,    1],
        ['Naples',    959,     3],
        ['Turin',     9075,     2],
        ['Palermo',   655,     2],
        ['Genoa',     609,     1],
        ['Bologna',   380,     3],
        ['Florence',  3712,     1],
        ['Fiumicino', 670,      1],
        ['Anzio',     522,      3],
        ['Ciampino',  38,      2],
		['Shanghai',      27617,    1],
        ['Istanbul',     13240,    1],
        ['Karachi',    9595,     1],
        ['Mumbai',     90,     1],
        ['Moscow',   65,     3],
        ['Beijing',     6076,    3],
        ['Sao Paulo',   3801,     2],
        ['Tianjin',  37122,     3],
        ['Delhi', 670,      3],
        ['Seoul',     5212,      1],
        ['Jakarta',  3822,      2],
		['New York',      234,    3],
        ['Tehran',     130,    2],
        ['London',    95974,     1],
        ['Lagos',     90763,     3],
        ['Saint Petersburg',   6575,     1],
        ['Berlin',     6230,    3],
        ['Madrid',   381,     2],
        ['Casablanca',  372,     1],
        ['Paris', 370,      1],
        ['Alabama',     5292,     3],
        ['Toronto',  31262,      2],
		['Los Angeles',      2767,    1],
        ['Chicago',     4110,    1],
        ['Houston',    9574,     1],
        ['Philadelphia',     9073,     2],
        ['Miami',   6555,     2],
        ['Washington',     606,     1],
        ['Montreal',   38011,     2],
        ['California',  3712,    1],
        ['San Francisco', 670,      2],
        ['Athens',     5292,      1],
		['Sydney',     35292,     1],
		['Amsterdam',    458,     1],
        ['Prague',     233,     1],
        ['Macau',   235,     1],
        ['Taipei',     673,    1],
        ['Stockholm',   9445,     2],
        ['Granada',  67542,     3],
        ['Mexico', 37440,      3],
        ['Guangzhou', 342,   1],
        ['Berlin',  3425,      2],
		['Budapest',      276,    1],
        ['Orlando',     41230,    3],
        ['Munich',    974,     1],
        ['Milan',     273,     1],
        ['Perth',   655,     1],
        ['Cairo',     8676,     2],
        ['Zurich',   381,     1],
        ['Copenhagen',  3712,    2],
        ['Edinburgh', 670,      1],
        ['Cape Town',     87292,      3],
		['Nice',    292,     1],
        ['Warsaw',  362,      1]
      ]);

      var options = {
        displayMode: 'markers',
        colorAxis: {colors: ['green', 'blue']}
      };

      var chart = new google.visualization.GeoChart(document.getElementById('chart_div2'));
      chart.draw(data, options);
		
    };
    </script>	
		
  </head>
  <body>

    <div class='navbar navbar-inverse navbar-fixed-top'>
      <div class='navbar-inner'>
        <div class='container'>
          <button type='button' class='btn btn-navbar' data-toggle='collapse' data-target='.nav-collapse'>
            <span class='icon-bar'></span>
          </button>
		  
          <a class='brand' href='index.php'><img src='assets/img/logo.png'/></a>
          <div class='nav-collapse collapse'>
            <ul class='nav'>
			  <li ><a href='intelligence.php'>Intelligence</a></li>
              <li ><a href='about.php'>About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
		<center>
		<div id="chart_div2" style="width: 900px; height: 500px;"></div>
		<br />
		<br />
		<br />
		<div id="chart_div" style="width: 900px; height: 500px;"></div>
		</center>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='assets/js/jquery.js'></script>
    <script src='assets/js/bootstrap-transition.js'></script>
    <script src='assets/js/bootstrap-alert.js'></script>
    <script src='assets/js/bootstrap-modal.js'></script>
    <script src='assets/js/bootstrap-dropdown.js'></script>
    <script src='assets/js/bootstrap-scrollspy.js'></script>
    <script src='assets/js/bootstrap-tab.js'></script>
    <script src='assets/js/bootstrap-tooltip.js'></script>
    <script src='assets/js/bootstrap-popover.js'></script>
    <script src='assets/js/bootstrap-button.js'></script>
    <script src='assets/js/bootstrap-collapse.js'></script>
    <script src='assets/js/bootstrap-carousel.js'></script>
    <script src='assets/js/bootstrap-typeahead.js'></script>






</body></html>
END;




?>
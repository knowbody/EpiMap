<?php 

echo <<<END
<!DOCTYPE html>
<html lang='en'>
  <head>
    <meta charset='utf-8'>
    <title>Bootstrap, from Twitter</title>
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
		
	<script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load("visualization", "1", {packages:["treemap"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        // Create and populate the data table.
        var data = google.visualization.arrayToDataTable([
          ['Location', 'Parent', 'Tweet Size', 'Tweet increase/decrease (color)'],
          ['Global',    null,                 0,                               0],
          ['Americas',   'Global',             0,                               0],
          ['Europe',    'Global',             0,                               0],
          ['Asia',      'Global',             0,                               0],
          ['Australia', 'Global',             0,                               0],
          ['Africa',    'Global',             0,                               0],
          ['Brazil',    'Americas',            11000,                              10],
          ['USA',       'Americas',            52000,                              31],
          ['Mexico',    'Americas',            24000,                              12],
          ['Canada',    'Americas',            16000,                              -23],
          ['France',    'Europe',             42000,                              -11],
          ['Germany',   'Europe',             31000,                              -2],
          ['Sweden',    'Europe',             22000,                              -13],
          ['Italy',     'Europe',             17000,                              4],
		['Switzerland',    'Europe',             4000,                              +40],
          ['UK',        'Europe',             21000,                              -5],
          ['China',     'Asia',               36000,                              4],
          ['Japan',     'Asia',               20000,                              -12],
          ['India',     'Asia',               40000,                              63],
          ['Laos',      'Asia',               400,                               34],
          ['Mongolia',  'Asia',               100,                               -5],
          ['Israel',    'Asia',               1200,                              24],
          ['Iran',      'Asia',               1800,                              13],
          ['Pakistan',  'Asia',               1100,                              -52]
        ]);

        // Create and draw the visualization.
        var tree = new google.visualization.TreeMap(document.getElementById('chart_div'));
        tree.draw(data, {
          minColor: '#f00',
          midColor: '#ddd',
          maxColor: '#0d0',
          headerHeight: 15,
          fontColor: 'black',
          showScale: true
		  backgroundColor: #C6C6AA});
        }
    </script>
		
	 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.load('visualization', '1', {'packages':['motionchart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Disease');
        data.addColumn('date', 'Date');
        data.addColumn('number', 'Tweets');
        data.addColumn('string', 'Location');
        data.addRows([
          ['HIV',  new Date (2012,0,1), 849, 'LEDC'],
          ['Flu', new Date (2012,2,1), 1150, 'LEDC'],
          ['Cholera', new Date (2012,3,1), 539, 'LEDC'],
		  ['HIV',  new Date (2013,6,1), 1000, 'LEDC'],
          ['Flu', new Date (2013,6,1), 1252, 'LEDC'],
          ['Cholera', new Date (2013,6,1), 800,  'LEDC'],
		          ['HIV',  new Date (2012,4,1), 238, 'MEDC'],
          ['Flu', new Date (2012,5,1), 112, 'MEDC'],
          ['Cholera', new Date (2012,6,1), 35, 'MEDC'],
          ['HIV',  new Date (2013,6,1), 200,  'MEDC'],
          ['Flu', new Date (2013,6,1), 100, 'MEDC'],
          ['Cholera', new Date (2013,6,1), 50,  'MEDC']
        ]);
        var chart = new google.visualization.MotionChart(document.getElementById('chart_div2'));
        chart.draw(data, {width: 900, height:500});
      }
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
		<br /> <br /> <br />
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
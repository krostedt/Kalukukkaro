<!doctype html>
<html lang="fi">
<head>

<?php include_once "head.php"; ?>

  <title>KALUKUKKARO</title>

  <meta property="og:url" content="http://www.kalukukkaro.fi" />
  <meta property="og:title" content="Kalukukkaro - Markkinointiviestinnän tekoja" />
  <meta property="og:description" content="Tarjoamme konkreettisia verkkopalveluiden, kampanjoiden, sisältöjen ja mittaamisen ratkaisuja. Olemme teknisesti taitavin, ajatukseltamme kirkkain, ratkaisuiltamme selkein ja universumissa voittamaton, mutta puheiden sijaan keskitymme tekoihin. Vähemmän puhetta, enemmän tekoja: http://www.kalukukkaro.fi"/>

 
    <script src="js/vendor/Chart.js"></script>
    <script src="js/legend.js"></script>

</head>
<body>

<?php include_once "header.php"; ?>

  <div class="main content">
    
    <div class="column">
      <div class="inner">
        <h1>Digitoimisto jossa on munaa</h1>
        <p>KALUKUKKARO tarjoaa markkinointiviestinnän tekoja - konkreettisia verkkopalveluiden, kampanjoiden, sisältöjen ja mittaamisen ratkaisuja asiakkaamme hyödyksi. Meillä asiakkaamme on aina kuin herran kalukukkarossa.</p> 
        <p>Kukkaro tyhjänä? Ota yhteyttä!</p>
      </div>

      <h2>Kasvun&auml;kym&auml;t</h2>
    
    </div>

    <div class="white-column growth">

      <h3>Liikevaihdon kehitys</h3>
      <canvas id="growth" width="300" height="300"></canvas>
      <p>(*Sataa tuhatta euroa)</p>

    </div>

    <div class="white-column profit">

    <h3>Liikevoittosuunnitelma</h3>
     <canvas id="profit" width="300" height="300"></canvas>
     <p>(*prosenttia)</p>

    </div>


    <div class="white-column segment">

     <h3>Markkinasegmentti</h3>
     <canvas id="pie" width="300" height="300"></canvas>
     <div id="pieLegend"></div>

    </div>
  

  </div>
  
    <script>
    var ctx = document.getElementById("growth").getContext("2d");
    var wang = document.getElementById("profit").getContext("2d");
    var potential = document.getElementById("pie").getContext("2d");
 
    var data = {
        labels : ["2013","2014","2015","2016", "2017", "2018"],
        datasets : [
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                pointColor : "rgba(151,187,205,1)",
                pointStrokeColor : "#fff",
                data : [10,25,30,40,150,180]
            }
        ]
    }
    var options = {         
        scaleOverride : true,
        scaleSteps : 18,
        scaleStepWidth : 10,
        scaleStartValue : null,
        scaleLineColor : "rgba(0,0,0,.1)", 
        scaleLineWidth : 1,
        scaleFontFamily : "'Arial'",
        scaleFontSize : 12,
        scaleFontStyle : "normal",
        scaleFontColor : "#666",    
        scaleShowGridLines : true,
        scaleGridLineColor : "rgba(0,0,0,.05)",
        scaleGridLineWidth : 1, 
        pointDot : true,
        pointDotRadius : 3,
        pointDotStrokeWidth : 1,
        datasetStroke : true,
        datasetStrokeWidth : 2,
        datasetFill : true,
        animationEasing : "easeOutQuart"
    }


    new Chart(ctx).Line(data,options);

    var data = {
        labels : ["2013","2014","2015","2016","2017","2018"],
        datasets : [
            {
                fillColor : "rgba(151,187,205,0.5)",
                strokeColor : "rgba(151,187,205,1)",
                data : [30,30,100,100,30,30],
                title : 'Liikevoittosuunnitelma'
            }
        ]
    }

    var bar_options = {
        scaleOverlay : false,
        scaleOverride : true,
        scaleSteps : 10,
        scaleStepWidth : 10,
        scaleStartValue : 0,
        scaleLineColor : "rgba(0,0,0,.1)",
        scaleLineWidth : 1,
        scaleShowLabels : true,
        scaleLabel : "<%=value%>",
        scaleFontFamily : "'Arial'",
        scaleFontSize : 12,
        scaleFontStyle : "normal",
        scaleFontColor : "#666",    
        scaleShowGridLines : true,
        scaleGridLineColor : "rgba(0,0,0,.05)",
        scaleGridLineWidth : 1,
        barShowStroke : true,
        barStrokeWidth : 2,
        barValueSpacing : 5,
        barDatasetSpacing : 1,
        animation : true,
        animationSteps : 60,
        animationEasing : "easeOutElastic"  
    }

    var dong = new Chart(wang);
    dong.Bar(data,bar_options);

    setTimeout(function() {
        data.datasets[0].data = [15,15,50,50,15,15];
        dong.Bar(data,bar_options);
        setTimeout(function() {
            data.datasets[0].data = [30,30,100,100,30,30];
            dong.Bar(data,bar_options);
        }, 5000);
    }, 5000);

    var potential_options = {
        segmentShowStroke : true,
        segmentStrokeColor : "#fff",
        segmentStrokeWidth : 2,
        animationSteps : 100,
        animationEasing : "easeOutCirc",
        animateRotate : true,
        animateScale : true
    }

    new Chart(potential).Pie([{ value: 15, color:"#E0E4CC" }, { value : 85, color : "#69D2E7" }],potential_options);
    legend(document.getElementById("pieLegend"), [{ value : 15, color : "#E0E4CC", title: "Kalukukkaron tulevat asiakkaat" },
        { value : 85, color : "#69D2E7", title: "Kalukukkaron nykyiset asiakkaat" }]);

 

    </script>
 

<?php include_once "footer.php"; ?>

</body>
<!-- /Turku. -->
</html>
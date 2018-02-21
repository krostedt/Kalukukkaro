<!doctype html>
<html lang="fi">
<head>

<?php include_once "head.php"; ?>

  <title>KALUKUKKARO</title>

 
  <meta property="og:url" content="http://www.kalukukkaro.fi" />
  <meta property="og:title" content="Kalukukkaro - Markkinointiviestinnän tekoja" />
  <meta property="og:description" content="Tarjoamme konkreettisia verkkopalveluiden, kampanjoiden, sisältöjen ja mittaamisen ratkaisuja. Olemme teknisesti taitavin, ajatukseltamme kirkkain, ratkaisuiltamme selkein ja universumissa voittamaton, mutta puheiden sijaan keskitymme tekoihin. Vähemmän puhetta, enemmän tekoja: http://www.kalukukkaro.fi"/>

</head>
<body>
  <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript">
  $( document ).ready(function() {
    
    setTimeout(excecutive_shuffle, 5000);
    var layoffs = setInterval(layoff, 2000);

    function excecutive_shuffle() {
      
      var $tier1 = $('.tier-1 li');
      var $manager_no = Math.floor((Math.random()*$tier1.length)+1);
      
      $('.tier-1 li:nth-child(' + $manager_no + ')').fadeOut('slow', function() {
        
        var $manager = $(this);
        $(this).remove();
        
        setTimeout(function() {
          $('.tier-1').append($manager);
          $manager.fadeIn('slow');
        }, 5500);

      });

      setInterval(title_shuffle, 12500);

    }

    function layoff() {
      $worker_count = $('.tier-3 li').length;
      var $worker_no = Math.floor((Math.random()*$worker_count)+1);

      if($worker_count < 2) {
        $('.tier-3-title').text('Työntekijä');
        clearInterval(layoffs);
      } else {
          //console.log("laid off worker " + $worker_no);
          $('.tier-3-title').text('Työntekijät');
          $('.tier-3 li:nth-child('+$worker_no+')').fadeOut('slow').remove();

      }

    }

    function title_shuffle() {
      
      //var shufflin = Math.floor((Math.random()*4)+1);

      var shufflin = Math.floor(Math.random() * (4 - 1 + 1) + 1);

      console.log("title shuffle " + shufflin);

      $("h2").text("Uudistettu organisaatiomme");

      switch (shufflin) {
        case 1:
          $( ".tier-1 li" ).each(function( index ) {
            $( this ).text($( this ).data('finnish'));
          });
          break;
        case 2:
          $( ".tier-1 li" ).each(function( index ) {
            $( this ).text($( this ).data('english'));
          });
          break;
        case 3:
          $( ".tier-1 li" ).each(function( index ) {
            $( this ).html($( this ).data('english') + ' <br />(' + $( this ).data('finnish') + ')' );
          });
          break;
        case 4:
          $( ".tier-1 li" ).each(function( index ) {
           $( this ).text($( this ).data('royal'));
          });
          break; 
        default:
          $("h2").text("Organisaatiomme");
          $( ".tier-1 li" ).each(function( index ) {
            $( this ).text($( this ).data('finnish'));
          });
          break;
      }


    }

  });
</script>

<?php include_once "header.php"; ?>

  <div class="main content">
    <div class="column">
      <div class="inner">
        <h1>Kurkista kukkaroon</h1>
        <p>KALUKUKKARO työllistää kymmeniä kovia tekijöitä jotka ovat motivoituneita antamaan panoksensa projekteihisi.</p>
      </div>
    </div>
    <h2>Organisaatiomme</h2>

    <div class="codpiece-grid">

      <h3>Ylin johto</h3>
      <ul class="codpieces tier-1">
          <li data-english="CEO" data-finnish="Toimitusjohtaja" data-royal="Digimarsalkka">Toimitusjohtaja</li>
          <li data-english="CSO" data-finnish="Myyntijohtaja" data-royal="Kaupparuhtinas">Myyntijohtaja</li>
          <li data-english="CMO" data-finnish="Markkinointijohtaja" data-royal="Tiedonvälitysparoni">Markkinointijohtaja</li>
          <li data-english="CCO" data-finnish="Asiakasjohtaja" data-royal="Yhteydenpitokreivi">Asiakasjohtaja</li>
          <li data-english="CTO" data-finnish="Teknologiajohtaja" data-royal="Teknologiaherttua">Teknologiajohtaja</li> 
          <li data-english="CPO" data-finnish="Tuotantojohtaja" data-royal="Tuotantomarkiisi">Tuotantojohtaja</li>
      </ul>
      <h3>Keskijohto</h3>
      <ul class="codpieces tier-2">
          <li>Toimistopäällikkö</li>
          <li>Myyntipäällikkö</li>
          <li>Markkinointipäällikkö</li>
          <li>Asiakaspäällikkö</li>
          <li>Projektipäällikkö</li> 
          <li>Tuotantopäällikkö</li>
      </ul>
      <h3 class="tier-3-title">Työntekijät</h3>
      <ul class="codpieces tier-3">
          <li>Tuottaja</li>
          <li>Tuottaja</li>
          <li>Myyntineuvottelija</li>
          <li>Myyntineuvottelija</li>
          <li>Pensselimies</li>
          <li>Pensselimies</li>
          <li>Käsityöläinen</li> 
          <li>Käsityöläinen</li> 
          <li>Käsityöläinen</li> 
          <li>Sisällöntuottaja</li>
          <li>Sisällöntuottaja</li>
      </ul>

    </div>

  </div>
  
<?php include_once "footer.php"; ?>

</body>
<!-- /Turku. -->
</html>
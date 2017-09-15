
  <?php include("header.php"); ?>

  <header>
    <div id="slider" class="carousel slide" data-ride="carousel" data-interval="5000">
      <ol class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        <div class="item active">
          <img src="img/img-2.jpg" alt="Los Angeles">
        </div>
        <div class="item">
          <img src="img/img-6.jpg" alt="Chicago">
        </div>
        <div class="item">
          <img src="img/img-7.jpg" alt="New York">
        </div>
      </div>

      <a class="left carousel-control" href="#slider" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="right carousel-control" href="#slider" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </header>

  <section id="info" class="container">
    <div class="row" data-aos="fade-up" data-aos-duration="3000" >
      <h1 class="text-center">Informacje</h1>
      <p class="content">
        Firma N-TRANS została założona przez dwóch przyjaciół dnia 06.10.16r Celem naszej firmy było zapewnienie pracownikom dobrej zabawy i miłej atmosfery jak również staraliśmy się wprowadzać nowoczesną technologię by jak najbardziej urealnić rozgrywkę. Cel naszej firmy jest aktualny do dnia dzisiejszego. Nasze starania doprowadziły do tego  że jesteśmy jedną z najbardziej rozpoznawalnych firm na rynku.
      </p>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <div class="col-sm-6">
        <div class="img-wrapper">
          <img class="responsive" alt="" src="img/img-1.jpg" />
        </div>
        <p>
          Na samym początku o naszej firmie nikt nie słyszał. Było tylko kilku kierowców a nasz system rozliczeń budził wiele do życzenia. Co tydzień w piątki z entuzjazmem jeździliśmy konwoje naszymi czerwonymi MAN-ami i reklamowaliśmy firmę. To spowodowało że do naszej firmy dołączało coraz więcej osób a czerwone MAN-y były naszym znakiem rozpoznawczym
        </p>
      </div>
      <div class="col-sm-6">
        <div class="img-wrapper">
          <img class="responsive" alt="" src="img/img-3.jpg" />
        </div>
        <p>
          Aktualnie nasza firma liczy ponad 25 kierowców i ciągle się powiększa. By iść z duchem czasu zmieniliśmy nasze stare czerwone MAN-y na nowe białe Scanie. Ciągle kontynuujemy naszą tradycję piątkowych konwojów, które odbywają się również z innymi firmami. Przez ten cały czas rozwijaliśmy nasz panel rozliczeń jak również rozwinęliśmy reklamę naszej firmy poprzez media społecznościowe i stronę internetową. Przez cały ten czas przyświeca nam myśl by naszym pracownikom było jak najlepiej w firmie.
        </p>

      </div>
    </div>
  </section>
	
  <?php include("footer.php"); ?>

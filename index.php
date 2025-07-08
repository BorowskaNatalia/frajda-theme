<?php
get_header();
?>

<section class="hero">
  <div class="hero-wrapper">
    <div class="hero-textbox">
      <h1>Stajnia Frajda</h1>
      <div class="hero-row">
         <p>Miejsce stworzone dla koni i ludzi.</p>
         <a href="#o-nas" class="btn btn-orange">O NAS</a>
      </div>
    </div>
  </div>
</section>

<section id="o-nas" class="about-section">
  <div class="about-wrapper">
  
    <div class="about-text">
      <span class="section-label">Pasja do koni</span>
      <h2>Twój azyl na świeżym powietrzu</h2>
      <p>
        Oferujemy wyjątkowe doświadczenia jeździeckie dla każdego – od początkujących po zaawansowanych. 
        U nas poczujesz spokój, naturę i moc relacji z końmi.
      </p>
    </div>
    
    <div class="about-image">
      <img src="<?php echo get_template_directory_uri(); ?>/src/onas.jpg" alt="Koń przy stajni">
    </div>

  </div>
</section>

<section class="services-section">
  <div class="services-wrapper">
    <h2 class="section-title">Nasza oferta</h2>
    <div class="services-grid">
      <div class="service-box">
        <img src="<?php echo get_template_directory_uri(); ?>/src/treningi.jpg" alt="Jazda konna">
        <h3>Jazda konna</h3>
        <p>Dla początkujących i zaawansowanych.</p>
      </div>
      <div class="service-box">
        <img src="<?php echo get_template_directory_uri(); ?>/src/pensjonat.jpg" alt="Pensjonat dla koni">
        <h3>Pensjonat</h3>
        <p>Bezpieczny dom i opieka dla Twojego konia.</p>
      </div>
      <div class="service-box">
        <img src="<?php echo get_template_directory_uri(); ?>/src/fetyny.jpg" alt="Hipoterapia">
        <h3>Hipoterapia</h3>
        <p>Terapia wspierająca rozwój z udziałem koni.</p>
      </div>
    </div>
    <div class="services-btn">
      <a href="#kontakt" class="btn btn-orange">Skontaktuj się</a>
    </div>
  </div>
</section>





<?php
get_footer();
?>
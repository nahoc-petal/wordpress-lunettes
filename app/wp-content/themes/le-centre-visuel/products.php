<?php /* Template Name: Products */ ?>


<?php get_header(); ?>

<section class="hero is-homepage-banner has-text-right is-large">
  <div class="hero-body">
    <div class="container">
      <h1 class="lato title is-uppercase">
        Forfaits
      </h1>
      <h2 class="subtitle">
        Large subtitle
      </h2>
    </div>
  </div>
</section>
<br />
<br />
<section class="section has-text-centered">
  <div class="container">
    <div class="columns">
      <div class="column">
        <a href="https://atlas.opto.com/v1/router/2160/bookappointment?lang=fr" class="box">
          <br />
          <h2 class="title lustria">Prendre un rendez-vous</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/calendar.jpg" alt="">
        </a>
      </div>
      <div class="column">
        <a href="/commande-de-lentilles-corneennes" class="box">
          <br />
          <h2 class="title lustria">Commande de lentilles</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/lens.png" alt="">
        </a>
      </div>
    </div>
  </div>
</section>
<br />
<br />
<br />
<br />
<section class="about">
  <div class="about-pattern"></div>
  <div class="columns">
    <div class="column about-bg">
    </div>
    <div class="column">
      <div class="about-description">
        <h2 class="title lustria">Bienvenue au Centre Visuel de Montréal-Nord!</h2>
        <p class="lato">Depuis 1961, les professionnels du Centre Visuel de Montréal-Nord vous offrent un service
          professionnel et
          des
          produits de qualité correspondant à vos besoins. La santé oculaire de nos patients est au cœur de notre
          pratique et notre engagement à cet égard est total!
          Notre équipe, composée de cinq optométristes et d’une dizaine de conseillers passionnés par leur profession,
          est toujours à l’affût des tendances et des toutes dernières technologies afin de répondre au mieux aux
          besoins
          spécifiques de chaque patient.</p>
        <br />
        <p class="lato">Plus de 2000 montures de grandes marques sont disponibles sur place.</p>
        <br />
        <p class="lato">Une gamme complète de lentilles cornéennes de spécialité et accessoires optiques de qualité
          sont également
          offerts. De plus, notre laboratoire de taillage sur place nous permet la livraison de vos lunettes en 24
          heures.</p>
      </div>
    </div>
  </div>
</section>
<br />
<br />
<br />
<section class="team section has-text-centered">
  <div class="container">
    <hr class="separator">
    <h2 class="title lustria">Notre équipe</h2>
    <br />
    <br />
    <br />
    <div class="columns">
      <div class="column is-3 is-team-member">
        <div class="is-team-member-image yves"></div>
        <span class="subtitle lato">Dr. Yves Allard</span>
        <h4 class="lato">Optométriste</h4>
      </div>

      <div class="column is-3">
        <div class="is-team-member-image blandine"></div>
        <span class="subtitle lato">Dre. Blandine Sonnier</span>
        <h4 class="lato">Optométriste</h4>
      </div>

      <div class="column is-3">
        <div class="is-team-member-image marie-claude"></div>
        <span class="subtitle lato">Dre. Marie-Claude Latreille</span>
        <h4 class="lato">Optométriste</h4>
      </div>

      <div class="column is-3">
        <div class="is-team-member-image aviva"></div>
        <span class="subtitle lato">Dre. Aviva Masella</span>
        <h4 class="lato">Optométriste</h4>
      </div>
    </div>
    <br />
    <br />
    <div class="columns" style="justify-content: center;">
      <div class="column is-3">
        <div class="is-team-member-image judith"></div>
        <span class="subtitle lato">Dre. Judith Naud</span>
        <h4 class="lato">Optométriste</h4>
      </div>

      <div class="column is-3">
        <div class="is-team-member-image eric"></div>
        <span class="subtitle lato">Dr. Eric Pharand</span>
        <h4 class="lato">Optométriste</h4>
      </div>

      <div class="column is-3">
        <div class="is-team-member-image fatima"></div>
        <span class="subtitle lato">Dre. Fatima Menhem</span>
        <h4 class="lato">Optométriste</h4>
      </div>
    </div>
  </div>
</section>
<br />
<br />
<br />
<br />
<div id="contact" class="contact has-text-white lato">
  <section class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-3">
          <h2 class="subtitle has-text-white">Adresse &amp; Téléphone</h2>
          <p>
            4800 Henri-Bourassa Est
            <br/>
            Montréal, QC H1H 1M6
            <br/>
            Téléphone : <a class="has-text-white" href="tel:5143215682">(514) 321-5682</a>
            <br/>
            Fax : (514) 325-1363
          </p>
        </div>
        <div class="column is-3">
          <h2 class="subtitle has-text-white">Horaires</h2>
          <p>
            Lundi : 9h - 20h
            Mardi : 9h - 20h
            Mercredi : 9h - 20h
            Jeudi : 9h - 20h
            Vendredi : 9h - 20h
            Samedi : 9h - 16h
            Dimanche : fermé
          </p>
        </div>
        <div class="column is-3">
          <h2 class="subtitle has-text-white">Vidéo</h2>
          <iframe width="100%" src="https://www.youtube.com/embed/LCTpBDEDhe4" frameborder="0" allowfullscreen></iframe>
        </div>
        <div class="column is-3">
          <h2 class="subtitle has-text-white">Marques</h2>
          <img src="<?php echo get_template_directory_uri(); ?>/images/prevencia.png" alt="" />
          <img src="<?php echo get_template_directory_uri(); ?>/images/transitions.png" alt="" />
        </div>
      </div>
    </div>
  </section>
</div>
<style type="text/css">
  #map {
    width: 100%;
    height: 500px;
  }
</style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

<script type="text/javascript">
  // When the window has finished loading create our google map below
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
    // Basic options for a simple Google Map
    // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
    var mapOptions = {
      // How zoomed in you want the map to start at (always required)
      zoom: 11,

      // The latitude and longitude to center the map (always required)
      center: new google.maps.LatLng(40.6700, -73.9400), // New York

      // How you would like to style the map. 
      // This is where you would paste any style found on Snazzy Maps.
      styles: [{
        "featureType": "landscape.man_made",
        "elementType": "geometry",
        "stylers": [{
          "color": "#f7f1df"
        }]
      }, {
        "featureType": "landscape.natural",
        "elementType": "geometry",
        "stylers": [{
          "color": "#d0e3b4"
        }]
      }, {
        "featureType": "landscape.natural.terrain",
        "elementType": "geometry",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "poi",
        "elementType": "labels",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "poi.business",
        "elementType": "all",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "poi.medical",
        "elementType": "geometry",
        "stylers": [{
          "color": "#fbd3da"
        }]
      }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{
          "color": "#bde6ab"
        }]
      }, {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [{
          "visibility": "off"
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ffe15f"
        }]
      }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
          "color": "#efd151"
        }]
      }, {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#ffffff"
        }]
      }, {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "black"
        }]
      }, {
        "featureType": "transit.station.airport",
        "elementType": "geometry.fill",
        "stylers": [{
          "color": "#cfb2db"
        }]
      }, {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{
          "color": "#a2daf2"
        }]
      }]
    };

    // Get the HTML DOM element that will contain your map 
    // We are using a div with id="map" seen below in the <body>
    var mapElement = document.getElementById('map');

    // Create the Google Map using our element and options defined above
    var map = new google.maps.Map(mapElement, mapOptions);

    // Let's also add a marker while we're at it
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(40.6700, -73.9400),
      map: map,
      title: 'Snazzy!'
    });
  }
</script>
<div id="map"></div>
<?php
get_footer();
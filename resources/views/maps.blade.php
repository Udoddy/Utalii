<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from preview.colorlib.com/theme/travelo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 13:51:04 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>UtaliiTz</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">


<link rel="stylesheet" href="{{ asset('travelo/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/magnific-popup.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/themify-icons.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/nice-select.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/flaticon.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/gijgo.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/animate.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/slick.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/slicknav.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/../../../ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css')}}">
<link rel="stylesheet" href="{{ asset('travelo/css/style.css')}}">

<script nonce="f85f36a9-69a2-4620-99c4-35f5a7ae4393">(function(w,d){!function(dk,dl,dm,dn){dk[dm]=dk[dm]||{};dk[dm].executed=[];dk.zaraz={deferred:[],listeners:[]};dk.zaraz.q=[];dk.zaraz._f=function(dp){return function(){var dq=Array.prototype.slice.call(arguments);dk.zaraz.q.push({m:dp,a:dq})}};for(const dr of["track","set","debug"])dk.zaraz[dr]=dk.zaraz._f(dr);dk.zaraz.init=()=>{var ds=dl.getElementsByTagName(dn)[0],dt=dl.createElement(dn),du=dl.getElementsByTagName("title")[0];du&&(dk[dm].t=dl.getElementsByTagName("title")[0].text);dk[dm].x=Math.random();dk[dm].w=dk.screen.width;dk[dm].h=dk.screen.height;dk[dm].j=dk.innerHeight;dk[dm].e=dk.innerWidth;dk[dm].l=dk.location.href;dk[dm].r=dl.referrer;dk[dm].k=dk.screen.colorDepth;dk[dm].n=dl.characterSet;dk[dm].o=(new Date).getTimezoneOffset();if(dk.dataLayer)for(const dy of Object.entries(Object.entries(dataLayer).reduce(((dz,dA)=>({...dz[1],...dA[1]})))))zaraz.set(dy[0],dy[1],{scope:"page"});dk[dm].q=[];for(;dk.zaraz.q.length;){const dB=dk.zaraz.q.shift();dk[dm].q.push(dB)}dt.defer=!0;for(const dC of[localStorage,sessionStorage])Object.keys(dC||{}).filter((dE=>dE.startsWith("_zaraz_"))).forEach((dD=>{try{dk[dm]["z_"+dD.slice(7)]=JSON.parse(dC.getItem(dD))}catch{dk[dm]["z_"+dD.slice(7)]=dC.getItem(dD)}}));dt.referrerPolicy="origin";dt.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(dk[dm])));ds.parentNode.insertBefore(dt,ds)};["complete","interactive"].includes(dl.readyState)?zaraz.init():dk.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script></head>

<script>
  // Initialize and add the map
  let map;
  const Tanzania = { lat: -6.161184, lng: 35.745426 };
  const Serengeti = { lat: -2.7, lng: 35.1 };
  const MountKilimanjaro = { lat: -3.0, lng: 37.3 };
  const ZanzibarArchipelago = { lat: -6.1, lng: 39.2 };
  const NgorongoroConservationArea = { lat: -3.2, lng: 35.5 };
  const SelousGameReserve = { lat: -9.2, lng: 36.2 };
  const KilimanjaroNationalPark = { lat: -3.0, lng: 37.3 };
  const StoneTownofZanzibar = { lat: -6.1, lng: 39.2 };
  const RuinsOfKilwaKisiwaniAndRuinsOfSongoMnara = { lat: -7.3, lng: 39.5 };
  const Tarangire = { lat: -4.0, lng: 36.0 };
  const Ruaha = { lat: -7.8, lng: 34.0 };
  const Udzungwa = { lat: -7.8, lng: 36.9 };
  const Kaporogwe = { lat: -4.8, lng: 38.2 };
  const Kondoa = { lat: -4.9, lng: 35.8 };
  const MateruniWaterfalls = { lat: -3.379449, lng: 37.612598 };
  const MountMeru = { lat: -3.250000, lng: 36.750000 };
  const MomelaLakes = { lat: -3.238356, lng: 36.695133 };
  const OlDoinyoLengai = { lat: -2.766667, lng: 35.900000 };
  const MkomaziNationalPark = { lat: -4.000000, lng: 37.750000 };
  const MahaleMountains = { lat: -6.1761, lng: 29.8698 };
  const Gombe = { lat: -4.908, lng: 29.674 };

  function initMap() {
    map = new google.maps.Map(document.getElementById("map"), {
      center: Tanzania,
      zoom: 7,
    });

    // Add markers
    const marker = new google.maps.Marker({
      position: Serengeti,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker2 = new google.maps.Marker({
      position: MountKilimanjaro,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker3 = new google.maps.Marker({
      position: ZanzibarArchipelago,
      icon: "https://maps.google.com/mapfiles/ms/icons/blue-dot.png",
      map: map,
    });
    const marker4 = new google.maps.Marker({
      position: NgorongoroConservationArea,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker5 = new google.maps.Marker({
      position: SelousGameReserve,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker6 = new google.maps.Marker({
      position: KilimanjaroNationalPark,
      icon: "https://maps.google.com/mapfiles/ms/icons/green-dot.png",
      map: map,
    });
    const marker7 = new google.maps.Marker({
      position: StoneTownofZanzibar,
      icon: "https://maps.google.com/mapfiles/ms/icons/blue-dot.png",
      map: map,
    });
    const marker8 = new google.maps.Marker({
      position: RuinsOfKilwaKisiwaniAndRuinsOfSongoMnara,
      icon: "https://maps.google.com/mapfiles/ms/icons/blue-dot.png",
      map: map,
    });
    const marker9 = new google.maps.Marker({
      position: Tarangire,
      icon: "https://maps.google.com/mapfiles/ms/icons/green-dot.png",
      map: map,
    });
    const marker10 = new google.maps.Marker({
      position: Ruaha,
      icon: "https://maps.google.com/mapfiles/ms/icons/green-dot.png",
      map: map,
    });
    const marker11 = new google.maps.Marker({
      position: Udzungwa,
      icon: "https://maps.google.com/mapfiles/ms/icons/green-dot.png",
      map: map,
    });
    const marker12 = new google.maps.Marker({
      position: Kaporogwe,
      icon: "https://maps.google.com/mapfiles/ms/icons/yellow-dot.png",
      map: map,
    });
    const marker13 = new google.maps.Marker({
      position: Kondoa,
      icon: "https://maps.google.com/mapfiles/ms/icons/orange-dot.png",
      map: map,
    });
    const marker14 = new google.maps.Marker({
      position: MateruniWaterfalls,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker15 = new google.maps.Marker({
      position: MountMeru,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker16 = new google.maps.Marker({
      position: MomelaLakes,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker17 = new google.maps.Marker({
      position: OlDoinyoLengai,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker18 = new google.maps.Marker({
      position: MkomaziNationalPark,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker19 = new google.maps.Marker({
      position: MahaleMountains,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });
    const marker20 = new google.maps.Marker({
      position: Gombe,
      icon: "https://maps.google.com/mapfiles/ms/icons/red-dot.png",
      map: map,
    });

    // Define key descriptions for markers
    const keyDescriptions = {
      Serengeti: "Serengeti National Park - Explore the stunning wildlife and landscapes.",
      MountKilimanjaro: "Mount Kilimanjaro - Embark on a thrilling climb to Africa's highest peak.",
      ZanzibarArchipelago: "Zanzibar Archipelago - Relax and unwind on beautiful tropical beaches.",
      NgorongoroConservationArea: "Ngorongoro Conservation Area - Witness the incredible wildlife in a unique crater environment.",
      SelousGameReserve: "Selous Game Reserve - The largest game reserve in Tanzania, home to a wide variety of wildlife.",
      KilimanjaroNationalPark: "Kilimanjaro National Park - Home to Mount Kilimanjaro, the highest mountain in Africa.",
      StoneTownofZanzibar: "Stone Town of Zanzibar - A UNESCO World Heritage Site, known for its historic architecture and culture.",
      RuinsOfKilwaKisiwaniAndRuinsOfSongoMnara: "Ruins of Kilwa Kisiwani and Ruins of Songo Mnara - UNESCO World Heritage Sites showcasing ancient Swahili architecture and history.",
      Tarangire: "Tarangire National Park - Experience diverse wildlife in a stunning savannah setting.",
      Ruaha: "Ruaha National Park - Explore the largest national park in Tanzania and encounter a variety of wildlife.",
      Udzungwa: "Udzungwa Mountains National Park - Hike through lush forests and discover unique plant and animal species.",
      Kaporogwe: "Kaporogwe Waterfall - Enjoy the beauty of this hidden waterfall surrounded by picturesque landscapes.",
      Kondoa: "Kondoa Irangi Rock Paintings - Discover ancient rock paintings dating back thousands of years.",
      MateruniWaterfalls: "Materuni Waterfalls - Experience the beauty of cascading waterfalls surrounded by lush greenery.",
      MountMeru: "Mount Meru - Embark on a thrilling trek to the second highest mountain in Tanzania.",
      MomelaLakes: "Momela Lakes - Discover a series of seven scenic lakes in Arusha National Park.",
      OlDoinyoLengai: "Ol Doinyo Lengai - Hike the active volcano known as 'Mountain of God' and witness its unique lava flows.",
      MkomaziNationalPark: "Mkomazi National Park - Explore the park's diverse wildlife and stunning landscapes.",
      MahaleMountains: "Mahale Mountains - Visit the remote mountains and observe chimpanzees in their natural habitat.",
      Gombe: "Gombe Stream National Park - Discover the famous research site for chimpanzees and enjoy the scenic beauty.",
    };

    // Add event listeners to show key descriptions on marker hover
    const infoWindow = new google.maps.InfoWindow();
    marker.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.Serengeti);
      infoWindow.open(map, marker);
    });
    marker.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker2.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.MountKilimanjaro);
      infoWindow.open(map, marker2);
    });
    marker2.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker3.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.ZanzibarArchipelago);
      infoWindow.open(map, marker3);
    });
    marker3.addListener("mouseout", () => {
     infoWindow.close();
    });
    marker4.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.NgorongoroConservationArea);
      infoWindow.open(map, marker4);
    });
    marker4.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker5.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.SelousGameReserve);
      infoWindow.open(map, marker5);
    });
    marker5.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker6.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.KilimanjaroNationalPark);
      infoWindow.open(map, marker6);
    });
    marker6.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker7.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.StoneTownofZanzibar);
      infoWindow.open(map, marker7);
    });
    marker7.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker8.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.RuinsOfKilwaKisiwaniAndRuinsOfSongoMnara);
      infoWindow.open(map, marker8);
    });
    marker8.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker9.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.Tarangire);
      infoWindow.open(map, marker9);
    });
    marker9.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker10.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.Ruaha);
      infoWindow.open(map, marker10);
    });
    marker10.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker11.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.Udzungwa);
      infoWindow.open(map, marker11);
    });
    marker11.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker12.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.Kaporogwe);
      infoWindow.open(map, marker12);
    });
    marker12.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker13.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.Kondoa);
      infoWindow.open(map, marker13);
    });
    marker13.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker14.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.MateruniWaterfalls);
      infoWindow.open(map, marker14);
    });
    marker14.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker15.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.MountMeru);
      infoWindow.open(map, marker15);
    });
    marker15.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker16.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.MomelaLakes);
      infoWindow.open(map, marker16);
    });
    marker16.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker17.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.OlDoinyoLengai);
      infoWindow.open(map, marker17);
    });
    marker17.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker18.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.MkomaziNationalPark);
      infoWindow.open(map, marker18);
    });
    marker18.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker19.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.MahaleMountains);
      infoWindow.open(map, marker19);
    });
    marker19.addListener("mouseout", () => {
      infoWindow.close();
    });
    marker20.addListener("mouseover", () => {
      infoWindow.setContent(keyDescriptions.Gombe);
      infoWindow.open(map, marker20);
    });
    marker20.addListener("mouseout", () => {
      infoWindow.close();
    });

  }
</script>


<body>
<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

<header>
<div class="header-area ">
<div id="sticky-header" class="main-header-area">
<div class="container-fluid">
<div class="header_bottom_border">
<div class="row align-items-center">
<div class="col-xl-2 col-lg-2">
    <div style="display: flex; align-items: center; justify-content: center;" class="logo">
    <a href="{{ route('landing') }}">
    <img src="{{ asset('travelo/img/1logo.png')}}" alt="">
    </a>
    <b style="margin-left: 5px;">Utalii Tanzania</b>
</div>
</div>
<div class="col-xl-6 col-lg-6">
<div class="main-menu  d-none d-lg-block">
<nav>
<ul id="navigation">
<li><a class="active" href="{{ route('landing') }}">home</a></li>

<li><a class="" href="{{ route('places') }}">Destination</a></l/li>

<li><a href="{{ route('maps') }}">Map</a></li>
<li><a href="{{ route('about') }}">Travel Tips</a></li>
</ul>
</nav>
</div>
</div>
<div class="col-xl-4 col-lg-4 d-none d-lg-block">
<div class="social_wrap d-flex align-items-center justify-content-end">

<div class="social_links d-none d-xl-block">
<ul>

<li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">
                Login
            </a>
 </li>
</ul>
</div>
</div>
</div>
<div class="col-12">
<div class="mobile_menu d-block d-lg-none"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</header>


<div class="bradcam_area bradcam_bg_4">
<div class="container">
<div class="row">
<div class="col-xl-12">
<div class="bradcam_text text-center">
<h3>A map of Tanznia</h3>
<p>All the tourist sites locations in Tanzania</p>
</div>
</div>
</div>
</div>
</div>


<section class="contact-section">
<div class="container">
    <div class="row">
            <div class="col-md-12">
                <div class="welcome-text">
                    <h2>Hover over a site to learn more about it.</h2>
                </div>
            </div>
        </div>

<div class="d-none d-sm-block mb-5 pb-4">
<div id="map" style="height: 700px; position: relative; overflow: hidden;"> </div>

                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgtwk9hM9kskhPEgiftk_ihCMpN23qEb0&amp;callback=initMap&v=weekly" async>
                    </script>
</div>
<div class="row">
<div class="col-12">
    <br>
    <div class="row">
    <div class="col-md-12">
        <h2 class="text-center">Overview of the 6 tourist regions</h2>
        <div class="row">
            <div class="col-md-4">
                <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/tanzania-centre.jpg') }}" alt="Central Tanzania">
                <h3>Central Tanzania</h3>
                <p>The central region is rarely included on tourist itineraries due to its semi-arid climate and poor road network. However, it is the birthplace of some of Tanzania’s people, and there are several sites of interest for curious travellers, including the enigmatic cave paintings of Kolo-Kondoa. This region is also home to many gold and diamond mines; one of the largest diamond mines in the world, the Mwadui Mine, is north of Singida. Dodoma, the country's official capital, is nothing special, but a convenient stopover because of its roads linking Dar Es Salaam and the north of the country.</p>
            </div>
            <div class="col-md-4">
                <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/dar.jpg') }}" alt="Dar es Salaam and its outskirts">
                <h3>Dar es Salaam and the Outskirts</h3>
                <p>Other than being the administrative capital of the country, the port city of Dar Es Salaam was originally a small fishing village until a sultan established a trading post, after which the small Arab village became a cosmopolitan metropolis teeming with life. It’s the real economic heart of the country. South of the city are stretches of beautiful white sandy beaches lined with palm trees and lapping turquoise waters. Some of the most beautiful beaches include Mikadi Beach, Kipepeo Beach and Ras Kutani beach, magnificent spots for relaxation after a safari. The northern coasts rank close behind; Off the beaten track, they offer some truly amazing discoveries. This corner of Tanzania is unique where the jungle and ocean intertwine.</p>
            </div>
            <div class="col-md-4">
                <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/tanzanie-northern.jpg') }}" alt="Northern and its parks">
                <h3>The North and its Parks</h3>
                <p>The northern region is where most safaris are organised, with some of the most famous and visited sites in Tanzania. Some choose to stick to the more well-known sites, such as Lake Victoria, the Serengeti National Park, a game reserve where lions, leopards, baboons, giraffes, wildebeest and other mammals live freely, the Ngorongoro Crater, and a hike or trek up Kilimanjaro, the highest peak in Africa. The northern region offers a multitude of lesser-known sites, but they are not really worthy of note; this is the region that deserves most of your attention during a visit to Tanzania.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/southern.jpg') }}" alt="The southern highlands">
                <h3>The Southern Highlands</h3>
                <p>This region is less touristy than the northern region but has many assets and varied landscapes. Green hills, bustling markets, and wildlife are among the attractions of the southern highlands. National parks in the region include Mikumi, Ruaha, and Selous for wildlife viewing experiences. The beaches of Mtwara and the Mnazi Bay Marine Park are also worth a visit.</p>
            </div>
            <div class="col-md-4">
                <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/tanzania-west.jpg') }}" alt="The west">
                <h3>The West</h3>
                <p>The main asset of this remote area is its nature and wildlife. It’s an ideal destination for seeing chimpanzees, the undisputed rulers of the region. It includes three national parks: Gombe National Park, Mahale Mountains Park, and Katavi Park. The city of Tabora is a good stopover during your trip to the west where you will find buildings dating back to the German colonial era. Traveling in this region takes time; the roads are in poor condition.</p>
            </div>
            <div class="col-md-4">
                <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/zanzibar.jpg') }}" alt="Zanzibar">
                <h3>Zanzibar</h3>
                <p>The Zanzibar Archipelago is only accessible by boat or plane. It’s a semi-autonomous province made up of three islands: Unguja, Pemba, and Mafia. Also known as the "spice island" (thanks mainly to cloves), it has a mysterious and romantic atmosphere and idyllic beaches, making it a popular destination for honeymooners, especially along the east coast which boasts white sand, coral reefs, and pleasant sea temperatures. Stone Town is the name of the historic heart of the city of Zanzibar with its Swahili architecture (wooden doors) still apparent! In the south of the island, in Kizimkazi, you can go on an excursion to admire the humpback dolphins who populate the offshore caves.</p>
            </div>
        </div>
        <h2>Attractions Maps</h2>
        <img class="card-img-top" style="width: 100%; height: auto;" src="{{ asset('global_assets/images/Activities.jpg') }}" alt="Regions and Their touristic activities">
        <!-- Insert any additional content here -->
    </div>
</div>
</section>


<footer class="footer" style="padding-top: 20px;">
<div class="row">
<div class="col-xl-4 col-md-6 col-lg-4 ">
<div class="footer_widget">
    <div style="display: flex; align-items: center; justify-content: center;" class="logo">
    <a href="index.html">
    <img src="{{ asset('travelo/img/footer_logo.png')}}" alt="">
    </a>
    <b style="margin-left: 5px;">Utalii Tanzania</b>
</div>

</div>
</div>
</div>

<div class="copy-right_text">
<div class="container">
<div class="footer_border"></div>
<div class="row">
<div class="col-xl-12">
<p class="copy_right text-center">

Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved. </a>

</p>
</div>
</div>
</div>
</div>

</footer>


<div class="modal fade custom_search_pop" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="serch_form">
<input type="text" placeholder="Search">
<button type="submit">search</button>
</div>
</div>
</div>
</div>

<script src="{{ asset('travelo/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<script src="{{ asset('travelo/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('travelo/js/popper.min.js') }}"></script>
<script src="{{ asset('travelo/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('travelo/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('travelo/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('travelo/js/ajax-form.js') }}"></script>
<script src="{{ asset('travelo/js/waypoints.min.js') }}"></script>
<script src="{{ asset('travelo/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('travelo/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('travelo/js/scrollIt.js') }}"></script>
<script src="{{ asset('travelo/js/jquery.scrollUp.min.') }}"></script>
<script src="{{ asset('travelo/js/wow.min.js') }}"></script>
<script src="{{ asset('travelo/js/nice-select.min.js') }}"></script>
<script src="{{ asset('travelo/js/jquery.slicknav.min.js') }}"></script>
<script src="{{ asset('travelo/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('travelo/js/plugins.js') }}"></script>
<script src="{{ asset('travelo/js/gijgo.min.js') }}"></script>
<script src="{{ asset('travelo/js/slick.min.js') }}"></script>

<script src="{{ asset('travelo/js/contact.js') }}"></script>
<script src="{{ asset('travelo/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('travelo/js/jquery.form.js') }}"></script>
<script src="{{ asset('travelo/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('travelo/js/mail-script.js') }}"></script>
<script src="{{ asset('travelo/js/main.js') }}"></script>
<script>
            $('#datepicker').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }
            });
            $('#datepicker2').datepicker({
                iconsLibrary: 'fontawesome',
                icons: {
                 rightIcon: '<span class="fa fa-caret-down"></span>'
             }

            });
        </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7c29729f5a940546","version":"2023.4.0","b":1,"token":"cd0b4b3a733644fc843ef0b185f98241","si":100}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from preview.colorlib.com/theme/travelo/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 May 2023 13:51:04 GMT -->
</html>

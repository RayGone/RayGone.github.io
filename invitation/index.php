<!DOCTYPE html>
<html>
    <head>
        <title>
            Wedding Invitation
        </title>
        <link rel="shortcut icon" href="./thumbnail.png" type="image/png">
        
        <!--<link rel="stylesheet" href="./bootstrap4/css/bootstrap.min.css">-->
        <link rel="stylesheet" href="./bootstrap5/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="./css.css?<?php echo "version=".date("His"); ?>">
        
        <meta property="og:title" content="Sushma, you are invited!!!!" />
        <meta property="og:type" content="website" />
        <meta property="og:og:description" content="We are getting married!!! Yeah, It's happening 😇😇😇😇. 
                            Mark your calendar for 4th Dec, 2022. We want you to be part of our celebration." />
        <meta name="description" content="We are getting married!!! Yeah, It's happening 😇😇😇😇. 
                            Mark your calendar for 4th Dec, 2022. We want you to be part of our celebration." />
        <meta property="og:image" content="https://invitation.sushmaregan.com/thumbnail.png" />

        <!-- Leaflet for Map -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
            integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14="
            crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
                integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg="
                crossorigin=""></script>
                
    </head>
    
    <body class='bg-inv'>
        <audio autoplay loop src="wedding-track.mp3" type="audio/mpeg"></audio>
        <div class='container-fluid p1'>
            <div class='row prevent-select'>
                <div class='col-md-12 envelope'>
                    <div class='full-width flex'>
                        <div>
                            <picture class="img invitation-card-border">
                              <source media="(max-device-width: 700px)" srcset="./envelope1.jpg">
                              <source media="(min-device-width:700px)" srcset="./envelope2.jpg">
                              <img src="./envelope2.jpg" alt="envelope" class="img invitation-card-border">
                            </picture>
                        </div> 
                    </div>
                        <p class="invitee-text-content" 
                            style="
                                position:absolute;
                                top: 30vh;"
                        >
                            <strong><u>Invitation</u></strong>
                        </p>
                        <p class="invitee-name"
                            style="
                                position:absolute;
                                top: 40vh;"
                        >                         
                            To: Sushma Tandukar
                        </p>
                        <p id='open-btn'  class="invitee-name prevent-select"
                            style="
                                position:absolute;
                                top: 85vh;"
                            >                       
                            <span style='box-shadow: 0 0 5px limegreen; padding: 5px'>Click to open</span>
                        </p>
                </div>
            </div>
        </div>
        
        <div class='container-fluid p2 canopy'>    
            <div class='row prevent-select'>
                <div class='col-md-12'>
                    <div class='full-width flex'>
                        <div>
                            <picture class="img frame-border">
                              <source media="(max-device-width: 700px)" srcset="./Invitation.jpeg">
                              <source media="(min-device-width:700px)" srcset="./Invitation.jpeg">
                              <img src="./Invitation.jpeg" alt="invitation card" class="img frame-border">
                            </picture>
                        </div> 
                        
                        <div id='sparkle'>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 2s; --delay: 0.5s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 1.5s; --delay: 0.6s" d="M33.5173993 29.97263826s1.03464615-5.40315215 1.95433162 0c0 0 5.17323078.91968547 0 1.83937095 0 0-.91968547 5.51811283-1.95433162 0-3.10393847-.57480342-2.8740171-1.14960684 0-1.83937095z" />
                                  <path style="--duration: 1.7s; --delay: 0.8s" d="M69.03038108 1.71240809s.73779281-3.852918 1.39360864 0c0 0 3.68896404.65581583 0 1.31163166 0 0-.65581583 3.93489497-1.39360864 0-2.21337842-.4098849-2.04942447-.81976979 0-1.31163166z" />
                                  <path style="--duration: 2.1s; --delay: 0.9s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 1.8s; --delay: 1s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 1.6s; --delay: 1.9s" d="M33.5173993 29.97263826s1.03464615-5.40315215 1.95433162 0c0 0 5.17323078.91968547 0 1.83937095 0 0-.91968547 5.51811283-1.95433162 0-3.10393847-.57480342-2.8740171-1.14960684 0-1.83937095z" />
                                  <path style="--duration: 1.4s; --delay: 0.4s" d="M69.03038108 1.71240809s.73779281-3.852918 1.39360864 0c0 0 3.68896404.65581583 0 1.31163166 0 0-.65581583 3.93489497-1.39360864 0-2.21337842-.4098849-2.04942447-.81976979 0-1.31163166z" />
                                  <path style="--duration: 1.2s; --delay: 1.1s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 3s; --delay: 0.5s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 1.3s; --delay: 1.5s" d="M33.5173993 29.97263826s1.03464615-5.40315215 1.95433162 0c0 0 5.17323078.91968547 0 1.83937095 0 0-.91968547 5.51811283-1.95433162 0-3.10393847-.57480342-2.8740171-1.14960684 0-1.83937095z" />
                                  <path style="--duration: 1.2s; --delay: 1.5s" d="M69.03038108 1.71240809s.73779281-3.852918 1.39360864 0c0 0 3.68896404.65581583 0 1.31163166 0 0-.65581583 3.93489497-1.39360864 0-2.21337842-.4098849-2.04942447-.81976979 0-1.31163166z" />
                                  <path style="--duration: 1.1s; --delay: 1.5s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 3s; --delay: 0.5s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 1.3s; --delay: 2.1s" d="M33.5173993 29.97263826s1.03464615-5.40315215 1.95433162 0c0 0 5.17323078.91968547 0 1.83937095 0 0-.91968547 5.51811283-1.95433162 0-3.10393847-.57480342-2.8740171-1.14960684 0-1.83937095z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 2s; --delay: 0.5s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 1.5s; --delay: 0.6s" d="M33.5173993 29.97263826s1.03464615-5.40315215 1.95433162 0c0 0 5.17323078.91968547 0 1.83937095 0 0-.91968547 5.51811283-1.95433162 0-3.10393847-.57480342-2.8740171-1.14960684 0-1.83937095z" />
                                  <path style="--duration: 1.7s; --delay: 0.5s" d="M69.03038108 1.71240809s.73779281-3.852918 1.39360864 0c0 0 3.68896404.65581583 0 1.31163166 0 0-.65581583 3.93489497-1.39360864 0-2.21337842-.4098849-2.04942447-.81976979 0-1.31163166z" />
                                  <path style="--duration: 2.1s; --delay: 1s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 2s; --delay: 0.4s" d="M69.03038108 1.71240809s.73779281-3.852918 1.39360864 0c0 0 3.68896404.65581583 0 1.31163166 0 0-.65581583 3.93489497-1.39360864 0-2.21337842-.4098849-2.04942447-.81976979 0-1.31163166z" />
                                  <path style="--duration: 1s; --delay: 1.1s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 1s; --delay: 1s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 2s; --delay: 0.4s" d="M69.03038108 1.71240809s.73779281-3.852918 1.39360864 0c0 0 3.68896404.65581583 0 1.31163166 0 0-.65581583 3.93489497-1.39360864 0-2.21337842-.4098849-2.04942447-.81976979 0-1.31163166z" />
                                  <path style="--duration: 2.5s; --delay: 1.1s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 2s; --delay: 0.5s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 2.1s; --delay: 0.9s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 3s; --delay: 0.5s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 1.3s; --delay: 1.5s" d="M33.5173993 29.97263826s1.03464615-5.40315215 1.95433162 0c0 0 5.17323078.91968547 0 1.83937095 0 0-.91968547 5.51811283-1.95433162 0-3.10393847-.57480342-2.8740171-1.14960684 0-1.83937095z" />
                                  <path style="--duration: 1.2s; --delay: 1.5s" d="M69.03038108 1.71240809s.73779281-3.852918 1.39360864 0c0 0 3.68896404.65581583 0 1.31163166 0 0-.65581583 3.93489497-1.39360864 0-2.21337842-.4098849-2.04942447-.81976979 0-1.31163166z" />
                                  <path style="--duration: 1.1s; --delay: 1.5s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 1.5s; --delay: 0.5s" d="M33.5173993 29.97263826s1.03464615-5.40315215 1.95433162 0c0 0 5.17323078.91968547 0 1.83937095 0 0-.91968547 5.51811283-1.95433162 0-3.10393847-.57480342-2.8740171-1.14960684 0-1.83937095z" />
                                  <path style="--duration: 1.7s; --delay: 0.7s" d="M69.03038108 1.71240809s.73779281-3.852918 1.39360864 0c0 0 3.68896404.65581583 0 1.31163166 0 0-.65581583 3.93489497-1.39360864 0-2.21337842-.4098849-2.04942447-.81976979 0-1.31163166z" />
                                  <path style="--duration: 2.1s; --delay: 0.1s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 1.4s; --delay: 1.1s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 1.1s; --delay: 1.5s" d="M33.5173993 29.97263826s1.03464615-5.40315215 1.95433162 0c0 0 5.17323078.91968547 0 1.83937095 0 0-.91968547 5.51811283-1.95433162 0-3.10393847-.57480342-2.8740171-1.14960684 0-1.83937095z" />
                                  <path style="--duration: 0.8s; --delay: 0.5s" d="M69.03038108 1.71240809s.73779281-3.852918 1.39360864 0c0 0 3.68896404.65581583 0 1.31163166 0 0-.65581583 3.93489497-1.39360864 0-2.21337842-.4098849-2.04942447-.81976979 0-1.31163166z" />
                                 </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 106 34">
                                <g class="sparkles">
                                  <path style="--duration: 2s; --delay: 0.7s" d="M2.5740361 5.33344622s1.1875777-6.20179466 2.24320232 0c0 0 5.9378885 1.05562462 0 2.11124925 0 0-1.05562463 6.33374774-2.24320233 0-3.5627331-.6597654-3.29882695-1.31953078 0-2.11124925z" />
                                  <path style="--duration: 1.3s; --delay: 1.1s" d="M33.5173993 29.97263826s1.03464615-5.40315215 1.95433162 0c0 0 5.17323078.91968547 0 1.83937095 0 0-.91968547 5.51811283-1.95433162 0-3.10393847-.57480342-2.8740171-1.14960684 0-1.83937095z" />
                                  <path style="--duration: 1.1s; --delay: 0.9s" d="M99.18160965 12.79394657s1.61168639-8.41658446 3.0442965 0c0 0 8.05843194 1.43261013 0 2.86522025 0 0-1.43261011 8.59566072-3.0442965 0-4.83505916-.89538133-4.47690663-1.79076265 0-2.86522025z" />
                                </g>
                            </svg>
                        </div>
                        
                    </div>
                </div>
            </div>
            
            
            <div class='row p3'>
                <div class='col-md-12'>
                    <div class='full-width flex'>                        
                        <img src="./heart-shape.jpg" alt="heart shape" class="img frame-border">
                        <div class='info-text' style='padding:20px;'> 
                            <p class='h2' >
                                We are getting married!!!<br>
                                Yeah, It's happening.<br>😇😇😇😇
                            </p>
                        </div>
                    </div>                    
                </div>
                <br>
                <div class='col-md-12 us' style="background: url('leaves.png');">
                    <br><br><br>
                    <div class='full-width flex'>                        
                        <img src="./us.jpg" alt="heart shape" class="img frame-border">
                        <div class='info-text' style='padding:20px;'> 
                            <p class='h2' >
                                And this is us<br>😛😛😛. 
                            </p>
                        </div>
                    </div>                    
                </div>

                
                <div class='col-md-12' style="background: url('leaves.png');">
                    <br><br><br><br><br><br>
                    <div>                        
                        <div class='row'>
                            <div class='col-md-6 flex' style="font-family: brandon-grot-w01-light,sans-serif;">
                                <span id='when' class='h2'>
                                    <br>
                                    THE<br>WEDDING<br>DAY
                                </span>
                            </div>

                            <div class='col-md-6 flex'>
                                <div class='h4'>
                                    <br><br><br><br>
                                    <div id='when'>
                                        <span>When</span>
                                        <hr><br>
                                        Sunday, Dec 4, 2022<br>
                                        Wedding Ceremony: 1:00 pm<br>
                                        Wedding Reception: 3:00 pm<br><br>
                                    </div>

                                    <div id='where'>
                                        <span >Where</span>
                                        <hr><br>
                                        Koinonia Chapagaun Church<br>
                                        Godawari-11, Chapagaun<br>
                                        Jhyalipati, Pal-Pukhu <a href='#map-section' onclick="toggleMap()">View Map</a>
                                    </div>
                                </div>
                            </div>
                            
                            <div id='map-section' class='col-md-12 flex'>
                                <div>
                                    <hr>
                                    <a class='btn btn-sm btn-info' target='_blank' href="https://www.google.com/maps/place/27%C2%B041'35.7%22N+85%C2%B014'27.9%22E/@27.6932607,85.2389033,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x45d0179d09ecf74d!8m2!3d27.693256!4d85.241092"><span class='h4'>Open in Google Maps</h3></a>
                                    <br>
                                    <div id='map'></div> 
                                </div>
                            </div>
                        </div>
                        <br><br><br><br><br><br><br><br>
                    </div>                    
                </div>
                
                <div class='col-md-12' 
                    style="background:url('leaves.png');">
                    <div class='row' style="background: url('flowers.jpg');
                            background-blend-mode: lighten;">
                        <div class='col-md-6' style='background-color: rgba(210,210,210,0.5)'>
                            <br><br>
                            <span class='btn btn-sm btn-warning' onclick="toggleBackgroundMusic(this)">Stop Background Music</span><br>
                            <br>
                            <iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/CmK_e9GxIes" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <br><br>
                        </div>
                        <div class='col-md-6' style='background-color: rgba(210,210,210,0.5)'>
                            <span class='h3 font-weight-light'>
                                <br><br>
                                Genesis 2:18<br>
                                Then the Lord God said,<br>“It is not good that the man should be alone; I will make him a helper fit for him.”
                            </span>
                            <br><br><br><br><br><br>
                            <div style='width:100%;'><a id='when' target='_blank' href='https://sushmaregan.com' style='float:right;color:black'>© sushmaregan.com</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        function toggleMap(){
            elm = document.getElementById('map-section')
            elm.style.display = elm.style.display == '' ? 'none' : ''
        }

        var map;
        function initMap(){
            var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Points &copy 2012 LINZ'
                }),

            latlng = L.latLng(27.683256, 85.241092);
            map = L.map('map', {
                center: latlng,
                zoom: 14,
                layers: [tiles]
            });
            var marker = L.marker([27.693256, 85.241092]).addTo(map);
            marker.bindPopup("<span class='h2'>Wedding Venue</span><br>").openPopup();

            setTimeout(() => {
                toggleMap()
            }, 1000);
        }

        // var x = document.getElementById("demo");

        // function getLocation() {
        //     if (navigator.geolocation) {
        //         navigator.geolocation.getCurrentPosition(showPosition);
        //     } else {
        //         x.innerHTML = "Geolocation is not supported by this browser.";
        //     }
        // }

        // function showPosition(position) {
        //     x.innerHTML = "Latitude: " + position.coords.latitude +
        //     "<br>Longitude: " + position.coords.longitude;
        // }
    </script>

    <script>    
        function fadeInCard(){
            document.querySelector(".p2").classList.add("fade-in");
            document.querySelector('body').classList.remove('bg-inv');
            document.querySelector('body').classList.add('bg-main');
            document.querySelector(".p2").style.opacity= 1;
            
            setTimeout(function(){
                document.querySelector(".p1").style.display='none';
                document.querySelector(".p3").style.display='block';
                ScrollAutomatic();
                iShow()
            },2500)
        }
        
        function ScrollAutomatic(){
            initMap();
            setTimeout(function(){
                document.querySelector('.p3').scrollIntoView({behavior: "smooth", block: "start"});
            },2500)
        }
        
        music_state = false;
        const tryToPlay = function() {            
            document.getElementsByTagName('audio')[0].play()
                .then(() => {
                    music_state = true;
                    clearInterval(checkFirstInteraction);
                    document.querySelector(".p1").classList.add('fade-out');
                    setTimeout( fadeInCard,3500)
                    document.getElementById("sparkle").style.display = 'block'
                    // stopFlicking();
                })
                .catch(error => {
                    console.info('User has not interacted with document yet.');
                });
        };

        function toggleBackgroundMusic(btn){
            if(music_state){
                document.getElementsByTagName('audio')[0].pause()
                btn.innerHTML = "Play Background Music"
            }else{
                document.getElementsByTagName('audio')[0].play()
                btn.innerHTML = "Stop Background Music"
            }
            btn.classList.toggle('btn-warning')
            btn.classList.toggle('btn-success')
            music_state = !music_state
        }
        
        checkFirstInteraction = setInterval(tryToPlay,250)

        function stopFlicking(){
            document.getElementById('flick').style.display = '';
            setTimeout(function(){
                document.getElementById('flick').classList.remove('curtain');
            },1000);
        }
        
        document.getElementById("open-btn").addEventListener('click',tryToPlay)

        function isScrolledIntoView(el) {
            var rect = el.getBoundingClientRect();
            var elemTop = rect.top;
            var elemBottom = rect.bottom;

            // // Only completely visible elements return true:
            // var isVisible = (elemTop >= 0) && (elemBottom <= window.innerHeight);
            // Partially visible elements return true:
            isVisible = elemTop < window.innerHeight && elemBottom >= 0;
            return isVisible;
        }

        var us_status = false;
        function iShow(){
            var img_toggle = setInterval(function(){
                let img_section = document.querySelector('.us').querySelector('img')
                if(isScrolledIntoView(img_section)){
                    if(!us_status){
                        setTimeout(function(){
                            img_section.src = 'gummy_bear.jpg'
                        },1500)
                    }
                    us_status = true
                }else{
                    if(us_status){
                        setTimeout(function(){
                            img_section.src = 'us.jpg'
                        },2500)
                    }
                    us_status = false
                }
            },500)
        }
    </script>

</html>
<?php
session_start();

if (!isset($_SESSION['license'])) {
    header('Location: license/index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <script type='text/javascript'>
  window.smartlook||(function(d) {
    var o=smartlook=function(){ o.api.push(arguments)},h=d.getElementsByTagName('head')[0];
    var c=d.createElement('script');o.api=new Array();c.async=true;c.type='text/javascript';
    c.charset='utf-8';c.src='https://web-sdk.smartlook.com/recorder.js';h.appendChild(c);
    })(document);
    smartlook('init', '1c4a8b2b9bfd33f0c682a86c60ca4fce821453af', { region: 'eu' });
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Christmas Special</title>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>

    <style>
        body {
            background: linear-gradient(to right, #1c2541, #27496d);
            font-family: 'Arial', sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        h1 {
            font-size: 48px;
            color: #e74c3c;
            font-weight: bold;
            margin-top: 50px;
        }

        p {
            z-index: 3;
            font-size: 24px;
            color: #ffffff;
            padding: 20px;
        }
        
        #accessLink{
            position: relative;
      z-index: 3;
        }
        a {
            z-index: 3;
            color: #c0392b;
            font-weight: bold;
            font-size: 32px;
            text-decoration: none;
        }

        #licenseCount {
            font-size: 28px;
            color: #ffffff;
            margin-top: 20px;
        }

        #snow {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 1;
    }
    #content {
      position: relative;
      z-index: 3;
    }
    }
    .santa-container {
  position: absolute;
  z-index: 3;
}
    .santa {
        z-index: 3;
        width:20vw;
        min-width:175px;
        z-index: 600;
        cursor: pointer;
        -webkit-animation: FlyingSanta 38s infinite linear;
        -moz-animation: FlyingSanta 38s infinite linear;
        -ms-animation: FlyingSanta 38s infinite linear;
        -o-animation: FlyingSanta 38s infinite linear;
        animation: FlyingSanta 38s infinite linear;
        bottom: 0%;
        left: 0%;
        position: absolute;
        
    }
@keyframes FlyingSanta {
  25% {
    bottom: 80%;
    left: 85%;
    transform: rotateY(0deg);
  }
  26% {
    transform: rotateY(180deg);
  }
  50% {
    bottom: 60%;
    left: 0%;
    transform: rotateY(180deg);
  }
  51% {
    transform: rotateY(0deg);
  }
  75% {
    bottom: 40%;
    left: 85%;
    transform: rotateY(0deg);
  }
  76% {
    bottom: 40%;
    left: 85%;
    transform: rotateY(180deg);
  }
  99% {
    transform: rotateY(180deg);
  }
}
    </style>
</head>

<body>
    
  <div class="santa-container">
  <?php

session_start();

if ($_SESSION['license'] == '4JO2FWEOZO') {
  echo '<img class="santa" src="supra.gif" alt="Santa Be Watchin">';
} else if ($_SESSION['license'] == 'S0XG7SJPXQ') {
  echo '<img class="santa" src="mush.gif" alt="Santa Be Watchin">'; 
} else if ($_SESSION['license'] == 'MPJLEVTTJW') {
  echo '<img class="santa" src="tooth.gif" alt="Santa Be Watchin">'; 
} else if ($_SESSION['license'] == 'BITRWK09EQ') {
  echo '<img class="santa" src="chess.gif" alt="Santa Be Watchin">'; 
} else if ($_SESSION['license'] == 'IPZ0XC2ZSR') {
  echo '<img class="santa" src="dp.png" alt="Santa Be Watchin">'; 
}else{
  echo '<img class="santa" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/191814/santas.gif" alt="Santa Be Watchin">'; 
}

?>
</div>
    <div id="snow"></div>
    <h1>Welcome to the Christmas Special!</h1>

    <p>Hello and welcome to the last game of the year! Now i know that yall spend $30 on the game and want to win, so follow the instructions at each step to progress to win.</p>
<p>.</p>

    <p>The starting point is: <a id="accessLink" href="#">Access HTML File</a></p>

    <p>Your goal is to be the first to reach the final destination and win a special prize!</p>

    <div id="licenseCount">Loading...</div>
    <div id="tree">
  <img src="tree.png" alt="Christmas Tree">
</div>
    


    <script>
      alert('In the competition you can not use any touch screen, our system will detect if you used touch screen and notify me, if that happenes i wont give you the money, contact Phoebus for more information');
       
      particlesJS('snow', {
    particles: {
      number: {
        value: 700,
        density: {
          enable: true,
          value_area: 800
        }
      },
      color: {
        value: '#ffffff'
      },
      shape: {
        type: 'circle',
        stroke: {
          width: 0,
          color: '#000000'
        },
        polygon: {
          nb_sides: 5
        },
        image: {
          src: 'img/github.svg',
          width: 100,
          height: 100
        }
      },
      opacity: {
        value: 0.5,
        random: true,
        anim: {
          enable: true,
          speed: 1,
          opacity_min: 0.1,
          sync: false
        }
      },
      size: {
        value: 5,
        random: true,
        anim: {
          enable: true,
          speed: 3,
          size_min: 0.1,
          sync: false
        }
      },
      line_linked: {
        enable: false
      },
      move: {
        enable: true,
        speed: 1.5,
        direction: 'bottom',
        random: true,
        straight: false,
        out_mode: 'out',
        bounce: false,
        attract: {
          enable: false,
          rotateX: 600,
          rotateY: 1200
        }
      }
    },
    interactivity: {
      detect_on: 'canvas',
      events: {
        onhover: {
          enable: true,
          mode: 'repulse'
        },
        onclick: {
          enable: true,
          mode: 'push'
        },
        resize: true
      },
      modes: {
        grab: {
          distance: 400,
          line_linked: {
            opacity: 1
          }
        },
        bubble: {
          distance: 400,
          size: 40,
          duration: 2,
          opacity: 8,
          speed: 3
        },
        repulse: {
          distance: 100
        },
        push: {
          particles_nb: 100
        },
        remove: {
          particles_nb: 2
        }
      }
    },
    retina_detect: true
  });
        function updateLicenseCount() {
            // Make an AJAX request to get the license count from a PHP script
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Update the license count on the page
                    document.getElementById("licenseCount").innerHTML = "Prize: $" + xhr.responseText;
                }
            };
            xhr.open("GET", "get_license_count.php", true);
            xhr.send();
        }
        updateLicenseCount()
        // Update the license count every 10 seconds
        setInterval(updateLicenseCount, 10000);
        window.addEventListener('load', function() {
            // Generate a random number as a query parameter
            const randomQuery = Math.floor(Math.random() * 1000000);
            
            const doorValue = 1;
            
            // Store the random number in the session
            sessionStorage.setItem('accessQuery', randomQuery);
            sessionStorage.setItem('doorValue', doorValue);

            // Find the element with the ID 'accessLink'
            const accessLinkElement = document.getElementById('accessLink');

            // Check if the element is found before adding the event listener
            if (accessLinkElement) {
                accessLinkElement.addEventListener('click', function() {
                    window.location.href = `access.html?query=${randomQuery}&door=${doorValue}`;
                });
            } else {
                console.error("Element with ID 'accessLink' not found.");
            }
        });
    </script>

    
</body>
</html>

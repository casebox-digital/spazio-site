<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'vendor/fb_conversions/fb_conversions.php';
$eventId = fb_conversion('PageView');
$eventId = fb_conversion('Lead', $eventId, 'marcelo@casebox.com.br');
?>
<script>
  window.fb_event_id = '<?php echo $eventId; ?>';
</script>

<!DOCTYPE html><!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon May 16 2022 20:40:58 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="62682855b71483056a80628f" data-wf-site="626823a6e7d4fa4d5157e683">

<head>
  <meta charset="utf-8">
  <base href="https://www.spaziolefemme.com.br">
  <title>Obrigada</title>
  <meta content="Obrigada" property="og:title">
  <meta content="Obrigada" property="twitter:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/spazio-le-femme.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">
    WebFont.load({
      google: {
        families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic", "EB Garamond:regular,500,600,700,800,italic,500italic,600italic,700italic,800italic"]
      }
    });
  </script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">
    ! function(o, c) {
      var n = c.documentElement,
        t = " w-mod-";
      n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
    }(window, document);
  </script>
  <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
  <style>
    /* Style for the error text below input */
    label.error {
      color: #ceb59f;
      font-size: 12px;
      font-weight: 400;
      margin-top: -10px;
      text-align: left;
    }

    /* Style for the error state of input */
    .w-input.error {
      border: red 1px solid;
    }
  </style>
  <!--  Google Tag Manager  -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-55KKWP2');
  </script>
  <!--  End Google Tag Manager  -->
</head>

<body>
  <div data-collapse="medium" data-animation="default" data-duration="400" data-no-scroll="1" data-easing="ease" data-easing2="ease" role="banner" class="navbar active-nav1 w-nav">
    <div class="nav1-wrap">
      <a href="#" id="w-node-b0106e79-b3ec-01a3-6415-7a516beb2f74-6beb2f72" class="brand w-nav-brand"><img src="images/logo-spazio-le-femme.png" width="240" height="42" alt="" class="image"></a>
    </div>
  </div>
  <div class="wrapper m100 primary-bg wf-section">
    <h1 class="heading-1">Obrigada!</h1>
    <p class="paragraph">Sua mensagem foi enviada com sucesso! <br>Em breve retornaremos o contato.</p>
  </div>
  <div class="footer m0-50">
    <div class="whatsapp-block">
      <div class="whatsapp-chat">
        <div class="top-section"><img src="images/avatar.svg" loading="lazy" width="47" height="47" alt="" class="live-icon-chat">
          <div class="top-text-container">
            <div class="live-chat-top-text">Spazio Le Femme</div>
            <div class="live-chat-bottom-text">Geralmente responde em alguns minutos</div>
          </div>
          <div id="close-chat" class="close-live-chat-container"><img src="images/close-live-chat.svg" loading="lazy" width="17" height="17" alt="" class="close-livechat-icon"></div>
        </div>
        <div class="chat-section">
          <div class="chat-block">
            <div class="live-chat-top-text block">Spazio Le Femme</div>
            <div class="live-chat-bottom-text block live-chat-conversation">Oi, tudo bem?<br>Como podemos te ajudar hoje? 😊</div>
          </div>
        </div>
        <a href="https://wa.me/5519996583817?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20a%20Spazio%20Le%20Femme" target="_blank" class="live-chat-link w-inline-block">
          <div class="livechat-button"><img src="images/small-whatsapp.svg" loading="lazy" width="16" height="16" alt="" class="small-whatsapp-icon">
            <div class="live-chat-text">Iniciar Whatsapp</div>
          </div>
        </a>
      </div>
      <div id="whatsapp-button" data-w-id="0083b895-59e4-7cac-0453-96970c97bef7" class="whatsapp-container"><img src="images/whatsapp.svg" loading="lazy" width="31" height="31" alt="" class="whatsapp-icon">
        <div class="live-icon"></div>
      </div>
    </div>
    <div class="section">
      <div class="w-layout-grid footer2-bottom-grid">
        <div id="w-node-dce33a3e-9f7e-8806-639f-bc5a798f29d5-798f29d2" class="footer2-bottom-left-column">
          <p><strong class="bold-text">Spazio Le Femme</strong><br>Avenida dos Trabalhadores, 116<br>Sala 102 - Edifício The Diplomat<br>V. Castelo Branco - Indaiatuba/SP<br>
            <a href="https://goo.gl/maps/s4iY17sSK11uZxE5A" target="_blank" class="link-2">como chegar</a>
          </p>
        </div>
        <div id="w-node-dce33a3e-9f7e-8806-639f-bc5a798f29e2-798f29d2" class="fotter2-bottom-right">
          <p id="w-node-a20e5b67-4241-bf9c-789b-d27b462c9055-798f29d2" class="phone"><strong>Telefone:</strong> <a href="tel:19996583817" class="link-3">(19) 99658-3817</a>
          </p>
          <div class="footer4-icons-wrap">
            <a href="https://wa.me/5519996583817?text=Ol%C3%A1!%20Gostaria%20de%20saber%20mais%20sobre%20a%20Spazio%20Le%20Femme" target="_blank" class="footer4-icon w-inline-block"><img src="images/icons8-whatsapp.svg" width="24" alt="">
              <div class="footer4-text">WhatsApp</div>
            </a>
            <a href="https://www.instagram.com/spaziolefemme/" class="footer4-icon w-inline-block"><img src="https://uploads-ssl.webflow.com/624c90a1edcf866a9a63b29b/624c90a1edcf865dd163b2cf_instagram%20%5B%23167%5D.svg" width="24" alt="">
              <div class="footer4-text">Instagram</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=626823a6e7d4fa4d5157e683" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <!--  Google Tag Manager (noscript)  -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-55KKWP2" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!--  End Google Tag Manager (noscript)  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
  <script>
    $(document).ready(function() {
      var SPMaskBehavior = function(val) {
          return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
          onKeyPress: function(val, e, field, options) {
            field.mask(SPMaskBehavior.apply({}, arguments), options);
          }
        };
      $('#whatsapp').mask(SPMaskBehavior, spOptions);
      $(document).on('click', '#close-chat', function(event) {
        event.preventDefault();
        $("#whatsapp-button").click();
      });
      var $form = $("form");
      $.validator.addMethod("letters", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
      });
      $form.validate({
        rules: {
          name: {
            required: true,
            minlength: 3,
            letters: true
          },
          email: {
            required: true,
            email: true
          },
          whatsapp: {
            required: true,
            minlength: 9
          }
        },
        messages: {
          name: "Por favor, informe seu nome",
          email: "Por favor, informe um e-mail válido",
          whatsapp: "Por favor, informe seu WhatsApp"
        }
      });
    });
  </script>
</body>

</html>
<!DOCTYPE html>

<?php 

error_reporting(-1);

if(isset($_POST['submit']))
{

$naam = $_POST['naam'];
$bedrijfsnaam = $_POST['bedrijfsnaam'];  
$telefoonnummer = $_POST['telefoonnummer'];  
$email = $_POST['email'];
$bericht = $_POST['bericht'];

$from_add = "BRAUND.nl"; 
$to_add = "dylannf2008@gmail.com"; 
$subject = "Verzoek van " . $from_add;
$formatted_message = "Naam: $naam\nBedrijfsnaam: $bedrijfsnaam\nTelefoonnummer: $telefoonnummer\nEmail: $email\n\nBericht:\n$bericht";

$headers = 'From: ' .$from_add. "\r\n" .

'Reply-To:' .$email. "\r\n";

if(mail($to_add,$subject,$message,$headers)) 
{

      $output = "Uw bericht is verzonden.";

} else {

      $output = "Er is iets misgegaan";

}


}

// else conditional statement for if(isset($_POST['submit']))
else {
      $output = "Er is iets misgegaan";
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BRAUND</title>

    <link rel="stylesheet" href="./styles_2.css">
    <link rel="icon" type="image/x-icon" href="./img/favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

</head>
<body>

    <nav>

      <div class="container">

        <div class="logo">
        
          <div class="tekst">
            <div class="tekst-container">
              <h1>menu</h1>
              <div id="pijl"><img src="./img/SVG/PIJL.svg" alt=""></div>
            </div>
          </div>

        </div>

        <div id="menu">
  
          <div class="menu-links">

            <ul>
              <li><a href="#">Stijn</a></li>
              <li><a href="#">Disciplines</a></li>
              <li><a href="#">Ervaring</a></li>
              <li><a href="#">Werk (on proces)</a></li>
              <li><a href="#">Contact</a></li>
              <div class="kruis-container">
                <img id="kruis" src="./img/SVG/KRUIS.svg" alt="">
              </div>
            </ul>

          </div> 
  
        </div>
        
      </div>

    </nav>
    
    <!-- eerste slideshow -->

    <header>

      <div class="container">

          <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img class="main-slide" src="./img/Beelden/Slideshow_1_1.jpg" alt=""></div>
              <div class="swiper-slide"><img src="./img/Beelden/Slideshow_2_1.jpg" alt=""></div>
              <div class="swiper-slide"><img src="./img/Beelden/Slideshow_3_1.jpg" alt=""></div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
          </div>

      </div>

    </header>

    <!-- aankondiging -->

    <section class="disciplines-en-aankondiging">

      <div class="container">

        <ul class="disciplines">

          <li data-inviewport="move-in"><a href="#">Creative Direction</a></li>
          <li data-inviewport="move-in"><a href="#">Branding</a></li>
          <li data-inviewport="move-in"><a href="#">Corporate Identity</a></li>
          <li data-inviewport="move-in"><a href="#">Packaging Design</a></li>
  
        </ul>
  
        <div class="aankondiging">
  
          <div class="bol" data-inviewport="scale-in">
<!-- 
            <div class="container"> -->

              <h1>Aankondiging</h1>
              <!-- <img src="/img/SVG/CIRKEL_GROEN.svg" alt=""> -->

            <!-- </div> -->

          </div>
  
          <div class="media-links" data-inviewport="scale-in">
  
            <a href="#"><img src="./img/SVG/INSTAGRAM_GROEN.SVG" alt=""></a>
            <a href="#"><img src="./img/SVG/LINKEDIN_GROEN.svg" alt=""></a>
  
          </div>
  
        </div>

      </div>

    </section>

    <!-- info 1 -->

    <section class="introductie">

      <div class="position-container">

        <div class="center-container">

          <div class="tekst-1" data-inviewport="move-in">

            <h1>Titel</h1>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque quasi optio consequuntur ipsa ipsum deserunt quod cupiditate nemo perferendis fuga incidunt numquam obcaecati, sunt libero similique placeat nostrum vitae neque! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ex, magni illum odio, vel quia officia possimus totam adipisci ad dignissimos ipsam optio expedita ea! Voluptate magni voluptatum totam repudiandae. Sed? <br></br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Suscipit architecto et vero optio ipsum vitae, dolores neque maxime veniam, consequatur repellat voluptatum enim exercitationem totam! Sequi ullam accusamus asperiores itaque! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eaque nostrum earum totam nobis perferendis excepturi rerum voluptas? Excepturi fugiat error inventore dolorem perferendis iure. Temporibus quo corporis quos deserunt veritatis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid in exercitationem odit quia iusto explicabo, voluptatum rem quam facilis ut quasi magni adipisci numquam, delectus corrupti modi nostrum blanditiis autem! <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas ipsa amet, soluta quae pariatur labore veritatis tempore id nam. Quisquam, accusamus minima! Eaque, tenetur. Maiores a rerum commodi dignissimos nisi.</p>

          </div>

          <div class="tekst-2" data-inviewport="move-in">

            <h2>Stijn,</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi necessitatibus quisquam ad, accusantium, dignissimos tempora dolor, eum amet aspernatur magnam iste aliquid! Ab doloribus odit dolores fugiat optio quas in. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi optio voluptates enim illo unde explicabo earum ipsa veritatis magnam impedit repudiandae assumenda quod neque nisi laudantium non, est, voluptatum possimus! <br></br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis saepe optio corrupti laborum rerum provident quibusdam, temporibus laudantium ipsam voluptatem ullam, eveniet nam amet deserunt doloremque facere numquam blanditiis ipsum.</p>

          </div>

        </div>

        <img class="logo-half" src="./img/SVG/BRAUND-HALF.svg" alt="">
        <img class="quote" src="./img/SVG/QUOTE_1.svg" alt="">

      </div>

    </section>

    <!-- info 2 -->

    <section class="meer-info">

      <div class="container" data-inviewport="move-in">

        <h1>Titel</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus officia aliquam, qui delectus maiores iste cumque eos recusandae quibusdam odio impedit voluptates nesciunt assumenda dolorem temporibus deserunt reprehenderit eligendi sed. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia modi distinctio, mollitia nulla praesentium iusto minima sunt ea veniam dolorum quidem nostrum, fuga sit tempora magnam fugiat inventore dignissimos quis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor quod perspiciatis molestiae rerum et laborum corrupti consequuntur ea quam autem natus obcaecati nulla, tempora fugiat corporis cum sapiente aspernatur tempore? <br></br> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et nobis debitis aspernatur repudiandae reprehenderit adipisci ipsam itaque error facilis minima recusandae eveniet aperiam harum, vitae possimus, temporibus corrupti quasi natus. <br></br> Mijn doel? <br></br> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi blanditiis ipsam iusto iure eos optio, voluptas doloribus tempore asperiores, fuga ad mollitia, itaque aperiam pariatur eligendi quas distinctio libero. Voluptatem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi cumque laborum aliquam est debitis tempora eum harum adipisci esse recusandae! Adipisci deserunt quos quam consectetur eius tempora ut aspernatur est. Lorem ipsum dolor sit amet consectetur adipisicing elit. Et accusantium doloremque ipsa consequuntur officia sequi id suscipit perspiciatis aliquid, necessitatibus debitis quos ducimus, recusandae nobis. Eius nam provident nostrum nesciunt. <br></br> Zin in. Zie je snel.</p>

      </div>

      <!-- <img src="./img/SVG/CIRKEL_GROEN.svg" alt="" class="cirkel"> -->

      <div class="quote-stijn" >

        <div class="quote-container">

          <img class="quote" data-inviewport="fade" src="./img/SVG/QUOTE_2.svg" alt="">
          <img class="stijn-meer-info" src="./img/Beelden/STIJN_1.png" alt="">

        </div>

      </div>

    </section>

    <!-- tweede slideshow -->

    <section class="projecten-1">

      <div class="container">

        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="./img/Beelden/Slideshow_2_1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/Beelden/Slideshow_1_1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/Beelden/Slideshow_3_1.jpg" alt=""></div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
        
        </div>

    </div>

    </section>

    <!-- bolletjes info -->

    <section class="wat-ik-doe">

      <div class="container">

        <h1 data-inviewport="scale-in">Wat ik doe?</h1>

        <div class="center-bollen">

          <div class="bollen">
  
            <div class="bol-1-en-2">
  
              <div class="bol-groen" data-inviewport="scale-in">
                <div class="bol-container">
                  <h2>Creative Direction</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad soluta modi nesciunt deleniti error quis. Fuga veniam exercitationem mollitia inventore laborum assumenda corporis. Omnis sapiente earum voluptates recusandae distinctio porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus, nulla, nemo accusantium quos libero praesentium blanditiis deserunt corporis harum vero temporibus, iste sunt ipsum consequuntur nostrum. Natus, alias commodi.</p>  
                </div>
              </div>
  
              <div class="bol-grijs" data-inviewport="scale-in">
                <div class="bol-container">
                  <h2>Branding</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad soluta modi nesciunt deleniti error quis. Fuga veniam exercitationem mollitia inventore laborum assumenda corporis. Omnis sapiente earum voluptates recusandae distinctio porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus, nulla, nemo accusantium quos libero praesentium blanditiis deserunt corporis harum vero temporibus, iste sunt ipsum consequuntur nostrum. Natus, alias commodi.</p>  
                </div>
              </div>
  
            </div>
  
            <div class="bol-3-en-4">
  
              <div class="bol-grijs" data-inviewport="scale-in">
                <div class="bol-container">
                  <h2>Corporate Identity</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad soluta modi nesciunt deleniti error quis. Fuga veniam exercitationem mollitia inventore laborum assumenda corporis. Omnis sapiente earum voluptates recusandae distinctio porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus, nulla, nemo accusantium quos libero praesentium blanditiis deserunt corporis harum vero temporibus, iste sunt ipsum consequuntur nostrum. Natus, alias commodi.</p>  
                </div>
              </div>
      
              <div class="bol-groen" data-inviewport="scale-in">
                <div class="bol-container">
                  <h2>Packaging Design</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad soluta modi nesciunt deleniti error quis. Fuga veniam exercitationem mollitia inventore laborum assumenda corporis. Omnis sapiente earum voluptates recusandae distinctio porro. Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem voluptatibus, nulla, nemo accusantium quos libero praesentium blanditiis deserunt corporis harum vero temporibus, iste sunt ipsum consequuntur nostrum. Natus, alias commodi.</p>  
                </div>
              </div>
  
            </div>
  
          </div>

        </div>

      </div>

    </section>

    <!-- werkwijze -->
    
    <section class="werkwijze">

      <div class="container">

        <h1 data-inviewport="move-in">Werkwijze</h1>

        <div class="tekst-container">
  
          <div class="tekst-1" data-inviewport="move-in">
  
            <p class="groen">Dat verschilt natuurlijk van de vraag. Wil je dat ik samen met een team bij jou een project oppak en begeleidt? Creative direction dus. Dan kom ik naar jullie toe en maak kennis met het team of afdeling, we bespreken het project, timings en de verwachtingen. Kortom, alles wat nodig is om van start te gaan. Geen probleem. Leuk.</p>
            
            <p>Als je een mooi designproject voor me hebt, dan doe ik die het liefst thuis bij Braund. Natuurlijk moeten we elkaar wel eerst zien om de briefing en het proces door te nemen. Daarna krijg je van mij een debrief, timing en kostenplaatje. Bij akkoord ga ik aan de slag en als het nodig is gaan we eerst samen je merkverhaal scherp krijgen.</p>
  
          </div>
  
          <div class="tekst-2" data-inviewport="move-in">
  
            <p>Daarna kan ik daar vorm aan geven. Dan volgt de presentatie van concept en design. Leuk en spannend tegelijk. En na keuze optimaliseer ik de richting(en) en werk het uit op verschillende uitingen. Ik laat het je tussentijds allemaal zien. Jij blij, ik blij? Dan laat ik het werktekenen of finaliseren. Klaar. Zo ongeveer gaat het.</p>
  
          </div>
  
        </div>

      </div>

    </section>

    <!-- ervaring -->

    <section class="ervaring">

      <!-- <img class="verticaal-logo" src="./img/SVG/BRAUND-VERTICAAL.svg" alt=""> -->

      <div class="container">

        <div class="tekst-container">

          <h1 data-inviewport="move-in">Ervaring</h1>
          <p data-inviewport="move-in">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis aut non, facere autem animi, earum placeat in asperiores repellendus nobis, suscipit aliquid atque reprehenderit molestias possimus sapiente quae ullam iure? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iure, necessitatibus? Perferendis ipsa ab illum velit! Temporibus tempora sapiente consectetur itaque hic commodi id enim iure esse illum deleniti, deserunt quo.</p>
    
        </div>

        <div class="img-container" data-inviewport="move-up">

          <img src="./img/Beelden/ERVARING.jpg" alt="">

        </div>

      </div>

    </section>

    <!-- derde slideshow -->

    <section class="projecten-2">

      <div class="container">

        <div class="swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide"><img src="./img/Beelden/Slideshow_3_1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/Beelden/Slideshow_2_1.jpg" alt=""></div>
            <div class="swiper-slide"><img src="./img/Beelden/Slideshow_1_1.jpg" alt=""></div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination"></div>
        
        </div>

    </section>

    <!-- contact formulier -->

    <footer>

      <div class="tekst">

        <h1>Contact</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate mollitia eveniet illo eius asperiores laudantium corporis explicabo amet possimus dolorem alias sint tenetur sunt quaerat cum dolorum architecto, vel accusantium.</p>

        <div class="contact-manieren">
          
          <span>Stijn Braun / <a href="tel:06-81-39-89">06 81 39 89</a> / <a href="mailto:stijn@braund.nl">stijn@braund.nl</a></span>

          <div class="media">
          
            <img src="./img/SVG/INSTAGRAM_GRIJS.svg" alt="">
            <img src="./img/SVG/LINKEDIN_GRIJS.svg" alt="">
          
          </div>

          <img src="./img/SVG/BRAUND-TEXT-GROEN.svg" alt="" class="logo">

        </div>
        
        <div class="contact-formulier">

        <form id="submit-form" action="#submit-form" method="POST">
        <h3>Submit a Link</h3>
        <fieldset>
            <table>
                <tr>
                    <td><label for="naam">Je naam</label></td>
                    <td><input id="naam" name="naam" type="text" placeholder="" required/></td>
                </tr>
                <tr>
                    <td><label for="bedrijfsnaam">Je bedrijfsnaam</label></td>
                    <td><input id="bedrijfsnaam" name="bedrijfsnaam" type="text" placeholder="" required/></td>
                </tr>
                <tr>
                    <td><label for="telefoonnummer">Je telefoonnummer</label></td>
                    <td><input id="telefoonnummer" name="telefoonnummer" type="tel" placeholder="" required/></td>
                </tr>
                <tr>
                    <td><label for="email">Je e-mailadres</label></td>
                    <td><input id="email" name="email" type="email" placeholder="" required/></td>
                </tr>
                <tr>
                    <td><label for="bericht">Als je wilt kun je hier in ongeveer 200 woorden aangeven welke vraag je voor ons hebt. Ik ga er daarna aan de slag</label></td>
                    <td><textarea id="bericht" name="bericht" rows="5" columns="20" required></textarea></td>
                </tr>
                <tr>
                    <td><input name="submit" type="submit" value="Verzenden" /></td>
                    <td><p><?php echo $output ?></p></td>
                </tr>
            </table>
         </fieldset>
        </form>
        </div>

      </div>

      <div class="formulier"></div>

    </footer>

    <script src="./app.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>

      const swiper = new Swiper('.swiper', {

        // autoplay: {

        //   delay: 3000,
        //   disableOnInteraction: false,
          
        // },

        loop: true,

        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },

      });

    </script>

</body>
</html>
<?php
require_once (__DIR__ . '/data.php');
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Spår</title>
        <meta
        name="SPÅR"
        content="A sustainable brand for shoes and more."
        />
        <link rel="stylesheet" href="stylej.css" />
        <script src="scriptj.js" defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Goldman:wght@400;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
    </head>

    <body>
        <main>
            <header class="siteHeader">
        
                <div class="container-header">
                    <a class="logo" href="indexj.html">SPÅR</a>
                    <nav>
                    <a href="http://localhost:8000/indexj.php">Produkter</a>
                    <a href="http://localhost:8000/indexj.php">Kategorier</a>
                    <a href="http://localhost:8000/indexj.php">Community</a>
                    <a href="http://localhost:8000/indexj.php">För Organisation</a>
                    <a href="http://localhost:8000/indexj.php">Om Oss</a>
                    </nav>
                    <nav class="mute">
                        <div class="search"> 
                            Sök
                            <div class="searchpic"></div>
                        </div>
                    <a href="checkout.html"><img src="./images/Korg.svg" alt="shopping cart" style="width:20px;height:20px;"></a>
                    <a href="http://localhost:8000/indexj.php">EN / SV</a>
                    </nav>
                </div>    
            </header>
            <section class="hero">
                <div class="container-hero">
                    <div class="hero-text">
                        <h5>Launch event</h5>
                        <h1>Återta varje rörelse</h1>
                        <h2>Möt REGAIN, vår innovativa proteshand som utforskar hur teknik och design kan skapa nya möjligheter i vardagen. Utvecklad med fokus på rörelsefrihet, funktion och självständighet.</h2>
                        <ul>
                            <li class="bubble1" ><img src="./images/Kalender.svg"alt="icon"> 30.11.2026</li>
                            <li class="bubble1"><img src="./images/Group 16.svg"alt="icon">10:00 - 16:00</li>
                            <li class="bubble1"><img src="./images/Group 1.svg"alt="icon">Mässans Gata, Göteborg</li>
                        </ul>
                        <a class="button" href="http://localhost:8000/indexj.php">Anmäl dig till eventet</a>
                        <a class="button2" href="http://localhost:8000/indexj.php">Utforska REGAIN</a>
                    </div>
                </div>
            </section>

            <section class="section1">
                <div class="rubrik1">
                    <h1>Vad driver oss framåt?</h1>
                    <h2>Bakom SPÅR finns en historia om rörelse, gemenskap och viljan att förändra. Upptäck idéerna, människorna och visionen som driver oss framåt.</h2>
                </div>
            
                <div class="container-karusell">
                    <?php
                    foreach ($cards as $card) {
                    ?>
                    <div class="card">
                         <div class="bubbles">
                            <div class="bubble">
                                <img src="<?php echo $card['icon']; ?>"alt="icon">
                                <p><?php echo $card['name']?></p>
                            </div>
                            <div class="bubbleround">
                                <div class="plus"></div>
                            </div>
                        </div>
                        <h5><?php echo $card['text']?></h5>
                    </div>
                    <?php ; } 
                    ?>
                </div>
            </section>

            <section class="section">
                <article class="rubrikLine">
                    <div class="rubrik">
                        <h1>Våra bästsäljare</h1>
                        <h2>Bär spåret vidare. Skor, klocka och huvdvårdskit.</h2>
                    </div>
                    <div>
                        <a class="buttonSeeMore" href="http://localhost:8000/indexj.php">Utforska alla produkter</a>
                    </div>
               </article> 


                <article class="container-popular">
                    <?php

                    foreach ($populars as $popular) {
                        ?>
                    

                    <div class="cardPopular">
                            <div class="containerImg">
                                <div class="imgPopular"><img src=" <?php echo $popular['img'] ?>" alt="shopping cart" style="width:auto;height:400px;"></div>
                            </div>
                            <div class="namePrice">
                                <h4><?php echo $popular['name']?></h4>
                                <h2><?php echo $popular['price']?></h2>
                            </div>
                            <h2><?php echo $popular['text']?></h2>
                            <a class="button" href="http://localhost:8000/indexj.php">Lägg till i varukorgen</a>
                    </div>

                    <?php } ; ?>
                </article>
            </section>


            <section class="section">
                <article class="rubrikLine">
                    <div class="rubrik">
                        <h1>Community-merch</h1>
                        <h2>Bär spåret vidare. Klocka, flaska och kroppslotion i begränsad upplaga.</h2>
                    </div>
                    <div>
                        <a class="buttonSeeMore" href="http://localhost:8000/indexj.php">Utforska alla produkter</a>
                    </div>
               </article> 


                <article class="container-popular">
                    <?php

                    foreach ($merches as $merch) {
                        ?>
                    

                    <div class="cardPopular">
                            <div class="containerImgMerch">
                                <div class="imgMerch">
                                    <div class="imageMerch"><img src=" <?php echo $merch['img'] ?>" alt="shopping cart" style="width:auto;height:441px;"></div>
                                    <div class="heart"><img src="./images/Heart.svg"></div>
                                </div>
                            </div>
                            <div class="namePrice">
                                <h2><?php echo $merch['name']?></h2>
                                <h2><?php echo $merch['price']?></h2>
                            </div>
                            <h3><?php echo $merch['text']?></h3>
                            <a class="button" href="http://localhost:8000/indexj.php">Lägg till i varukorgen</a>
                    </div>

                    <?php } ; ?>
                </article>
            </section>

            <section class="section">
                <div class="rubrik">
                    <h1>Inne hos Spår</h1>
                    <h2>Berättelser om människorna, tekniken och idéerna bakom Spår.</h2>
                </div>
            
                <div class="container-karusell">

                    <?php
                    foreach ($stories as $story) {
                    ?>

                    <div class="storyCard">
                        <div class="storyImg">
                            <div><img src=" <?php echo $story['img'] ?>" alt="story image"></div>
                        </div>
                        <div class="storyText">
                            
                            <div><?php echo $story['text']?></div>
                            <div class="category"><?php echo $story['category']?></div>
                            <div class="story"><h3><?php echo $story['story']?></h3></div>
                        </div>
                        <div class="time"><?php echo $story['time']?></div>
                    </div>

                    <?php ; } 
                    ?>

                </div>
            </section>
        </main>
        
        <footer class="footerContainer">
                <div class="footer1">
                    <div class="footerText">
                        <h1>Var först att lämna ett spår.</h1>
                        <h2>Nyheter om lanseringen - inget spam.</h2>
                    </div>

                    <div class="formContainer">
                        <form action="post.php" method="post">
                                <div>
                                    <label for="email"></label>
                                    <input type="email" name="email" value="Din e-postadress">
                                </div>

                                <div>
                                    <button type="submit">Få early access</button>
                                </div>
                        </form>
                    </div>

                </div>
                
                
                <div class="footer2">
                    <div class="footerText">
                        <h1>SPÅR</h1>
                        <h2>Adaptiv sport för alla kroppar.</h2>
                    </div>
                    <div class="footerList">
                        <h2 id="head">Shop</h2>
                        <h2>Spår Glid</h2>
                        <h2>Kategorier</h2>
                        <h2>Merch</h2>
                        <h2>Kommande</h2>
                    </div>
                    
                    <div class="footerList">
                        <h2 id="head">Om SPÅR</h2>
                        <h2>Vår historia</h2>
                        <h2>Stories</h2>
                        <h2>Hållbarhet</h2>
                        <h2>Press</h2>
                    </div>
                    
                    <div class="footerList">
                        <h2 id="head">Följ oss</h2>
                        <h2>Instagram</h2>
                        <h2>TikTok</h2>
                        <h2>Youtube</h2>
                        <h2></h2>
                    </div>
                    
                    <div class="footerList">
                        <h2 id="head" >Hjälp</h2>
                        <h2>Kontakt</h2>
                        <h2>Storleksguide</h2>
                        <h2>Tillgänglighet</h2>
                        <h2>FAQ</h2>
                    </div>
                    
                </div>
                
                <div class="line"></div>
                
                
                <div class="footer3">
                    <h2>&copy 2026 SPAR</h2>
                    <h2>Integritet · Cookies · SV / EN</h2>
                </div>
                    
                    
        </footer>
    </body>
</html>
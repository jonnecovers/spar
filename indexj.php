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
    </head>

    <body>
        <header class="siteHeader">
        
            <div class="container-header">
                <a class="logo" href="indexj.html">SPÅR</a>
                <nav>
                <a href="http://localhost:8000/indexj.php">Produkter</a>
                <a href="http://localhost:8000/indexj.php">Kategorier</a>
                <a href="http://localhost:8000/indexj.php">Community</a>
                <a href="http://localhost:8000/indexj.php">För organisation</a>
                <a href="http://localhost:8000/indexj.php">Om oss</a>
                </nav>
                <nav>
                <a href="checkout.html"><img src="./images/Basket_alt_3 (dagg).svg" alt="shopping cart" style="width:20px;height:20px;"></a>
                <a href="search.html"><img src="./images/Search (dagg).svg" alt="shopping cart" style="width:20px;height:20px;"></a>
                <a href="http://localhost:8000/indexj.php">EN / SV</a></nav>
            </div>    
        </header>
        <div class="hero">
                <div class="container-hero">
                    <div class="hero-text">
                        <h3 class="eyebrow">LAUNCH EVENT</h3>
                        <h1>Upplev nästa steg tillsammans</h1>
                        <ul>
                            <li>&bull; 30.11.2026</li>
                            <li>&bull; 10:00-16:00</li>
                            <li>&bull; möt teamet</li>
                        </ul>
                        <a class="button" href="http://localhost:8000/indexj.php">Anmäl dig till eventet</a>
                        <a class="button" href="http://localhost:8000/indexj.php">Utforska kollektionen</a>
                    </div>
                </div>
        </div>
            <section class="karusell">
                <div class="rubrik">
                    <h2>Varje rörelse lämnar ett spår. Låt ditt göra skillnad.</h2>
                    <h4>Vi att framtidens rörelse börjar med medvetna val. 
                        Genom att förena innovativ teknik, funktionell design och hållbarhet 
                        vill vi skapa produkter som hjälper dig att utvecklas, på dina egna villkor.</h4>
                </div>
            
                <div class="container-karusell">
                    <?php
                    foreach ($cards as $card) {
                    ?>
                    <div class="card">
                         <div class="bubbles">
                            <div class="bubble">
                                <div class="plupp"></div>
                                    <p><?php echo $card['name']?></p>
                                    </div>
                                    <div class="bubbleround">
                                        <div class="plus"></div>
                                    </div>
                        </div>
                        <h5><?php echo $card['text']?></h5>
                    </div>
                    <?php ; } ?>
                </div>
            </section>

            <section class="karusell">
                <div class="rubrik">
                    <h2>Populär just nu</h2>
                    <h4>Bär spåret vidare. Flaska, keps och klocka i begränsad upplaga.</h4>
                </div>
                <article class="container-popular">
                    <div class="main-product"></div>
                    <div class="info">
                        <div class="points">
                            <h3>ADIZERO EVO SL ATR SKOR</h3>
                        </div>
                        <div class="points">
                                <h4>Skor med LIGHTSTRIKE PRO-dämpning för lättviktsrörelser och snabbhet på nästa nivå.</h4>
                        </div>
                        <div class="points">
                            <div class="bullet"></div>
                            <div class="point">
                                <h3>SPÅRCELL-sula</h3>
                                <h4>Algpolymer som minns kroppens tryck</h4>
                            </div>
                        </div>
                        <div class="points">
                            <div class="bullet"></div>
                            <div>
                                <h3>Adaptiv stängning</h3>
                                <h4>Magnet + dragögla - en hand räcker</h4>
                            </div>
                        </div>
                        <div class="points">
                            <div class="bullet"></div>
                            <div>
                                <h3>Återvunnet material</h3>
                                <h4>80 % återvunnen ovandel</h4>
                            </div>
                        </div>
                        <div class="info">
                            <h3>Storlekar</h3>
                            <div class="sizes">
                                <div class="size"><h4>36</h4></div>
                                <div class="size"><h4>37</h4></div>
                                <div class="size"><h4>38</h4></div>
                                <div class="size"><h4>39</h4></div>
                                <div class="size"><h4>40</h4></div>
                                <div class="size"><h4>41</h4></div>
                            </div>

                            <div class="sizes">
                                <div class="size"><h4>42</h4></div>
                                <div class="size"><h4>43</h4></div>
                                <div class="size"><h4>44</h4></div>
                                <div class="size"><h4>45</h4></div>
                                <div class="size"><h4>46</h4></div>
                                <div class="size"><h4>47</h4></div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>


        </main>
    </body>
</html>
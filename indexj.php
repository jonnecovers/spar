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
                    <nav>
                        <div class="search"> 
                            Sök
                            <div class="searchpic"></div>
                        </div>
                    <a href="checkout.html"><img src="./images/Korg.svg" alt="shopping cart" style="width:20px;height:20px;"></a>
                    <a href="http://localhost:8000/indexj.php">EN / SV</a></nav>
                </div>    
            </header>
            <section class="hero">
                <div class="container-hero">
                    <div class="hero-text">
                        <h4 class="eyebrow"> Launch event</h4>
                        <h1>Återta varja rörelse</h1>
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
                <div class="rubrik">
                    <h1>Våra bästsäljare</h1>
                    <h4>Bär spåret vidare. Skor, klocka och huvdvårdskit.</h4>
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
<?php
 include_once 'header.php';
?>
<!--content-->
    <section class="index-intro">
         <?php
            if(isset($_SESSION["useruid"])){
                echo "<p>Konnichiwa " . $_SESSION["useruid"] ."</p>";
            }        
            
        ?>
        <h1>Immerse Yourself in the World of Anime</h1>
        <p><a href="https://aniwatch.to/home">Discover the latest anime releases, explore hidden gems, and connect with fellow anime enthusiasts from around the globe. Whether you're a seasoned otaku or new to the world of anime, there's always something exciting to explore.</a></p>
    </section>

    <section class="index-categories">
        <h2>Explore Anime Genres</h2>
        <div class="index-categories-list">
            <div>
                <h3>Action-Packed Shonen</h3>
                <p>Experience adrenaline-pumping battles and epic journeys in the world of action-packed shonen anime. Example: <em>Bleach</em></p>
                <a href="https://aniwatch.to/watch/bleach-thousandyear-blood-war-the-separation-18420?ep=102994"><img src="img/bleach..jpg" alt="Bleach Poster" class="mini-poster"></a>
            </div>
            <div>
                <h3>Isekai</h3>
                <p>Revolves around characters who find themselves transported to alternate realities or fantasy realms. Viewers can expect thrilling adventures, magical landscapes, and encounters with fantastical creatures as protagonists navigate their way through these parallel worlds. Example: <em>The Eminence in Shadow</em></p>
                <a href="https://aniwatch.to/watch/the-eminence-in-shadow-17473?ep=94440"><img src="img/Shadow-Garden.jpg" alt="The Eminence In Shadow Poster" class="mini-poster"></a>

            </div>
            <div>
                <h3>Romantic Escapades</h3>
                <p>Embark on heartwarming journeys of love and romance with our selection of romantic anime series and movies. Example: <em>Your Lie in April</em></p>
                <a href="https://aniwatch.to/watch/your-name-10?ep=57910"><img src="img/yourlieinapril.png" alt="Your Name Poster" class="mini-poster"></a>

            </div>
            <div>
                <h3>Harem</h3>
                <p>These are stories that focus on polygynous or polyandrous relationships. In these shows, the protagonist is surrounded by three or more interested parties. Often centred around humour. Best Example: <em>Highschool DxD</em></p>
                <a href="https://aniwatch.to/watch/high-school-dxd-1834?ep=23414"><img src="img/highschool-dxd.jpg" alt="HighSchool DxD Poster" class="mini-poster"></a>

            </div>
        </div>
    </section>

<?php
 include_once 'footer.php';
?>


    

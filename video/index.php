<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Quentin Pérou | Vidéo</title>
    <meta name="author" content="Quentin Pérou" />
    <meta name="keywords" content="quentin perou quentinperou  web portfolio mmi laval">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--    TYPOGRAPHIE    -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!--    CSS    -->
    <link rel="stylesheet" href="../style.css" type="text/css" />

    <!--    JS    -->
    <script src="../script.js"></script>

</head>

<body>
    <header>
        <div class="enteteContainer">
            <div class="websiteLogo">
                <a href="../" title="Revenir à l'accueil">
                    <span class="titreEnteteSite">Quentin Pérou</span>
                </a>
            </div>
            <nav class="menu">
                <a href="../" class="menuElement">Accueil</a>
                <a href="../photographie/" class="menuElement">Photographie</a>
                <a href="#" class="menuElement selected">Vidéo</a>
                <!-- <a href="#contact" class="menuElement">Contact</a> -->
            </nav>
            <div class="burgerMenu " title="Menu">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    </header>

    <main>

        <section id="projets">
            <h2>Mes réalisations</h2>

            <div class="contenuSectionProjets">

                <div class="projet">
                    <div>
                        <img src="../images/header-accueil.jpg" alt="">
                    </div>
                    <div>
                        <h3>Reportage "Réalité ou illusion"</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, illum nulla? Repellat natus officiis deleniti quis corrupti, perferendis, nobis minus animi reiciendis tenetur qui doloremque dicta ipsam excepturi eligendi eius.</p>
                        <a href="#" class="bouton">Voir le projet</a>
                    </div>
                </div>

                <div class="projet">
                    <div>
                        <img src="../images/header-accueil.jpg" alt="">
                    </div>
                    <div>
                        <h3>Mon projet</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, illum nulla? Repellat natus officiis deleniti quis corrupti, perferendis, nobis minus animi reiciendis tenetur qui doloremque dicta ipsam excepturi eligendi eius.</p>
                        <a href="#" class="bouton">Voir le projet</a>
                    </div>
                </div>

            </div>
        </section>


        <section id="contact">
            <h2>Contact</h2>
            <a href="mailto:quentinperou.contact@gmail.com">quentinperou.contact@gmail.com</a>

            <div class="mes_reseaux">
                <a href="https://www.instagram.com/quentinperou/" class="icon" target="_blank">
                    <svg id="instaLogo" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                        <path d="M128,23.06c34.18,0,38.23.13,51.72.75,12.48.57,19.26,2.65,23.77,4.41a39.66,39.66,0,0,1,14.72,9.57,39.66,39.66,0,0,1,9.57,14.72c1.76,4.51,3.84,11.29,4.41,23.77.62,13.49.75,17.54.75,51.72s-.13,38.23-.75,51.72c-.57,12.48-2.65,19.26-4.41,23.77a42.33,42.33,0,0,1-24.29,24.29c-4.51,1.76-11.29,3.84-23.77,4.41-13.49.62-17.54.75-51.72.75s-38.23-.13-51.72-.75c-12.48-.57-19.26-2.65-23.77-4.41a39.58,39.58,0,0,1-14.72-9.57,39.58,39.58,0,0,1-9.57-14.72c-1.76-4.51-3.84-11.29-4.41-23.77-.62-13.49-.75-17.54-.75-51.72s.13-38.23.75-51.72C24.38,63.8,26.46,57,28.22,52.51a39.66,39.66,0,0,1,9.57-14.72,39.58,39.58,0,0,1,14.72-9.57C57,26.46,63.8,24.38,76.28,23.81c13.49-.62,17.54-.75,51.72-.75M128,0C93.24,0,88.88.15,75.23.77S52.3,3.56,44.15,6.72A62.88,62.88,0,0,0,21.48,21.48,62.83,62.83,0,0,0,6.72,44.16C3.56,52.3,1.39,61.6.77,75.23S0,93.24,0,128s.15,39.12.77,52.77,2.79,22.93,5.95,31.08a62.88,62.88,0,0,0,14.76,22.67,62.88,62.88,0,0,0,22.67,14.76c8.15,3.16,17.45,5.33,31.08,5.95s18,.77,52.77.77,39.12-.15,52.77-.77,22.93-2.79,31.07-5.95a65.4,65.4,0,0,0,37.44-37.43c3.16-8.15,5.33-17.45,5.95-31.08s.77-18,.77-52.77-.15-39.12-.77-52.77-2.79-22.93-5.95-31.07a62.83,62.83,0,0,0-14.76-22.68A62.83,62.83,0,0,0,211.84,6.72C203.7,3.56,194.4,1.39,180.77.77S162.76,0,128,0Zm0,62.27A65.73,65.73,0,1,0,193.73,128,65.73,65.73,0,0,0,128,62.27Zm0,108.4A42.67,42.67,0,1,1,170.67,128,42.68,42.68,0,0,1,128,170.67Zm83.69-111a15.36,15.36,0,1,1-15.36-15.36A15.36,15.36,0,0,1,211.69,59.67Z" />
                    </svg>
                </a>

                <!-- <a href="https://twitter.com/quentinperou" class="icon" target="_blank">
                    <svg version="1.1" id="twitterLogo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 450 450" style="enable-background:new 0 0 450 450;" xml:space="preserve">

                        <path d="M450,85.7c-17.7,7.6-35.4,12.4-53.1,14.3c20-12,33.5-28.9,40.5-50.8c-18.3,10.8-37.8,18.3-58.5,22.3
        c-18.3-19.4-40.7-29.1-67.4-29.1c-25.5,0-47.2,9-65.2,27c-18,18-27,39.7-27,65.2c0,6.9,0.8,13.9,2.3,21.1
        c-37.7-1.9-73-11.4-106.1-28.4c-33-17-61.1-39.7-84.1-68.1C23,73.4,18.8,88.9,18.8,105.6c0,15.8,3.7,30.5,11.1,44
        c7.4,13.5,17.4,24.5,30,32.8c-14.8-0.6-28.7-4.5-41.7-11.7v1.1c0,22.3,7,41.8,21,58.7c14,16.8,31.6,27.5,53,31.8
        c-8,2.1-16.1,3.1-24.3,3.1c-5.3,0-11.1-0.5-17.4-1.4c5.9,18.5,16.8,33.6,32.5,45.5c15.8,11.9,33.7,18,53.7,18.4
        c-33.5,26.3-71.7,39.4-114.5,39.4c-8.2,0-15.6-0.4-22.3-1.1c42.8,27.6,90,41.4,141.6,41.4c32.7,0,63.5-5.2,92.2-15.6
        c28.7-10.4,53.3-24.3,73.7-41.7c20.4-17.4,37.9-37.4,52.7-60.1c14.8-22.7,25.7-46.3,33-70.9c7.2-24.7,10.8-49.3,10.8-74.1
        c0-5.3-0.1-9.3-0.3-12C421.8,120.2,437.2,104.3,450,85.7z" />
                    </svg>
                </a> -->

                <a href="https://www.youtube.com/@quentinperou" class="icon" target="_blank">
                    <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1080 1080" style="enable-background:new 0 0 1080 1080;" xml:space="preserve">
                        <path d="M1057.4,280.1c-12.4-46.5-49-83.1-95.5-95.5C877.7,162,540,162,540,162s-337.7,0-422,22.6c-46.5,12.4-83.1,49-95.5,95.5
        C0,364.3,0,540,0,540s0,175.7,22.6,259.9c12.4,46.5,49,83.1,95.5,95.5C202.3,918,540,918,540,918s337.7,0,422-22.6
        c46.5-12.4,83.1-49,95.5-95.5C1080,715.7,1080,540,1080,540S1080,364.3,1057.4,280.1L1057.4,280.1z M432,702V378l280.6,162L432,702
        L432,702z" />
                    </svg>
                </a>

                <a href=" https://fr.linkedin.com/in/quentinperou" class="icon" target="_blank">
                    <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
                        <g>
                            <g id="post-linkedin">
                                <path d="M459,0H51C23,0,0,23,0,51v408c0,28,23,51,51,51h408c28,0,51-23,51-51V51C510,23,487,0,459,0z M153,433.5H76.5V204H153
			V433.5z M114.8,160.6c-25.5,0-45.9-20.4-45.9-45.9s20.4-45.9,45.9-45.9s45.9,20.4,45.9,45.9S140.3,160.6,114.8,160.6z
			 M433.5,433.5H357V298.4c0-20.4-17.9-38.3-38.3-38.3s-38.3,17.9-38.3,38.3v135.1H204V204h76.5v30.6c12.8-20.4,40.8-35.7,63.8-35.7
			c48.5,0,89.3,40.8,89.3,89.3V433.5z" />
                            </g>
                        </g>
                    </svg>
                </a>


            </div>
        </section>

    </main>

    <footer>
        <a href="#">
            <div class="goEnHaut" title="Revenir en haut de la page">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="18px" height="18px">
                    <path d="M0 0h24v24H0V0z" fill="none" />
                    <path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6 1.41 1.41z" />
                </svg>
            </div>
        </a>
        <p>© 2023 Quentin Pérou </p>
    </footer>

</body>

</html>
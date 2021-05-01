<!DOCTYPE html>
<html lang="fr">

<head>

    <?php include("includes/head.php"); ?>

    <title>DWWM - Contact</title>
</head>

<body>



    <?php include("includes/header.php"); ?>






    <main id="main-content">
    <section class="form-wrapper">

            <div class="container">
                
            <h1 class="side-page">Nous contacter</h1>
                <form class="contact-form">
                    <div class="input-wrapper">
                    <label for="your-name">Votre nom</label>
                    <input type="text" name="your-name" placeholder="Entrez votre nom"></div>
                    
                    <div class="input-wrapper"><label for="your-email">Votre e-mail</label>
                    <input type="email" name="your-email" placeholder="Entrez votre adresse e-mail"></div>
                   
                    <div class="textarea-wrapper">
                    <label for="your-message">Votre message</label>
                    <textarea name="your-message" placeholder="Tapez votre message"></textarea></div>
                    
                    <div class="submit-wrapper">
                    <button type="submit" class="submit-btn">Envoyer <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 22 22">
                                        <defs>
                                            <style>
                                                .a {
                                                    stroke-linecap: round;
                                                    stroke-linejoin: round;
                                                    stroke-width: 2px;
                                                }
                                            </style>
                                        </defs>
                                        <g transform="translate(1 1)">
                                            <path class="a" d="M22,12A10,10,0,1,1,12,2,10,10,0,0,1,22,12Z" transform="translate(-2 -2)"></path>
                                            <path class="a" d="M12,16l4-4L12,8" transform="translate(-2 -2)"></path>
                                            <path class="a" d="M8,12h8" transform="translate(-2 -2)"></path>
                                        </g>
                                    </svg></button></div>
                </form>

            </div>



            </section>
    </main>



    <?php include("includes/footer.php"); ?>


</body>

</html>
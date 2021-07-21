<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.min.css">
        <title>DWWM2021-3 - Contacts</title>
    </head>

    <body>
        <?php include('parts/header.php'); ?>

        <main class="contact-main">
            <section class="contact-section">
                <div class="container">
                    <h1 class="form-title">Nous contacter</h1>
                    <div class="form">
                        <div class="form-content">
                            <div class="form-item">
                                <label for="name" class="input-title">Votre nom</label>
                                <input type="text" class="form-input" id="name" placeholder="Entrez votre nom" required>
                            </div>
                            <div class="form-item">
                                <label for="mail" class="input-title">Votre e-mail</label>
                                <input type="text" class="form-input" id="mail" placeholder="Entrez votre adresse e-mail" required>
                            </div>
                            <div class="form-item">
                                <label for="message" class="input-title">Votre message</label>
                                <textarea name="message" id="message" cols="30" rows="7" class="form-input" placeholder="Tapez votre message" required></textarea>
                            </div>
                        </div>
                        <div class="form-button">
                            <button class="submit-btn" aria-label="Envoyer votre message">Envoyer 
                            <img src="img/icone_fleche_droite.svg" alt="Consultez la suite de l'article" class="button-icone">
                        </button>
                    </div>
                    </div>
                </div>
            </section>
        </main>
        
        <?php include('parts/footer.php'); ?>
        
        <script src="js/bundle.min.js"></script>
    </body>
</html>
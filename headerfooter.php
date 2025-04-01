<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header - Sportify</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="bg-dark text-white py-4"> <!-- Hauteur augmentée -->
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                
                <!-- Logo (plus à gauche) -->
                <div class="d-flex align-items-center logo-container">
                    <img src="logo1.png" alt="Logo" width="40" height="40" class="me-2">
                    <h2 class="m-0 fw-light">Sportify</h2> <!-- fw-light pour une écriture fine -->
                </div>

                <!-- Connexion (texte simple, plus haut) -->
                <div class="login">
                    <a href="login.html" class="nav-link">Connexion | Inscription</a>
                </div>
            </div>

            <!-- Liens de navigation (centrés et plus bas) -->
            <nav class="mt-3">
                <ul class="nav justify-content-center">
                    <li class="nav-item"><a class="nav-link" href="accueil.html">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link" href="cours.html">Nos Cours</a></li>
                    <li class="nav-item"><a class="nav-link" href="devis.html">Demande de Devis</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <footer class="footer bg-dark text-white py-4">
        <div class="container text-center">
            
            <!-- Contact Infos (Email & Téléphone) -->
            <div class="mb-2">
                <a href="mailto:contact@sportify.com" class="footer-link me-3">
                    <i class="fas fa-envelope"></i> contact@sportify.com
                </a>
                <span class="footer-text"><i class="fas fa-phone"></i> +33 6 12 34 56 78</span>
            </div>
    
            <!-- Réseaux sociaux -->
            <div class="mb-2">
                <a href="https://facebook.com" class="footer-link me-3"><i class="fab fa-facebook fa-lg"></i></a>
                <a href="https://instagram.com" class="footer-link"><i class="fab fa-instagram fa-lg"></i></a>
            </div>
    
            <!-- Copyright -->
            <p class="footer-text m-0">&copy; 2025 Sportify. Tous droits réservés.</p>
            
        </div>
    </footer>

</body>
</html>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Site Moderne</title>
    <style>
    /* Variables et reset */
    :root {
        --primary: #7C3AED;
        --primary-dark: #6D28D9;
        --secondary: #10B981;
        --dark: #111827;
        --light: #F9FAFB;
        --gray: #E5E7EB;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }

    body {
        background-color: var(--light);
        color: var(--dark);
        line-height: 1.5;
    }

    /* Header */
    header {
        padding: 1.5rem 0;
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 100;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
    }

    .container {
        width: 90%;
        max-width: 1280px;
        margin: 0 auto;
    }

    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary);
    }

    .nav-links {
        display: flex;
        gap: 2rem;
        list-style: none;
    }

    .nav-links a {
        color: var(--dark);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
        position: relative;
    }

    .nav-links a::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: -4px;
        left: 0;
        background-color: var(--primary);
        transition: width 0.3s ease;
    }

    .nav-links a:hover::after {
        width: 100%;
    }

    .nav-buttons {
        display: flex;
        gap: 1rem;
    }

    .btn {
        display: inline-block;
        padding: 0.625rem 1.25rem;
        border-radius: 0.5rem;
        font-weight: 500;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .btn-outline {
        color: var(--primary);
        border: 1px solid var(--primary);
        background: transparent;
    }

    .btn-outline:hover {
        background-color: var(--primary);
        color: white;
    }

    .btn-primary {
        background-color: var(--primary);
        color: white;
        border: 1px solid var(--primary);
    }

    .btn-primary:hover {
        background-color: var(--primary-dark);
        border-color: var(--primary-dark);
        transform: translateY(-2px);
        box-shadow: 0 4px 6px rgba(124, 58, 237, 0.2);
    }

    /* Main */
    main {
        padding-top: 5rem;
        min-height: calc(100vh - 10rem);
    }

    .hero {
        display: flex;
        align-items: center;
        gap: 2rem;
        padding: 5rem 0;
    }

    .hero-content {
        flex: 1;
    }

    .hero-title {
        font-size: 3.5rem;
        font-weight: 800;
        line-height: 1.1;
        margin-bottom: 1.5rem;
        background: linear-gradient(90deg, var(--primary), var(--secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .hero-subtitle {
        font-size: 1.25rem;
        color: #4B5563;
        margin-bottom: 2rem;
        max-width: 32rem;
    }

    .hero-image {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .hero-image img {
        max-width: 100%;
        height: auto;
        border-radius: 1rem;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
    }

    /* Footer */
    footer {
        background-color: var(--dark);
        color: var(--light);
        padding: 4rem 0 2rem;
    }

    .footer-content {
        display: flex;
        justify-content: space-between;
        gap: 4rem;
        margin-bottom: 2rem;
    }

    .footer-branding {
        flex: 2;
    }

    .footer-logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: white;
        margin-bottom: 1rem;
    }

    .footer-desc {
        color: #9CA3AF;
        max-width: 20rem;
    }

    .footer-links {
        flex: 1;
    }

    .footer-title {
        font-size: 1.125rem;
        font-weight: 600;
        margin-bottom: 1.5rem;
        color: white;
    }

    .footer-menu {
        list-style: none;
    }

    .footer-menu li {
        margin-bottom: 0.75rem;
    }

    .footer-menu a {
        color: #9CA3AF;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    .footer-menu a:hover {
        color: white;
    }

    .footer-social {
        display: flex;
        gap: 1rem;
        margin-top: 1.5rem;
    }

    .social-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 2.5rem;
        height: 2.5rem;
        border-radius: 50%;
        background-color: #374151;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .social-link:hover {
        background-color: var(--primary);
        transform: translateY(-3px);
    }

    .footer-bottom {
        border-top: 1px solid #374151;
        padding-top: 2rem;
        text-align: center;
        color: #9CA3AF;
        font-size: 0.875rem;
    }

    /* Responsive */
    @media (max-width: 768px) {

        .nav-links,
        .nav-buttons {
            display: none;
        }

        .hero {
            flex-direction: column;
            text-align: center;
            padding: 3rem 0;
        }

        .hero-title {
            font-size: 2.5rem;
        }

        .hero-subtitle {
            margin-left: auto;
            margin-right: auto;
        }

        .footer-content {
            flex-direction: column;
            gap: 2rem;
        }
    }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav>
                <div class="logo">BrandX</div>
                <ul class="nav-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <div class="nav-buttons">
                    <a href="/login" class="btn btn-outline">Se connecter</a>
                    <a href="/register" class="btn btn-primary">S'inscrire</a>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main content -->
    <main>
        <div class="container">
            <section class="hero">
                <div class="hero-content">
                    <h1 class="hero-title">Design moderne pour votre présence digitale</h1>
                    <p class="hero-subtitle">Créez une expérience utilisateur exceptionnelle avec notre approche
                        innovante et nos solutions sur mesure.</p>
                    <div class="hero-buttons">
                        <a href="#" class="btn btn-primary">Démarrer maintenant</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="/api/placeholder/600/400" alt="Illustration moderne">
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-branding">
                    <div class="footer-logo">BrandX</div>
                    <p class="footer-desc">Nous créons des expériences digitales exceptionnelles qui inspirent et
                        connectent les personnes à travers le monde.</p>
                    <div class="footer-social">
                        <a href="#" class="social-link">FB</a>
                        <a href="#" class="social-link">TW</a>
                        <a href="#" class="social-link">IG</a>
                        <a href="#" class="social-link">LI</a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3 class="footer-title">Navigation</h3>
                    <ul class="footer-menu">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3 class="footer-title">Services</h3>
                    <ul class="footer-menu">
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Développement</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">UI/UX Design</a></li>
                        <li><a href="#">Consulting</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3 class="footer-title">Contact</h3>
                    <ul class="footer-menu">
                        <li>info@brandx.com</li>
                        <li>+33 1 23 45 67 89</li>
                        <li>123 Rue Example, Paris</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 BrandX. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>

</html>
<!-- migration de offres -->

<!-- public function up(): void
{
Schema::create('offres', function (Blueprint $table) {
$table->id();
$table->string('start_city');
$table->string('end_city');
$table->date('start_date');
$table->date('end_date');
$table->time('end_time');
$table->time('start_time');
$table->integer('available_seats');
$table->integer('total_seats');
$table->string('description');
$table->timestamps();

});
} -->
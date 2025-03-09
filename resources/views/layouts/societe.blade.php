<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Éducatif</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="{{ asset('css/dashboard/societe.css') }}" rel="stylesheet">

</head>

<body>
    <div class="layout-wrapper">
        <!-- Sidebar -->
        <aside class="sidebar" id="layout-menu">
            <div class="sidebar-header">
                <a href="#" class="sidebar-logo">
                    <i class="fas fa-graduation-cap"></i>
                    <span>EduDash</span>
                </a>
            </div>
            <ul class="menu">
                <li class="menu-item">
                    <a href="#" class="menu-link active">
                        <i class="fas fa-home menu-icon"></i>
                        <span>Tableau de bord</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{url('/offres')}}" class="menu-link">
                        <i class="fas fa-book menu-icon"></i>
                        <span>Offres</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="{{url('edit-offre') }}" class="menu-link">
                        <i class="fas fa-users menu-icon"></i>
                        <span>Edit offre</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-chalkboard-teacher menu-icon"></i>
                        <span>Demandes d'Abonnement</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-graduation-cap menu-icon"></i>
                        <span>Abonnements</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-chart-bar menu-icon"></i>
                        <span>Réservations</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-chart-bar menu-icon"></i>
                        <span>Statistiques</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-cog menu-icon"></i>
                        <span>Paramètres</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-question-circle menu-icon"></i>
                        <span>Aide</span>
                    </a>
                </li>
            </ul>
            <div class="sidebar-footer">
                <ul class="menu" style="padding: 0;">
                    <li class="menu-item">
                        <a href="#" class="menu-link">
                            <i class="fas fa-sign-out-alt menu-icon"></i>
                            <span>Déconnexion</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <!-- Layout Page -->
        <div class="layout-page">
            <!-- Navbar -->
            <nav class="navbar">
                <div class="nav-left">
                    <div class="menu-toggle" id="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </div>
                    <div class="search-form">
                        <i class="fas fa-search search-icon"></i>
                        <input type="text" class="search-input" placeholder="Rechercher...">
                    </div>
                </div>
                <div class="nav-right">
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-bell"></i>
                            <span class="badge">4</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-envelope"></i>
                            <span class="badge">3</span>
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="fas fa-language"></i>
                        </a>
                    </div>
                    <div class="nav-item">
                        <div class="avatar">AD</div>
                    </div>
                </div>
            </nav>
            @if(session('success'))
            <span class="z-3 alert alert-success ">{{ session('success') }}</span> @endif
            <!-- Content -->
            <div class="content-wrapper">
                @yield("content")
            </div>
        </div>
    </div>

    <script>
    // Script pour le toggle du menu mobile
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('layout-menu').classList.toggle('show');
    });
    </script>
</body>

</html>
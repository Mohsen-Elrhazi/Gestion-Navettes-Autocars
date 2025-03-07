<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Éducatif</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
    :root {
        --primary: #696cff;
        --secondary: #8592a3;
        --success: #71dd37;
        --danger: #ff3e1d;
        --warning: #ffab00;
        --info: #03c3ec;
        --light-bg: #f5f5f9;
        --card-bg: #ffffff;
        --text-primary: #566a7f;
        --text-secondary: #a1acb8;
        --border-color: #eceef1;
        --radius: 0.375rem;
        --shadow: 0 2px 6px 0 rgba(67, 89, 113, 0.12);
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Public Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell, 'Open Sans', sans-serif;
    }

    body {
        background-color: var(--light-bg);
        color: var(--text-primary);
        font-size: 0.9375rem;
        line-height: 1.5;
    }

    .layout-wrapper {
        display: flex;
        min-height: 100vh;
    }

    /* Sidebar */
    .sidebar {
        width: 260px;
        background: var(--card-bg);
        box-shadow: var(--shadow);
        position: fixed;
        height: 100vh;
        overflow-y: auto;
        z-index: 10;
        transition: all 0.3s ease;
        display: flex;
        flex-direction: column;
    }

    .sidebar-header {
        padding: 1.25rem;
        display: flex;
        align-items: center;
        border-bottom: 1px solid var(--border-color);
    }

    .sidebar-logo {
        font-size: 1.5rem;
        font-weight: 700;
        color: var(--primary);
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .menu {
        list-style: none;
        padding: 1rem 0;
        flex-grow: 1;
    }

    .menu-item {
        position: relative;
    }

    .menu-link {
        display: flex;
        align-items: center;
        padding: 0.625rem 1.5rem;
        color: var(--text-primary);
        text-decoration: none;
        transition: all 0.3s ease;
        font-size: 0.9375rem;
        gap: 0.75rem;
    }

    .menu-link:hover,
    .menu-link.active {
        color: var(--primary);
        background-color: rgba(105, 108, 255, 0.16);
    }

    .menu-link.active {
        font-weight: 500;
        border-right: 3px solid var(--primary);
    }

    .menu-icon {
        width: 24px;
        text-align: center;
    }

    .sidebar-footer {
        padding: 1rem 0;
        border-top: 1px solid var(--border-color);
    }

    /* Main Content */
    .layout-page {
        flex: 1;
        margin-left: 260px;
        width: calc(100% - 260px);
    }

    .content-wrapper {
        padding: 1.5rem;
        border-radius: var(--radius);
        background-color: var(--card-bg);
        box-shadow: var(--shadow);
        margin: 1.5rem;
        border: 1px solid var(--border-color);
    }

    /* Header */
    .navbar {
        background: var(--card-bg);
        height: 64px;
        box-shadow: var(--shadow);
        display: flex;
        align-items: center;
        padding: 0 1.5rem;
        justify-content: space-between;
    }

    .nav-left {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .menu-toggle {
        font-size: 1.375rem;
        color: var(--text-primary);
        cursor: pointer;
        display: none;
    }

    .search-form {
        position: relative;
    }

    .search-input {
        border: 1px solid var(--border-color);
        border-radius: 0.375rem;
        padding: 0.4375rem 0.875rem;
        padding-left: 2.25rem;
        background-color: var(--light-bg);
        color: var(--text-primary);
        width: 200px;
        transition: all 0.2s ease;
    }

    .search-input:focus {
        outline: none;
        border-color: var(--primary);
        width: 240px;
    }

    .search-icon {
        position: absolute;
        left: 0.875rem;
        top: 50%;
        transform: translateY(-50%);
        color: var(--text-secondary);
    }

    .nav-right {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .nav-item {
        position: relative;
    }

    .nav-link {
        color: var(--text-primary);
        font-size: 1.25rem;
        padding: 0.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.375rem;
        transition: all 0.2s ease;
    }

    .nav-link:hover {
        background-color: rgba(67, 89, 113, 0.1);
    }

    .badge {
        position: absolute;
        right: 0;
        top: 0;
        background-color: var(--danger);
        color: #fff;
        border-radius: 50%;
        width: 18px;
        height: 18px;
        font-size: 0.75rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .avatar {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: var(--primary);
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.2s ease;
    }

    .avatar:hover {
        opacity: 0.8;
    }

    /* Responsive */
    @media (max-width: 767.98px) {
        .menu-toggle {
            display: block;
        }

        .sidebar {
            transform: translateX(-100%);
        }

        .sidebar.show {
            transform: translateX(0);
        }

        .layout-page {
            margin-left: 0;
            width: 100%;
        }

        .content-wrapper {
            margin: 1rem;
        }
    }
    </style>
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
                    <a href="#" class="menu-link">
                        <i class="fas fa-book menu-icon"></i>
                        <span>Cours</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-users menu-icon"></i>
                        <span>Étudiants</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-chalkboard-teacher menu-icon"></i>
                        <span>Instructeurs</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-graduation-cap menu-icon"></i>
                        <span>Examens</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#" class="menu-link">
                        <i class="fas fa-chart-bar menu-icon"></i>
                        <span>Rapports</span>
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

            <!-- Content -->
            <div class="content-wrapper">
                <h1>Content</h1>
                <p>Lorem ipsum, dolor sit hh hkkij, h hgbggfffdfvtc h t consectetur adipisicing elit. Voluptate quis
                    odit
                    blanditiis; oinoop
                    necessitatibus tenetur, aligtdrgtn'quid minus a ratione provident tempora esse, rem obcaecati veniam
                    tempore
                    eius libero cum dicta magnam.</p>
                <!-- La partie content est laissée vide intentionnellement pour que vous puissiez la remplir -->
            </div>
        </div>
    </div>


</body>

</html>
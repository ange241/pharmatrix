<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmatri+ | Paramètres</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/parametres.css">
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar">
           <div class="sidebar-header">
                <img src="assets/image/logo.png" alt="Pharmatri+ Logo" class="logo">
                <h3>Pharmatri+</h3>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="1.html"><i class="fas fa-home"></i> <span class="menu-text">Dashboard</span></a>
                </li>
                <li>
                    <a href="3.html"><i class="fas fa-shopping-cart"></i> <span class="menu-text">Commandes</span></a>
                </li>
                <li>
                    <a href="4.html"><i class="fas fa-capsules"></i> <span class="menu-text">Medicament</span></a>
                </li>
                <li>
                    <a href="2.html"><i class="fas fa-users"></i> <span class="menu-text">Utilisation</span></a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-chart-bar"></i> <span class="menu-text">Statistiques</span></a>
                </li>
                <li>
                    <a href="5.html"><i class="fas fa-cog"></i> <span class="menu-text">Paramètres</span></a>
                </li>
            </ul>   
        </nav>

        <!-- Page Content -->
        <div id="content">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button aria-label="Ouvrir le menu" type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>

                    <div class="search-bar">
                        <form class="d-flex">
                            <div class="input-group">
                                <input class="form-control" type="search" placeholder="Rechercher..."
                                    aria-label="Search">
                                <button aria-label="Rechercher" class=" btn btn-outline-secondary" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="user-profile ms-auto">
                        <div class="dropdown">
                            <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <img src="assets/image/Marshadow.jpg" alt="User" class="avatar">
                                <span class="user-name">Admin</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Profil</a></li>
                                <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Paramètres</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#"><i
                                            class="fas fa-sign-out-alt me-2"></i>Déconnexion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </nav>

            <!-- Main Content -->
            <div class="container-fluid">
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">Paramètres</h1>
                </div>

                <div class="row">
                    <!-- Colonne de gauche - Profil Admin -->
                    <div class="col-lg-5 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Mon Profil</h6>
                            </div>
                            <div class="card-body text-center">
                                <div class="profile-picture mb-3">
                                    <img src="assets/image/Marshadow.jpg" class="rounded-circle" width="150" height="150" alt="Photo de profil">
                                    <button class="btn btn-sm btn-outline-primary mt-2 change-photo-btn">
                                        <i class="fas fa-camera me-1"></i> Changer
                                    </button>
                                </div>
                                
                                <form id="profileForm">
                                    <div class="mb-3">
                                        <label for="adminNom" class="form-label">Nom</label>
                                        <input type="text" class="form-control" id="adminNom" value="Admin">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="adminPrenom" class="form-label">Prénom</label>
                                        <input type="text" class="form-control" id="adminPrenom" value="Principal">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="adminEmail" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="adminEmail" value="admin@pharmatri.com">
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="adminTelephone" class="form-label">Téléphone</label>
                                        <input type="tel" class="form-control" id="adminTelephone" value="690123456">
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-save me-1"></i> Enregistrer les modifications
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="card shadow mb-4">
                            <div class="card-header py-3 bg-warning">
                                <h6 class="m-0 font-weight-bold text-white">Changer le mot de passe</h6>
                            </div>
                            <div class="card-body">
                                <form id="passwordForm">
                                    <div class="mb-3">
                                        <label for="currentPassword" class="form-label">Mot de passe actuel</label>
                                        <input type="password" class="form-control" id="currentPassword" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="newPassword" class="form-label">Nouveau mot de passe</label>
                                        <input type="password" class="form-control" id="newPassword" required>
                                        <div class="form-text">Minimum 8 caractères</div>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="confirmPassword" class="form-label">Confirmer le mot de passe</label>
                                        <input type="password" class="form-control" id="confirmPassword" required>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-warning text-white">
                                        <i class="fas fa-key me-1"></i> Changer le mot de passe
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Colonne de droite - Autres paramètres -->
                    <div class="col-lg-7 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 bg-info text-white">
                                <h6 class="m-0 font-weight-bold">Préférences système</h6>
                            </div>
                            <div class="card-body">
                                <form id="systemForm">
                                    <div class="mb-3">
                                        <label for="language" class="form-label">Langue</label>
                                        <select class="form-select" id="language">
                                            <option value="fr" selected>Français</option>
                                            <option value="en">English</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="timezone" class="form-label">Fuseau horaire</label>
                                        <select class="form-select" id="timezone">
                                            <option value="UTC+1" selected>UTC+1 (Afrique Centrale)</option>
                                            <option value="UTC+0">UTC+0 (GMT)</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="theme" class="form-label">Thème</label>
                                        <select class="form-select" id="theme">
                                            <option value="light" selected>Clair</option>
                                            <option value="dark">Sombre</option>
                                            <option value="system">Système</option>
                                        </select>
                                    </div>
                                    
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="notifications" checked>
                                        <label class="form-check-label" for="notifications">Activer les notifications</label>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-info text-white">
                                        <i class="fas fa-save me-1"></i> Enregistrer les préférences
                                    </button>
                                </form>
                            </div>
                        </div>

                        <div class="card shadow">
                            <div class="card-header py-3 bg-danger text-white">
                                <h6 class="m-0 font-weight-bold">Zone dangereuse</h6>
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <h6 class="fw-bold">Export de données</h6>
                                    <p>Exportez toutes les données de l'application</p>
                                    <button class="btn btn-outline-secondary">
                                        <i class="fas fa-file-export me-1"></i> Exporter les données
                                    </button>
                                </div>
                                
                                <hr>
                                
                                <div class="mb-3">
                                    <h6 class="fw-bold">Réinitialisation</h6>
                                    <p>Réinitialiser tous les paramètres par défaut</p>
                                    <button class="btn btn-outline-warning reset-settings-btn">
                                        <i class="fas fa-undo me-1"></i> Réinitialiser les paramètres
                                    </button>
                                </div>
                                
                                <hr>
                                
                                <div>
                                    <h6 class="fw-bold text-danger">Suppression de compte</h6>
                                    <p>Cette action est irréversible. Toutes vos données seront perdues.</p>
                                    <button class="btn btn-outline-danger delete-account-btn" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal">
                                        <i class="fas fa-trash-alt me-1"></i> Supprimer le compte
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal de confirmation de suppression -->
    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title">Confirmation de suppression</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Êtes-vous absolument sûr de vouloir supprimer votre compte administrateur ?</p>
                    <p class="fw-bold">Cette action ne peut pas être annulée !</p>
                    <div class="mb-3">
                        <label for="confirmEmail" class="form-label">Tapez votre email pour confirmer</label>
                        <input type="email" class="form-control" id="confirmEmail" placeholder="admin@pharmatri.com">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteAccount">Supprimer définitivement</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/5.js"></script>
</body>
</html>
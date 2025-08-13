<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmatri+ | Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/dashboard.css">
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <nav id="sidebar" class="active">
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
                <h1 class="mt-4">Dashboard</h1>

                <!-- Commandes Summary -->
                <div class="row mt-4">
                    <div class="col-lg-3 col-md-6 mb-4 ">
                        <div class="card summary-card border-left-primary shadow h-100 py-2">
                            <div class="card-body text-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                                <div class="text-xs color4 font-weight-bold text-primary text-uppercase mb-1">
                                    Commandes</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 ">
                        <div class="card summary-card border-left-success shadow h-100 py-2">
                            <div class="card-body text-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">3</div>
                                <div class="text-xs color1 font-weight-bold text-success text-uppercase mb-1">
                                    En cours</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 ">
                        <div class="card summary-card border-left-info shadow h-100 py-2">
                            <div class="card-body text-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                                <div class="text-xs color2 font-weight-bold text-info text-uppercase mb-1">
                                    Validées</div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-4 ">
                        <div class="card summary-card border-left-warning shadow h-100 py-2">
                            <div class="card-body text-center">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">2</div>
                                <div class="text-xs color3 font-weight-bold text-warning text-uppercase mb-1">
                                    Annulées</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Commandes Section -->
                <div class="row">
                    <div class="col-12">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Commandes</h6>
                                <div class="dropdown no-arrow">
                                    <a aria-label="Ouvrir le menu" class="dropdown-toggle" href="#" role="button"
                                        id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end shadow animated--fade-in"
                                        aria-labelledby="dropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Action 1</a></li>
                                        <li><a class="dropdown-item" href="#">Action 2</a></li>
                                        <li><a class="dropdown-item" href="#">Action 3</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Client</th>
                                                <th>Médicament</th>
                                                <th>PU</th>
                                                <th>Qté</th>
                                                <th>Date</th>
                                                <th>Montant (FCFA)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>Paracetamol</td>
                                                <td>2000</td>
                                                <td>2</td>
                                                <td>25/07/2025</td>
                                                <td>4000</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>Efferalgan</td>
                                                <td>3000</td>
                                                <td>3</td>
                                                <td>23/07/2025</td>
                                                <td>9000</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>Paracetamol</td>
                                                <td>2000</td>
                                                <td>2</td>
                                                <td>25/07/2025</td>
                                                <td>4000</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="dataTables_info" id="dataTable_info" role="status"
                                            aria-live="polite">
                                            Affichage de 1 à 3 sur 3 entrées
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate">
                                            <ul class="pagination justify-content-end">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="dataTable_previous">
                                                    <a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Précédent</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item next disabled" id="dataTable_next">
                                                    <a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0"
                                                        class="page-link">Suivant</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom JS -->
    <script src="js/script.js"></script>
    <script src="js/1.js"></script>
</body>

</html>
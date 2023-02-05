<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Ample lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Ample admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description"
        content="Gestionnaire d'universite">
    <meta name="robots" content="noindex,nofollow">
    <title>Zephyr Dashboard</title>
    <link rel="canonical" href="<?=base_url()?>/https://www.wrappixel.com/templates/ample-admin-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url()?>/plugins/images/favicon.png">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>/plugins/bower_components/chartist/dist/chartist.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url()?>/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css">
    <!-- Custom CSS -->
    <link href="<?=base_url()?>/css/style.min.css" rel="stylesheet">


    <style>
    label
    {
        text-transform: uppercase;
        text-align: right;
        margin-right: 10px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="<?=base_url()?>/dashboard.html">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <!-- Dark Logo icon -->
                            <img src="<?=base_url()?>/plugins/images/diplome.jpg" height="36" alt="homepage" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="<?=base_url()?>/plugins/images/logo-text.png" alt="homepage" />
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="<?=base_url()?>/javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                   
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav ms-auto d-flex align-items-center">

                       
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li>
                            <a class="profile-pic" href="<?=base_url()?>/#">
                                <img src="<?=base_url()?>/plugins/images/users/lecteur.jpg" alt="user-img" width="36"
                                    class="img-circle"><span class="text-white font-medium">Zephyr</span></a>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        <li class="sidebar-item pt-2">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="<?=base_url()?>/Home/acceuil"
                                aria-expanded="false">
                                <i class="far fa-clock" aria-hidden="true"></i>
                                <span class="hide-menu">Accueil</span>
                            </a>
                        </li>
                        
                 </ul>    

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Liste des Etudiants</h4>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid"> 


            <?php

            if(session()->get('success') != NULL){?>
            
               <div class="alert" alert-success>
                <p>
                    <Strong>Mise a jour</Strong>
                    <hr>
                    L'ajout de la etudiant s'est effectué avec succès !
                </p>

               </div>
               <?php
            }

            else if(session()->get('success_update') != NULL){?>
            
                <div class="alert" alert-success>
                 <p>
                     <Strong>Mise a jour</Strong>
                     <hr>
                     La modification de la etudiant s'est effectuée avec succès !
                 </p>
 
                </div>
                <?php
             }

             else if(session()->get('success_delete') != NULL){?>
            
                <div class="alert" alert-success>
                 <p>
                     <Strong>Mise a jour</Strong>
                     <hr>
                     La suppression de la etudiant s'est effectuée avec succès !
                 </p>
 
                </div>
                <?php
             }

             else if(session()->get('success_error') != NULL){?>
            
                <div class="alert" alert-success>
                 <p>
                     <Strong>Mise a jour</Strong>
                     <hr>
                     Echec de la suppression de la etudiant !
                 </p>
 
                </div>
                <?php
             }


             else if(session()->get('error_update') != NULL){?>
            
                <div class="alert" alert-success>
                 <p>
                     <Strong>Mise a jour</Strong>
                     <hr>
                     Echec de la modification de la etudiant !
                 </p>
 
                </div>
                <?php
             }

            else if(session()->get('error') != NULL){?>
            
                <div class="alert" alert-success>
                 <p>
                     <Strong>Mise a jour</Strong>
                     <hr>
                     Echec d'ajout d'une nouvelle etudiant !
                 </p>
 
                </div>
                <?php
             }
            


            ?>
            
            <!-- ajout d'une nouvelle etudiant -->

                


            <!-- liste des etudiants -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Liste des etudiants</h3>
                            <p class="text-muted">Add class <code>.table</code></p>
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">NOM</th>
                                            <th class="border-top-0">POST-NOM</th>
                                            <th class="border-top-0">PRENOM</th>
                                            <th class="border-top-0">GENRE</th>
                                            <th class="border-top-0">PROMOTION</th>
                                            <th class="border-top-0">DATE DE NAISSANCE</th>
                                            <th class="border-top-0">LIEU DE NAISSANCE</th>
                                            
                                            <th class="border-top-0">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php

                                       if(isset($etudiants))
                                       {
                                        $i = 1;
                                        foreach($etudiants as $key => $etudiant){ ?>
                                        
                                        <tr>
                                            <td><?= $i ?></td>
                                            <td><?= $etudiant['nom'] ?></td>
                                            <td><?= $etudiant['postnom'] ?></td>
                                            <td><?= $etudiant['prenom'] ?></td>
                                            <td><?= $etudiant['genre'] ?></td>
                                            <td><?= $etudiant['promotion'] ?></td>
                                            <td><?= $etudiant['date_naissance'] ?></td>
                                            <td><?= $etudiant['lieu_naissance'] ?></td>
                                            
                                            <td>
                                            <a  href="<?=base_url('Home/modifier_etudiant/'.$etudiant['id'])?>"class="btn btn-primary btn-lg text-white">Modifier</a>
                                            <a  href="<?=base_url('Home/supprimer_etudiant/'.$etudiant['id'])?>"class="btn btn-danger btn-lg text-white">Supprimer</a>
                                            </td>
                                        </tr>
                                        


                                            <?php
                                            $i++;
                                        }
                                        
                                        
                                       }
                                       ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <footer class="footer text-center">2023 © Zephyr</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?=base_url()?>/plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url()?>/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url()?>/js/app-style-switcher.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!--Wave Effects -->
    <script src="<?=base_url()?>/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url()?>/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url()?>/js/custom.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="<?=base_url()?>/plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="<?=base_url()?>/plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?=base_url()?>/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>
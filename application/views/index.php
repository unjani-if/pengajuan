<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengajuan Diskominfo Purwakarta</title>

    <!-- Custom fonts for this template-->
    <link href="<?=base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?=base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?=base_url();?>assets/vendor/select2/css/select2.min.css" rel="stylesheet" />


    
    
    <!-- custom ccolors -->
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/color/colors.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/color/colors.min.css">


    <!-- Custom styles for this page -->
    <link href="<?=base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-light sidebar sidebar-danger accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center"
                href="<?=base_url('dashboard');?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    
                </div>
                <div ><img src="<?=base_url('assets/img/diskom.png');?>" alt="Logo" width="100" height="50"></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?=isset($dashboard)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('dashboard');?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <?php if(__session('level')=='admin'): ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                Menu Utama
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item <?=isset($master)?'active':'';?>">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Master</span>
                </a>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item <?=isset($surat)?'active':'';?>"
                            href="<?=site_url('master/surat');?>">Surat</a>
                        <a class="collapse-item <?=isset($persyaratan)?'active':'';?>"
                            href="<?=site_url('master/persyaratan');?>">Persyaratan</a>
                        <a class="collapse-item <?=isset($pengguna)?'active':'';?>"
                            href="<?=site_url('master/pengguna');?>">Pengguna</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item <?=isset($pengajuan_surat)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('pengajuan');?>">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Pengajuan Surat</span></a>
            </li>
            <?php endif; ?>
            <!-- Nav Item - Charts -->
            <li class="nav-item <?=isset($pengajuan_saya)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('pengajuan_saya');?>">
                    <i class="fas fa-fw fa-edit"></i>
                    <span>Pengajuan Saya</span></a>
            </li>
            <!-- Nav Item - Tables -->
            <!-- <li class="nav-item <?=isset($profil_saya)?'active':'';?>">
                <a class="nav-link" href="<?=base_url('dashboard/profil_saya');?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil Saya</span></a>
            </li>
 -->
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-lg-inline text-gray-600 small"><?= strtoupper(__session('username')); ?></span>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?=base_url('dashboard/profil_user');?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profil Saya
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="flash-data-berhasil" data-berhasil="<?=$this->session->flashdata('success');?>"></div>
                    <div class="flash-data-gagal" data-gagal="<?=$this->session->flashdata('error');?>"></div>
                    <?php $this->load->view($content); ?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; PersandianPwk<?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Keluar ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Anda yakin ingin keluar dari aplikasi ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal"><i
                            class="fas fa-times"></i> Tidak</button>
                    <a class="btn btn-danger btn-sm" href="<?=base_url('auth/logout');?>"><i
                            class="fas fa-sign-out-alt"></i> Iya,
                        Keluar</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?=base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?=base_url();?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?=base_url();?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/sweet-alert/sweetalert2.all.min.js"></script>
    <script src="<?=base_url();?>assets/vendor/select2/js/select2.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?=base_url();?>assets/js/demo/datatables-demo.js"></script>
    <script src="<?=base_url();?>assets/js/demo/sweet-alert.js"></script>
    <script>
    $(function() {
        $('.select2').select2({
            theme: "classic"
        });
        $('[data-toggle="tooltip"]').tooltip()

    });
    </script>

</body>

</html>
<?php

include 'fungsi/koneksi.php';

?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Febryna is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="Febryna, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>AMIKOM</title>
    <link rel="apple-touch-icon" href="app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/amikom.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/data-tables/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-menu-nav-dark-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-menu-nav-dark-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/data-tables.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/sweetalert/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
    <style>
        /* The Modal (background) */
        .modal {
            margin-top: 200px;
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            left: 0;
            top: 0;
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .close2 {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close2:hover,
        .close2:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>

</head>

<body class="vertical-layout page-header-light vertical-menu-collapsible vertical-menu-nav-dark preload-transitions 2-columns   " data-open="click" data-menu="vertical-menu-nav-dark" data-col="2-columns">

    <header class="page-topbar" id="header">
        <div class="navbar navbar-fixed">
            <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-purple-deep-orange gradient-shadow">
                <div class="nav-wrapper">
                    <ul class="navbar-list right">
                        <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li>
                        <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="img/7.jpg" alt="avatar"><i></i></span></a></li>
                    </ul>
                    <ul class="dropdown-content" id="profile-dropdown">
                        <li><a class="grey-text text-darken-1" href="fungsi/logout.php"><i class="material-icons">keyboard_tab</i> Logout</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light navbar-full sidenav-active-rounded">
        <div class="brand-sidebar">
            <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="#"><img src="app-assets/images/logo/amikom.png" width="30" alt="amikom logo" /><span class="logo-text hide-on-med-and-down">Amikom</span></a><a class="navbar-toggler" href="#"><i class="material-icons">radio_button_checked</i></a></h1>
        </div>
        <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">
            <br>
            <li class="active bold"><a class="waves-effect waves-cyan active " href="#"><i class="material-icons">home</i><span class="menu-title" data-i18n="Data Tables">Dashboard</span></a>
            </li>
        </ul>
        <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
    </aside>

    <div id="main">
        <div class="row">
            <div class="breadcrumbs-inline pt-3 pb-1" id="breadcrumbs-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col s10 m6 l6 breadcrumbs-left">
                            <h5 class="breadcrumbs-title mt-0 mb-0 display-inline hide-on-small-and-down"><span>Dashboard</span></h5>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col s12">
                <div class="container">
                    <div class="section section-data-tables">
                        <div class="row">
                            <div class="col s12">
                                <div class="card">
                                    <div class="card-content">
                                        <h4 class="card-title">Mata Kuliah</h4>
                                        <a class="mb-6 btn waves-effect waves-light green darken-1" id="tambah">Tambah</a>
                                        <div class="row">
                                            <div class="col s12">
                                                <table id="page-length-option" class="display">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode Mata Kuliah</th>
                                                            <th>Mata Kuliah</th>
                                                            <th>Deskripsi Mata Kuliah</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $i = 1;
                                                        if ($data->num_rows > 0) {
                                                            while ($row = $data->fetch_assoc()) {
                                                                echo '
                                                        <tr>
                                                            <td>' . $i++ . '</td>
                                                            <td>' . $row['kode_mata_kuliah'] . '</td>
                                                            <td>' . $row['nama_mata_kuliah'] . '</td>
                                                            <td>' . $row['deskripsi_mata_kuliah'] . '</td>
                                                            <td>
                                                                <a href="detail.php?id=' . $row['id_mata_kuliah'] . '" class="mb-6 btn waves-effect waves-light green darken-1">Detail</a>
                                                                <a href="editMataKuliah.php?id=' . $row['id_mata_kuliah'] . '" class="mb-6 btn waves-effect waves-light amber darken-4" id="edit">Edit</a>
                                                                <a href="fungsi/hapus.php?id=' . $row['id_mata_kuliah'] . '" class="mb-6 btn waves-effect waves-light purple lightrn-1">Hapus</a>
                                                            </td>
                                                        </tr>
                                                        ';
                                                            }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                        ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>

    <!-- The Modal -->
    <div id="myModalTambah" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>
            <div class="row">
                <div class="col s12">
                    <div id="html-validations">
                        <div class="card-content">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col s12 m6 l10">
                                        <h4 class="card-title">Tambah Data</h4>
                                    </div>
                                    <div class="col s12 m6 l2">
                                    </div>
                                </div>
                            </div>
                            <div id="html-view-validations">
                                <form method="POST" action="fungsi/tambah_mata_kuliah.php">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="uname0" class="">Kode Mata Kuliah</label>
                                            <input class="validate invalid" required="" type="text" name="kode_mata_kuliah" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="cemail0" class="">Mata Kuliah</label>
                                            <input class="validate invalid" required="" type="text" name="mata_kuliah">
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="password0" class="">Deskripsi</label>
                                            <input class="validate invalid" required="" type="text" name="deskripsi">
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- The Modal -->
    <div id="myModalEdit" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close2">&times;</span>
            <div class="row">
                <div class="col s12">
                    <div id="html-validations">
                        <div class="card-content">
                            <div class="card-title">
                                <div class="row">
                                    <div class="col s12 m6 l10">
                                        <h4 class="card-title">Edit Data</h4>
                                    </div>
                                    <div class="col s12 m6 l2">
                                    </div>
                                </div>
                            </div>
                            <div id="html-view-validations">
                                <form method="POST" action="fungsi/tambah_mata_kuliah.php">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <label for="uname0" class="">Kode Mata Kuliah</label>
                                            <input class="validate invalid" required="" type="text" name="kode_mata_kuliah" type="text">
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="cemail0" class="">Mata Kuliah</label>
                                            <input class="validate invalid" required="" type="text" name="mata_kuliah">
                                        </div>
                                        <div class="input-field col s12">
                                            <label for="password0" class="">Deskripsi</label>
                                            <input class="validate invalid" required="" type="text" name="deskripsi">
                                        </div>
                                        <div class="input-field col s12">
                                            <button class="btn waves-effect waves-light right" type="submit" name="action">Submit
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <footer class="page-footer footer footer-static footer-dark gradient-45deg-purple-deep-orange gradient-shadow navbar-border navbar-shadow">
        <div class="footer-copyright">
            <div class="container"><span>&copy; 2021 <a href="#" target="_blank">FEBRYNA</a> All rights reserved.</span><span class="right hide-on-small-only">Design and Developed by Febryna</span></div>
        </div>
    </footer>

    <script src="app-assets/js/vendors.min.js"></script>
    <script src="app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="app-assets/vendors/data-tables/js/dataTables.select.min.js"></script>
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <script src="app-assets/js/scripts/customizer.min.js"></script>
    <script src="app-assets/js/scripts/data-tables.min.js"></script>
    <script src="app-assets/vendors/sweetalert/sweetalert.min.js"></script>
    <script src="app-assets/js/scripts/extra-components-sweetalert.min.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById("myModalTambah");

        // Get the button that opens the modal
        var btn = document.getElementById("tambah");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }


        // function tambah() {
        //     swal("Write something interesting:", {
        //             content: "input",
        //         })
        //         .then((value) => {
        //             if (value === false) return false;
        //             if (value === "") {
        //                 swal("You need to write something!", "", "error");
        //                 return false;
        //             }
        //             swal(`You typed: ${value}`);
        //         });


        // };
    </script>

    <script>
        // Get the modal
        var modalEdit = document.getElementById("myModalEdit");

        // Get the button that opens the modal
        var btn = document.getElementById("edit").value;

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close2")[0];

        // When the user clicks on the button, open the modal
        btn.onclick = function() {
            modalEdit.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() {
            modalEdit.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modalEdit) {
                modalEdit.style.display = "none";
            }
        }

        $("#edit").click(function(e) { //panggil class
            var m = $(this).attr("id");
            $.ajax({
                url: "modal_kelas.php", //Get halaman
                type: "GET",
                data: {
                    id_kelas: m,
                }, //variabel yang diambil
                success: function(ajaxData) {
                    $("#Edit_Kelas").html(ajaxData);
                    $("#Edit_Kelas").modal('show', {
                        backdrop: 'true'
                    });
                }
            });
        });
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>General Dashboard &mdash; Stisla</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <?php $this->load->view('layout/ly-admin'); ?>
            <script>
                var waktu = document.getElementById('waktu');

                function refreshTime() {
                    var dateString = new Date().toLocaleString();
                    var formattedString = dateString.replace(", ", " - ");
                    waktu.innerHTML = formattedString;
                }

                setInterval(refreshTime, 1);
            </script>

            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-header">
                        <h1>Dashboard</h1>
                    </div>
                    
                    <div class="row">
                        <div class="col-12 col-lg-9 col-md-5 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Edit Buku</h3>
                                </div>
                                <div class="card-body">
                                <div class="row">
                                        <div class="col-4">
                                <form action="<?php echo base_url('kota/update/'.$data['id_kota']) ?>" method="post">
                                    <div class="form-group">
                                        <label>Nama Kota</label>
                                        <input type="text" name="nama_kota" value="<?php echo $data['nama_kota'] ?>" class="form-control" required autofocus>
                                    </div>
                                    </div>
                                   
                                </div>
                                <div class="card-footer text-right">
                                    <input type="submit" class="btn btn-success" value="TAMBAH">                                
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url() ?>assets/modules/datatables/datatables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/page/modules-datatables.js"></script>
    <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
</body>

</html>
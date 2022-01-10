
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title ;?></h1>
                    <div class="row">
                        <div class="col-log-8">
                         <?=$this->session->flashdata('message');?>
                        </div>

                    </div>

                    <div class="card mb-3" style="max-width: center;">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="<?= base_url('assets/img/profile/'). $user['image']; ?>" class="img-fluid rounded-start" >
                        </div>
                        <div class="col-md-8" style="font-family: cursive;">
                        <div class="card-body" style="font-size: x-large;">
                            <h5 class="card-title" style="font-size: x-large;"><?= $user['name'];?></h5>
                            <p class="card-text"><?= $user['email'];?></p>
                            
                            <p class="card-text"><small class="text-muted">Member since <?= date(' d F Y', $user['date_created']);?></small></p>
                        </div>
                        </div>
                    </div>
                    </div> 



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           
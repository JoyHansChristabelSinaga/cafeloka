</body>
</html>
<?php echo view('layout/header'); ?>

<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Login</h3>
            </div>
        </div>
    </div>

    <!-- Here Code To Create Form -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Abandon all hopes, ye who enter here!
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="p-4">
                                            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <?php echo session()->getFlashdata('error'); ?>
                                                </div>
                                            <?php endif; ?>
                                            <form method="post" action="<?= base_url(); ?>/login/process">
                                                <?= csrf_field(); ?>
                                                <div class="mb-3">
                                                    <label for="username" class="form-label">Username</label>
                                                    <input type="text" name="username" id="username" placeholder="Username" class="form-control" required autofocus>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="password" class="form-label">Password</label>
                                                    <input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
                                                </div>
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary">Login</button>
                                                    <a href="/register" class="btn btn-primary mr-3">Belum Punya Akun?</a>
                                                </div>
                                            </form>
                                            <hr />
                                            </div>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
</section>
</div>

<?php echo view('layout/footer'); ?>
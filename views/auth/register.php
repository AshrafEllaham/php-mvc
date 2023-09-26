<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-0 offset-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <form method="post" action="/register">
                        <div class="card-title text-center">
                            <h1>Register</h1>
                        </div>
                        <hr>
                        <?php if (app()->session->hasFlash('success')): ?>
                            <p class="alert-success alert">
                                <?= app()->session->getFlash('success'); ?>
                            </p>
                        <?php endif; ?>
                        <div class="form-group row mt-3" style="margin-left: 0px; margin-right: 0px;">
                            <label for="name" class="col-form-label col-12">Full Name</label>
                            <div class="col-12">
                                <input class="form-control" type="text" id="name" name="name" value="<?= old('name'); ?>">
                            </div>
                            <?php if (app()->session->hasFlash('errors')): ?>
                                <p class="text-danger">
                                    <?= app()->session->getFlash('errors')['name'][0]; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row mt-3" style="margin-left: 0px; margin-right: 0px;">
                            <label for="username" class="col-form-label col-12">Username</label>
                            <div class="col-12">
                                <input class="form-control" type="text" id="username" name="username" value="<?= old('username'); ?>">
                            </div>
                            <?php if (app()->session->hasFlash('errors')): ?>
                                <p class="text-danger">
                                    <?= app()->session->getFlash('errors')['username'][0]; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row mt-3" style="margin-left: 0px; margin-right: 0px;">
                            <label for="email" class="col-form-label col-12">Email</label>
                            <div class="col-12">
                                <input class="form-control" type="text" id="email" name="email" value="<?= old('email'); ?>">
                            </div>
                            <?php if (app()->session->hasFlash('errors')): ?>
                                <p class="text-danger">
                                    <?= app()->session->getFlash('errors')['email'][0]; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row mt-3" style="margin-left: 0px; margin-right: 0px;">
                            <label for="password" class="col-form-label col-12">Password</label>
                            <div class="col-12">
                                <input class="form-control" type="password" id="password" name="password" value="<?= old('password'); ?>">
                            </div>
                            <?php if (app()->session->hasFlash('errors')): ?>
                                <p class="text-danger">
                                    <?= app()->session->getFlash('errors')['password'][0]; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group row mt-3" style="margin-left: 0px; margin-right: 0px;">
                            <label for="password_confirmation" class="col-form-label col-12">Confirm Password</label>
                            <div class="col-12">
                                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" value="<?= old('password_confirmation'); ?>">
                            </div>
                            <?php if (app()->session->hasFlash('errors')): ?>
                                <p class="text-danger">
                                    <?= app()->session->getFlash('errors')['password_confirmation'][0]; ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="col-12" >
                            <button type="submit" class="btn btn-primary" id="RegisterBtn">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
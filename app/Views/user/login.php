<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <?= form_open('user/login'); ?>
            <div class="form-group">
                <label>Endereço de email</label>
                <input type="email" class="form-control" placeholder="Seu email">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-4 offset-lg-4">
            <?= form_open('user/add'); ?>
            <div class="form-group">
                <label>Nome Completo</label>
                <input type="text" class="form-control" placeholder="Seu nome completo aqui">
            </div>
            <div class="form-group">
                <label>Usuário</label>
                <input type="text" class="form-control" placeholder="Seu usuário aqui">
            </div>
            <div class="form-group">
                <label>Endereço de email</label>
                <input type="email" class="form-control" placeholder="Seu email">
            </div>
            <div class="form-group">
                <label>Número de Telefone</label>
                <input type="phone" class="form-control" placeholder="Seu telefone">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input type="password" class="form-control" placeholder="Senha">
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
            <?= form_close(); ?>
        </div>
    </div>
</div>
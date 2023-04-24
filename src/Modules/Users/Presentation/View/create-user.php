<?php include __DIR__ . "/../../../Shared/Presentation/View/layout/header.php"; ?>

<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <h1 class="text-center mb-4">Cadastro de Usuário</h1>
            <form action="/user/store" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <div class="mb-3">
                    <label for="confirmar-senha" class="form-label">Confirmar Senha</label>
                    <input type="password" class="form-control" id="confirmar-senha" name="confirmar-senha" required>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include __DIR__ . "/../../../Shared/Presentation/View/layout/footer.php"; ?>
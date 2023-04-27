<?php include __DIR__ . "/../../../Shared/Presentation/View/layout/header.php"; ?>

<section class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <h1 class="text-center mb-4">Login</h1>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" required>
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Entrar</button>
                </div>
            </form>
            <div class="text-center mt-3">
                <a href="#">Esqueci minha senha</a>
            </div>
        </div>
    </div>
</section>


<?php include __DIR__ . "/../../../Shared/Presentation/View/layout/footer.php"; ?>
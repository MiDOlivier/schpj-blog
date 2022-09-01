<div class="row">
    <div class="col-md-6 mx-auto">

        <form class="text-center border border-light p-5" action="aula04/model/login-auth.php" method="POST"> <?//action eh a pagina pra onde manda os trambits. GET eh no link, POST eh por pacote, sem aparecer no link. $_POST eh um array com tudo que ta no POST?>

        <p class="h4 mb-4">Login</p>


        <input type="text" id="user" name="user" class="form-control mb-4" placeholder="Usuario...">

        <input type="password" id="passwd" name="passwd" class="form-control mb-4" placeholder="Senha...">
        <?php if ($_GET != NULL):?>
            <p>Senha Incorreta! Tente Novamente.</p>
        <?php endif ?>

        <button class="btn btn-info btn-block my-4" type="submit">Entrar</button>

        <a href="new-user.php"><h3 class='mt-5'>Nova Conta?</h3></a>

        </form>

    </div>
</div>
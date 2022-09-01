<?php
    
    $editing = isset($data);
    $url = $editing ? 'aula04/model/edita-user.php' : 'aula04/model/create-user.php';
?>

<div class="row">
    <div class="col-md-6 mx-auto">

        <form class="text-center border border-light p-5" action="<?=$url?>" method="POST"> <?//action eh a pagina pra onde manda os trambits. GET eh no link, POST eh por pacote, sem aparecer no link. $_POST eh um array com tudo que ta no POST?>

        <p class="h4 mb-4"><?= $editing ? 'Edite sua Conta' : 'Crie sua Conta' ?></p>

        <input type="text" id="user" name="user" class="form-control mb-4" placeholder="Usuario..." value="<?= $editing ? $data['0'] : ''?>">

        <input type="password" id="passwd" name="passwd" class="form-control mb-4" placeholder="Senha...">

        <?php if ($editing): ?>
            <input type="hidden" name="id" value="<?= $id?>">
        <?php endif ?>

        <button class="btn btn-info btn-block my-4" type="submit"><?= $editing ? 'Editar' : 'Criar' ?></button>

        </form>

    </div>
</div>
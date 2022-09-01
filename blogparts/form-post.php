<?php
session_start();
$user = $_SESSION['user'];
?>
<?php

    $editing = isset($data);
    $url = $editing ? 'aula04/model/edita-post.php' : 'aula04/model/cria-post.php';
?>

<div class="row">
    <div class="col-md-6 mx-auto">

        <form class="text-center border border-light p-5" action="<?= $url?>" method="POST"> <?//action eh a pagina pra onde manda os trambits. GET eh no link, POST eh por pacote, sem aparecer no link. $_POST eh um array com tudo que ta no POST?>

        <p class="h4 mb-4"><?= $editing ? 'Edite seu Post' : 'Crie seu Post' ?></p>

        <input type="text" id="img" name="img" class="form-control mb-4" placeholder="Link da Imagem" value="<?= $editing ? $data[0] : ''?>">

        <?php if (!$editing): ?>
            <input type="text" id="ctgry_color" name="ctgry_color" class="form-control mb-4" placeholder="Cor da Categortia">
        <?php endif ?>

        <input type="text" id="ctgry" name="ctgry" class="form-control mb-4" placeholder="Categoria" value="<?= $editing ? $data[1] : ''?>">

        <input type="text" id="title" name="title" class="form-control mb-4" placeholder="Titulo" value="<?= $editing ? $data[2] : ''?>">

        <input type="text" id="body" name="body" class="form-control mb-4" placeholder="Conteudo" value="<?= $editing ? $data[3] : ''?>">
        
        <?php if ($editing == false  ): ?>
            <input type="hidden" id="author" name="author" class="form-control mb-4" value="<?= $user ?>">
        <?php endif ?>

        <?php if ($editing): ?>
            <input type="hidden" name="id" value="<?= $id?>">
        <?php endif ?>

        <button class="btn btn-info btn-block my-4" type="submit"><?= $editing ? 'Editar' : 'Criar' ?></button>

        </form>

    </div>
</div>

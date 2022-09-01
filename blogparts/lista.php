<div class="container mt-3">

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Imagem</th>
                <th scope="col">Categoria</th>
                <th scope="col">Titulo</th>
                <th scope="col">Conteudo</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php echo $table ?>
        </tbody>
    </table>
    <?php if ($_SESSION != NULL) : ?>
    <a href="new-post.php"><h3 class='text-center'>Criar Novo Post</h3></a>
    <?php endif ?>
</div>
<main>
    <section>

    </section>

    <h2 class="mt-3">Excluir Vaga</h2>

    <form method="post">
        <div class="form-group">
            <p>Você deseja realmente excluir a vaga <strong><?= $obVaga->titulo ?></strong></p>
            <a href="index.php">
                <button class="btn btn-success">Cancelar</button>
            </a>
            <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
        </div>
    </form>
</main>
<?php require_once APPROOT . '/views/includes/header.php'; ?>

<div class="container mt-3">

    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h3><?= $data['title']; ?></h3>
        </div>
        <div class="col-1"></div>
    </div>

    <div class="row mt-3">
        <div class="col-1"></div>
        <div class="col-10">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Jaar</th>
                        <th scope="col">Slachtoffers (mln)</th>
                        <th scope="col">Type aanval</th>
                        <th scope="col">Schade (€ mln)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['cyberaanvallen'] as $aanval) : ?>
                        <tr>
                            <td><?= htmlspecialchars($aanval->Naam); ?></td>
                            <td><?= htmlspecialchars($aanval->Jaar); ?></td>
                            <td><?= number_format($aanval->AantalSlachtoffers / 1_000_000, 2, ',', '.'); ?></td>
                            <td><?= htmlspecialchars($aanval->TypeAanval); ?></td>
                            <td><?= number_format($aanval->Schade, 2, ',', '.'); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <a href="<?= URLROOT; ?>/homepages/index">terug</a>
        </div>
        <div class="col-1"></div>
    </div>

</div>

<?php require_once APPROOT . '/views/includes/footer.php'; ?>

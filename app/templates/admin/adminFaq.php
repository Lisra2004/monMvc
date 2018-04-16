<h1>Welcom on board to answer FAQ & good luck</h1>
<!--TODO Summary table of all questions / answered-->
<section>
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Subjects</th>
            <th>Questions</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($showQuestion as $show): ?>
            <tr>
                <td><?= $show->getSubject(); ?></td>
                <td><?= $show->getQuestion(); ?></td>
                <td><a href="<?= BASE_URL ?>answerFaq?id=<?= $show->getId() ?>" class="glyphicon glyphicon-leaf"</td>
                <td><a href="<?= BASE_URL ?>deleteFaq?id=<?= $show->getId() ?>" class="glyphicon glyphicon-remove-circle" </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>


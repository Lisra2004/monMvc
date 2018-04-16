<h1>Frequently asked questions</h1>

<p>Questions? Answers ;)</p>

<section>

    <table class="table">
        <thead>
            <tr>
                <th>Subjects</th>
                <th>Questions</th>
                <th>Answers</th>
            </tr>
        </thead>

        <tbody>
        <?php foreach ($faqs as $faq): ?>

            <tr>
                <td><?= $faq->getSubject() ?></td>
                <td><?= $faq->getQuestion() ?></td>
                <td><?= $faq->getAnswer() ?></td>
            </tr>

        <?php endforeach; ?>
        </tbody>


    </table>

</section>
<p>
    If you have no answer in this list,
    <a href="<?= BASE_URL ?>askFaq">ask your question here</a>
</p>


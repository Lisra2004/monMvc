<h1>Hello Database page</h1>
<!--TODO new show -->

<section>
    <table class="table table-condensed table-hover">
        <thead>
            <tr>
                <th>Objects</th>
                <th>Tasks</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($spaces as $space): ?>
        <tr>
                <td><?= $space->{'name'}; ?></td>
                <td><?= $space->{'text'}; ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</section>
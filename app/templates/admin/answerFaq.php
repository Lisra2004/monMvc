<head>

    <SCRIPT src="<?= BASE_URL ?>app/js/AnswerFaq.js"></SCRIPT>

</head>


<section>
    <table class="table table-condensed table-hover">
        <thead>
        <tr>
            <th>Subject</th>
            <th>Question</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $answer->getSubject(); ?></td>
                <td><?= $answer->getQuestion(); ?></td>
            </tr>
        </tbody>
    </table>
</section>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="answerQuestion">Your answer</label>
        <input type="text" class="form-control" id="answerQuestion" name="answerQuestion" placeholder="Your answer">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>

<a href="<?= BASE_URL ?>">Back homepage</a>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Your subject">
        <label for="question">Your question</label>
        <input type="text" class="form-control" id="question" name="question" placeholder="Ask your question">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>

<a href="<?= BASE_URL ?>">Back homepage</a>
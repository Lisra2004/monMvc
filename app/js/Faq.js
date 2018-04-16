$(window).load(function () {
    let subject = $("input[name='subject']").val();
    console.log(subject);

    let question = $("input[name='question']").val();
    // environnement.subjects = subject;
    // environnement.questions = question;

    // Ajax request to save all data on database
    $.ajax({
        type: "POST",
        url: "askQuestion",
        data: {
            subject: subject,
            question: question,

        },
        success: function () {
            console.log('send json to record function OK');

        },
        error: function () {
            console.log("error, json sending to record function are KO!!")
        }
    });
});
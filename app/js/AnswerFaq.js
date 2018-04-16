$(window).load(function () {
    let answer = $("input[name='answerQuestion']").val();
    console.log(answer);


    // Ajax request to save all data on database
    $.ajax({
        type: "POST",
        url: "recordAnswerFaq",
        data: {
            answer: answer,
        },
        success: function () {
            console.log('answer saved');

        },
        error: function () {
            console.log("answer are not saved!!")
        }
    });
});
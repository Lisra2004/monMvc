<?php
	
	// Correspondence table between the urls and the controller functions to call

	$roads = [
		"/" => "home",
		"/home" => "home",
		"/contact" => "contact",
		"/faq" => "faq",
        "/askFaq" => "askFaq",
        "/adminFaq" => "adminFaq",
        "/answerFaq" => "answerFaq",
        "/recordAnswerFaq" => "recordAnswerFaq",
        "/answerFaqSend"=>"answerFaqSend",
        "/deleteFaq" => "deleteFaq",
		"/db" => "db",
        "/pageOne" => "pageOne",
        "/pageTwo" => "pageTwo",
        "/eraseDb"=>"eraseDb"
	];
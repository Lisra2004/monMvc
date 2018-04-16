<?php

namespace Controller;

use View\View;

use Model\Manager\FaqManager;
use Model\Manager\PageOneManager;
use Model\Manager\PageTwoManager;

use Model\Service\MvcService;

class DefaultController 
{
	/**
	 * Show static home page
	 */
	public function home()
	{

		View::show("home.php", "Accueil Mon MVC !");
	}

	/**
	 * Static page FAQ
     * Show all FAQ on database
	 */
	public function faq()
	{
	    $faqManager = new FaqManager();
	    $faqs = $faqManager->findAllFaq();

		View::show("faq/faq.php", "Frequently asked questions !", ["faqs"=>$faqs]);
	}

    /**
     * Static page form ask question
     *
     */
    public function askFaq()
    {
        $faq = new \Model\Entity\Faq();

        if (!empty($_POST)){
            $faq->setSubject($_POST['subject']);
            $faq->setQuestion($_POST['question']);

            if ($faq->isValid()){
                $faqManager = new FaqManager();
                $faqManager->create($faq);
                View::show("faq/questionsend.php", "Question send");
            }
        }
        else{
            View::show("faq/askFaq.php", "Ask your question");
        }
    }

    /**
     * Static page form list FAQ
     */
    public function adminFaq()
    {
        $faqManager = new FaqManager();
        $showQuestion = $faqManager->findAllFaq();


        View::show("admin/adminFaq.php", "List FAQ page", ['showQuestion'=>$showQuestion]);
    }

    /**
     * Static page to update / answer Faq
     */
    public function answerFaq()
    {
        $faqManager = new FaqManager();
        if (!empty($_GET['id'])){
            $idFaq = $_GET['id'];
        }else{
            return $this->error404();
        }
        $answer = $faqManager->findOneFaqById($idFaq);

        View::show("admin/answerFaq.php", "Answer Faq Page", ['answer'=>$answer]);


    }

    public function recordAnswerFaq()
    {
        $answer = $_POST['answer'];

        $ans = new \Model\Entity\Faq();
        $ans->populate($answer, ['id', 'subject', 'question']);

        var_dump($ans);
        die();
        $faqManager = new FaqManager();
        $faqManager->updateAnswer($answer);
        View::show("admin/answerFaqSend.php", "Answer send on DB");

    }

    /**
     * Static page to del Faq
     */
    public function delFaq(){
//        $faqManager = new FaqManager();
//        $idFaq = $_GET['id'];
//        $faqManager->deleteFaq($idFaq);

        View::show('admin/deleteFaq.php', 'Question deleted', []);

    }



    /**
	 * Show error 404
	 */
	public function error404()
	{
		//send 404 informations
		header("HTTP/1.0 404 Not Found");
		View::show("errors/404.php", "Oups ! Perdu ?");
	}

	/**
     * Show board with data come from database
     */
    //TODO
	public function pageOne()
    {


        View::show("pageOne.php", "pageOne");
    }


    /**
     * Show world
     */
    //TODO
    public function pageTwo()
    {

        View::show("pageTwo.php", "pageTwo");

    }

    /**
     * Show database page
     */
    public function db()
    {

        $PageOneManager = new PageOneManager();
        $pageOne = $PageOneManager->pageOneFindAll();

        View::show('/admin/db.php', 'Database', ["pageOne"=>$pageOne]);
    }


    /**
     * Send email
     */
    public function contact()
    {

        if(isset($_POST['submit'])){
            $to = "tournayg@gmail.com"; // this is my Email address to test
            $from = $_POST['email']; // this is the sender's Email address
            $name = $_POST['name'];
            $subject = $_POST['subject'];
            $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];


            $headers = "From:" . $from;

            mail($to,$subject,$message,$headers);

            // if you want to send copy of mail to sender
//            $subject2 = "Copy of your ".$_POST['subject'];
//            $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];
//            $headers2 = "To:" . $to;
//            mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
        }
        View::show('/admin/contact.php', 'Send mail ok');

    }

    /**
     * erase Database
     */
    public function eraseDb()
    {


        View::show('/admin/eraseDb.php', "Database erased");
    }


}


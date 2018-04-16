<?php

namespace Model\Manager;


use Model\Db;
use Model\Entity\Faq;
use PDO;

class FaqManager
{
    /**
     * Save new question on database (faq table)
     */
    public function create (Faq $faqs){
        $sql = "INSERT INTO faq (question, subject)
                VALUES (:question, :subject)";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":subject", $faqs->getSubject());
        $stmt->bindValue(":question", $faqs->getQuestion());
        return $stmt->execute();
        //TODO success message question send
    }

    /**
     * Update answer
     */
    public function updateAnswer(Faq $faqs){
        $sql = "UPDATE faq SET answer=:answer
                WHERE id=:id";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $faqs->getId());
        $stmt->bindValue(":answer", $faqs->getAnswer());
        return $stmt->execute();
        //TODO success message make a reply
    }

    /**
     * Update FAQ
     * @param Faq $faqs
     * @return mixed
     */
    public function updateFaq(Faq $faqs){
        $sql = "UPDATE faq SET subject=:subject, question=:question, answer=:answer
                WHERE id=:id";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $faqs->getId());
        $stmt->bindValue("subject", $faqs->getSubject());
        $stmt->bindValue(":question", $faqs->getQuestion());
        $stmt->bindValue(":answer", $faqs->getAnswer());
        return $stmt->execute();
        //TODO success message update question & answer
    }

    /**
     * Delete question
     * @param $id
     * @return mixed
     */
    public function deleteFaq($id){
        $sql = "DELETE FROM faq WHERE id=:id";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    }

    /**
     * Find all FAQ
     * @return mixed
     */
    public function findAllFaq(){
        $sql = "SELECT id, subject, question, answer
                FROM faq
                ORDER BY subject DESC";

        $dbh = Db::getDbh();

        $stmt = $dbh->prepare($sql);
        $stmt->execute();
        $results = $stmt->fetchAll(\PDO::FETCH_CLASS, '\Model\Entity\Faq');
        return $results;
    }

    /**
     * Find just One FAQ
     * @param $id
     * @return mixed
     */
    public function findOneFaqById($id){
        $sql = "SELECT id, subject, question, answer
                FROM faq
                WHERE id=:id";

        $dbh = Db::getDbh();
        $stmt = $dbh->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        $result = $stmt->fetchObject('\Model\Entity\Faq');
        return $result;
    }

}
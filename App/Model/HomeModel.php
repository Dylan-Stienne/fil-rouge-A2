<?php

namespace App\Model;

use Core\Database;

class HomeModel extends Database
{
    /**
     * Get my surveys
     */
    public function getMySurveys()
    {
        // Verify user connected
        if (!array_key_exists('id', $_SESSION)) {
            echo json_encode([]);
            return [];
        }

        // Get my surveys from database
        $datas = array(
            "myId" => $_SESSION['id']
        );
        $req = $this->query(
            "SELECT survey.id AS survey_id, survey.title AS survey_title, survey.category AS survey_category, 
                    count(answers.id) AS choices_count, sum(answers.count) AS answers_count
                FROM `surveys` AS survey INNER JOIN `surveys_answers` AS answers ON answers.survey_id = survey.id
                WHERE survey.author_id = :myId
                GROUP BY survey.id
            ",
            $datas
        );

        echo json_encode($req);
        return $req;
    }

    /**
     * Get friends surveys
     */
    public function getFriendsSurveys()
    {
        // Verify user connected
        if (!array_key_exists('id', $_SESSION)) {
            echo json_encode([]);
            return [];
        }

        // Get my friends from database
        $datas = array(
            "myId" => $_SESSION['id']
        );
        $req = $this->query("SELECT survey.id AS survey_id, survey.title AS survey_title, user.id AS friend_id, user.username AS friend_username, survey.category AS survey_category,
                                COUNT(answers.id) AS choices_count, SUM(answers.count) AS answers_count
                            FROM `surveys` AS survey INNER JOIN `users` AS user INNER JOIN `friends` INNER JOIN `surveys_answers` AS answers ON answers.survey_id = survey.id
                            WHERE (survey.author_id = user.id AND user.id = friends.user_id_A AND friends.user_id_B = :myId)
                            OR (survey.author_id = user.id AND user.id = friends.user_id_B AND friends.user_id_A = :myId)
                            GROUP BY survey.id", $datas);

        echo json_encode($req);
        return $req;
    }

    /**
     * find surveys
     */
    public function findSurveys($searching)
    {
        $datas = array(
            "searching" => '%' . $searching . '%'
        );
        $req = $this->query("SELECT survey.id AS survey_id, survey.title AS survey_title, user.id AS friend_id, user.username AS friend_username, survey.category AS survey_category,
                                count(DISTINCT answers.id) AS choices_count, sum(DISTINCT answers.count) AS answers_count
                            FROM `surveys` AS survey INNER JOIN `users` AS user INNER JOIN `friends` INNER JOIN `surveys_answers` AS answers ON answers.survey_id = survey.id
                            WHERE survey.title LIKE :searching OR survey.category LIKE :searching
                            GROUP BY survey.id LIMIT 0,10", $datas);

        echo json_encode($req);
        return $req;
    }

    /**
     * get surveys categories
     */
    public function getSurveysCategories()
    {
        $req = $this->query("SELECT DISTINCT surveys.category AS `name` FROM `surveys`");

        echo json_encode($req);
        return $req;
    }
}

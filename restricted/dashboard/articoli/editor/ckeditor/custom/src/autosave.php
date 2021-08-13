<?php

    require_once $_SERVER['DOCUMENT_ROOT'].'/src/classes/Course.php';
    session_start();

    if (isset($_GET['content']) && isset($_GET['id'])) {
        $course = new Course($_SESSION['course']);
        if ($course->setLessonContent($_GET['id'],$_POST['content'])) {
            $_SESSION['course'] = $course->export();
            echo json_encode(
                array(
                    "success" => true,
                    "html" => $_GET['content']
                )
            );
        } else {
            echo json_encode(
                array(
                    "success" => false,
                    "message" => "Si è verificato un errore nell'autosalvataggio del contenuto"
                )
            );
        }  
    }

?>
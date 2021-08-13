<?php

    session_start();
    require_once $_SESSION['root'].'/src/classes/Course.php';

    if (isset($_POST['submit'])) {
        $course = new Course($_SESSION['course']);
        if ($course->setLessonContent($_GET['id'],$_POST['content'])) {
            $_SESSION['course'] = $course->export();
            header("Location: ../../../../../index.php");
        }     
    }

?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $examTitle = $_POST['examTitle'];
    $totalQuestions = $_POST['totalQuestions'];
    $marksRightAnswer = $_POST['marksRightAnswer'];
    $minusMarksWrong = $_POST['minusMarksWrong'];
    $timeLimit = $_POST['timeLimit'];
    $tag = $_POST['tag'];
    $description = $_POST['description'];

    // Example: Save to a file (or connect to a database)
    $file = fopen("exam_details.txt", "a");
    fwrite($file, "Title: $examTitle\nQuestions: $totalQuestions\nMarks (Right): $marksRightAnswer\nMinus Marks (Wrong): $minusMarksWrong\nTime Limit: $timeLimit\nTag: $tag\nDescription: $description\n\n");
    fclose($file);

    echo "Exam details saved successfully!";
} else {
    echo "Invalid request.";
}
?>

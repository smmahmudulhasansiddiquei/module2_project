<?php

    //Set of quiz questions that is provided by requirement sheet
    $questions = [
        ['question' => 'What is 2+2?', 'correct' => '4'],
        ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
        ['question' => 'Who wrote "Hamlet"?', 'correct' => 'Shakespeare'],
    ];

    //Collect answer from the users
    $answer = [];
    foreach($questions as $index => $question){
        echo ($index+1) . "." . ($question['question']) . "\n";
        $answer[] = trim(readline("Your answer: "));
    }

    //Evaluate the user's score:
    function evaluateQuiz(array $questions, array $answer){
        $score = 0;
        foreach($questions as $index => $correct){
            if($answer[$index]===$correct['correct']){
                $score++;
            }
        }
        return $score;
    }

    //Calculate quiz result
    $score = evaluateQuiz($questions, $answer);
    echo "You scored $score out of ". count($questions). ".\n";

    //Provide feedback based on performance:
    if($score == count($questions)){
        echo "Excellent job!";
    }elseif($score>1 && $score<count($questions)){
        echo "Good effort!";
    }else{
        echo "Better luck next time!";
    }

?>
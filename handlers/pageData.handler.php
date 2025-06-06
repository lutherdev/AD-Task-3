<?php
require_once __DIR__ . '/../bootstrap.php';

$navList = [
    [
        "label" => "Home", 
        "url" => BASE_URL . "/"
    ],
    [
        "label" => "Tutorial", 
        "url" => BASE_URL . "/page/tutorial-page/index.php"
    ],
];

$arrayStuds = ["Luther sambeli", "Ford Dean", "dean man", "lelouch britania"];
$prizes = ["Tulfone", "Amonguse", "Roborux"];
$studs = ['Lelouch' => '95', 'Ayanokoji' => '99','Zenitsu' => '84', 'Light' => '93', 'Shikamaru' => '95'];
$boxData = [
    //TUTORIAL PAGE
    [
        "title" => "DECLARATION",
        "description" => "To declare a variable in PHP we use the syntax",
        "scenario" => '$variablename = value',
        "snippet" => '$age = 17;<br>
                    echo "Output: The variable \$age has value of: {$age}";
                    ',
        "funcName" => "showOutputBox0",

    ],
    [
        "title" => "CONDITIONAL",
        "description" => "There are numerous ways to control a flow in which condition comes in!",
        "scenario" => "Scenario: Let's say your age is 17 but the condition is that you should be 18+",
        "snippet" => '$age = 17;<br>
                    if ($age < 18){<br>
                    echo "false, your age is {$age}";<br>
                    } else {<br>
                        echo "You\'re 18+";<br>
                    }
                    ',
        "funcName" => "showOutputBox1",

    ],
    [
        "title" => "LOOPING",
        "description" => "If we want to repeat a code multiple times, looping statements is what u need",
        "scenario" => "Scenario: we want to output 1 to 5",
        "snippet" => 'echo "Output: ";<br>
                    for($i = 1; $i <= 5; $i++){<br>
                        echo " $i ";<br>
                    }
                    ',
        "funcName" => "showOutputBox2",

    ],
    //TUTORIAL PAGE 2
    [
        "title" => "FUNCTION",
        "description" => "You can think of functions like a tv remote, where each click of the button it does the expected thing you want",
        "scenario" => "Scenario: We want to see the lists of students' names in our database but CAPITALIZE",
        "snippet" => '$arrayStuds = ["Luther sambeli", "Ford Dean", "dean man", "lelouch britania"];<br>
                    foreach ($arrayStuds as $studs):<br>
                        echo "Output: " . ucwords($studs);<br>
                    endforeach;
                    ',
        "funcName" => "showOutputBox0",

    ],
    [
        "title" => "ARRAYS",
        "description" => 'A data type (compound) where it can consists of variety data type',
        "scenario" => "Scenario: Get the names from a group (array) and make a new dictionary (associative array) and assign a default money per person",
        "snippet" => '$arrayStuds = ["Luther sambeli", "Ford Dean", "dean man", "lelouch britania"];<br>
                    $newStud = [];
                    foreach($arrayStuds as $itStud){<br>
                        $newStud[$itStuds] = 300;<br>
                    }<br>
                    foreach ($newStuds as $itStud => $money){<br>
                        echo "User: $itStud, Balance: $money"<br>;
                    }<br>',
        "funcName" => "showOutputBox1",
    ],
    //TUTORIAL PAGE 3
    [
        "title" => "STRING FUNCTION",
        "description" => 'A built in function for tampering with your strings',
        "scenario" => "use case: Capitalize the name of TOP STUDENT! [using strtoupper]",
        "snippet" => '$highGrade = max($studs);<br>
                        foreach ($studs as $name => $grade){<br>
                            if ($highGrade == $grade){<br>
                            &nbsp&nbsp&nbsp $topStud = strtoupper($name);<br>
                            &nbsp&nbsp&nbsp break; <br>
                            &nbsp&nbsp&nbsp}<br>
                            
                        }<br>
                        echo "the name: " . $topStud',
        "funcName" => "showOutputBox0",
    ],
    [
        "title" => "MATHEMATICAL FUNCTION",
        "description" => 'A built in function for tampering with your numbers',
        "scenario" => "use case: Get the highest grade out of all students [using max]",
        "snippet" => '$highGrade = max($studs);<br>
                        foreach ($studs as $name => $grade){<br>
                            if ($highGrade == $grade){<br>
                            &nbsp&nbsp&nbspecho "$name has the highest grade of $grade"<br>
                            &nbsp&nbsp&nbsp}<br>
                        }',
        "funcName" => "showOutputBox1",
    ],
    [
        "title" => "DATE MANIPULATION",
        "description" => 'A built in function for tampering with your numbers',
        "scenario" => "use case: Get the latest date and time for when the student won the prize [using date()]",
        "snippet" => '$prize = getRandId(0,3);<br>
                    echo "Student: " . $topStud;<br>
                    echo "You won {$prizes[$prize]};"<br>
                    echo date("F j, Y g:i A");',
        "funcName" => "showOutputBox2",
    ],

]

?>
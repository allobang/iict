<?php
$config = require('config.php');
$db = new Database($config['database']);


function arrangedSubject($subjects)
{
    $arrangedSubjects = [];

    $maxYear = 0;
    $maxSemester = 0;

    foreach ($subjects as $subject) {
        $year = (int)$subject["year_level"];
        $semester = (int)$subject["semester"];

        if ($year > $maxYear) {
            $maxYear = $year;
        }
        if ($semester > $maxSemester) {
            $maxSemester = $semester;
        }
    }

    for ($i = 1; $i <= $maxYear; $i++) {
        for ($j = 1; $j <= $maxSemester; $j++) {
            $filteredSubjects = array_filter($subjects, function ($subject) use ($i, $j) {
                return $subject["year_level"] == $i && $subject["semester"] == $j;
            });

            if (!empty($filteredSubjects)) {
                $arrangedSubjects[$i][$j] = array_values($filteredSubjects);
            }
        }
    }

    return $arrangedSubjects;
}

function view($db, $uri){
    if ($uri == '/subjects/WM' or $uri == '/subjects') {
        $specialization = [
            'code' => 'WM',
            'title' => 'Web and Mobile Application Development',
        ];
    } else if ($uri == '/subjects/NS') {
        $specialization = [
            'code' => 'NS',
            'title' => 'Network and Security',
        ];
    }
    $subjects = $db->query("SELECT * from subjects where specialization = 'Shared' or specialization = '{$specialization["code"]}'")->fetchAll();
    $arrangedSubjects = arrangedSubject($subjects);
    $title = "Subject List";
    $view = "views/subjects.view.php";
    require "views/layout.view.php";
    exit;

}

function create(){
    $title = "Subject List";
    $view = "views/subjectCreate.view.php";
    require "views/layout.view.php";
    exit;
}

switch ($uri){
    case '/subjects':
    case '/subjects/WM':
    case '/subjects/NS':
        view($db, $uri);
        break;
    case '/subjects/create':
        create();
        break;
}


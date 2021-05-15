Oefening 1

Schrijf een programma waarmee onderstaande data in een tabel wordt getoond met headers en de waarde in ieder een eigen kolom.
*hint: het gaat hier om keys en values.

<?php 

$students =
  array(
    array("first_name" => "Piet", "score" => 8.3, "last_name" => "Smith"),
    array("first_name" => "Jan", "score" => 9.2, "last_name" => "de Boer"),
    array("first_name" => "Anna", "score" => 9.0, "last_name" => "Bel")
); 

function array2DTable($matrix) {

    $html = '<table border="1">';
    foreach(array_keys($matrix[0]) as $header) {
        $html .= '<th>' . $header . '</th>';
    }

    foreach ($matrix as $row) {
        $html .= '<tr>';
        foreach ($row as $cell) {
            $html .= '<td>' . $cell . '</td>';
        } 
        $html .= '</tr>';
    } 

    $html .= '</table>';

    return $html;
}

echo array2DTable($students);

?>

Oefening 2

<?php 
$i = 0;
$new = array();
foreach($students as $student) {
    $i++;
    $student['id'] = $i;
    $new[] = $student;
}
$students = $new;

print_r($students);
?>

Oefening 3

<?php

$score = array_column($students, 'score');

array_multisort($score, SORT_ASC, $students);

print_r($students); 

?>

Oefening 4

<?php 

function array2DTableExtended($matrix, $highlight = array()) {

    $html = '<table border="1">';
    foreach(array_keys($matrix[0]) as $header) {
        $html .= '<th>' . $header . '</th>';
    }

    foreach ($matrix as $row) {
        $bgcolor = '';
        if($row['id'] == $highlight['id']) {
            $bgcolor = 'green';
        }
        $html .= '<tr style="background:' . $bgcolor . '">';
        foreach ($row as $cell) {
            $html .= '<td>' . $cell . '</td>';
        } 
        $html .= '</tr>';
    } 

    $html .= '</table>';

    return $html;
}

echo array2DTableExtended($students, $students[count($students)-1]);

?>
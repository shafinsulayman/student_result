<?php
// Function to calculate result
function calculateResult($bangla, $math, $english, $science, $history) {
    // Validate if all marks are within range 0-100
    if ($bangla < 0 || $bangla > 100 || 
        $math < 0 || $math > 100 || 
        $english < 0 || $english > 100 || 
        $science < 0 || $science > 100 || 
        $history < 0 || $history > 100) {
        echo "Mark range is invalid.\n";
        return;
    }

    // Check if the student has failed any subject
    if ($bangla < 33 || $math < 33 || $english < 33 || $science < 33 || $history < 33) {
        echo "The student has failed.\n";
        return;
    }

    // Calculate total and average marks
    $totalMarks = $bangla + $math + $english + $science + $history;
    $averageMarks = $totalMarks / 5;

    // Determine the grade using if-else
    if ($averageMarks >= 80 && $averageMarks <= 100) {
        $grade = 'A+';
    } elseif ($averageMarks >= 70 && $averageMarks < 80) {
        $grade = 'A';
    } elseif ($averageMarks >= 60 && $averageMarks < 70) {
        $grade = 'A-';
    } elseif ($averageMarks >= 50 && $averageMarks < 60) {
        $grade = 'B';
    } elseif ($averageMarks >= 40 && $averageMarks < 50) {
        $grade = 'C';
    } elseif ($averageMarks >= 33 && $averageMarks < 40) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }

    // Output the result
    echo "Total Marks: $totalMarks\n";
    echo "Average Marks: " . number_format($averageMarks, 2) . "\n";
    echo "Grade: $grade\n";
}

// Example input: individual subject marks
$bangla = 36;
$math = 40;
$english =46 ;
$science = 50;
$history = 60;

// Call the function to calculate the result
calculateResult($bangla, $math, $english, $science, $history);
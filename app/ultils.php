<?php

namespace App\utils;

    function analyzeFrequency($studentId)
{
    $output = shell_exec("python3 python_scripts/analyze_frequency.py $studentId");
    return response()->json(['output' => $output]);
}

    function analyzeOverallFrequency()
{
    $output = shell_exec("python3 python_scripts/analyze_overall_frequency.py");
    return response()->json(['output' => $output]);
}


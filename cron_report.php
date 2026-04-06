<?php

// ------------------------------------
// STEP 1: Set file paths
// ------------------------------------
// Create variables for:
// - courses text file
// - faculty text file
// - output report text file
//
// Example idea:
// $coursesFile = 'data/courses.txt';
// $facultyFile = 'data/faculty.txt';
// $outputFile = 'output/daily_report.txt';

$courseData = 'data/courses.txt';
$facultyData = 'data/faculty.txt';
$outputFile = 'output/daily_report.txt';


// ------------------------------------
// STEP 2: Read the input files
// ------------------------------------
// Read the courses file into an array of lines.
// Read the faculty file into an array of lines.
// If either file does not exist, use an empty array.


// ------------------------------------
// STEP 3: Build a simple faculty lookup
// ------------------------------------
// Create an empty array for faculty names by faculty ID.
//
// Since this is just a report, you may only need:
// $facultyMap['F001'] = 'Dr. Avery Johnson';
//
// Loop through the faculty lines:
// - split each line by |
// - trim values
// - store faculty ID as the key
// - store faculty name as the value


// ------------------------------------
// STEP 4: Create an array for report lines
// ------------------------------------
// Create an empty array like $reportLines = [];
//
// Add a few starter lines, such as:
// - a report title
// - the current date/time
// - a divider line
//
// Use date() to generate the timestamp.


// ------------------------------------
// STEP 5: Loop through courses and build report rows
// ------------------------------------
// For each course line:
// - split the line by |
// - trim the values
// - pull out course ID, course name, term, and faculty ID
// - look up faculty name from the faculty map
//
// If a faculty member is not found,
// use something like "Unknown Faculty".
//
// Then build a string for each report line.
// Example shape:
// CIS101 | Intro to Information Systems | Fall 2026 | Dr. Avery Johnson
//
// Add each completed string to the $reportLines array.


// ------------------------------------
// STEP 6: Write the report to a file
// ------------------------------------
// Join the report lines together using implode(PHP_EOL, $reportLines).
// Write the final string to the output file using file_put_contents().


// ------------------------------------
// STEP 7: Print a success message
// ------------------------------------
// Echo a simple confirmation message so that when cron runs,
// or when you test it manually, you can tell it worked.
//
// Example idea:
// echo "Report generated successfully." . PHP_EOL;
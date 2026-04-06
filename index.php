
<?php

// ------------------------------------
// STEP 1: Set the file paths
// ------------------------------------
// Create variables for:
// - the courses text file
// - the faculty text file
//
// Example idea:
// $coursesFile = 'data/courses.txt';
// $facultyFile = 'data/faculty.txt';


// ------------------------------------
// STEP 2: Read the data from the files
// ------------------------------------
// Use file_exists() to make sure the file is there.
// Use file() to load each file into an array.
// Each line in the file should become one item in the array.
//
// You will want:
// - one array for raw course lines
// - one array for raw faculty lines
//
// If a file does not exist, use an empty array instead.


// ------------------------------------
// STEP 3: Build a faculty lookup array
// ------------------------------------
// Create an empty array that will let you look up faculty by faculty_id.
//
// Goal:
// Turn raw faculty lines like this:
// F001|Dr. Avery Johnson|avery.johnson@example.edu|Computing
//
// Into something like:
// $facultyMap['F001'] = [
//     'faculty_id' => 'F001',
//     'faculty_name' => 'Dr. Avery Johnson',
//     'email' => 'avery.johnson@example.edu',
//     'department' => 'Computing'
// ];
//
// Inside a foreach loop:
// - loop through each faculty line
// - split the line using explode('|', $line)
// - trim each value
// - make sure there are enough parts before using them


// ------------------------------------
// STEP 4: Build a courses array
// ------------------------------------
// Create an empty $courses array.
//
// Goal:
// Turn raw course lines like this:
// CIS101|Intro to Information Systems|Fall 2026|F001
//
// Into something like:
// $courses[] = [
//     'course_id' => 'CIS101',
//     'course_name' => 'Intro to Information Systems',
//     'term' => 'Fall 2026',
//     'faculty_id' => 'F001'
// ];
//
// Inside a foreach loop:
// - loop through each course line
// - split the line using explode('|', $line)
// - trim each value
// - check that the line has enough pieces


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course Practice Project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 2rem;
            background: #f4f6f8;
            color: #222;
        }

        .section {
            background: white;
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 8px;
        }

        .card {
            border: 1px solid #ddd;
            padding: 0.75rem;
            margin-top: 0.75rem;
            border-radius: 6px;
        }
    </style>
</head>
<body>

    <h1>PHP Course Practice Project</h1>
    <p>This page should read courses and faculty from text files and display them.</p>

    <div class="section">
        <h2>Courses</h2>

        <?php
        // ------------------------------------
        // STEP 5: Show course data
        // ------------------------------------
        // If there are no courses, print a message like:
        // "No courses found."
        //
        // Otherwise:
        // - loop through the $courses array
        // - display course ID
        // - display course name
        // - display term
        // - use faculty_id to look up the instructor in $facultyMap
        //
        // If the faculty ID does not exist in the faculty map,
        // show something like "Unknown Faculty".
        //
        // Helpful ideas:
        // foreach ($courses as $course) { ... }
        // isset($facultyMap[$course['faculty_id']])
        // htmlspecialchars() when printing values
        ?>
    </div>

    <div class="section">
        <h2>Faculty</h2>

        <?php
        // ------------------------------------
        // STEP 6: Show faculty data
        // ------------------------------------
        // If there are no faculty records, print a message like:
        // "No faculty found."
        //
        // Otherwise:
        // - loop through the faculty map
        // - display faculty name
        // - display email
        // - display department
        //
        // Then, for each faculty member:
        // - loop through all courses
        // - find courses whose faculty_id matches this faculty member
        // - print those course names in a list
        //
        // If a faculty member teaches no courses,
        // print "No assigned courses".
        //
        // This is a nested loop exercise:
        // outer loop = faculty
        // inner loop = courses
        ?>
    </div>

</body>
</html>
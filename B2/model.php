<?php
include "data.php";
function get_courses()
{
    global $course;
    return array_values($course);
}
function find_by_semester($semester)
{
    global $course;
    return (array_key_exists($semester, $course) ? $course[$semester] : 'Invalid course');
}

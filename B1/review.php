<?php
$course = [
    's1' => 'course 1',
    's2' => 'course 2',
    's3' => 'course 3'
];

// model
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

// controller
$list_of_courses = get_courses();
$semester = (!empty($_GET['semester']) ? $_GET['semester'] : '');
$course_name = find_by_semester($semester);
$page_content = $course_name;
?>

<!-- view -->
<?= $page_content ?>
<select name="" id="">
    <?php foreach ($list_of_courses as $course_name) : ?>
        <option value="">
            <?= $course_name ?>
        </option>
    <?php endforeach ?>
</select>
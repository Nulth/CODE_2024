<?= $page_content ?>
<select name="" id="">
    <?php foreach ($list_of_courses as $course_name) : ?>
        <option value="">
            <?= $course_name ?>
        </option>
    <?php endforeach ?>
</select>
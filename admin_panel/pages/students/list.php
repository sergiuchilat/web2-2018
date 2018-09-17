<?php

$students = dbSelect("
    SELECT
        CONCAT(first_name, ' ', last_name) AS student_name,
        groups.name AS group_name
    FROM
        students
        JOIN groups ON groups.id = students.group_id
");
?>
<table border="1">
    <thead>
        <tr>
            <th>Name</th>
            <th>Group</th>
        </tr>
    </thead>
    <tbody>
        <? foreach ($students as $student) {?>
        <tr>
            <td><?=$student['student_name'];?></td>
            <td><?=$student['group_name'];?></td>
        </tr>
        <? }?>
    </tbody>
</table>

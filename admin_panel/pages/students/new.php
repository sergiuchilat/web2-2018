<?php
if(!empty($_POST['first_name']) && !empty($_POST['last_name'])){
    mysqli_query($APP['connections']['default'], "INSERT INTO students (first_name, last_name, group_id) VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}', 2)");
}
?>

<form action="" method="post">
    <table border="1">
        <tr>
            <td>First name</td>
            <td><input type="text" name="first_name"></td>
        </tr>
        <tr>
            <td>Last name</td>
            <td><input type="text" name="last_name"></td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="add">
            </td>
        </tr>
    </table>
</form>

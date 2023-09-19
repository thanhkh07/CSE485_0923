<?php
$arrs = ['PHP', 'HTML', 'CSS', 'JS'];

echo "<table border='1'>";
foreach ($arrs as $course) {
    echo "<tr><td>Tên khóa học</td><td>" . $course . "</td></tr>";
}
echo "</table>";
?>
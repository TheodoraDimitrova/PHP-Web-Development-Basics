<?php
include ('NavigationBuilder.html');
if (isset($_GET['submit'])) {
    $categories = explode(", ", $_GET['categories']);
    $tags = explode(", ", $_GET['tags']);
    $months = explode(", ", $_GET['months']);
}
?>
<div>
<h1>Categories</h1>
<ul>
    <li></li>
</ul>
</div>
<div>
    <h1>Tags</h1>

    <ul>
        <li></li>
    </ul>

</div>
<div>
    <h1>Months</h1>
    <ul>
        <li></li>
    </ul>
</div


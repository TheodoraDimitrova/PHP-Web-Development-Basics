

<form method="get">
    Name:<input type="text" name="name" value="&lt;br&gt;"/>
    <input type="submit"/>
</form>
<?php
if(isset($_GET['name']))
    echo "Hi, <i>".htmlspecialchars($_GET['name']."</i>");
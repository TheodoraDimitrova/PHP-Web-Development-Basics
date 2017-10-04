<form method="get">
    <div>
    Name: <input type="text" name="name"/>
    </div>
    <div>
    Age: <input type="text" name="age"/>
    </div>
    <input type="submit"/>
</form>
<?php
if(isset($_GET['name']) || isset($_GET['age'])){
    echo"Welcome ".htmlspecialchars($_GET['name']).".<br />";
    echo"You ".htmlspecialchars($_GET['age'])."years old.";
print_r($_GET);
}

<?php

if($_POST['surname'] === "james"){
    echo "Bond, James Bond";
}
else {
    echo "Bonjour, ".$_POST['surname']."<br>";
}


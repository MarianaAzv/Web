<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
 
    <p>
        <?php
        function hello() {
            echo "Hello";
        }
        hello();
        ?>
    </p>

  
    <p>
        <?php
        function randomize() {
            echo rand(1, 100);
        }
        randomize();
        ?>
    </p>
</body>
</html>

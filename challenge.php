<?php
/**Challenge Description:
Create a simple PHP script that takes a user's name through a GET request and prints a greeting message to the user.

If no name is provided, it should print a default greeting message.
Hint:
You can access the parameters passed through a GET request using the $_GET superglobal array. Check if the 'name' key exists and is not empty before using it.
Starting Code:
<?php
// Your code here
?> */
$name = $_GET['name'];




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Snack Challenge</title>
</head>
<body>
<form class="p-3" action="" method="get">
        
        <div class="mb-3">
            <label for="name" class="form-label">inserisci il tuo nome, per favore</label>
            <input class="form-control" type="text" name="name" id="name" >
        </div>

        <button type="submit" class="btn btn-primary ">Submit</button>

    </form>
    <div class="container">
            <?php
            if (strlen($name) > 3) {
                echo ' ciao ' .$name .' ' . 'piacere di rivederti! ' ;
            } else if (!empty($_GET)){
                echo "Benvenuto nel mio sito! rimani quanto tempo vuoi.";
            }
            ?>
        </div>
</body>
</html>
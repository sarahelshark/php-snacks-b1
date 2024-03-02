<?php
/*## Snack 2
Con un form passare come parametri GET name, mail e age 

e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” */

var_dump($_GET); //super globale> utile per checkare se qualcosa e' vuoto>>
var_dump(empty($_GET)); //se uso il metodo get nel form, quest supervariabile mi da accesso ai dati da client a server, utilizzando url 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>snack</title>
</head>

<body>
    <form class="p-3" action="" method="get">
        <div class="mb-3 ">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="text" name="exampleInputEmail1" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>

        </div>
        <div class="mb-3">
            <label for="name" class="form-label">your name</label>
            <input class="form-control" type="text" name="name" id="name" required>
        </div>
        <label for="age" class="form-label">your age</label>
        <input class="form-control mb-3" type="text" name="age" id="age" required>
        </div>

        <button type="submit" class="btn btn-primary ">Submit</button>
    </form>
    <?php
    if (!empty($_GET)) {

        $name = $_GET['name'];
        $email = $_GET['exampleInputEmail1'];
        $age = $_GET['age'];

        // Verifica che il nome sia più lungo di 3 caratteri
        if (strlen($name) > 3) {
            // Verifica che l'email contenga una chiocciola
            if (strpos($email, '@') !== false) {
                // Verifica che l'età sia un numero
                if (is_numeric($age)) {
                    echo $_GET['name'] . ' tu hai ' . ' ' . $_GET['age'] . ' ' . 'anni e la tua email:' . ' ' . $_GET['exampleInputEmail1'] . ', il tuo accesso riuscito';
                } else {
                    echo "Accesso negato - L'età deve essere un numero";
                }
            } else {
                echo "Accesso negato - L'email deve contenere una chiocciola";
            }
        } else {
            echo "Accesso negato - Il nome deve essere più lungo di 3 caratteri";
        }
    }
    ?>

</body>

</html>
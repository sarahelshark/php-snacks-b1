<?php


/*Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 */

$campionatoBasket = [
    "partecipanti" => ["Olimpia Milano", "Cantù"],
    "puntiMatch" => [55, 60],
];

var_dump($campionatoBasket);

foreach ($campionatoBasket as $key => $value) {
    var_dump($key, $value);
};

//altra soluzione
$teams = [
    [
        "home_team" => "Olimpia Milano",
        "guest_team" => "cantu",
        "home_team_score" => rand(1, 20),
        "guest_team_score" => rand(1, 20),
    ],
    [
        "home_team" => "Roma",
        "guest_team" => "Venezia",
        "home_team_score" => rand(1, 20),
        "guest_team_score" => rand(1, 20),
    ],
    [
        "home_team" => "Genova",
        "guest_team" => "Firenze",
        "home_team_score" => rand(1, 20),
        "guest_team_score" => rand(1, 20),
    ],

];

foreach ($partite as $partita) {
    echo $partita['home_team'] . ' - ' . $partita['guest_team'] . ' | ' . $partita['home_team_score'] . '-' . $partita['guest_team_score'] . '<br>';
}

/*Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
*/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

foreach ($posts as $date => $post_list) {
    echo $date;

    foreach ($post_list as $post) {
        var_dump($post);
    };
};

/* Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 */

$numbers = [];

for ($i = 0; $i < 15; $i++) {
    $newNumer = rand(1, 100);
    if (in_array($newNumer, $numbers) === false) {
        array_push($numbers, $newNumer);
    };
};

var_dump($numbers);


/* Snack 5
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.*/

$long_text = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras facilisis rutrum hendrerit. Morbi vitae tellus nisi. Nunc facilisis urna nec diam facilisis, vel feugiat nulla tempor. Morbi id nibh eros. Etiam mi nisi, efficitur a libero non, faucibus efficitur lorem. Vestibulum mauris libero, auctor dictum convallis vel, rutrum quis libero. In tristique eleifend mauris, nec lobortis lorem commodo ut. Ut tortor magna, congue et semper et, consequat eu neque. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec pellentesque malesuada tincidunt. Suspendisse finibus, eros nec dignissim dictum, lorem leo congue ante, at auctor nibh arcu id sapien. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Fusce consequat, magna ac dictum elementum, massa massa porta eros, vel faucibus mi metus in mauris. Cras vitae iaculis erat, vel accumsan eros. Donec id orci non ex scelerisque ultrices. Phasellus ornare quam et lorem feugiat, vel lobortis magna vestibulum. Ut lacinia massa sit amet massa aliquam finibus sit amet at justo. Morbi end, et tincidunt massa ultrices. Suspendisse ex nulla, maximus at dolor vel, tempor aliquet velit. Etiam non diam vitae erat semper sollicitudin. Cras leo nunc, porttitor vel molestie at, suscipit sed massa. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed vulputate nisl sed pulvinar congue. Curabitur pharetra mattis facilisis. Nulla condimentum risus et consectetur scelerisque. Sed pretium, velit at imperdiet commodo, nunc urna mattis metus, vitae pretium nunc velit id lorem.';

$paragraph = explode(".", $long_text);

var_dump($paragraph);




/* Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

$boolean_members = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

foreach ($boolean_members as $key => $member) {
    if ($key === 'teachers') {
        echo '<div style="background:lightgray; padding: 3rem; margin: 3rem 0 0 0;">';
        echo '<strong>Professori</strong>';
        foreach ($boolean_members['teachers'] as $teacher) {
            echo '<div>' . $teacher['name'] . ' ' . $teacher['lastname'] . '</div>';
        };
        echo '</div>';
    } else {
        echo '<div style="background:lightgreen; padding: 3rem; margin: 0 0 3rem 0">';
        echo '<strong>Pm</strong>';
        foreach ($boolean_members['pm'] as $pm) {
            echo '<div>' . $pm['name'] . ' ' . $pm['lastname'] . '</div>';
        };
        echo '</div>';
    }
}

/* Snack 7
ll
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.*/

$classe = [
    [
        'nome' => 'Sarah',
        'cognome' => 'El Sharkawy',
        'voti' => [9, 7, 8, 8],
    ],
    [
        'nome' => 'Giulia',
        'cognome' => 'Rimondi',
        'voti' => [9, 4, 8, 7],
    ]
];

function calcolaMedia($numbs)
{
    $qt = count($numbs);
    $res = 0;
    foreach ($numbs as $n) {
        $res += $n;
    }
    return $res / $qt;
}

foreach ($classe as $alunno) {
    echo $alunno['nome'] . ' ' . $alunno['cognome'] . ' ' . ': la media dei voti = ' . ' ' . calcolaMedia($alunno['voti']) . '<br>';
}

?>
<!--snack3-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>

    <section>

        <div class="container">
            <!--posts here-->

            <?php foreach ($posts as $date => $post_list) : ?>

                <h2><?php echo $date; ?></h2>
                <div class="card mb-3">
                    <div class="card-body">
                        <h3><?php echo $post['title'] ?></h3>
                        <p><?php echo $post['text'] ?></p>
                    </div>
                    <div class="card-footer">
                         <?php $post['author']?>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>

    </section>
</body>

</html>
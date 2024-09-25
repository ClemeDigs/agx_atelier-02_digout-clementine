<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atelier 02</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Fonctions PHP</h1>
    </header>
    <main>
        <section>
            <h2>Fonction maison</h2>
            <p>Voici une fonction 'maison' qui permet de calculer une moyenne :</p>
            <pre>
            $numbers = [];
                $i = 0;
                while ($i < 10) {
                    $numbers[] = rand(0, 100);
                    $i++;
                }

                function calcAverage($numbers) {
                    $total = 0;
                    foreach ($numbers as $number) {
                        $total += $number;
                    }
                    return $total / count($numbers);
                };

                print_r($numbers);
                echo "Moyenne : " . calcAverage($numbers); 
            </pre>
            <?php
                $numbers = [];
                $i = 0;
                while ($i < 10) {
                    $numbers[] = rand(0, 100);
                    $i++;
                }

                function calcAverage($numbers) {
                    $total = 0;
                    foreach ($numbers as $number) {
                        $total += $number;
                    }
                    return $total / count($numbers);
                };
                ?>

                <p>
                    <?php
                        print_r($numbers);
                        echo "<br>";
                        echo "Moyenne : " . calcAverage($numbers); 
                    ?>
                </p>
        </section>
        <section>
            <h2>Fonctions natives</h2>
            <div>
                <h3>La fonction array_unique()</h3>
                <p>Elle permet de retourner un tableau ne contenant pas de doublons.</p>
                <p>Exemple avec une liste de clients :</p>
                <pre>
                $clients = ['Eve', 'Jessica', 'Marie-Michele', 'Eve', 'Eve-Lyne', 'Gabriel', 'Jessica', 'Mariane', 'Jorge', 'Alexis', 'Alicia', 'Gabriel'];
                    $clientsUniques = array_unique($clients);
                    print_r($clients); 
                    print_r($clientsUniques); 
                </pre>
                <?php
                    $clients = ['Eve', 'Jessica', 'Marie-Michele', 'Eve', 'Eve-Lyne', 'Gabriel', 'Jessica', 'Mariane', 'Jorge', 'Alexis', 'Alicia', 'Gabriel'];
                    $clientsUniques = array_unique($clients);
                    print_r($clients); 
                    echo "<br><br>";
                    print_r($clientsUniques); 
                ?>
            </div>
            <div>
                <h3>La fonction json_encode($data)</h3>
                <p>Comme nous sommes en train d'étudier le JSON en cours de JavaScript, je trouve ça interressant de faire un parallèle avec PHP.</p>
                <p>La fonction json_encode permet de convertir un objet ou un tableau en chaine de caractères JSON.</p>
                <p>Exemple avec notre tableau de clients uniques :</p>
                <pre>
                echo json_encode($clientsUniques); 
                </pre>
                <?php
                    echo json_encode($clientsUniques); 
                ?>
            </div>
            <div>
                <h3>La fonction substr()</h3>
                <p>
                La fonction substr() retourne une partie d'un sting à partir de positions que nous passons en paramètres.
                <p>Exemple avec le mot "abricot" :</p>
                </p>
                <pre>
                    $mot = "abricot";
                    echo substr($mot, 2, 4);
                </pre>
                <?php
                    $mot = "abricot";
                    echo substr($mot, 2, 4);
                ?>
            </div>
        </section>
    </main>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    this is HTML
    <p></p>
    <?php
        $sample1 = "test";
        var_dump($sample1);
        const MAX = 100;
        echo MAX.'<br>';

        $array = [0, 1, 2];

        echo $array[0];

        echo '<pre>';
        var_dump($array);
        echo '<pre>';

        $array2 = [
            ['a', 'b', 'c'],
            ['d', 'e', 'f']
        ];

        echo '<pre>';
        var_dump($array2);
        echo '<pre>';

        $ac = [
            'ac3' =>[
                'ace' => 'arcadia',
                'appleboy' => 'esperansa'
            ],
            'acnx' => [
                'dr.?'=>'brainwash',
                'evange'=> 'oracle'
            ]
        ];

        echo $ac['acnx']['evange'];

            echo '<pre>';
            var_dump($ac);
            echo '<pre>';
    ?>
</body>
</html>


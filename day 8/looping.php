    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <h1>Latihan looping Chaerin</h1>
    <?php
    echo "<h3>Soal no 1</h3>";
    //looping "i Love PHP"
      /* 
            Soal No 1 
            Looping I Love PHP
            Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) dan Looping yang ke dua menurun (Descending). 

            Output: 
            LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
            LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
        */
        echo "<looping pertama>"."<br>";
        for ($i = 2; $i <= 20; $i += 2) {
            echo $i . " - I Love PHP <br>";
    }
        echo "<looping kedua>"."<br>";
        for ($i = 20; $i >= 2; $i -= 2) {
            echo $i . " - I Love PHP <br>";
    }
    //soal no 2
    echo "<soal no 2>";
    //looping array (menggunakan sisa hasil bagi/modulus 5)
    $numbers =[18,45,29,61,47,34];
    echo "arraynumbers:";
    print_r($numbers);
    $rest =[];
    foreach ($numbers as $num) {
        $rest[]=$num%5;
    }
        echo "<br>";
        echo "<sisa hasil bagi adalah>";
        print_r($rest);
        echo "<br>";
        //soal no 3
        echo "<soal no 3>";
          /* 
            Soal No 3
            Loop Associative Array
            Terdapat data items dalam bentuk array dimensi. Buatlah data tersebut ke dalam bentuk Array Asosiatif. Setiap item memiliki key yaitu : id, name, price, description, source. 
            
            Output: 
            Array ( [id] => 001 [name] => Keyboard Logitek [price] => 60000 [description] => Keyboard yang mantap untuk kantoran [source] => logitek.jpeg ) 
            Array ( [id] => 002 [name] => Keyboard MSI [price] => 300000 [description] => Keyboard gaming MSI mekanik [source] => msi.jpeg ) 
            Array ( [id] => 003 [name] => Mouse Genius [price] => 50000 [description] => Mouse Genius biar lebih pinter [source] => genius.jpeg ) 
            Array ( [id] => 004 [name] => Mouse Jerry [price] => 30000 [description] => Mouse yang disukai kucing [source] => jerry.jpeg ) 

        */
        $items = [
            ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpeg'], 
            ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpeg'],
            ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
            ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpeg']
        ];
        $itemsDetail = [
            array("id" =>"001","name"=>"keyboard Logitek","price"=>"60000","desc"=>"Keyboard yang mantap untuk kantoran","source"=>"logitek.jpeg<br>"),
            array("id"=>"002","name"=>"keyboard MSI","price"=>"300000","desc"=>"keyboard gaming MSI mekanik","source"=>"msi.jpeg<br>"),
            array("id"=>"003", "name"=>"Mouse Genius","price"=>"50000","desc"=>"Mouse Genius biar lebih pinter","source"=>"genius.jpeg<br>"),
            array("id" =>"004","name" =>"Mouse Jerry","price"=>"30000","descr"=>"Mouse yang disukai kucing","source"=>"jerry.jpeg")
    ];
    print_r($itemsDetail);
    //soal no 4
    echo "<soal no 4>";
    //
    echo "Asterix: ";
    echo "<br>";

    for( $a=5; $a>0; $a--){
        for($i=1; $i<=$a; $i++){
            echo " ";
        }for($a1=6; $a1>$a; $a1--){
            echo"*";
        }for($a2=1; $a2>$a; $a2--){
            echo"*";
        }echo"<br>";
    }
    ?>


</body>
</html>
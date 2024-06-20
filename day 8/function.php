<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Latihan Function n conditional Chaerin</h3>
    <?php
    //soal no 1
    echo "<Soal 1>";
        function greetings($name){
            echo " Halo ".$name.",Selamat Datang di Sanbecode! ";
        }
        greetings("Cae");
        //soal no 2
        echo "<soal no 2>";
        function reverseString($word){
            $jumlahstring=strlen($word);
            for ($i=($jumlahstring-1); $i >= 0; $i--) { 
                echo $word[$i];
            }
        }
        //soal no 3
        echo "<soal no 3>";
                function palindrome($kata){
            $jumlahstring=strlen($kata);
            for ($i=($jumlahstring-1); $i >= 0; $i--) { 
                $result =$kata[$i];
                echo $result;
                if ($result !==$kata[$jumlahstring-1-$i]) {
                    return false;
                }
            }
                return true;
            }
        if (palindrome("kasur rusak")) {
            echo "true";
        }
        else{
            echo "false";
        }
        //soal no 4
        echo "<soal no 4>";
        function tentukan_nilai($nilai){
            if($nilai >= 85){
                echo "sangat baik <br>";
            }else if($nilai >= 70){
                echo "baik <br>";
            }else if($nilai >= 60){
                echo "cukup <br>";
            }else{
                echo "kurang <br>";
            }
        }
        tentukan_nilai(90);
        tentukan_nilai(21);
        tentukan_nilai(45);
    
?>
</body>
</html>
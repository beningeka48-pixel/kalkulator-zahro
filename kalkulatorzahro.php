<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Ancode kalkulator sederhana php</title> 
    </head>
    <body>

            <form action="" method="post">
        Angka 1 <input type="text" name="angka1"> <br>
        Angka 2 <input type="text" name="angka2"> <br>
        Operator <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <button type="submit" name="eksekusi">Eksekusi</button>
      </form>

      <?php
       if(isset($_POST['eksekusi'])) {
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $operator = $_POST['operator'];
        
        
        if ($operator == "+") {
            $hasil = $angka1 + $angka2;
        }


        if ($operator == "-") {
            $hasil = $angka1 - $angka2;
        }


        if ($operator == "x") {
            $hasil = $angka1 * $angka2;
        }


        if ($operator == "/") {
            $hasil = $angka1 / $angka2;
        }

        echo "<br>";
        echo "$angka1 $operator $angka2 <br>";
        echo "= $hasil";
       } 
       ?>
    </body> 
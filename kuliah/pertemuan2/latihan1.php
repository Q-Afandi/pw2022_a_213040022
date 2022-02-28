<?php 
    echo "Hello World";
    echo "<hr>";

    //VARIABLE
    $nama = "Mohamad";
    echo $nama;
    echo "<br>";

    $nama2 = "Afandi";
    echo $nama2;
    echo "<hr>";

    //STRING
    echo 'Jum\'at';
    echo "<br>";
    echo " Afandi :\"akuteh siapa\"";
    echo "<br>";
    //interpolasi 
    //mencetak isi variable
    //hanya ""
    echo "Saya bernama $nama2";
    echo "<br>";
    echo "price : $500";
    echo "<hr>";

    //OPERATOR 
    echo 1+1+1*8-2;
    echo "<br>";
    $alas = 10;
    $tinggi = 20;
    $luas_segi_tiga = ($alas*$tinggi)/2;
    echo $luas_segi_tiga;
    echo "<hr>";

    //concat
   //penggabung string
   // .
   $yoi = "Mohamad";
   $yio = "Afandi";
   echo $yoi . " " . $yio;
   echo "<hr>";


  //perbandingan
  // <, >, <=, >=, ==, != 
  echo 4<5;
  echo "<br>";
  echo 0<5;
  echo "<hr>";

  //identitas
  //===, !==
  echo 10=== "10";
  echo 10=== 10;
  echo "<hr>";

  //decrement/increment
  //++, --
  $x = 10;
  $x++;
  echo $x;
  echo "<br>";
  $y = 10;
  $y--;
  echo $y;
  echo "<br>";
  echo ++$x;
  echo "<br>";
  echo $x++;
  echo "<br>";
  echo $x;



?>
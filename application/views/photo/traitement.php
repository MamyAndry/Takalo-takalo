<?php
    include("function.php");
//Huitiemes de final
    $date8_1="3 et 5 décembre";
    $Winner8_1=array();
    $Winner8_1[0]=getWinner(get2Best('A')[0],get2Best('B')[1]);
    $Winner8_1[1]=getWinner(get2Best('C')[0],get2Best('D')[1]);
    $Winner8_1[2]=getWinner(get2Best('E')[0],get2Best('F')[1]);
    $Winner8_1[3]=getWinner(get2Best('G')[0],get2Best('H')[1]);

    $date8_2="4 et 6 décembre";
    $Winner8_2=array();
    $Winner8_2[0]=getWinner(get2Best('A')[1],get2Best('B')[0]);
    $Winner8_2[1]=getWinner(get2Best('C')[1],get2Best('D')[0]);
    $Winner8_2[2]=getWinner(get2Best('E')[1],get2Best('F')[0]);
    $Winner8_2[3]=getWinner(get2Best('G')[1],get2Best('H')[0]);

//Quarts de finale
    $date4_1="9 décembre";
    $Winner4_1=array();
    $Winner4_1[0]=getWinner($Winner8_1[0],$Winner8_1[1]);
    $Winner4_1[1]=getWinner($Winner8_1[2],$Winner8_1[3]);

    $date4_2="10 décembre";
    $Winner4_2=array();
    $Winner4_2[0]=getWinner($Winner8_2[0],$Winner8_2[1]);
    $Winner4_2[1]=getWinner($Winner8_2[2],$Winner8_2[3]);

//Demi-finale
    $date2_1="13 décembre";
    $Winner2_1=getWinner($Winner4_1[0],$Winner4_1[1]);
 
    $date2_2="14 décembre";
    $Winner2_2=getWinner($Winner4_2[0],$Winner4_2[1]);

//Finale
    $dateFinal="18 décembre";
    $WinnerFinal=getWinner($Winner2_1,$Winner2_2);

//3e place    
    $dateplace3="17 décembre";
    // $place3=
?>
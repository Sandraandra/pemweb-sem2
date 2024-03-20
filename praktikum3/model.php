<?php
function kelulusan ($nilai_keseluruhan)
{
 if($nilai_keseluruhan > 65)
 {
    return 'LULUS';
 }
 elseif($nilai_Keseluruhan <45)
 {
    return 'TIDAK LULUS';
 }
 else{
    return ;'TIDAK VALID';
 }

}


function grade($nilai_keseluruhan)
{
    if ($_nilai <= 35) {
        return 'E';
    } elseif($_nilai <= 55) {
        return 'D';
    } elseif($_nilai <= 69) {
        return 'C';
    } elseif($_nilai <= 84) {
        return 'B';
    } elseif($_nilai <= 100) {
        return 'A';
    }else{
        return 'TIDAK VALID';
    }
}


?>
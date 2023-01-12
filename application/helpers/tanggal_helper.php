<?php
if (!function_exists('month')) {
    function month($month){
        switch ($month) {
            case 1:
                $month = "Jan";
                break;
            case 2:
                $month = "Feb";
                break;
            case 3:
                $month = "Mar";
                break;
            case 4:
                $month = "Apr";
                break;
            case 5:
                $month = "Mei";
                break;
            case 6:
                $month = "Jun";
                break;
            case 7:
                $month = "Jul";
                break;
            case 8:
                $month = "Ags";
                break;
            case 9:
                $month = "Sep";
                break;
            case 10:
                $month = "Okt";
                break;
            case 11:
                $month = "Nov";
                break;
            case 12:
                $month = "Des";
                break;
            default:
                $month = Date('Error');
                break;
        }
        return $month;
    }
}
 
if (!function_exists('tang')) {
    function tang($tang) {
        $a = explode('-',$tang);
        $tang = $a['2']." ".month($a['1'])." ".$a['0'];
        return $tang;
    }
}
?>
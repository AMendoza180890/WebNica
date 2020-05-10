<?php
class tratamientoTxt{
    public static function cutString($str, $amount = 2000, $dir = "right")
    {
        if (($n = strlen($str)) > 0) {
            if ($dir == "right") {
                $start = 0;
                $end = $n - $amount;
            } elseif ($dir == "left") {
                $start = $amount;
                $end = $n;
            }

            return substr($str, $start, $end);
        } else return false;
    }
}
?>
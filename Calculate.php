<?php
class Calculate
{

    public function Killed($age, $year)
    {
        $v1 = 1;
        $v2 = 1;
        $num = $year - $age;

        if ($num < 0) {
            return -1;
        }

        if ($num < 3) {
            return $num;
        }

        $sum = $v1 + $v2;
        for ($i = 2; $i < $num; $i++) {
            $v3 = $v1 + $v2;
            $sum += $v3;
            $v1 = $v2;
            $v2 = $v3;
        }
        return $sum;
    }

    public function Average($val1, $val2)
    {
        $average = ($val1 + $val2) / 2;
        return  $average;
    }
}

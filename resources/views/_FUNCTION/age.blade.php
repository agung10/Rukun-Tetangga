<?php
    function getAge($tanggal_lahir){
        $birthDate = date("m-d-Y", strtotime($tanggal_lahir));
        $birthDate = explode("-", $birthDate);
        $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
            ? ((date("Y") - $birthDate[2]) - 1)
            : (date("Y") - $birthDate[2]));

        return $age;
    }
?>
<?php
    function sequenciaCrescente($array){
        if(count($array) <= 2) {
            return 'true';

        } else {
            $i = 1;
            $contador = 0;
            $maior = $array[0];

            while($i < count($array)){
                if($array[$i] > $maior) {
                    $maior = $array[$i];
                } else {
                    $contador++;
                }

                $i++;
            }

            if($contador > 1) {
                return 'false';
            } else {
                return 'true';
            }
        }
    }

    echo sequenciaCrescente([1, 3, 2, 1]) .'</br>';
    echo sequenciaCrescente([1, 3, 2]) .'</br>';
    echo sequenciaCrescente([1, 2, 1, 2]) .'</br>';
    echo sequenciaCrescente([3, 6, 5, 8, 10, 20, 15]) .'</br>';
    echo sequenciaCrescente([1, 1, 2, 3, 4, 4]) .'</br>';
    echo sequenciaCrescente([1, 4, 10, 4, 2]) .'</br>';
    echo sequenciaCrescente([10, 1, 2, 3, 4, 5]) .'</br>';
    echo sequenciaCrescente([1, 1, 1, 2, 3]) .'</br>';
    echo sequenciaCrescente([0, -2, 5, 6]) .'</br>';
    echo sequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]) .'</br>';
    echo sequenciaCrescente([40, 50, 60, 10, 20, 30]) .'</br>';
    echo sequenciaCrescente([1, 1]) .'</br>';
    echo sequenciaCrescente([1, 2, 5, 3, 5]) .'</br>';
    echo sequenciaCrescente([1, 2, 5, 5, 5]) .'</br>';
    echo sequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]) .'</br>';
    echo sequenciaCrescente([1, 2, 3, 4, 3, 6]) .'</br>';
    echo sequenciaCrescente([1, 2, 3, 4, 99, 5, 6]) .'</br>';
    echo sequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]) .'</br>';
    echo sequenciaCrescente([3, 5, 67, 98, 3]) .'</br>';
?>
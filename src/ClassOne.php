<?php

class ClassOne
{
    public function shout() {
        echo "Хеллоу ворлд! Я экземпляр класса ".get_class($this). "!";
        echo'</br>';
    }
}

?>
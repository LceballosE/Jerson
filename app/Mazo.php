<?php namespace App;

class Mazo {
    public cartas="null";
    public cantidadTotal=0;

    public function_construct($mazoviejo){
        if($mazoviejo){
            $this->cartas=$mazoviejo->cartas;
            $this->cantidad=$mazoviejo->cantidad;
        }
    }


    public function add($carta,$id){
        $cartaGuardada=['cantidad'=>0,'cartas'=>$carta];//se crea un item vacio
        if($this->cartas){//se mira que hayan cartas en el mazo
            if (array_key_exists($id, $this->cartas)) {//si si hay cartas en el mazo se mira si la carta a añadir ya existe en el mazo
                    $cartaGuardada=$this->cartas[$id];
            }
        }

        $cartaGuardada['cantidad']++;
        $cartaGuardada=$this->cartas[$id];
        $this->cantidadTotal++;
    }

}

?>
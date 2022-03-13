<?php 

class perro
{   
    protected $nombre;
    protected $raza;
    private $edad;
    public function setnombre($nombre)
    {
            if(is_string($nombre))
            $this ->nombre=$nombre;
            else
            {
                echo "Error";
            }
    }

     public function getnombre( )
    {

            return $this->nombre;
    }

        public function comer()
        {

            echo "El perro".$this->nombre.
        }

    
}




    




?>
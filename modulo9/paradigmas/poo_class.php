<?php
/**
 * @author Alberto Urbaez (Beto) <albertourbaez20@gmail.com>
 * @version 1.0.0
 * 
 */
class auto
{
    #PROPIEDADES
    public $marca;
    public $modelo;

    # METODO
    public function getData()
    {
        $data = file_get_contents("../../resource/autos.json");
        return json_decode($data, true);
    }

    public function getList()
    {
        $autos = $this->getData();
        $response = [];
        foreach ($autos as $auto) {
            $res         = new auto();
            $res->marca  = $auto['marca']; 
            $res->modelo = $auto['modelo'];
            $response[]  = $res;
        }
        return $response;
    }
}
<?php
class Empleados{
    public $codigo_empleado;
    public $nombre;
    public $telefono;
    private $correo; //set y get
    public $cargo;
    private $sueldo;
    private $password;

    public function __construct($codigo_empleado, $nombre, $telefono, $cargo)
    {
        $this -> codigo_empleado = $codigo_empleado;
        $this-> nombre = $nombre;
        $this-> telefono = $telefono;
        $this->cargo = $cargo;
    }
    //metodo set y get para atributos privados
    public function setCorreo($correo){
        $this -> correo = $correo;
    }
    public function getCorreo(){
        return $this-> correo;
    }

    public function setSueldo($sueldo){
        $this -> sueldo = $sueldo;
    }
    public function getSueldo(){
        return $this -> sueldo;
    }
    public function setPassword($password){
        $this -> password = $password; 
    }
    public function getPassword(){
        return $this -> password;
    }
    //metodo para agregar empleados a un arreglo
    public function agregarEmpleado(){
        //Cargamos lista de empleados del json
        //y actualizamos
        $array_empleados = $this->cargarListaEmpleados();
        //agregamos un nuevo empleado al arregla
        //array_push
        //arreglo asociativo
        $array_empleados[]= [
            'codigo_empleado'=> $this-> codigo_empleado,
            'nombre'=> $this -> nombre,
            'telefono'=> $this -> telefono,
            'correo'=> $this -> getCorreo(),
            'cargo'=> $this -> cargo,
            'sueldo'=> $this -> getSueldo(),
            'password'=> $this -> getPassword()
        ];
        //guardamos la informacion en el json ya codificado
        $this->guardarEmpleadoJSON($array_empleados);
    }
//metodo para cargar lista de empleados
    public function cargarListaEmpleados(){
        //retornar el json de los empleados para que
        //se actualice al momento de agregar un
        //nuevo empleado
        //validamos que el archivo existe
        if (file_exists('./empleados.json')){
            $informacion_json = file_get_contents('./empleados.json');
            //decodificamos la informacion del json
            return json_decode($informacion_json, true);
        }
        return [];
    }
    private function guardarEmpleadoJSON($lista_empleado){
        //codificamos a json
        $json_codificado = json_encode($lista_empleado, JSON_PRETTY_PRINT);
        //agregamos nuevo contenido al json
        file_put_contents('empleados.json', $json_codificado);
    }

}

$empleado2 = new Empleados ("CF002", "Carlos Flores", 70088523, "Gerente");
$empleado2->setCorreo ("Carlos@gmail.com");
$empleado2->setSueldo (700);
$empleado2->setPassword ("Carlos");
$empleado2->agregarEmpleado();

?>
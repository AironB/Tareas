<?php
require_once "./Empleados.php";
class Gerente extends Empleados{
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

// $empleado1 = new Gerente("CF001", "Carlos Flores", 70088523, "Gerente");
// $empleado1->setCorreo("Carlos@gmail.com");
// $empleado1->setSueldo(700);
// $empleado1->setPassword("Carlos");
// $empleado1->agregarEmpleado();

$empleado2 = new Gerente ("CF001", "Carlos Flores", 70088523, "Gerente");
$empleado2->setCorreo ("Carlos@gmail.com");
$empleado2->setSueldo (700);
$empleado2->setPassword ("Carlos");
$empleado2->agregarEmpleado();
?>
<?php
class tareas{
    public $id_tarea;
    public $titulo;
    public $descripcion;
    public $fecha_creacion;
    public $estado;
    public $codigo_empleado;

    public function __construct($id, $titulo, $descripcion,$codigo_empleado)
    {
        $this->id_tarea=$id;
        $this->titulo=$titulo;
        $this->descripcion=$descripcion;
        $this->fecha_creacion=date('Y-m-d');
        $this->estado='pendiente';
        $this->codigo_empleado = $codigo_empleado;
    }
    public function agregarTarea()
    {
        $array_tareas = self::cargarTareas();
        $array_tareas[] = [
            'id_tarea'=> $this-> id_tarea,
            'titulo' => $this->titulo,
            'descripcion'=>$this->descripcion,
            'fecha_creacion'=>$this->fecha_creacion,
            'estado' =>$this->estado,
            'codigo_empleado'=>$this->codigo_empleado
        ];
        /**
         * el self hace referencia al nombre de su clase
         * por ser un meto estatico se utiliza la palabra
         * reservada self en vez de this
         */
        self::guardarTarea($array_tareas);
        return "se ha guardado correctamente";
    }
    //metodos estaticos
    public static function cargarTareas()
    {
        if(file_exists('Tareas.json'))
        {
            $informacion_json=file_get_contents('tareas.json');
            return json_decode($informacion_json, true);
        }
        return [];
    }
    private static function guardarTarea($tarea)
    {
        $json_codificado= json_encode($tarea, JSON_PRETTY_PRINT);
        file_put_contents('Tareas.json', $json_codificado);
    }
    //metodom para cambiar el estado de la tarea
    public static function cambiarEstado($id_tarea, $nuevo_estado)
    {
        //obtenemos el arreglo de las tareas
        $tareas = self::cargarTareas();
        //iteramos el arreglo para verificar la tarea por su id
        foreach($tareas as $tarea)
        {
            $tarea_encontrada=false;
            {
            if ($tarea['id_tarea']==$id_tarea)
            {
                echo "Tarea encontrada ";
                //cambiamos el estado de la tarea
                echo $tarea['estado'] = $nuevo_estado;
                $tarea_encontrada = true;
            }
            }
            //si la tarea existe
            if ($tarea_encontrada)
            {
                //actualizamos el JSON
                self::guardarTarea($tarea);
                echo "Tarea actualizada";
            }else{
                echo "Tarea con el ID $id_tarea no fue encontrada";
            }
        }

    }

}
    /**
     * Metodos estaticos
     * no son metodos de instancia
     */

     //meto estatico
    tareas::cargarTareas();
?>
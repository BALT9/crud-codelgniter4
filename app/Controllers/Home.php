<?php

namespace App\Controllers;

// se importo el modelo 
use App\Models\EmpleadoModel;

class Home extends BaseController
{
    public function index()
    {
        $empleadoModel = new EmpleadoModel();

        // obtener todos los empleados
        $data['empleados'] = $empleadoModel->findAll();

        // Enviar datos a la vista
        return view('welcome_message', $data);
    }

    public function insertar()
    {
        // instacio el modelo 
        $empleadoModel = new EmpleadoModel();

        // extrae los datos del formulario 
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellidos' => $this->request->getPost('apellidos'),
            'correo' => $this->request->getPost('correo'),
            'telefono' => $this->request->getPost('telefono'),
        ];

        // inserta los datos a la base de datos 
        $empleadoModel->insert($data);

        // redirige a la pagina 
        return redirect()->to('/')->with('mensaje', 'empleado agregado correctamente');
    }

    // eliminar empleado 
    public function eliminar($id)
    {
        $empleado = new EmpleadoModel();

        $empleado->delete($id);

        return redirect()->to('/')->with('mensaje', 'empleado eliminado correctamente');
    }

    public function actualizar()
    {
        $empleadoModel = new EmpleadoModel();

        $id = $this->request->getPost('id'); // el id viene como campo oculto del formulario

        $data = [
            'nombre'    => $this->request->getPost('nombre'),
            'apellidos' => $this->request->getPost('apellidos'),
            'correo'    => $this->request->getPost('correo'),
            'telefono'  => $this->request->getPost('telefono'),
        ];

        $empleadoModel->update($id, $data);

        return redirect()->to('/')->with('mensaje', 'Empleado actualizado correctamente');
    }
}

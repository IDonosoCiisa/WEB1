<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;

class Project
{
    use HasFactory;
    private $id;
    private $nombre;
    private $fechaDeInicio;
    private $estado;
    private $responsable;
    private $monto;

    /**
     * @param $id
     * @param $nombre
     * @param $fechaDeInicio
     * @param $estado
     * @param $responsable
     * @param $monto
     */
    public function __construct($id, $nombre, $fechaDeInicio, $estado, $responsable, $monto)
    {
        $this->id = $id;
        $this->nombre = $nombre;
        $this->fechaDeInicio = $fechaDeInicio;
        $this->estado = $estado;
        $this->responsable = $responsable;
        $this->monto = $monto;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getFechaDeInicio()
    {
        return $this->fechaDeInicio;
    }

    /**
     * @param mixed $fechaDeInicio
     */
    public function setFechaDeInicio($fechaDeInicio)
    {
        $this->fechaDeInicio = $fechaDeInicio;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    /**
     * @return mixed
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * @param mixed $responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }

    /**
     * @return mixed
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * @param mixed $monto
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;
    }

    public static function getAll()
    {
        $project = new Project(1, 'Proyecto 1', "14/12/1986", 'Activo', 'Juan Perez', 1000);
        $project2 = new Project(2, "Proyecto 2", "14/12/1986", 'Activo', 'Juan Perezzz', 1000);
        $projects[0] = $project;
        $projects[1] = $project2;
        return $projects;
    }

    public static function getById($id)
    {
        $project = new Project($id, "Proyecto $id", "14/12/1986", 'Activo', 'Juan Perez', 1000);
        return $project;
    }

    public static function newProject($project)
    {
        $createdproject = new Project($project->getId(), $project->getNombre(), $project->getFechaDeInicio(), $project->getEstado(), $project->getResponsable(), $project->getMonto());
        return $createdproject;
    }

    public static function updateProject($project, $id)
    {
        $updatedProject = new Project($id, $project->getNombre(), $project->getFechaDeInicio(), $project->getEstado(), $project->getResponsable(), $project->getMonto());
        return $updatedProject;
    }

    public static function deleteProject($id)
    {
        return "Proyecto $id eliminado";
    }
}

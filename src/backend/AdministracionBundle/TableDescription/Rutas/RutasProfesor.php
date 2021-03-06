<?php

namespace ADEPSOFT\Planeacion\AdminBundle\TableDescription\Rutas;


use ADEPSOFT\ComunBundle\tableDescription\architecture\ColumnaGrid;
use ADEPSOFT\ComunBundle\tableDescription\architecture\GridColumn;
use ADEPSOFT\ComunBundle\tableDescription\architecture\RutasGrid;
use ADEPSOFT\ComunBundle\tableDescription\architecture\SelectFilterColumn;
use ADEPSOFT\ComunBundle\tableDescription\architecture\TableModel;
use ADEPSOFT\ComunBundle\Util\ResultType;
use ADEPSOFT\ComunBundle\Util\Util;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\DependencyInjection\ContainerAware;

class RutasProfesor extends RutasGrid
{
    protected $registroMaterias='planeacion_admin_crud_profesor_registro_materias' ;

    /**
     * @return string
     */
    public function getRegistroMaterias()
    {
        return $this->registroMaterias;
    }

    /**
     * @param string $registroMaterias
     */
    public function setRegistroMaterias($registroMaterias)
    {
        $this->registroMaterias = $registroMaterias;
    }

}
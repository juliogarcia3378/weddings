<?php

namespace Security\MySecurityBundle\Repository;


use backend\ComunBundle\Util\ResultType;
use backend\ComunBundle\Util\UtilRepository2;
use Doctrine\ORM\Mapping as ORM;

class GrupoRepository extends \ADEPSOFT\ComunBundle\Util\NomencladoresRepository
{
    public function obtenerTodos($filters = array(),$order=null,$resultType=ResultType::ObjectType)
    {
        $qb = $this->getQB() ;
        if(array_key_exists('permiso.id',$filters) && $filters['permiso.id'] != null)
            $qb = $this->getQB('permiso') ;
        return $this->filterQB($qb,$filters,$resultType,$order);
    }
    public function getByUser($idUser,$filters=array(),$resultType=ResultType::IDSType)
    {
        $qb = $this->getQB('usuarios')->andWhere('usuarios.id = :id')->setParameter('id',$idUser);
        return $this->filterQB($qb,$filters,$resultType);
    }
}
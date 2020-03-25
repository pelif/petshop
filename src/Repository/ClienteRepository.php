<?php

namespace App\Repository;

use App\Entity\Cliente;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use PDO;

/**
 * @method Cliente|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cliente|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cliente[]    findAll()
 * @method Cliente[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClienteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cliente::class);
    }

    public function qtsAnimaisPorCliente()
    {
        $sql = "select count(ac.animal_id) as qtde, c.nome 
                FROM animal_cliente ac 
                INNER JOIN cliente c on c.id = ac.cliente_id 
                GROUP BY c.nome
        "; 

        return $this->getEntityManager()
                    ->getConnection()
                    ->executeQuery($sql)
                    ->fetchAll(PDO::FETCH_OBJ); 
    }
   
}

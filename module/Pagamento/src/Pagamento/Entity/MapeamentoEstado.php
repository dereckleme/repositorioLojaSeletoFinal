<?php

namespace Pagamento\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MapeamentoEstado
 *
 * @ORM\Table(name="mapeamento_estado")
 * @ORM\Entity
 */
class MapeamentoEstado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idmapeamento_estado", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idmapeamentoEstado;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeclatura", type="string", length=255, nullable=true)
     */
    private $nomeclatura;
    
	public function getIdmapeamentoEstado() {
		return $this->idmapeamentoEstado;
	}

	public function getNome() {
		return $this->nome;
	}

	public function getNomeclatura() {
		return $this->nomeclatura;
	}

	public function setIdmapeamentoEstado($idmapeamentoEstado) {
		$this->idmapeamentoEstado = $idmapeamentoEstado;
	}

	public function setNome($nome) {
		$this->nome = $nome;
	}

	public function setNomeclatura($nomeclatura) {
		$this->nomeclatura = $nomeclatura;
	}

    

}

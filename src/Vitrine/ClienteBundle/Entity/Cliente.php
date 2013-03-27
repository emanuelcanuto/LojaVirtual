<?php

namespace Vitrine\ClienteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomeCompleto", type="string", length=255)
     */
    private $nomeCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=255)
     */
    private $cpf;

    /**
     * @var string
     *
     * @ORM\Column(name="sexo", type="string", length=255)
     */
    private $sexo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataDeNascimento", type="date")
     */
    private $dataDeNascimento;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=255)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=255)
     */
    private $senha;

    /**
     * @var boolean
     *
     * @ORM\Column(name="recebeOfertas", type="boolean")
     */
    private $recebeOfertas;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=255)
     */
    private $endereco;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=255)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=255)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=255)
     */
    private $cidade;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nomeCompleto
     *
     * @param string $nomeCompleto
     * @return Cliente
     */
    public function setNomeCompleto($nomeCompleto)
    {
        $this->nomeCompleto = $nomeCompleto;
    
        return $this;
    }

    /**
     * Get nomeCompleto
     *
     * @return string 
     */
    public function getNomeCompleto()
    {
        return $this->nomeCompleto;
    }

    /**
     * Set cpf
     *
     * @param string $cpf
     * @return Cliente
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    
        return $this;
    }

    /**
     * Get cpf
     *
     * @return string 
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set sexo
     *
     * @param string $sexo
     * @return Cliente
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    
        return $this;
    }

    /**
     * Get sexo
     *
     * @return string 
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set dataDeNascimento
     *
     * @param \DateTime $dataDeNascimento
     * @return Cliente
     */
    public function setDataDeNascimento($dataDeNascimento)
    {
        $this->dataDeNascimento = $dataDeNascimento;
    
        return $this;
    }

    /**
     * Get dataDeNascimento
     *
     * @return \DateTime 
     */
    public function getDataDeNascimento()
    {
        return $this->dataDeNascimento;
    }

    /**
     * Set telefone
     *
     * @param string $telefone
     * @return Cliente
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    
        return $this;
    }

    /**
     * Get telefone
     *
     * @return string 
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Cliente
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set senha
     *
     * @param string $senha
     * @return Cliente
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    
        return $this;
    }

    /**
     * Get senha
     *
     * @return string 
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Set recebeOfertas
     *
     * @param boolean $recebeOfertas
     * @return Cliente
     */
    public function setRecebeOfertas($recebeOfertas)
    {
        $this->recebeOfertas = $recebeOfertas;
    
        return $this;
    }

    /**
     * Get recebeOfertas
     *
     * @return boolean 
     */
    public function getRecebeOfertas()
    {
        return $this->recebeOfertas;
    }

    /**
     * Set endereco
     *
     * @param string $endereco
     * @return Cliente
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    
        return $this;
    }

    /**
     * Get endereco
     *
     * @return string 
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Cliente
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set cep
     *
     * @param string $cep
     * @return Cliente
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    
        return $this;
    }

    /**
     * Get cep
     *
     * @return string 
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * Set bairro
     *
     * @param string $bairro
     * @return Cliente
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    
        return $this;
    }

    /**
     * Get bairro
     *
     * @return string 
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Set cidade
     *
     * @param string $cidade
     * @return Cliente
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    
        return $this;
    }

    /**
     * Get cidade
     *
     * @return string 
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Cliente
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set pais
     *
     * @param string $pais
     * @return Cliente
     */
    public function setPais($pais)
    {
        $this->pais = $pais;
    
        return $this;
    }

    /**
     * Get pais
     *
     * @return string 
     */
    public function getPais()
    {
        return $this->pais;
    }
}

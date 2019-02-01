<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing DatiGeneraliDocumentoType
 *
 * 
 * XSD Type: DatiGeneraliDocumentoType
 */
class DatiGeneraliDocumentoType
{

    /**
     * @property string $tipoDocumento
     */
    private $tipoDocumento = null;

    /**
     * @property string $divisa
     */
    private $divisa = null;

    /**
     * @property \DateTime $data
     */
    private $data = null;

    /**
     * @property string $numero
     */
    private $numero = null;

    /**
     * Gets as tipoDocumento
     *
     * @return string
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Sets a new tipoDocumento
     *
     * @param string $tipoDocumento
     * @return self
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;
        return $this;
    }

    /**
     * Gets as divisa
     *
     * @return string
     */
    public function getDivisa()
    {
        return $this->divisa;
    }

    /**
     * Sets a new divisa
     *
     * @param string $divisa
     * @return self
     */
    public function setDivisa($divisa)
    {
        $this->divisa = $divisa;
        return $this;
    }

    /**
     * Gets as data
     *
     * @return \DateTime
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Sets a new data
     *
     * @param \DateTime $data
     * @return self
     */
    public function setData(\DateTime $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Gets as numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Sets a new numero
     *
     * @param string $numero
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }


}


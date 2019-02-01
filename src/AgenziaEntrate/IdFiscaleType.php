<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing IdFiscaleType
 *
 * 
 * XSD Type: IdFiscaleType
 */
class IdFiscaleType
{

    /**
     * @property string $idPaese
     */
    private $idPaese = null;

    /**
     * @property string $idCodice
     */
    private $idCodice = null;

    /**
     * Gets as idPaese
     *
     * @return string
     */
    public function getIdPaese()
    {
        return $this->idPaese;
    }

    /**
     * Sets a new idPaese
     *
     * @param string $idPaese
     * @return self
     */
    public function setIdPaese($idPaese)
    {
        $this->idPaese = $idPaese;
        return $this;
    }

    /**
     * Gets as idCodice
     *
     * @return string
     */
    public function getIdCodice()
    {
        return $this->idCodice;
    }

    /**
     * Sets a new idCodice
     *
     * @param string $idCodice
     * @return self
     */
    public function setIdCodice($idCodice)
    {
        $this->idCodice = $idCodice;
        return $this;
    }


}


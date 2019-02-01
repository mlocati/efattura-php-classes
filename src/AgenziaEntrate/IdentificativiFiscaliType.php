<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing IdentificativiFiscaliType
 *
 * 
 * XSD Type: IdentificativiFiscaliType
 */
class IdentificativiFiscaliType
{

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idFiscaleIVA
     */
    private $idFiscaleIVA = null;

    /**
     * @property string $codiceFiscale
     */
    private $codiceFiscale = null;

    /**
     * Gets as idFiscaleIVA
     *
     * @return \MLocati\EFattura\AgenziaEntrate\IdFiscaleType
     */
    public function getIdFiscaleIVA()
    {
        return $this->idFiscaleIVA;
    }

    /**
     * Sets a new idFiscaleIVA
     *
     * @param \MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idFiscaleIVA
     * @return self
     */
    public function setIdFiscaleIVA(\MLocati\EFattura\AgenziaEntrate\IdFiscaleType $idFiscaleIVA)
    {
        $this->idFiscaleIVA = $idFiscaleIVA;
        return $this;
    }

    /**
     * Gets as codiceFiscale
     *
     * @return string
     */
    public function getCodiceFiscale()
    {
        return $this->codiceFiscale;
    }

    /**
     * Sets a new codiceFiscale
     *
     * @param string $codiceFiscale
     * @return self
     */
    public function setCodiceFiscale($codiceFiscale)
    {
        $this->codiceFiscale = $codiceFiscale;
        return $this;
    }


}


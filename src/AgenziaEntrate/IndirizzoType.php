<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing IndirizzoType
 *
 * 
 * XSD Type: IndirizzoType
 */
class IndirizzoType
{

    /**
     * @property string $indirizzo
     */
    private $indirizzo = null;

    /**
     * @property string $numeroCivico
     */
    private $numeroCivico = null;

    /**
     * @property string $cAP
     */
    private $cAP = null;

    /**
     * @property string $comune
     */
    private $comune = null;

    /**
     * @property string $provincia
     */
    private $provincia = null;

    /**
     * @property string $nazione
     */
    private $nazione = null;

    /**
     * Gets as indirizzo
     *
     * @return string
     */
    public function getIndirizzo()
    {
        return $this->indirizzo;
    }

    /**
     * Sets a new indirizzo
     *
     * @param string $indirizzo
     * @return self
     */
    public function setIndirizzo($indirizzo)
    {
        $this->indirizzo = $indirizzo;
        return $this;
    }

    /**
     * Gets as numeroCivico
     *
     * @return string
     */
    public function getNumeroCivico()
    {
        return $this->numeroCivico;
    }

    /**
     * Sets a new numeroCivico
     *
     * @param string $numeroCivico
     * @return self
     */
    public function setNumeroCivico($numeroCivico)
    {
        $this->numeroCivico = $numeroCivico;
        return $this;
    }

    /**
     * Gets as cAP
     *
     * @return string
     */
    public function getCAP()
    {
        return $this->cAP;
    }

    /**
     * Sets a new cAP
     *
     * @param string $cAP
     * @return self
     */
    public function setCAP($cAP)
    {
        $this->cAP = $cAP;
        return $this;
    }

    /**
     * Gets as comune
     *
     * @return string
     */
    public function getComune()
    {
        return $this->comune;
    }

    /**
     * Sets a new comune
     *
     * @param string $comune
     * @return self
     */
    public function setComune($comune)
    {
        $this->comune = $comune;
        return $this;
    }

    /**
     * Gets as provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Sets a new provincia
     *
     * @param string $provincia
     * @return self
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
        return $this;
    }

    /**
     * Gets as nazione
     *
     * @return string
     */
    public function getNazione()
    {
        return $this->nazione;
    }

    /**
     * Sets a new nazione
     *
     * @param string $nazione
     * @return self
     */
    public function setNazione($nazione)
    {
        $this->nazione = $nazione;
        return $this;
    }


}


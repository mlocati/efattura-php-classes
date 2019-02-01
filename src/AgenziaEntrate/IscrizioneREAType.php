<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing IscrizioneREAType
 *
 * 
 * XSD Type: IscrizioneREAType
 */
class IscrizioneREAType
{

    /**
     * @property string $ufficio
     */
    private $ufficio = null;

    /**
     * @property string $numeroREA
     */
    private $numeroREA = null;

    /**
     * @property float $capitaleSociale
     */
    private $capitaleSociale = null;

    /**
     * @property string $socioUnico
     */
    private $socioUnico = null;

    /**
     * @property string $statoLiquidazione
     */
    private $statoLiquidazione = null;

    /**
     * Gets as ufficio
     *
     * @return string
     */
    public function getUfficio()
    {
        return $this->ufficio;
    }

    /**
     * Sets a new ufficio
     *
     * @param string $ufficio
     * @return self
     */
    public function setUfficio($ufficio)
    {
        $this->ufficio = $ufficio;
        return $this;
    }

    /**
     * Gets as numeroREA
     *
     * @return string
     */
    public function getNumeroREA()
    {
        return $this->numeroREA;
    }

    /**
     * Sets a new numeroREA
     *
     * @param string $numeroREA
     * @return self
     */
    public function setNumeroREA($numeroREA)
    {
        $this->numeroREA = $numeroREA;
        return $this;
    }

    /**
     * Gets as capitaleSociale
     *
     * @return float
     */
    public function getCapitaleSociale()
    {
        return $this->capitaleSociale;
    }

    /**
     * Sets a new capitaleSociale
     *
     * @param float $capitaleSociale
     * @return self
     */
    public function setCapitaleSociale($capitaleSociale)
    {
        $this->capitaleSociale = $capitaleSociale;
        return $this;
    }

    /**
     * Gets as socioUnico
     *
     * @return string
     */
    public function getSocioUnico()
    {
        return $this->socioUnico;
    }

    /**
     * Sets a new socioUnico
     *
     * @param string $socioUnico
     * @return self
     */
    public function setSocioUnico($socioUnico)
    {
        $this->socioUnico = $socioUnico;
        return $this;
    }

    /**
     * Gets as statoLiquidazione
     *
     * @return string
     */
    public function getStatoLiquidazione()
    {
        return $this->statoLiquidazione;
    }

    /**
     * Sets a new statoLiquidazione
     *
     * @param string $statoLiquidazione
     * @return self
     */
    public function setStatoLiquidazione($statoLiquidazione)
    {
        $this->statoLiquidazione = $statoLiquidazione;
        return $this;
    }


}


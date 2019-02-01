<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing AltriDatiIdentificativiType
 *
 * 
 * XSD Type: AltriDatiIdentificativiType
 */
class AltriDatiIdentificativiType
{

    /**
     * @property string $denominazione
     */
    private $denominazione = null;

    /**
     * @property string $nome
     */
    private $nome = null;

    /**
     * @property string $cognome
     */
    private $cognome = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\IndirizzoType $sede
     */
    private $sede = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\IndirizzoType $stabileOrganizzazione
     */
    private $stabileOrganizzazione = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\RappresentanteFiscaleType $rappresentanteFiscale
     */
    private $rappresentanteFiscale = null;

    /**
     * Gets as denominazione
     *
     * @return string
     */
    public function getDenominazione()
    {
        return $this->denominazione;
    }

    /**
     * Sets a new denominazione
     *
     * @param string $denominazione
     * @return self
     */
    public function setDenominazione($denominazione)
    {
        $this->denominazione = $denominazione;
        return $this;
    }

    /**
     * Gets as nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Sets a new nome
     *
     * @param string $nome
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * Gets as cognome
     *
     * @return string
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Sets a new cognome
     *
     * @param string $cognome
     * @return self
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;
        return $this;
    }

    /**
     * Gets as sede
     *
     * @return \MLocati\EFattura\AgenziaEntrate\IndirizzoType
     */
    public function getSede()
    {
        return $this->sede;
    }

    /**
     * Sets a new sede
     *
     * @param \MLocati\EFattura\AgenziaEntrate\IndirizzoType $sede
     * @return self
     */
    public function setSede(\MLocati\EFattura\AgenziaEntrate\IndirizzoType $sede)
    {
        $this->sede = $sede;
        return $this;
    }

    /**
     * Gets as stabileOrganizzazione
     *
     * @return \MLocati\EFattura\AgenziaEntrate\IndirizzoType
     */
    public function getStabileOrganizzazione()
    {
        return $this->stabileOrganizzazione;
    }

    /**
     * Sets a new stabileOrganizzazione
     *
     * @param \MLocati\EFattura\AgenziaEntrate\IndirizzoType $stabileOrganizzazione
     * @return self
     */
    public function setStabileOrganizzazione(\MLocati\EFattura\AgenziaEntrate\IndirizzoType $stabileOrganizzazione)
    {
        $this->stabileOrganizzazione = $stabileOrganizzazione;
        return $this;
    }

    /**
     * Gets as rappresentanteFiscale
     *
     * @return \MLocati\EFattura\AgenziaEntrate\RappresentanteFiscaleType
     */
    public function getRappresentanteFiscale()
    {
        return $this->rappresentanteFiscale;
    }

    /**
     * Sets a new rappresentanteFiscale
     *
     * @param \MLocati\EFattura\AgenziaEntrate\RappresentanteFiscaleType $rappresentanteFiscale
     * @return self
     */
    public function setRappresentanteFiscale(\MLocati\EFattura\AgenziaEntrate\RappresentanteFiscaleType $rappresentanteFiscale)
    {
        $this->rappresentanteFiscale = $rappresentanteFiscale;
        return $this;
    }


}


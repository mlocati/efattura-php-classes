<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing FatturaElettronicaHeaderType
 *
 * 
 * XSD Type: FatturaElettronicaHeaderType
 */
class FatturaElettronicaHeaderType
{

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\DatiTrasmissioneType $datiTrasmissione
     */
    private $datiTrasmissione = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\CedentePrestatoreType $cedentePrestatore
     */
    private $cedentePrestatore = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\CessionarioCommittenteType $cessionarioCommittente
     */
    private $cessionarioCommittente = null;

    /**
     * @property string $soggettoEmittente
     */
    private $soggettoEmittente = null;

    /**
     * Gets as datiTrasmissione
     *
     * @return \MLocati\EFattura\AgenziaEntrate\DatiTrasmissioneType
     */
    public function getDatiTrasmissione()
    {
        return $this->datiTrasmissione;
    }

    /**
     * Sets a new datiTrasmissione
     *
     * @param \MLocati\EFattura\AgenziaEntrate\DatiTrasmissioneType $datiTrasmissione
     * @return self
     */
    public function setDatiTrasmissione(\MLocati\EFattura\AgenziaEntrate\DatiTrasmissioneType $datiTrasmissione)
    {
        $this->datiTrasmissione = $datiTrasmissione;
        return $this;
    }

    /**
     * Gets as cedentePrestatore
     *
     * @return \MLocati\EFattura\AgenziaEntrate\CedentePrestatoreType
     */
    public function getCedentePrestatore()
    {
        return $this->cedentePrestatore;
    }

    /**
     * Sets a new cedentePrestatore
     *
     * @param \MLocati\EFattura\AgenziaEntrate\CedentePrestatoreType $cedentePrestatore
     * @return self
     */
    public function setCedentePrestatore(\MLocati\EFattura\AgenziaEntrate\CedentePrestatoreType $cedentePrestatore)
    {
        $this->cedentePrestatore = $cedentePrestatore;
        return $this;
    }

    /**
     * Gets as cessionarioCommittente
     *
     * @return \MLocati\EFattura\AgenziaEntrate\CessionarioCommittenteType
     */
    public function getCessionarioCommittente()
    {
        return $this->cessionarioCommittente;
    }

    /**
     * Sets a new cessionarioCommittente
     *
     * @param \MLocati\EFattura\AgenziaEntrate\CessionarioCommittenteType $cessionarioCommittente
     * @return self
     */
    public function setCessionarioCommittente(\MLocati\EFattura\AgenziaEntrate\CessionarioCommittenteType $cessionarioCommittente)
    {
        $this->cessionarioCommittente = $cessionarioCommittente;
        return $this;
    }

    /**
     * Gets as soggettoEmittente
     *
     * @return string
     */
    public function getSoggettoEmittente()
    {
        return $this->soggettoEmittente;
    }

    /**
     * Sets a new soggettoEmittente
     *
     * @param string $soggettoEmittente
     * @return self
     */
    public function setSoggettoEmittente($soggettoEmittente)
    {
        $this->soggettoEmittente = $soggettoEmittente;
        return $this;
    }


}


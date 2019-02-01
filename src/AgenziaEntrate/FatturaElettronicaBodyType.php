<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing FatturaElettronicaBodyType
 *
 * 
 * XSD Type: FatturaElettronicaBodyType
 */
class FatturaElettronicaBodyType
{

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\DatiGeneraliType $datiGenerali
     */
    private $datiGenerali = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\DatiBeniServiziType[] $datiBeniServizi
     */
    private $datiBeniServizi = [
        
    ];

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\AllegatiType[] $allegati
     */
    private $allegati = [
        
    ];

    /**
     * Gets as datiGenerali
     *
     * @return \MLocati\EFattura\AgenziaEntrate\DatiGeneraliType
     */
    public function getDatiGenerali()
    {
        return $this->datiGenerali;
    }

    /**
     * Sets a new datiGenerali
     *
     * @param \MLocati\EFattura\AgenziaEntrate\DatiGeneraliType $datiGenerali
     * @return self
     */
    public function setDatiGenerali(\MLocati\EFattura\AgenziaEntrate\DatiGeneraliType $datiGenerali)
    {
        $this->datiGenerali = $datiGenerali;
        return $this;
    }

    /**
     * Adds as datiBeniServizi
     *
     * @return self
     * @param \MLocati\EFattura\AgenziaEntrate\DatiBeniServiziType $datiBeniServizi
     */
    public function addToDatiBeniServizi(\MLocati\EFattura\AgenziaEntrate\DatiBeniServiziType $datiBeniServizi)
    {
        $this->datiBeniServizi[] = $datiBeniServizi;
        return $this;
    }

    /**
     * isset datiBeniServizi
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDatiBeniServizi($index)
    {
        return isset($this->datiBeniServizi[$index]);
    }

    /**
     * unset datiBeniServizi
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDatiBeniServizi($index)
    {
        unset($this->datiBeniServizi[$index]);
    }

    /**
     * Gets as datiBeniServizi
     *
     * @return \MLocati\EFattura\AgenziaEntrate\DatiBeniServiziType[]
     */
    public function getDatiBeniServizi()
    {
        return $this->datiBeniServizi;
    }

    /**
     * Sets a new datiBeniServizi
     *
     * @param \MLocati\EFattura\AgenziaEntrate\DatiBeniServiziType[] $datiBeniServizi
     * @return self
     */
    public function setDatiBeniServizi(array $datiBeniServizi)
    {
        $this->datiBeniServizi = $datiBeniServizi;
        return $this;
    }

    /**
     * Adds as allegati
     *
     * @return self
     * @param \MLocati\EFattura\AgenziaEntrate\AllegatiType $allegati
     */
    public function addToAllegati(\MLocati\EFattura\AgenziaEntrate\AllegatiType $allegati)
    {
        $this->allegati[] = $allegati;
        return $this;
    }

    /**
     * isset allegati
     *
     * @param int|string $index
     * @return bool
     */
    public function issetAllegati($index)
    {
        return isset($this->allegati[$index]);
    }

    /**
     * unset allegati
     *
     * @param int|string $index
     * @return void
     */
    public function unsetAllegati($index)
    {
        unset($this->allegati[$index]);
    }

    /**
     * Gets as allegati
     *
     * @return \MLocati\EFattura\AgenziaEntrate\AllegatiType[]
     */
    public function getAllegati()
    {
        return $this->allegati;
    }

    /**
     * Sets a new allegati
     *
     * @param \MLocati\EFattura\AgenziaEntrate\AllegatiType[] $allegati
     * @return self
     */
    public function setAllegati(array $allegati)
    {
        $this->allegati = $allegati;
        return $this;
    }


}


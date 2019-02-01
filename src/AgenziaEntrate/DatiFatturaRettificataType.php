<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing DatiFatturaRettificataType
 *
 * 
 * XSD Type: DatiFatturaRettificataType
 */
class DatiFatturaRettificataType
{

    /**
     * @property string $numeroFR
     */
    private $numeroFR = null;

    /**
     * @property \DateTime $dataFR
     */
    private $dataFR = null;

    /**
     * @property string $elementiRettificati
     */
    private $elementiRettificati = null;

    /**
     * Gets as numeroFR
     *
     * @return string
     */
    public function getNumeroFR()
    {
        return $this->numeroFR;
    }

    /**
     * Sets a new numeroFR
     *
     * @param string $numeroFR
     * @return self
     */
    public function setNumeroFR($numeroFR)
    {
        $this->numeroFR = $numeroFR;
        return $this;
    }

    /**
     * Gets as dataFR
     *
     * @return \DateTime
     */
    public function getDataFR()
    {
        return $this->dataFR;
    }

    /**
     * Sets a new dataFR
     *
     * @param \DateTime $dataFR
     * @return self
     */
    public function setDataFR(\DateTime $dataFR)
    {
        $this->dataFR = $dataFR;
        return $this;
    }

    /**
     * Gets as elementiRettificati
     *
     * @return string
     */
    public function getElementiRettificati()
    {
        return $this->elementiRettificati;
    }

    /**
     * Sets a new elementiRettificati
     *
     * @param string $elementiRettificati
     * @return self
     */
    public function setElementiRettificati($elementiRettificati)
    {
        $this->elementiRettificati = $elementiRettificati;
        return $this;
    }


}


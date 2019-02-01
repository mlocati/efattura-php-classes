<?php

namespace MLocati\EFattura\AgenziaEntrate;

/**
 * Class representing DatiGeneraliType
 *
 * Blocco relativo ai Dati Generali della Fattura Elettronica
 * XSD Type: DatiGeneraliType
 */
class DatiGeneraliType
{

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\DatiGeneraliDocumentoType $datiGeneraliDocumento
     */
    private $datiGeneraliDocumento = null;

    /**
     * @property \MLocati\EFattura\AgenziaEntrate\DatiFatturaRettificataType $datiFatturaRettificata
     */
    private $datiFatturaRettificata = null;

    /**
     * Gets as datiGeneraliDocumento
     *
     * @return \MLocati\EFattura\AgenziaEntrate\DatiGeneraliDocumentoType
     */
    public function getDatiGeneraliDocumento()
    {
        return $this->datiGeneraliDocumento;
    }

    /**
     * Sets a new datiGeneraliDocumento
     *
     * @param \MLocati\EFattura\AgenziaEntrate\DatiGeneraliDocumentoType $datiGeneraliDocumento
     * @return self
     */
    public function setDatiGeneraliDocumento(\MLocati\EFattura\AgenziaEntrate\DatiGeneraliDocumentoType $datiGeneraliDocumento)
    {
        $this->datiGeneraliDocumento = $datiGeneraliDocumento;
        return $this;
    }

    /**
     * Gets as datiFatturaRettificata
     *
     * @return \MLocati\EFattura\AgenziaEntrate\DatiFatturaRettificataType
     */
    public function getDatiFatturaRettificata()
    {
        return $this->datiFatturaRettificata;
    }

    /**
     * Sets a new datiFatturaRettificata
     *
     * @param \MLocati\EFattura\AgenziaEntrate\DatiFatturaRettificataType $datiFatturaRettificata
     * @return self
     */
    public function setDatiFatturaRettificata(\MLocati\EFattura\AgenziaEntrate\DatiFatturaRettificataType $datiFatturaRettificata)
    {
        $this->datiFatturaRettificata = $datiFatturaRettificata;
        return $this;
    }


}


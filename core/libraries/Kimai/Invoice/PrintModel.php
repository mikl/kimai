<?php
/**
 * A data model holding everything to render an invoice.
 *
 * @author Kevin Papst
 */
class Kimai_Invoice_PrintModel
{

    /**
     * @var array
     */
    private $entries = array();
    /**
     * @var int
     */
    private $amount = 0;
    /**
     * @var array
     */
    private $customer = array();
    /**
     * @var int
     */
    private $vat = 0;
    /**
     * @var int
     */
    private $vatRate = 0;
    /**
     * @var int
     */
    private $total = 0;
    /**
     * @var array
     */
    private $project = null;
    /**
     * @var string
     */
    private $invoiceId = '';
    /**
     * @var int
     */
    private $beginDate = 0;
    /**
     * @var int
     */
    private $endDate = 0;
    /**
     * @var int
     */
    private $invoiceDate = 0;
    /**
     * @var string
     */
    private $dateFormat = '%d.%m.%Y';
    /**
     * @var int
     */
    private $dueDate = 0;
    /**
     * @var string
     */
    private $currencySign = '$';

    /**
     * Returns all interval values as array.
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            'entries'       => $this->getEntries(),
            'amount'        => $this->getAmount(),
            'customer'      => $this->getCustomer(),
            'vat'           => $this->getVat(),
            'vatRate'       => $this->getVatRate(),
            'total'         => $this->getTotal(),
            'project'       => $this->getProject(),
            'invoiceId'     => $this->getInvoiceId(),
            'beginDate'     => $this->getBeginDate(),
            'endDate'       => $this->getEndDate(),
            'invoiceDate'   => $this->getInvoiceDate(),
            'dateFormat'    => $this->getDateFormat(),
            'dueDate'       => $this->getDueDate(),
            'currencySign'  => $this->getCurrencySign()
        );
    }

    /**
     * @param string $currencySign
     */
    public function setCurrencySign($currencySign)
    {
        $this->currencySign = $currencySign;
    }

    /**
     * @return string
     */
    public function getCurrencySign()
    {
        return $this->currencySign;
    }

    /**
     * @param int $beginDate
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
    }

    /**
     * @return int
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * @param string $dateFormat
     */
    public function setDateFormat($dateFormat)
    {
        $this->dateFormat = $dateFormat;
    }

    /**
     * @return string
     */
    public function getDateFormat()
    {
        return $this->dateFormat;
    }

    /**
     * @param int $dueDate
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }

    /**
     * @return int
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * @param int $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return int
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param int $invoiceDate
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;
    }

    /**
     * @return int
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * @param string $invoiceId
     */
    public function setInvoiceId($invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }

    /**
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->invoiceId;
    }

    /**
     * @param array $entries
     */
    public function setEntries(array $entries)
    {
        $this->entries = $entries;
    }

    /**
     * @return array
     */
    public function getEntries()
    {
        return $this->entries;
    }

    /**
     * @param int $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param array $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return array
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param int $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param int $vatRate
     */
    public function setVatRate($vatRate)
    {
        $this->vatRate = $vatRate;
    }

    /**
     * @return int
     */
    public function getVatRate()
    {
        return $this->vatRate;
    }

    /**
     * @param int $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param array $project
     */
    public function setProject($project)
    {
        $this->project = $project;
    }

    /**
     * @return array
     */
    public function getProject()
    {
        return $this->project;
    }


}

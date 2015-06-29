<?php
/**
 * File for class ApiStructQuery
 * @package Api
 * @subpackage Structs
 * @release 1.1.0
 */
/**
 * This class stands for ApiStructQuery originally named Query
 * Meta informations extracted from the WSDL
 * - maxOccurs: 1
 * - minOccurs: 0
 * - type: tns:Query
 * @package Api
 * @subpackage Structs
 * @release 1.1.0
 */
class ApiStructQuery extends ApiWsdlClass
{
    /**
     * The SearchTerms
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - type: tns:Query
     * @var string
     */
    public $SearchTerms;
    /**
     * The AlteredQuery
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - type: tns:Query
     * @var string
     */
    public $AlteredQuery;
    /**
     * The AlterationOverrideQuery
     * Meta informations extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - type: tns:Query
     * @var string
     */
    public $AlterationOverrideQuery;
    /**
     * Constructor method for Query
     * @see parent::__construct()
     * @param string $searchTerms
     * @param string $alteredQuery
     * @param string $alterationOverrideQuery
     * @return ApiStructQuery
     */
    public function __construct($searchTerms = null, $alteredQuery = null, $alterationOverrideQuery = null)
    {
        parent::__construct(array('SearchTerms'=>$searchTerms, 'AlteredQuery'=>$alteredQuery, 'AlterationOverrideQuery'=>$alterationOverrideQuery), false);
    }
    /**
     * Get SearchTerms value
     * @return string|null
     */
    public function getSearchTerms()
    {
        return $this->SearchTerms;
    }
    /**
     * Set SearchTerms value
     * @param string $searchTerms
     * @return ApiStructQuery
     */
    public function setSearchTerms($searchTerms)
    {
        $this->SearchTerms = $searchTerms;
        return $this;
    }
    /**
     * Get AlteredQuery value
     * @return string|null
     */
    public function getAlteredQuery()
    {
        return $this->AlteredQuery;
    }
    /**
     * Set AlteredQuery value
     * @param string $alteredQuery
     * @return ApiStructQuery
     */
    public function setAlteredQuery($alteredQuery)
    {
        $this->AlteredQuery = $alteredQuery;
        return $this;
    }
    /**
     * Get AlterationOverrideQuery value
     * @return string|null
     */
    public function getAlterationOverrideQuery()
    {
        return $this->AlterationOverrideQuery;
    }
    /**
     * Set AlterationOverrideQuery value
     * @param string $alterationOverrideQuery
     * @return ApiStructQuery
     */
    public function setAlterationOverrideQuery($alterationOverrideQuery)
    {
        $this->AlterationOverrideQuery = $alterationOverrideQuery;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ApiWsdlClass::__set_state()
     * @uses ApiWsdlClass::__set_state()
     * @param array $array the exported values
     * @return ApiStructQuery
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
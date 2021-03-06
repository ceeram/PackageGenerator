<?php

namespace WsdlToPhp\PackageGenerator\Container\Model;

use WsdlToPhp\PackageGenerator\Model\Wsdl as Model;

class Wsdl extends AbstractModel
{
    /**
     * @see \WsdlToPhp\PackageGenerator\Container\ModelContainer\Model::objectClass()
     * @return string
     */
    protected function objectClass()
    {
        return 'WsdlToPhp\\PackageGenerator\\Model\\Wsdl';
    }
    /**
     * @param string $name
     * @return Model|null
     */
    public function getWsdlByName($name)
    {
        return $this->get($name);
    }
    /**
     * @see \WsdlToPhp\PackageGenerator\Model\AbstractModel::get()
     * @return Model|null
     */
    public function get($value)
    {
        return parent::get($value);
    }
}

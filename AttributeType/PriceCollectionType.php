<?php
namespace Pim\Bundle\ProductBundle\AttributeType;

use Oro\Bundle\FlexibleEntityBundle\Entity\Price;

use Oro\Bundle\FlexibleEntityBundle\AttributeType\PriceType;

use Doctrine\ORM\EntityRepository;
use Oro\Bundle\FlexibleEntityBundle\AttributeType\AbstractAttributeType;
use Oro\Bundle\FlexibleEntityBundle\Model\FlexibleValueInterface;
use Pim\Bundle\ConfigBundle\Manager\CurrencyManager;

/**
 * Price attribute type
 *
 * @author    Nicolas Dupont <nicolas@akeneo.com>
 * @copyright 2013 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/MIT MIT
 */
class PriceCollectionType extends AbstractAttributeType
{
    /**
     * @var CurrencyManager
     */
    protected $currencyManager;

    /**
     * Constructor
     *
     * @param string          $backendType the backend type
     * @param string          $formType    the form type
     * @param CurrencyManager $manager     the currency manager
     */
    public function __construct($backendType, $formType, CurrencyManager $manager)
    {
        parent::__construct($backendType, $formType);

        $this->currencyManager = $manager;
    }

    /**
     * {@inheritdoc}
     */
    protected function prepareValueFormOptions(FlexibleValueInterface $value)
    {
        $options = parent::prepareValueFormOptions($value);
        $options['type']         = 'pim_product_price';
        $options['allow_add']    = false;
        $options['allow_delete'] = false;
        $options['by_reference'] = false;

        return $options;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'pim_product_price_collection';
    }
}

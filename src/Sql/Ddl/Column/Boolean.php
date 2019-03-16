<?php

declare(strict_types=1);

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Zend\Db\Sql\Ddl\Column;

class Boolean extends Column
{
    /** @var string */
    protected $type = 'BOOLEAN';

    /**
     * {@inheritDoc}
     */
    public function setNullable($nullable) : self
    {
        return parent::setNullable(false);
    }
}

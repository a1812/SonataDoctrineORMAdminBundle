<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\DoctrineORMAdminBundle\Filter;

use Sonata\Form\Type\DateTimeRangeType;

/**
 * @final since sonata-project/doctrine-orm-admin-bundle 3.24
 */
class DateTimeRangeFilter extends AbstractDateFilter
{
    /**
     * This Filter allows filtering by time.
     *
     * @var bool
     */
    protected $time = true;

    /**
     * This is a range filter.
     *
     * @var bool
     */
    protected $range = true;

    public function getFieldType(): string
    {
        return $this->getOption('field_type', DateTimeRangeType::class);
    }
}

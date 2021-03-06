<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sylius\Behat\Page\Admin\Crud;

use Behat\Mink\Exception\ElementNotFoundException;
use Sylius\Behat\Page\SymfonyPageInterface;

/**
 * @author Arkadiusz Krakowiak <arkadiusz.krakowiak@lakion.com>
 */
interface CreatePageInterface extends SymfonyPageInterface
{
    /**
     * @param string $element
     * @param string $message
     *
     * @return bool
     */
    public function checkValidationMessageFor($element, $message);

    /**
     * @throws ElementNotFoundException
     */
    public function create();
}

<?php

/*
 * This file is part of Respect/Validation.
 *
 * (c) Alexandre Gomes Gaigalas <alexandre@gaigalas.net>
 *
 * For the full copyright and license information, please view the "LICENSE.md"
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Respect\Validation\Rules;

/**
 * @author Henrique Moody <henriquemoody@gmail.com>
 * @author Mikhail Vyrtsev <reeywhaar@gmail.com>
 */
class Sorted extends AbstractRule
{
    /**
     * @var callable
     */
    public $fn = null;

    /**
     * @var bool
     */
    public $ascending = true;

    public function __construct(?callable $fn = null, bool $ascending = true)
    {
        $this->fn = $fn ?? static function ($x) {
            return $x;
        };
        $this->ascending = $ascending;
    }

    /**
     * {@inheritdoc}
     */
    public function validate($input): bool
    {
        $count = count($input);
        if ($count < 2) {
            return true;
        }
        for ($i = 1; $i < $count; ++$i) {
            if (($this->ascending && ($this->fn)($input[$i]) < ($this->fn)($input[$i - 1]))
                || (!$this->ascending && ($this->fn)($input[$i]) > ($this->fn)($input[$i - 1]))
            ) {
                return false;
            }
        }

        return true;
    }
}

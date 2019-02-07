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

namespace Respect\Validation\Rules\Locale;

use Respect\Validation\Rules\AbstractSearcher;

/**
 * Validates whether an input is subdivision code of Ivory Coast or not.
 *
 * ISO 3166-1 alpha-2: CI
 *
 * @see http://www.geonames.org/CI/administrative-division-ivory-coast.html
 *
 * @author Henrique Moody <henriquemoody@gmail.com>
 */
final class CiSubdivisionCode extends AbstractSearcher
{
    /**
     * {@inheritdoc}
     */
    protected function getDataSource(): array
    {
        return [
            'AB', // Abidjan
            'BS', // Bas-Sassandra
            'CM', // Comoé
            'DN', // Denguélé
            'GD', // Gôh-Djiboua
            'LC', // Lacs
            'LG', // Lagunes
            'MG', // Montagnes
            'SM', // Sassandra-Marahoué
            'SV', // Savanes
            'VB', // Vallée du Bandama
            'WR', // Woroba
            'YM', // Yamoussoukro Autonomous District
            'ZZ', // Zanzan
        ];
    }
}

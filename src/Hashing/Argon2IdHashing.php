<?php

/**
 * This file is part of the Zest Framework.
 *
 * @author   Muhammad Umer Farooq <lablnet01@gmail.com>
 * @author-profile https://www.facebook.com/Muhammadumerfarooq01/
 *
 * For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 *
 * @since 3.0.0
 *
 * @license MIT
 */

namespace Zest\Hashing;

class Argon2IdHashing extends ArgonHashing
{
    /**
     * Get the algroithm.
     *
     * @since 3.0.0
     *
     * @return \Constant
     */
    protected function algorithm()
    {
        return \PASSWORD_ARGON2ID;
    }

    /**
     * Get the algroithm keys.
     *
     * @since 3.0.0
     *
     * @return string
     */
    protected function algorithmKeys()
    {
        return 'argon2id';
    }
}

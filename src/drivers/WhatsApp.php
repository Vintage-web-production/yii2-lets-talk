<?php
/**
 * @link https://github.com/Vintage-web-production/yii2-lets-talk
 * @copyright Copyright (c) 2017 Vintage Web Production
 * @license BSD 3-Clause License
 */

namespace vintage\lets\talk\drivers;

use vintage\lets\talk\base\MessengerDriver;

/**
 * Driver for WhatsApp.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 * @since 1.0
 */
class WhatsApp extends MessengerDriver
{
    /**
     * Returns pattern.
     *
     * @return string
     */
    protected function getPattern()
    {
        return 'whatsapp://send?phone={contact-data}';
    }
}

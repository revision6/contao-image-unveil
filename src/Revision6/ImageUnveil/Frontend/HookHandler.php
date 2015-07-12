<?php

/**
 * The Contao Image Unveil extension allows you to use unveil.js easyli.
 * element.
 *
 * PHP version 5
 *
 * @package    ContaoImageUnveil
 * @author     Christopher Boelter <c.boelter@revision6.de>
 * @copyright  Revision6 GmbH
 * @license    LGPL.
 * @filesource
 */
class HookHandler
{

    public function outputFrontendTemplate($content, $template)
    {

        $content = 'TEST';

        return $content;
    }
}
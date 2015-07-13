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

namespace Revision6\ImageUnveil\Frontend;

class HookHandler
{

    public function outputFrontendTemplate($content, $template)
    {
        if (!strpos($content, 'img')) {
            return $content;
        }

        $content = preg_replace(
            '#<img([^>]+?)src=[\'"]?([^\'"\s>]+)[\'"]?([^>]*)>#',
            '<img${1}src="${2}" data-src="${2}"${3}><noscript><img${1}src="${2}"${3}></noscript>',
            $content
        );

        return $content;
    }
}
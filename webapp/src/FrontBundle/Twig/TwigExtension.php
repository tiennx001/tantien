<?php

namespace FrontBundle\Twig;

use HTMLPurifier_Config;
use HTMLPurifier;


class TwigExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('getImage', array($this, 'getImageFilter')),
            new \Twig_SimpleFilter('jsonDecode', array($this, 'jsonDecodeFilter')),
            new \Twig_SimpleFilter('truncate', array($this, 'truncateFilter')),
            new \Twig_SimpleFilter('purifier', array($this, 'purifierFilter'))
        );
    }

    public function getImageFilter($img, $path)
    {
        if ($img && is_file($path . '/' . $img)) {
            return $img;
        }

        return '/bundles/front/images/no-image.jpg';
    }

    public function jsonDecodeFilter($value)
    {
        return json_decode($value, true);
    }

    public function truncateFilter($value, $len = 50, $chars = '...')
    {
        $text = mb_substr($value, $len);
        $text = preg_replace('/\s+?(\S+)?$/', '', $text);
        $text = $text . $chars;
        return $text;
    }

    public function purifierFilter($value) {
        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);
        return $purifier->purify($value);
    }
}
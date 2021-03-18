<?php

namespace App\Http\Controllers\Image;

use SVG\SVG;

class Image
{
    private const WHITE = '#FFFFFF';
    private const OFFWHITE = '#FFFDFD';
    private const TAG_FILTERS = [
        'path',
        'polygon',
        'shape'
    ];

    private array $config;
    private SVG $image;

    public function __construct(string $path)
    {
        $this->image = SVG::fromFile($path);
        $this->config = config('image');
    }

    public function get(): SVG
    {
        return $this->image;
    }

    public function getFiltered(?string $colour, array $tags = self::TAG_FILTERS): SVG
    {
        if ($colour === null) {
            return $this->image;
        }

        return $this->filter(
            $this->image,
            $colour,
            $tags
        );
    }

    private function filter(SVG $image, string $colour, array $tags): SVG
    {
        if ($colour !== null) {
            $doc = $image->getDocument();

            foreach ($tags as $tag) {
                $elements = $doc->getElementsByTagName($tag);
                foreach ($elements as $element) {
                    $style = $element->getStyle('fill');

                    if ($style === self::WHITE || $style === self::OFFWHITE) {
                        $element->setStyle('fill', $colour);
                    }
                }
            }
        }

        return $image;
    }
}

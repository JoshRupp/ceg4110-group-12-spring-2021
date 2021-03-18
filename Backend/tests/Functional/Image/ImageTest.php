<?php

namespace Tests\Functional\Image;

use App\Http\Controllers\Image\Image;
use Tests\TestCase;

class ImageTest extends TestCase
{

    /**
     * @param string $imagePath
     * @param string $expectedPath
     * @param string $colour
     *
     * @dataProvider colourDataProvider
     */
    public function testColourIsAppliedCorrectly(string $imagePath, string $expectedPath, string $colour): void
    {
        $path = public_path() . $imagePath;
        $image = new Image($path);

        $actual = $image->getFiltered($colour);
        $expected = file_get_contents(base_path() . $expectedPath);

        $this->assertEquals($expected, $actual);
    }

    public function colourDataProvider(): array
    {
        return [
            'Test great sword with colour #6B9CFF' => [
                'imagePath' => '/images/equipment/ic_equipment_great_sword_base.svg',
                'expectedPath' => '/tests/Functional/Image/Images/great_sword_6B9CFF.svg',
                'colour' => '#6B9CFF'
            ],
            'Test hunting horn with colour #3BB273' => [
                'imagePath' => '/images/equipment/ic_equipment_hunting_horn_base.svg',
                'expectedPath' => '/tests/Functional/Image/Images/hunting_horn_3BB273.svg',
                'colour' => '#3BB273'
            ],
            'Test long sword with colour #DC7F9B' => [
                'imagePath' => '/images/equipment/ic_equipment_long_sword_base.svg',
                'expectedPath' => '/tests/Functional/Image/Images/long_sword_DC7F9B.svg',
                'colour' => '#DC7F9B'
            ],
            'Test sword and shield with colour #56CBF9' => [
                'imagePath' => '/images/equipment/ic_equipment_sword_and_shield_base.svg',
                'expectedPath' => '/tests/Functional/Image/Images/sword_and_shield_56CBF9.svg',
                'colour' => '#56CBF9'
            ]
        ];
    }
}

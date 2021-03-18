<?php

namespace Tests\Acceptance\Image;

use Illuminate\Http\Response;
use SVG\SVG;
use Tests\TestCase;

class ImageControllerTest extends TestCase
{

    /**
     * @param string $url
     * @param string $expectedPath
     * @param bool $svg
     *
     * @dataProvider showDataProvider
     */
    public function testShow(string $url, string $expectedPath, bool $svg): void
    {
        $response = $this->getJson($url);

        $path = public_path() . $expectedPath;
        $expected = file_get_contents($path);

        if ($svg) {
            $expected = SVG::fromFile($path);
        }

        $this->assertEquals($response->getOriginalContent(), $expected);
    }

    /**
     * @param string $url
     * @param int $expectedStatus
     * @param $expectedContent
     *
     * @dataProvider showValidationDataProvider
     */
    public function testShowValidation(string $url, int $expectedStatus, $expectedContent): void
    {
        $response = $this->getJson($url);

        $response->assertStatus($expectedStatus);
        $this->assertEquals($expectedContent, $response->getOriginalContent());
    }

    public function showDataProvider(): array
    {
        return [
            'Test equipment type' => [
                'url' => '/image/equipment/great_sword',
                'expectedPath' => '/images/equipment/ic_equipment_great_sword_base.svg',
                'svg' => true
            ],
            'Test item type' => [
                'url' => '/image/item/liquid',
                'expectedPath' => '/images/items/ic_items_liquid_base.svg',
                'svg' => true
            ],
            'Test monster type' => [
                'url' => '/image/monster/1',
                'expectedPath' => '/images/monster/1.png',
                'svg' => false
            ],
            'Test location type' => [
                'url' => '/image/location/ancient_forest',
                'expectedPath' => '/images/locations/ic_locations_ancient_forest.svg',
                'svg' => true
            ]
        ];
    }

    public function showValidationDataProvider(): array
    {
        return [
            'Test equipment with incorrect colour set' => [
                'url' => '/image/equipment/great_sword?colour=efokefe',
                'expectedStatus' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'expectedContent' => [
                    'message' => 'The given data was invalid.',
                    'errors' => [
                        'colour' => [
                            'Hex code is invalid.'
                        ]
                    ]
                ]
            ],
            'Test with incorrect type' => [
                'url' => '/image/incorrect_type/great_sword',
                'expectedStatus' => Response::HTTP_UNPROCESSABLE_ENTITY,
                'expectedContent' => [
                    'message' => 'The given data was invalid.',
                    'errors' => [
                        'type' => [
                            'Type must be one of the following: equipment, general, item, location, monster'
                        ]
                    ]
                ]
            ]
        ];
    }
}

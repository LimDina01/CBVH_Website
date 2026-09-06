<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JewelryController extends Controller
{
    /**
     * Display the hero showcase and featured dossier.
     */
    public function showcase()
    {
        return view('showcase');
    }

    /**
     * Display a specific piece's dossier.
     */
    public function piece($slug)
    {
        // Define mock data for the specific piece
        $pieces = [
            'crimson-sovereign' => [
                'name' => 'Crimson Sovereign',
                'collection' => 'High Jewelry',
                'description' => 'A dramatic display of deep, unheated rubies encased in exquisite diamond flora, echoing royal bloodlines.',
                'image' => '/images/jewelry/ruby_necklace.jpg',
                'gemstone' => 'Unheated Burmese Ruby',
                'carat' => '18.40 ct',
                'material' => 'Platinum & 18K White Gold',
                'accent' => 'D Flawless Diamonds (14.20 ct)',
                'price' => 'Price upon request'
            ],
            'lumiere-eternelle' => [
                'name' => 'Lumière Éternelle',
                'collection' => 'Bridal',
                'description' => 'Flawless South Sea pearls cradled in platinum, symbolizing purity, wisdom, and an eternal vow.',
                'image' => '/images/jewelry/pearl_bridal_ring.jpg',
                'gemstone' => 'South Sea Pearl',
                'carat' => '14mm',
                'material' => 'Platinum',
                'accent' => 'VVS1 Diamonds (2.15 ct)',
                'price' => 'Price upon request'
            ],
            'aurora-radiance' => [
                'name' => 'Aurora Radiance',
                'collection' => 'Avant-Garde',
                'description' => 'A cascade of light frozen in time. The Aurora Radiance collection utilizes innovative setting techniques to create a continuous curtain of D-Flawless diamonds that move with the wearer.',
                'image' => '/images/jewelry/hero_diamond_earrings_1786938763271.jpg',
                'gemstone' => 'D-Flawless Diamonds',
                'carat' => '32.10 ct (total)',
                'material' => '18K White Gold',
                'accent' => 'Micro-pavé diamonds',
                'price' => 'Price upon request'
            ],
            'verdant-legacy' => [
                'name' => 'Verdant Legacy',
                'collection' => 'Heritage Pieces',
                'description' => 'Colombian emeralds of unparalleled clarity, celebrating nature\'s most vivid hues encased in timeless platinum.',
                'image' => '/images/jewelry/hero_emerald_ring_1786938499216.jpg',
                'gemstone' => 'Colombian Emerald',
                'carat' => '12.50 ct',
                'material' => 'Platinum',
                'accent' => 'Tapered Baguette Diamonds (1.80 ct)',
                'price' => 'Price upon request'
            ],
            'empress-enchanted' => [
                'name' => 'Empress\' Enchanted',
                'collection' => 'Royal Pearls',
                'description' => 'Rare fancy vivid yellow diamonds capturing the warmth of the sovereign sun, an emblem of enduring majesty.',
                'image' => '/images/jewelry/hero_yellow_diamond_ring_1786938510809.jpg',
                'gemstone' => 'Fancy Vivid Yellow Diamond',
                'carat' => '8.90 ct',
                'material' => '18K Yellow Gold & Platinum',
                'accent' => 'Pear-shaped Diamonds (2.40 ct)',
                'price' => 'Price upon request'
            ]
        ];

        // If the piece doesn't exist, fallback to showcase or a 404. We'll pass a default if needed, or 404.
        if (!array_key_exists($slug, $pieces)) {
            abort(404);
        }

        $piece = $pieces[$slug];

        return view('piece', compact('piece'));
    }

    /**
     * Display high jewelry archive.
     */
    public function collections()
    {
        return view('collections');
    }

    /**
     * Display gemological matrix & standards guide.
     */
    public function gemology()
    {
        return view('gemology');
    }

    /**
     * Display Maison heritage & craftsmanship story.
     */
    public function atelier()
    {
        return view('atelier');
    }

    /**
     * Display About Us page.
     */
    public function about()
    {
        return view('about');
    }
}

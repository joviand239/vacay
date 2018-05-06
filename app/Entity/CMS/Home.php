<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Home extends Page {
    const TITLE = 'Home';

    const CMS_NAME = 'Home';
    const CMS_INFO = 'Halaman utama';
    const CMS_SITEMAP = 'Home';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',
        'bannerImage' => 'Image_1',
        'bannerTitle' => 'Text',
        'bannerSubtitle' => 'Text',

        'searchText' => 'Text',

        'serviceSectionTitle' => 'Text',
        'serviceSectionSubtitle' => 'Text',
        'serviceSectionDescription' => 'TextArea',

        'differentSectionTitle' => 'Text',
        'differentSectionSubtitle' => 'Text',
        'differentSectionDescription' => 'TextArea',
        'differentSectionVideoLink' => 'Text',

        'destinationSectionTitle' => 'Text',
        'destinationSectionDescription' => 'TextArea',

        'howSectionTitle' => 'Text',
        'howSectionDescription' => 'TextArea',

        'vacayPalsSectionTitle' => 'Text',

        'stepHowItWorks' => 'ListSortable',
    ];

    const FORM_LABEL = [
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
        'bannerImage' => 'Recommended size : 1366 x 600 px',
        'picture' => 'Recommended size : 500 x 500 px',
    ];

    const FORM_LIST = [
        'stepHowItWorks' => [
            'picture' => 'Image_1',
            'title' => 'Text',
            'detail' => 'TextArea',
        ],
    ];

    const FORM_SELECT_LIST = [

    ];


}

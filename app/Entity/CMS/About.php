<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class About extends Page {
    const TITLE = 'About';

    const CMS_NAME = 'About Us';
    const CMS_INFO = 'Tentang Vacay Pals';
    const CMS_SITEMAP = 'Home -> About Us';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',

        'bannerTitle' => 'Text',
        'bannerImage' => 'Image_1',


        'email' => 'Text',
        'phoneNumber' => 'Text',
        'address' => 'TextArea',
        'facebookLink' => 'Text',
        'instagramLink' => 'Text',
        'googlePlusLink' => 'Text',
        'youtubeLink' => 'Text',

        'messageSectionImage' => 'Image_1',
        'messageSectionTitle' => 'Text',
        'messageSectionSubtitle' => 'Text',
        'messageSectionDescription' => 'Wysiwyg',

        'visionAndMissionSectionImage' => 'Image_1',
        'visionAndMissionSectionTitle' => 'Text',
        'visionAndMissionSectionSubtitle' => 'Text',
        'visionAndMissionSectionDescription' => 'Wysiwyg',

        'valueSectionImage' => 'Image_1',
        'valueSectionTitle' => 'Text',
        'valueSectionSubtitle' => 'Text',
        'valueSectionDescription' => 'Wysiwyg',

        'palsSectionImage' => 'Image_1',
        'palsSectionTitle' => 'Text',
        'palsSectionSubtitle' => 'Text',
        'palsSectionDescription' => 'Wysiwyg',


        'valueList' => 'ListSortable',

        'palsList' => 'ListSortable',
    ];

    const FORM_LABEL = [
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
        'messageSectionImage' => 'Recommended size : 680 x 500 px',
        'visionAndMissionSectionImage' => 'Recommended size : 680 x 500 px',
        'valueSectionImage' => 'Recommended size : 680 x 500 px',
        'palsSectionImage' => 'Recommended size : 680 x 500 px',
    ];

    const FORM_LIST = [
        'valueList' => [
            'value' => 'Text',
            'description' => 'TextArea',
        ],
        'palsList' => [
            'title' => 'Text',
            'detail' => 'TextArea',
        ],
    ];

    const FORM_SELECT_LIST = [

    ];


}

<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class How extends Page {
    const TITLE = 'How It Works';

    const CMS_NAME = 'How It Works';
    const CMS_INFO = 'Cara kerja Vacay';
    const CMS_SITEMAP = 'Home -> How It Works';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',

        'stepList' => 'ListSortable',
    ];

    const FORM_LABEL = [
        'metaTitle' => 'Judul halaman',
        'metaDescription' => 'Deskripsi halaman',
    ];

    const FORM_LABEL_HELP = [
        'metaTitle' => 'Untuk keperluan SEO',
        'metaDescription' => 'Untuk keperluan SEO',
    ];

    const FORM_LIST = [
        'stepList' => [
            'image' => 'Image_1',
            'title' => 'Text',
            'description' => 'TextArea',
        ],
    ];

    const FORM_SELECT_LIST = [

    ];


}

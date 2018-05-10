<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Essentials extends Page {
    const TITLE = 'Vacay Essentials';

    const CMS_NAME = 'Vacay Essentials';
    const CMS_INFO = 'Konten vacay essentials';
    const CMS_SITEMAP = 'Home -> Our Services -> Vacay Essentials';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',

        'tabTitle' => 'Text',
        'logo' => 'Image_1',
        'logoHover' => 'Image_1',
        'title' => 'Text',
        'description' => 'TextArea',

        'serviceList' => 'ListSortable'
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
        'serviceList' => [
            'icon' => 'Image_1',
            'title' => 'Text',
            'description' => 'TextArea'
        ],
    ];

    const FORM_SELECT_LIST = [

    ];


}

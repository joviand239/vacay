<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Pals extends Page {
    const TITLE = 'Vacay Pals';

    const CMS_NAME = 'Vacay Pals';
    const CMS_INFO = 'Konten halaman vacay pals';
    const CMS_SITEMAP = 'Home -> Vacay Pals';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',

        'bannerTitle' => 'Text',
        'bannerImage' => 'Image_1',
        'title' => 'Text',
        'description' => 'TextArea',
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

    ];

    const FORM_SELECT_LIST = [

    ];


}

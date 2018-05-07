<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Service extends Page {
    const TITLE = 'Our Services';

    const CMS_NAME = 'Our Services';
    const CMS_INFO = 'Konten halaman our services';
    const CMS_SITEMAP = 'Home -> Our Services';

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

<?php

namespace App\Entity\CMS;

use App\Entity\Base\Page;

class Contact extends Page {
    const TITLE = 'Contact Us';

    const CMS_NAME = 'Contact Us';
    const CMS_INFO = 'Konten halaman contact us';
    const CMS_SITEMAP = 'Home -> Contact Us';

    const FORM_TYPE = [
        'metaTitle' => 'Text',
        'metaDescription' => 'TextArea',

        'bannerTitle' => 'Text',
        'bannerImage' => 'Image_1',
        'title' => 'Text',
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

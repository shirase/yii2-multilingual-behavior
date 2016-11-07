<?php

namespace tests\models;

use \shirase\multilingual\MultilingualBehavior;
use \shirase\multilingual\MultilingualQuery;

class PostRequired extends PostAbridge
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['ml']['requireTranslations'] = true;
        return $behaviors;
    }
}
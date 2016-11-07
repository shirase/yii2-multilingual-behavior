<?php

namespace tests\models;

use \shirase\multilingual\MultilingualBehavior;
use \shirase\multilingual\MultilingualQuery;

class Post extends PostAbridge
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['ml']['abridge'] = false;
        return $behaviors;
    }
}
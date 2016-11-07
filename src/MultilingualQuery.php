<?php
namespace shirase\multilingual;

use yii\db\ActiveQuery;

class MultilingualQuery extends ActiveQuery
{
    use MultilingualTrait;
}
<?php

namespace app\models\Queries;

/**
 * This is the ActiveQuery class for [[\app\models\Orders]].
 *
 * @see \app\models\Orders
 */
class Orders extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return \app\models\Orders[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return \app\models\Orders|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}

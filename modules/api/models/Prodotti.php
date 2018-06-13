<?php

namespace app\modules\api\models;

use Yii;

/**
 * This is the model class for table "prodotti".
 *
 * @property int $id
 * @property string $nome
 * @property string $descrizione
 */
class Prodotti extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prodotti';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'descrizione'], 'required'],
            [['nome', 'descrizione'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'descrizione' => 'Descrizione',
        ];
    }
}

<?php

namespace app\models;

use Yii;
use yii\helpers\Html;
use yii\Helpers\ArrayHelper;

/**
 * This is the model class for table "tentang".
 *
 * @property integer $id
 * @property string $nama
 * @property string $isi
 * @property string $gambar
 */
class Tentang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tentang';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'isi', 'gambar'], 'required'],
            [['isi'], 'string'],
            [['nama', 'gambar'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'isi' => 'Isi',
            'gambar' => 'Gambar',
        ];
    }
     public function getGambar($htmlOptions=[])
    {
        //jika file ada dalam direktori
        if($this->gambar == null && !file_exists('@web/uploads/'.$this->gambar)){
            return Html::img('@web/images/pakar.jpg', $htmlOptions);
        } else {
            return Html::img('@web/uploads/'.$this->gambar, $htmlOptions);
        }
    }
}


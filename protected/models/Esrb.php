<?php

/**
 * This is the model class for table "esrb".
 *
 * The followings are the available columns in table 'esrb':
 * @property integer $Cod_ESRB
 * @property string $Abreviacion
 * @property string $Clasificacion
 *
 * The followings are the available model relations:
 * @property Videojuego[] $videojuegos
 */
class Esrb extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'esrb';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cod_ESRB', 'required'),
			array('Cod_ESRB', 'numerical', 'integerOnly'=>true),
			array('Abreviacion', 'length', 'max'=>5),
			array('Clasificacion', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cod_ESRB, Abreviacion, Clasificacion', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'videojuegos' => array(self::HAS_MANY, 'Videojuego', 'Cod_ESRB'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cod_ESRB' => 'ESRB',
			'Abreviacion' => 'Abreviacion',
			'Clasificacion' => 'Clasificacion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Cod_ESRB',$this->Cod_ESRB);
		$criteria->compare('Abreviacion',$this->Abreviacion,true);
		$criteria->compare('Clasificacion',$this->Clasificacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function dropdown()
	{
		$model = Esrb::model()->findAll();
		return CHtml::listData($model, 'Cod_ESRB', 'Clasificacion');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Esrb the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

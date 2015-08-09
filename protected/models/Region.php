<?php

/**
 * This is the model class for table "region".
 *
 * The followings are the available columns in table 'region':
 * @property integer $Cod_Reg
 * @property string $Nombre_Reg
 *
 * The followings are the available model relations:
 * @property Compania[] $companias
 * @property Plataforma[] $plataformas
 * @property Videojuego[] $videojuegos
 */
class Region extends CActiveRecord
{
    
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'region';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cod_Reg', 'required'),
			array('Cod_Reg', 'numerical', 'integerOnly'=>true),
			array('Nombre_Reg', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cod_Reg, Nombre_Reg', 'safe', 'on'=>'search'),
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
			'companias' => array(self::HAS_MANY, 'Compania', 'Cod_Reg'),
			'plataformas' => array(self::HAS_MANY, 'Plataforma', 'Cod_Reg'),
			'videojuegos' => array(self::HAS_MANY, 'Videojuego', 'Cod_Reg'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cod_Reg' => 'Region',
			'Nombre_Reg' => 'Region',
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


		$criteria->compare('Cod_Reg',$this->Cod_Reg,true);
		$criteria->compare('Nombre_Reg',$this->Nombre_Reg,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function dropdown()
	{
		$model = Region::model()->findAll();
		return CHtml::listData($model, 'Cod_Reg', 'Nombre_Reg');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Region the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

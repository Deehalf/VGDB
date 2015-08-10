<?php

/**
 * This is the model class for table "compania".
 *
 * The followings are the available columns in table 'compania':
 * @property integer $Cod_Comp
 * @property string $Nombre_Comp
 * @property integer $Cod_Reg
 * @property string $Pais
 * @property string $Fundacion
 *
 * The followings are the available model relations:
 * @property Region $codReg
 * @property Plataforma[] $plataformas
 * @property Videojuego[] $videojuegos
 */
class Compania extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'compania';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cod_Comp', 'required'),
			array('Cod_Comp, Cod_Reg', 'numerical', 'integerOnly'=>true),
			array('Nombre_Comp', 'length', 'max'=>30),
			array('Pais', 'length', 'max'=>20),
			array('Fundacion', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cod_Comp, Nombre_Comp, Cod_Reg, Pais, Fundacion', 'safe', 'on'=>'search'),
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
			'codReg' => array(self::BELONGS_TO, 'Region', 'Cod_Reg'),
			'plataformas' => array(self::HAS_MANY, 'Plataforma', 'Cod_Comp'),
			'videojuegos' => array(self::HAS_MANY, 'Videojuego', 'Cod_Comp'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cod_Comp' => 'Compania',
			'Nombre_Comp' => 'Compania',
			'Cod_Reg' => 'Region',
			'Pais' => 'Pais',
			'Fundacion' => 'Fundacion',
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

		$criteria->compare('Cod_Comp',$this->Cod_Comp);
		$criteria->compare('Nombre_Comp',$this->Nombre_Comp,true);
		$criteria->compare('Cod_Reg',$this->Cod_Reg);
		$criteria->compare('Pais',$this->Pais,true);
		$criteria->compare('Fundacion',$this->Fundacion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
         public function dropdown()
	{
		$model = Compania::model()->findAll();
		return CHtml::listData($model, 'Cod_Comp', 'Nombre_Comp');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Compania the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

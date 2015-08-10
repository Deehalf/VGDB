<?php

/**
 * This is the model class for table "plataforma".
 *
 * The followings are the available columns in table 'plataforma':
 * @property integer $Cod_Plat
 * @property string $Nombre_Plat
 * @property integer $Cod_Comp
 * @property integer $Cod_Reg
 * @property string $Internet
 * @property integer $Generacion
 * @property string $Lanzamiento
 *
 * The followings are the available model relations:
 * @property Compania $codComp
 * @property Region $codReg
 * @property Videojuego[] $videojuegos
 */
class Plataforma extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'plataforma';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Cod_Plat', 'required'),
			array('Cod_Plat, Cod_Comp, Cod_Reg, Generacion', 'numerical', 'integerOnly'=>true),
			array('Nombre_Plat', 'length', 'max'=>20),
			array('Internet', 'length', 'max'=>2),
			array('Lanzamiento', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cod_Plat, Nombre_Plat, Cod_Comp, Cod_Reg, Internet, Generacion, Lanzamiento', 'safe', 'on'=>'search'),
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
			'codComp' => array(self::BELONGS_TO, 'Compania', 'Cod_Comp'),
			'codReg' => array(self::BELONGS_TO, 'Region', 'Cod_Reg'),
			'videojuegos' => array(self::HAS_MANY, 'Videojuego', 'Cod_Plat'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cod_Plat' => 'Plataforma',
			'Nombre_Plat' => 'Plataforma',
			'Cod_Comp' => 'Cod Comp',
			'Cod_Reg' => 'Cod Reg',
			'Internet' => 'Internet',
			'Generacion' => 'Generacion',
			'Lanzamiento' => 'Lanzamiento',
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

		$criteria->compare('Cod_Plat',$this->Cod_Plat);
		$criteria->compare('Nombre_Plat',$this->Nombre_Plat,true);
		$criteria->compare('Cod_Comp',$this->Cod_Comp);
		$criteria->compare('Cod_Reg',$this->Cod_Reg);
		$criteria->compare('Internet',$this->Internet,true);
		$criteria->compare('Generacion',$this->Generacion);
		$criteria->compare('Lanzamiento',$this->Lanzamiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public function dropdown()
	{
		$model = Plataforma::model()->findAll();
		return CHtml::listData($model, 'Cod_Plat', 'Nombre_Plat');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Plataforma the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

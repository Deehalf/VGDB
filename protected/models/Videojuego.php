<?php

/**
 * This is the model class for table "videojuego".
 *
 * The followings are the available columns in table 'videojuego':
 * @property integer $Cod_vj
 * @property string $Nombre_vj
 * @property integer $Cod_Plat
 * @property integer $Cod_Comp
 * @property integer $Cod_Reg
 * @property integer $Cod_ESRB
 * @property string $DLC
 * @property integer $Num_Jugadores_Local
 * @property integer $Num_Jugadores_Online
 * @property string $Digital
 * @property string $Lanzamiento
 *
 * The followings are the available model relations:
 * @property Plataforma $codPlat
 * @property Compania $codComp
 * @property Region $codReg
 * @property Esrb $codESRB
 */
class Videojuego extends CActiveRecord
{
	public $Search_Plat;
        public $Search_Reg;
        public $Search_ESRB;
        public $Search_Comp;
    /**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'videojuego';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		        //array('Cod_vj', 'required'),
			array('Cod_vj, Cod_Plat, Cod_Comp, Cod_Reg, Cod_ESRB, Num_Jugadores_Local, Num_Jugadores_Online', 'numerical', 'integerOnly'=>true),
                        array(/*'Cod_vj,*/ 'Cod_Plat, Cod_Comp, Cod_Reg, Cod_ESRB, Num_Jugadores_Local, Num_Jugadores_Online', 'required'),
			array('Num_Jugadores_Local, Num_Jugadores_Online','required'),
                        array('Nombre_vj', 'length', 'max'=>50),
                        array('Nombre_vj', 'required'),
			array('DLC, Digital', 'length', 'max'=>2),
                        array('DLC, Digital', 'required'),
			array('Lanzamiento', 'length', 'max'=>10),
                        array('Lanzamiento', 'required'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Cod_vj, Nombre_vj, Search_Plat, Search_Comp, Search_Reg, Search_ESRB, DLC, Num_Jugadores_Local, Num_Jugadores_Online, Digital, Lanzamiento', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'codPlat' => array(self::BELONGS_TO, 'Plataforma', 'Cod_Plat'),
			'codComp' => array(self::BELONGS_TO, 'Compania', 'Cod_Comp'),
			'codReg' => array(self::BELONGS_TO, 'Region', 'Cod_Reg'),
			'codESRB' => array(self::BELONGS_TO, 'Esrb', 'Cod_ESRB'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Cod_vj' => 'Numero',
			'Nombre_vj' => 'Nombre',
			'Cod_Plat' => 'Plataforma',
                        'Search_Plat' => 'Plataforma',
			'Cod_Comp' => 'Compañia',
                        'Search_Comp' => 'Compañia',
			'Cod_Reg' => 'Región',
                        'Search_Reg' => 'Región',
			'Cod_ESRB' => 'ESRB',
                        'Search_ESRB' => 'ESRB',
			'DLC' => '"DLC"',
			'Num_Jugadores_Local' => 'N° Jug. Localmente',
			'Num_Jugadores_Online' => 'N° Jug. Online',
			'Digital' => 'Versión Digital',
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
		

		$criteria=new CDbCriteria;
                $criteria->with = array('codPlat','codComp','codReg','codESRB');
                
                
		$criteria->compare('Cod_vj',$this->Cod_vj);
		$criteria->compare('Nombre_vj',$this->Nombre_vj,true);
		$criteria->compare('codPlat.Nombre_Plat',$this->Search_Plat,true);
		$criteria->compare('codComp.Nombre_Comp',$this->Search_Comp,true);
		$criteria->compare('codReg.Cod_Reg',$this->Search_Reg);
		$criteria->compare('codESRB.Cod_ESRB',$this->Search_ESRB);
		$criteria->compare('DLC',$this->DLC,true);
		$criteria->compare('Num_Jugadores_Local',$this->Num_Jugadores_Local,true);
		$criteria->compare('Num_Jugadores_Online',$this->Num_Jugadores_Online,true);
		$criteria->compare('Digital',$this->Digital,true);
		$criteria->compare('t.Lanzamiento',$this->Lanzamiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
  
       
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Videojuego the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

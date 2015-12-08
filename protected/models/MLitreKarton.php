<?php

/**
 * This is the model class for table "j_litre_karton".
 *
 * The followings are the available columns in table 'j_litre_karton':
 * @property integer $id
 * @property string $name
 * @property string $litre
 * @property integer $bottle_quantity
 * @property string $product_type
 */
class MLitreKarton extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'j_litre_karton';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, litre, bottle_quantity, product_type', 'required'),
			array('bottle_quantity', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>500),
			array('litre', 'length', 'max'=>19),
			array('product_type', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, litre, bottle_quantity, product_type', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'litre' => 'Litre',
			'bottle_quantity' => 'Bottle Quantity',
			'product_type' => 'Product Type',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('litre',$this->litre,true);
		$criteria->compare('bottle_quantity',$this->bottle_quantity);
		$criteria->compare('product_type',$this->product_type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MLitreKarton the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

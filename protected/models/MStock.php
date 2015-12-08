<?php

/**
 * This is the model class for table "j_stock".
 *
 * The followings are the available columns in table 'j_stock':
 * @property integer $id
 * @property integer $product_id
 * @property integer $quantity_karton
 * @property string $litre_ml
 * @property string $money
 * @property integer $created_by
 * @property string $created_date
 * @property string $purchase_date
 * @property string $bill_id
 */
class MStock extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'j_stock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('product_id, quantity_karton, litre_ml, money, created_by, created_date, purchase_date, bill_id', 'required'),
			array('product_id, quantity_karton', 'numerical', 'integerOnly'=>true),
			array('litre_ml, created_date, purchase_date', 'length', 'max'=>20),
			array('money', 'length', 'max'=>19),
			array('bill_id', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, product_id, quantity_karton, litre_ml, money, created_by, created_date, purchase_date, bill_id', 'safe', 'on'=>'search'),
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
			'product_id' => 'Product',
			'quantity_karton' => 'Quantity Karton',
			'litre_ml' => 'Litre Ml',
			'money' => 'Money',
			'created_by' => 'Created By',
			'created_date' => 'Created Date',
			'purchase_date' => 'Purchase Date',
			'bill_id' => 'Bill',
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
		$criteria->compare('product_id',$this->product_id);
		$criteria->compare('quantity_karton',$this->quantity_karton);
		$criteria->compare('litre_ml',$this->litre_ml,true);
		$criteria->compare('money',$this->money,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('created_date',$this->created_date,true);
		$criteria->compare('purchase_date',$this->purchase_date,true);
		$criteria->compare('bill_id',$this->bill_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MStock the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}

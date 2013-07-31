<?php

/**
 * This is the model class for table "products".
 *
 * The followings are the available columns in table 'products':
 * @property integer $productId
 * @property integer $status
 * @property integer $category
 * @property string $unitPrice
 * @property integer $stockQty
 * @property string $description
 * @property string $createdTime
 * @property string $modifiedTime
 */
class Products extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Products the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'products';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, category, unitPrice, stockQty, createdTime, modifiedTime', 'required'),
			array('status, category, stockQty', 'numerical', 'integerOnly'=>true),
			array('unitPrice', 'length', 'max'=>8),
			array('description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('productId, status, category, unitPrice, stockQty, description, createdTime, modifiedTime', 'safe', 'on'=>'search'),
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
			'productId' => 'Product',
			'status' => 'Status',
			'category' => 'Category',
			'unitPrice' => 'Unit Price',
			'stockQty' => 'Stock Qty',
			'description' => 'Description',
			'createdTime' => 'Created Time',
			'modifiedTime' => 'Modified Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('productId',$this->productId);
		$criteria->compare('status',$this->status);
		$criteria->compare('category',$this->category);
		$criteria->compare('unitPrice',$this->unitPrice,true);
		$criteria->compare('stockQty',$this->stockQty);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('createdTime',$this->createdTime,true);
		$criteria->compare('modifiedTime',$this->modifiedTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
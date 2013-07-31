<?php

/**
 * This is the model class for table "salesInvoiceProduct".
 *
 * The followings are the available columns in table 'salesInvoiceProduct':
 * @property integer $salesInvoiceProductId
 * @property integer $salesInvoiceId
 * @property string $productName
 * @property string $productDescription
 * @property integer $qty
 * @property integer $listPrice
 * @property integer $tax
 */
class SalesInvoiceProduct extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesInvoiceProduct the static model class
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
		return 'salesInvoiceProduct';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('salesInvoiceId, productName, qty, listPrice, tax', 'required'),
			array('salesInvoiceId, qty, listPrice, tax', 'numerical', 'integerOnly'=>true),
			array('productName', 'length', 'max'=>255),
			array('productDescription', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('salesInvoiceProductId, salesInvoiceId, productName, productDescription, qty, listPrice, tax', 'safe', 'on'=>'search'),
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
			'salesInvoiceProductId' => 'Sales Invoice Product',
			'salesInvoiceId' => 'Sales Invoice',
			'productName' => 'Product Name',
			'productDescription' => 'Product Description',
			'qty' => 'Qty',
			'listPrice' => 'List Price',
			'tax' => 'Tax',
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

		$criteria->compare('salesInvoiceProductId',$this->salesInvoiceProductId);
		$criteria->compare('salesInvoiceId',$this->salesInvoiceId);
		$criteria->compare('productName',$this->productName,true);
		$criteria->compare('productDescription',$this->productDescription,true);
		$criteria->compare('qty',$this->qty);
		$criteria->compare('listPrice',$this->listPrice);
		$criteria->compare('tax',$this->tax);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
<?php

/**
 * This is the model class for table "salesOrder".
 *
 * The followings are the available columns in table 'salesOrder':
 * @property integer $salesOrderId
 * @property string $subject
 * @property integer $accountName
 * @property string $contactName
 * @property integer $status
 * @property integer $assignedTo
 * @property string $billingAddress
 * @property string $billingCountry
 * @property string $shippingAddress
 * @property string $shippingCountry
 * @property string $termsConditions
 * @property string $description
 * @property string $createdTime
 * @property string $modifiedTime
 */
class SalesOrder extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SalesOrder the static model class
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
		return 'salesOrder';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subject, accountName, contactName, status, assignedTo, createdTime, modifiedTime', 'required'),
			array('accountName, status, assignedTo', 'numerical', 'integerOnly'=>true),
			array('subject, contactName', 'length', 'max'=>255),
			array('billingCountry, shippingCountry', 'length', 'max'=>80),
			array('billingAddress, shippingAddress, termsConditions, description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('salesOrderId, subject, accountName, contactName, status, assignedTo, billingAddress, billingCountry, shippingAddress, shippingCountry, termsConditions, description, createdTime, modifiedTime', 'safe', 'on'=>'search'),
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
			'salesOrderId' => 'Sales Order',
			'subject' => 'Subject',
			'accountName' => 'Account Name',
			'contactName' => 'Contact Name',
			'status' => 'Status',
			'assignedTo' => 'Assigned To',
			'billingAddress' => 'Billing Address',
			'billingCountry' => 'Billing Country',
			'shippingAddress' => 'Shipping Address',
			'shippingCountry' => 'Shipping Country',
			'termsConditions' => 'Terms Conditions',
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

		$criteria->compare('salesOrderId',$this->salesOrderId);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('accountName',$this->accountName);
		$criteria->compare('contactName',$this->contactName,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('assignedTo',$this->assignedTo);
		$criteria->compare('billingAddress',$this->billingAddress,true);
		$criteria->compare('billingCountry',$this->billingCountry,true);
		$criteria->compare('shippingAddress',$this->shippingAddress,true);
		$criteria->compare('shippingCountry',$this->shippingCountry,true);
		$criteria->compare('termsConditions',$this->termsConditions,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('createdTime',$this->createdTime,true);
		$criteria->compare('modifiedTime',$this->modifiedTime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
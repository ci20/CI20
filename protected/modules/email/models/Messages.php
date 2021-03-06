<?php

/*
 * This is the model class for table "ci_messages".
 *
 * The followings are the available columns in table 'ci_messages':
 * @property integer $messageid
 * @property string $to
 * @property string $from
 * @property string $subject
 * @property string $messagebody
 * @property string $messagetype
 * @property string $datesent
 *
 * The followings are the available model relations:
 * @property Documents[] $ciDocuments
 */
class Messages extends CActiveRecord
{
	const HOST = "10.107.12.72";
	
	public $mail;
	
	/*
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Messages the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function init()
	{
		// Create a mailer object, tell it to use SMTP and set the host.
		$this->mail = new JPhpMailer();
		$this->mail->IsSMTP();
		$this->mail->Host = self::HOST;
	}
	
	/*
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ci_messages';
	}

	/*
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('to, from, subject, messagetype', 'required'),
			array('to, from', 'length', 'max'=>500),
			array('messagebody', 'length', 'max'=>3000),
			array('subject', 'length', 'max'=>125),
			array('messagetype', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('messageid, to, from, subject, messagebody, messagetype, datesent', 'safe', 'on'=>'search'),
		);
	}
	
	/*
	 * Attaches the timestamp behavior to auto set the datesent value
	 * when a new ticket is made.
	 */
	public function behaviors() 
	{
		return array(
			'CTimestampBehavior' => array(
				'class' => 'zii.behaviors.CTimestampBehavior',
				'createAttribute' => 'datesent',
				'updateAttribute' => null,
			),
		);
	}
	/*
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'ciTroubleTickets' => array(self::MANY_MANY, 'TroubleTickets', 'ci_ticket_messages(messageid, ticketid)'),
		);
	}

	/*
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'messageid' => 'Message ID',
			'to' => 'To',
			'from' => 'From',
			'subject' => 'Subject',
			'messagebody' => 'Body',
			'messagetype' => 'Message Type',
			'datesent' => 'Date Sent',
		);
	}

	/*
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('messageid',$this->messageid);
		$criteria->compare('to',$this->to,true);
		$criteria->compare('from',$this->from,true);
		$criteria->compare('subject',$this->subject,true);
		$criteria->compare('messagebody',$this->messagebody,true);
		$criteria->compare('messagetype',$this->messagetype,true);
		$criteria->compare('datesent',$this->datesent,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}

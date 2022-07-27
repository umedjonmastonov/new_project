<?php

namespace backend\models;

class Contact extends \common\models\Contact{
    public function rules()
    {
        return [
            [['status', 'created_at'], 'integer'],
            [['name', 'email'], 'string', 'max' => 55],
            [['phone'], 'string', 'max' => 13],
            [['message'], 'string', 'max' => 255],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'status' => 'Status',
            'message' => 'Message',
            'created_at' => 'Created At',
        ];
    }
};
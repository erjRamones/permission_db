<?php

namespace App\Factories;

use App\Models\Barangay; #Done
use App\Models\Branch; #Done
use App\Models\City; #Done
use App\Models\Civil_Status; #Done
use App\Models\Spouse;  #Done
use App\Models\Gender_Map; #Done
use App\Models\Country; #Done
use App\Models\Province; #Done
use App\Models\Credit_Status; #Done
use App\Models\Personality_Status_Map; #Done
use App\Models\User_Account_Status; #Done
use App\Models\Document_Map; #Done
use App\Models\Document_Permission_Map; #Done
use App\Models\Name_Type; #Done
use App\Models\Customer_Group; #Done

/*
    KINI na section SA APP\\ dinhi pag pili ug unsa na model type ang gamit pang insert, delete, or create
    sa mga data example if gusto nimo mag insert ug description na PHILIPPINES sa country na table
    mag pili si factory na imong gi pasa is either kung country na model type imong gi pasa

    examplpe::
    protected $modelType;

    $modelType::createEntry('barangay', 'agdao');


*/

class DBBaseLibraryFactory
{
    private $modelType;
    private $description;

    public function __construct($modelType, $description)
    {
        $this->modelType = $modelType;
        $this->description = $description;
    }
    public static function createEntry($modelType, $description)
    {
        switch ($modelType) {
            case 'barangay':
                return Barangay::createEntry(['description' => $description]);
            case 'branch':
                return Branch::createEntry(['description' => $description]);
            case 'city':
                return City::createEntry(['description' => $description]);
            case 'civil_status':
                return Civil_Status::createEntry(['description' => $description]);
            case 'spouse':
                return Spouse::createEntry(['description' => $description]);
            case 'gender_map':
                return Gender_Map::createEntry(['description' => $description]);
            case 'country':
                return Country::createEntry(['description' => $description]);
            case 'province':
                return Province::createEntry(['description' => $description]);
            case 'credit_status':
                return Credit_Status::createEntry(['description' => $description]);
            case 'personality_status_map':
                return Personality_Status_Map::createEntry(['description' => $description]);
            case 'user_account_status':
                return User_Account_Status::createEntry(['description' => $description]);
            case 'document_map':
                return Document_Map::createEntry(['description' => $description]);
            case 'document_permission_map':
                return Document_Permission_Map::createEntry(['description' => $description]);
            case 'name_type':
                return Name_Type::createEntry(['description' => $description]);
            case 'customer_group':
                return Customer_Group::createEntry(['description' => $description]);
            default:
                throw new \InvalidArgumentException("Unknown model type: $modelType");
        }
    }

    public static function findOne($modelType, $id)
    {
        switch ($modelType) {
            case 'barangay':
                return Barangay::findOne($id);
            case 'branch':
                return Branch::findOne($id);
            case 'city':
                return City::findOne($id);
            case 'civil_status':
                return Civil_Status::findOne($id);
            case 'spouse':
                return Spouse::findOne($id);
            case 'gender_map':
                return Gender_Map::findOne($id);
            case 'country':
                return Country::findOne($id);
            case 'province':
                return Province::findOne($id);
            case 'credit_status':
                return Credit_Status::findOne($id);
            case 'personality_status_map':
                return Personality_Status_Map::findOne($id);
            case 'user_account_status':
                return User_Account_Status::findOne($id);
            case 'document_map':
                return Document_Map::findOne($id);
            case 'document_permission_map':
                return Document_Permission_Map::findOne($id);
            case 'name_type':
                return Name_Type::findOne($id);
            case 'customer_group':
                return Customer_Group::findOne($id);
            default:
                throw new \InvalidArgumentException("Unknown model type: $modelType");
        }
    }

    public static function findMany($modelType)
    {
        switch ($modelType) {
            case 'barangay':
                return Barangay::findMany();
            case 'branch':
                return Branch::findMany();
            case 'city':
                return City::findMany();
            case 'civil_status':
                return Civil_Status::findMany();
            case 'spouse':
                return Spouse::findMany();
            case 'gender_map':
                return Gender_Map::findMany();
            case 'country':
                return Country::findMany();
            case 'province':
                return Province::findMany();
            case 'credit_status':
                return Credit_Status::findMany();
            case 'personality_status_map':
                return Personality_Status_Map::findMany();
            case 'user_account_status':
                return User_Account_Status::findMany();
            case 'document_map':
                return Document_Map::findMany();
            case 'document_permission_map':
                return Document_Permission_Map::findMany();
            case 'name_type':
                return Name_Type::findMany();
            case 'customer_group':
                return Customer_Group::findMany();
            default:
                throw new \InvalidArgumentException("Unknown model type: $modelType");
        }
    }

    public static function deleteEntry($modelType, $id)
    {
        switch ($modelType) {
            case 'barangay':
                return Barangay::deleteEntry($id);
            case 'branch':
                return Branch::deleteEntry($id);
            case 'city':
                return City::deleteEntry($id);
            case 'civil_status':
                return Civil_Status::deleteEntry($id);
            case 'spouse':
                return Spouse::deleteEntry($id);
            case 'gender_map':
                return Gender_Map::deleteEntry($id);
            case 'country':
                return Country::deleteEntry($id);
            case 'province':
                return Province::deleteEntry($id);
            case 'credit_status':
                return Credit_Status::deleteEntry($id);
            case 'personality_status_map':
                return Personality_Status_Map::deleteEntry($id);
            case 'user_account_status':
                return User_Account_Status::deleteEntry($id);
            case 'document_map':
                return Document_Map::deleteEntry($id);
            case 'document_permission_map':
                return Document_Permission_Map::deleteEntry($id);
            case 'name_type':
                return Name_Type::deleteEntry($id);
            case 'customer_group':
                return Customer_Group::deleteEntry($id);
            default:
                throw new \InvalidArgumentException("Unknown model type: $modelType");
        }
    }

    public static function updateEntry($modelType, $id, $description)
    {
        switch ($modelType) {
            case 'barangay':
                return Barangay::updateEntry($id, $description);
            case 'branch':
                return Branch::updateEntry($id, $description);
            case 'city':
                return City::updateEntry($id, $description);
            case 'civil_status':
                return Civil_Status::updateEntry($id, $description);
            case 'spouse':
                return Spouse::updateEntry($id, $description);
            case 'gender_map':
                return Gender_Map::updateEntry($id, $description);
            case 'country':
                return Country::updateEntry($id, $description);
            case 'province':
                return Province::updateEntry($id, $description);
            case 'credit_status':
                return Credit_Status::updateEntry($id, $description);
            case 'personality_status_map':
                return Personality_Status_Map::updateEntry($id, $description);
            case 'user_account_status':
                return User_Account_Status::updateEntry($id, $description);
            case 'document_map':
                return Document_Map::updateEntry($id, $description);
            case 'document_permission_map':
                return Document_Permission_Map::updateEntry($id, $description);
            case 'name_type':
                return Name_Type::updateEntry($id, $description);
            case 'customer_group':
                return Customer_Group::updateEntry($id, $description);
            default:
                throw new \InvalidArgumentException("Unknown model type: $modelType");
        }
    }
}

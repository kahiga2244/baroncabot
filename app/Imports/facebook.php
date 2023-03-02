<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Asciisd\Zoho\Facades\ZohoManager;

class facebook implements ToCollection,WithHeadingRow
{
   /**
   * Create a new message instance.
   *
   * @return void
   */
   public function __construct()
   {

   }

   /**
   * @param Collection $collection
   */
   public function collection(Collection $rows){
      foreach ($rows as $row){

         $name = $row['name'];
         $email = $row['email'];
         $phone = $row['phone'];
         $source =  $row['source'];

         // we can now deals with leads module
         $leads = ZohoManager::useModule('Leads');

         // initiating a new empty instance of leads
         $record = $leads->getRecordInstance();

         // fill this instance with data
         $record->setFieldValue('First_Name', $name);
         $record->setFieldValue('Last_Name', $name);
         $record->setFieldValue('Email', $email);
         $record->setFieldValue('Phone', $phone);
         $record->setFieldValue('Mobile', $phone);
         $record->setFieldValue('Data_Source', $source);
         $record->setFieldValue('Lead_Source', $source);
         $record->setFieldValue('Lead_Status', 'New Lead');
         $record->create()->getData();

      }
   }
}



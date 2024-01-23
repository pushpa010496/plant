<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Getlistsubscribe;

class BitrixGetListedApiCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'getlisted:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save Getlisted Data into bitrix panel';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $getlistes = Getlistsubscribe::where('bitrix',0)
                                ->get();
        if(!empty($getlistes)){
            return $getlistes->map(function($query){
                $company = $query->company??'';
                $first_name = $query->firstname??'';
                $last_name = $query->lastname??'';
                $email = $query->email??'';
                $phone = $query->phone??'';
                $type = 'plantautomation-technology'.'-'.$query->form_type??'';
                $description = $query->message??'';
                $job_title = $query->job_title??'';
                $country = $query->country??'';
                $address = $query->street??'';
                try{
                    $curl = curl_init();
                    $url ="https://ochre-media.bitrix24.in/rest/5/c035e3ha3jj44tuf/crm.lead.add.json?FIELDS[TITLE]=".$company."&FIELDS[NAME]=".$first_name."&FIELDS[LAST_NAME]=".$last_name."&FIELDS[EMAIL][0][VALUE]=".$email."&FIELDS[PHONE][0][VALUE]=".$phone."&FIELDS[POST]=".$job_title."&FIELDS[COMPANY_TITLE]=".$company."&FIELDS[COMMENTS]=".$description."&FIELDS[SOURCE_ID]=".$type."&FIELDS[ADDRESS_COUNTRY]=".$country."&FIELDS[ADDRESS]=".$country."";
                   // $url ="https://ochre-media.bitrix24.in/rest/5/c035e3ha3jj44tuf/crm.lead.add.json?FIELDS[TITLE]=".$company."&FIELDS[NAME]=".$first_name."&FIELDS[LAST_NAME]=".$last_name."&FIELDS[EMAIL][0][VALUE]=".$email."&FIELDS[PHONE][0][VALUE]=".$phone."&FIELDS[POST]=".$job_title."&FIELDS[COMPANY_TITLE]=".$company."&FIELDS[COMMENTS]=".$description."&FIELDS[SOURCE_ID]=".$type."&FIELDS[ADDRESS_COUNTRY]=".$country."&FIELDS[ADDRESS]=".$country."";
                   
                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
                    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
                    curl_setopt ($curl, CURLOPT_POST, 0);
                    curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, 0);
                    $result = curl_exec ($curl);
                    $getlisted = Getlistsubscribe::find($query->id);
                    $getlisted->update(['bitrix'=>1]);
                 } catch (RequestException $e) {
                    dd($e->getMessage());
                    throw new Exception($e->getMessage());
                 }  
            });
        }else{
            return [];
        }
    }
}

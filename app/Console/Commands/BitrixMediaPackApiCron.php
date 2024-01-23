<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Form;

class BitrixMediaPackApiCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mediapack:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Save MediaPack Data into bitrix panel';

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
                $mediapacks = Form::whereIn('type',['mediapack-download','OurServices'])
                                ->where('bitrix',0)
                                ->get();
                               // dd($mediapacks);
        if(!empty($mediapacks)){
            return $mediapacks->map(function($query){
                $company = $query->company??'';
                $first_name = $query->firstname??'';
                $last_name = $query->lastname??'';
                $email = $query->email??'';
                $phone = $query->phone??'';
                $type = 'plantautomation-technology'.'-'.$query->type??'';
                $description = $query->message??'';
                $job_title = $query->title??'';
                $country = $query->country??'';
                try{
                   // $url ="https://ochre-media.bitrix24.in/rest/1/022k4sh4hkks82dl/crm.lead.add.json?FIELDS[TITLE]=".$company."&FIELDS[NAME]=".$first_name."&FIELDS[LAST_NAME]=".$last_name."&FIELDS[EMAIL][0][VALUE]=".$email."&FIELDS[PHONE][0][VALUE]=".$phone."&FIELDS[POST]=".$job_title."&FIELDS[COMPANY_TITLE]=".$company."&FIELDS[COMMENTS]=".$description."&FIELDS[SOURCE_ID]=".$type."&FIELDS[ADDRESS_COUNTRY]=".$country."&FIELDS[ADDRESS]=".$country."";
                    $url ="https://ochre-media.bitrix24.in/rest/5/c035e3ha3jj44tuf/crm.lead.add.json?FIELDS[TITLE]=".$company."&FIELDS[NAME]=".$first_name."&FIELDS[LAST_NAME]=".$last_name."&FIELDS[EMAIL][0][VALUE]=".$email."&FIELDS[PHONE][0][VALUE]=".$phone."&FIELDS[POST]=".$job_title."&FIELDS[COMPANY_TITLE]=".$company."&FIELDS[COMMENTS]=".$description."&FIELDS[SOURCE_ID]=".$type."&FIELDS[ADDRESS_COUNTRY]=".$country."&FIELDS[ADDRESS]=".$country."";
                    $curl = curl_init($url);
                   curl_setopt($curl, CURLOPT_URL, $url);
                   curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    //for debug only!
                   curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
                   curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                   $result = curl_exec($curl);
                   curl_close($curl);
                   echo $result;
                    $mediapack = Form::find($query->id);
                    $mediapack->update(['bitrix'=>1]);
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

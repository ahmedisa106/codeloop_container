<?php

namespace App\Console\Commands;

use App\Mail\SendEmailToCompany;
use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class PackageFinished extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'package-finished';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'package finished';

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
     * @return int
     */
    public function handle()
    {


        $companies = Company::get();

        foreach ($companies as $company) {

            if ($company->packageSubscribed) {

                $finishDay = Carbon::make($company->package->package_finish_at);
                $now= Carbon::now();

                if($now->diffInDays($finishDay) == 5 && $finishDay->toDateString() > $now->toDateString() ){
                    Mail::to($company->email)->send(new SendEmailToCompany($company,'عميلنا العزيز نود إخطاركم بأن موعد تجديد  الباقه هو '.$finishDay));
                }elseif ($now->toDateString() == $finishDay->toDateString() ){
                    Mail::to($company->email)->send(new SendEmailToCompany($company,'عميلنا العزيز نود إخطاركم بأن إشتراككم في الباقه قد إنتهي . الرجاء التوجه للإداره لتجديد تفعيل الباقه '));
                    $company->package->update([
                        'status'=>'finished',
                    ]);

                    $company->history()->create([
                        'package_id' => $company->package->package_id,
                        'status' => 'finished',
                        'note' => 'تم إنتهاء الباقه',
                        'at' => now()->toDateString(),
                    ]);
                }


            }
        }
    }
}

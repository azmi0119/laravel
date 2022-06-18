<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Mail;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        // return Command::SUCCESS;

        // \Log::info("Cron is working fine!");
        /*
           Write your database logic we bellow:
           Item::create(['name'=>'hello new']);
        */
        \DB::table('crontest')->insert([
            'name' => 'Abdullah',
            'email' => 'abdullah@gmail.com',
            'phone' => '7080183384'
        ]);
      
        $this->info('Demo:Cron Cummand Run successfully! and One data inserted !');

        $user = User::all();
           foreach ($user as $all)
           {
             Mail::raw("This is automatically generated Minute Update", function($message) use ($all)
             {
                 $message->from('abdullahtech0119@gmail.com');
                 $message->to($all->email)->subject('Every Mail send');
                 $message->view('email.test');
             });
         }

    }
}

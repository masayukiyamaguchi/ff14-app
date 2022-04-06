<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
//メール送信用ファサードを紐づける
use Illuminate\Support\Facades\Mail;
use App\Mail\CheckLeveSendMail;


class SendMailCommandCheckLeve extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'users:send_mail';

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
        //下記を追加・修正する
        //$users_infos = User::all();

        $users_infos = [
            ["name" => "masa", "email" => "echofct14@gmail.com"],
            ["name" => "masa", "email" => "echofct37@gmail.com"]
        ];

        Mail::to($users_infos)->send(new CheckLeveSendMail());
        //上記までを追加・修正する

    }
}

<?php

namespace App\Console\Commands;

use App\Facades\Support\Env\Env;
use App\Libs\Redis;
use App\Repositories\Repository;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;

class ChangeTestAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'change:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'First admin new information';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $email = $this->ask('enter new email');

        $userRepository = Repository::user();
        $user = $userRepository->entity();

        $newPassword = faker()->password(8);

        $userRepository->code((int)$user->user_code)->update([
            'email' => $email,
            'password' => Hash::make($newPassword)
        ]);

        Redis::client()->flushall();

        Env::set([
            'ADMIN_USER_EMAIL' => $email,
            'ADMIN_USER_PASSWORD' => $newPassword,
        ]);

        $this->comment('new email: '.$email);
        $this->comment('new password: '.$newPassword);
    }
}

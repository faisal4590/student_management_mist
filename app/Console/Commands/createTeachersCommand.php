<?php

namespace App\Console\Commands;

use App\Models\Teacher;
use Illuminate\Console\Command;

class createTeachersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create_teacher';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a teacher based on user input';

    public function handle()
    {
        $name = $this->ask('What is your name?');
        $course = $this->ask('What course do you want to take?');

        if($this->confirm('Are the information ok?')){
            Teacher::create([
                'name' => $name,
                'subject' => $course
            ]);
        }else{
            $this->error('Not created');
        }
    }
}

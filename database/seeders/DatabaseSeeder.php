<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        // \App\Models\User::factory(10)->create();
        $this->call(ActivityLogTableSeeder::class);
        $this->call(BlocksTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FeaturesTableSeeder::class);
        $this->call(FileablesTableSeeder::class);
        $this->call(FilesTableSeeder::class);
        $this->call(MediablesTableSeeder::class);
        $this->call(MediasTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(RelatedTableSeeder::class);
        $this->call(SettingTranslationsTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(TaggedTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TwillPasswordResetsTableSeeder::class);
        $this->call(TwillUsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(PageContactSlugsTableSeeder::class);
        $this->call(PageContactsTableSeeder::class);
        $this->call(PageHomeSlugsTableSeeder::class);
        $this->call(PageHomesTableSeeder::class);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(ProjectSlugsTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(ServiceSlugsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}

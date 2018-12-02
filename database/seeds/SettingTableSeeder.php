<?php

use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('settings')->truncate();
        DB::table('settings')->insert([
            'title'=>'Site Adresi',
            'key'=>'site_url',
            'value'=>'laravel.com'
        ]);
        DB::table('settings')->insert([
            'title'=>'Site Başlık',
            'key'=>'site_title',
            'value'=>'laravel.com'
        ]);
        DB::table('settings')->insert([
            'title'=>'Site Etiketleri',
            'key'=>'site_tags',
            'value'=>'laravel.com'
        ]);
        DB::table('settings')->insert([
            'title'=>'Site Eposta',
            'key'=>'site_mail',
            'value'=>'info@laravel.com'
        ]);
        DB::table('settings')->insert([
            'title'=>'Site Açıklama',
            'key'=>'site_content',
            'value'=>'laravel.com'
        ]);
    }
}

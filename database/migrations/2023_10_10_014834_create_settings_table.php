<?php

use App\Models\setting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        setting::create([
            'key'=>'_site_name',
            'label'=>'judul_situs',
            'value'=>'my website',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_location',
            'label'=>'alamat',
            'value'=>'Bantar gebang Bekasi Jawa Barat',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_instagram',
            'label'=>'instagram',
            'value'=>'https://www.instagram.com/naizepiple/',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_whatsapp',
            'label'=>'whatasapp',
            'value'=>'https://www.whatasapp.com/',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_nohp',
            'label'=>'nohp',
            'value'=>'088212201643',
            'type'=>'text',
        ]);
        setting::create([
            'key'=>'_email',
            'label'=>'email',
            'value'=>'nailahleani2006@gmail.com',
            'type'=>'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

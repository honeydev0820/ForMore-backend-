<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Permission;

class CreateGalleryMasterTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_master', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gallery_img');
            $table->timestamps();
            $table->softDeletes();
        });

        $permission = array(
            array(
                'name' => 'gallery_masters-index',
                'guard_name' => 'web',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ),
            array(
                'name' => 'gallery_masters-create',
                'guard_name' => 'web',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ),
            array(
                'name' => 'gallery_masters-edit',
                'guard_name' => 'web',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            ),
            array(
                'name' => 'gallery_masters-delete',
                'guard_name' => 'web',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
            )
        );

        Permission::insert($permission);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('gallery_master');
    }
}

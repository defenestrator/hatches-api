<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmptyTables extends Migration
{

    private $tables = [
        'assets',
        'comments',
        'fisheries', 'fishery_comment', 'fishery_fish_species', 'fishery_hatch', 'fishery_tag',
        'fish_species',
        'flyboxes', 'flybox_tag',
        'fly_patterns', 'fly_pattern_asset', 'fly_pattern_comment', 'fly_pattern_tag',
        'habitats',
        'hatches',
        'hatch_reports', 'hatch_report_asset', 'hatch_report_comment', 'hatch_report_tag',
        'hatch_tag',
        'hatch_types',
        'maps',
        'password_reminders',
        'prey',
        'privacy',
        'roles', 'role_user',
        'tags',
        'trip_reports', 'trip_report_asset', 'trip_report_comment', 'trip_report_tag',
        'users', 'user_buddy',
        'water_data',
        'weather'
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function ($table) {
            // In descending order of permissions
            $roles = array(
                'God',
                'Administrator',
                'Editor',
                'Moderator',
                'Customer',
                'User',
                'Guest',
                'Warned',
                'Banned'
            );
            $table->increments('id');
            $table->enum('role', $roles)->unique();
        }
        );

        Schema::create('privacy', function ($table) {
            $table->increments('id');
            $privacy_setting = array('Public', 'Private', 'Buddies');
            $table->enum('privacy', $privacy_setting);
        }
        );

        Schema::create('hatch_types', function ($table) {
            $hatch_types = array(
                'midge',
                'caddis',
                'mayfly',
                'stonefly',
                'terrestrial',
                'baitfish',
                'crustacean',
                'worm',
                'odonata',
                'other'
            );
            $table->increments('id');
            $table->enum('type', $hatch_types);
            $table->text('description')->nullable();
        }
        );

        Schema::create('habitats', function ($table) {
            $habitats = array('Saltwater', 'Freshwater', 'Anadromous', 'Brackish');
            $table->increments('id');
            $table->enum('habitat', $habitats);
        }
        );


        Schema::create('maps', function ($table) {
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 11, 8);
            $table->string('uri');
            $table->timestamps();
        });


        Schema::create('weather', function ($table) {
            $table->increments('id');
            $table->date('date');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 11, 8);
            $table->text('weather_data');
            $table->timestamps();

        }
        );

        Schema::create('tags', function ($table) {
            $table->increments('id');
            $table->string('tag', 60);
        }
        );

        Schema::create('water_data', function ($table) {
            $table->increments('id');
            $table->date('date');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 11, 8);
            $table->text('data');
            $table->timestamps();
        }
        );

        Schema::create('users', function ($table) {
            $table->increments('id');
            $table->string('name', 64)->unique();
            $table->string('email')->unique();
            $table->string('password', 200);
            $table->string('remember_token', 100)->nullable();
            $table->date('deleted_at')->nullable()->default(null);
            $table->timestamps();
        });

        Schema::create('hatches', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description');
            $table->integer('hatch_type_id')->unsigned();
            $table->foreign('hatch_type_id')
                ->references('id')
                ->on('hatch_types');
            $table->timestamps();
        }
        );
        Schema::create('assets', function ($table) {
            $asset_type = array('image', 'video', 'link', 'document');
            $table->increments('id');
            $table->enum('type', $asset_type);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->integer('privacy_id')->unsigned();
            $table->foreign('privacy_id')
                ->references('id')
                ->on('privacy');
            $table->string('uri');
            $table->timestamps();
        }
        );

        Schema::create('fisheries', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('regs')->nullable();
            $table->mediumText('management');
            $table->text('notes');
            $table->decimal('lat', 10, 7);
            $table->decimal('lng', 11, 8);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->integer('privacy_id')->unsigned();
            $table->foreign('privacy_id')
                ->references('id')
                ->on('privacy');
            $table->integer('habitat_id')->unsigned();
            $table->foreign('habitat_id')
                ->references('id')
                ->on('habitats');
            $table->tinyInteger('stillwater')->default(0);
            $table->timestamps();
        });


        Schema::create('hatch_reports', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->integer('fishery_id')->unsigned();
            $table->foreign('fishery_id')
                ->references('id')
                ->on('fisheries');
            $table->integer('hatch_id')->unsigned();
            $table->foreign('hatch_id')
                ->references('id')
                ->on('hatches');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('title');
            $table->text('report_body');
            $table->integer('hatch_intensity')->unsigned();
            $table->integer('privacy_id')->unsigned();
            $table->foreign('privacy_id')
                ->references('id')
                ->on('privacy');
            $table->timestamps();
        }
        );

        Schema::create('trip_reports', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->integer('fishery_id')->unsigned();
            $table->foreign('fishery_id')
                ->references('id')
                ->on('fisheries');
            $table->date('start_time');
            $table->date('end_time');
            $table->string('title');
            $table->text('report_body');
            $table->integer('privacy_id')->unsigned();
            $table->foreign('privacy_id')
                ->references('id')
                ->on('privacy');
            $table->timestamps();
        }
        );

        Schema::create('flyboxes', function ($table) {
            $table->increments('id');
            $table->string('flybox_name');
            $table->string('description');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->integer('privacy_id')->unsigned();
            $table->foreign('privacy_id')
                ->references('id')
                ->on('privacy');
            $table->timestamps();

        }
        );


        Schema::create('fish_species', function ($table) {
            $table->increments('id');
            $table->string('common_name');
            $table->string('genus');
            $table->string('species');
            $table->text('description');
            $table->integer('habitat_id')->unsigned();
            $table->foreign('habitat_id')
                ->references('id')
                ->on('habitats');
            $table->timestamps();
        }
        );



        Schema::create('prey', function ($table) {
            $table->increments('id');
            $table->string('common_name');
            $table->string('genus');
            $table->string('species');
            $table->integer('hatch_type_id')->unsigned();
            $table->foreign('hatch_type_id')
                ->references('id')
                ->on('hatch_types');
            $table->timestamps();
        }
        );

        Schema::create('fly_patterns', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->string('name');
            $table->text('recipe');
            $table->text('instructions');
            $table->integer('privacy_id')->unsigned();
            $table->foreign('privacy_id')
                ->references('id')
                ->on('privacy');
            $table->timestamps();
        }
        );


        Schema::create('comments', function ($table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->mediumText('comment', 500);
            $table->timestamps();
        }
        );

        Schema::create('password_reminders', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });

        Schema::create('fishery_fish_species', function ($table) {
            $table->integer('fishery_id')->unsigned();
            $table->foreign('fishery_id')
                ->references('id')
                ->on('fisheries');
            $table->integer('fish_species_id')->unsigned();
            $table->foreign('fish_species_id')
                ->references('id')
                ->on('fish_species');
        }
        );


        Schema::create('hatch_tag', function ($table) {
            $table->integer('hatch_id')->unsigned();
            $table->foreign('hatch_id')
                ->references('id')
                ->on('hatches');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');
        }
        );

        Schema::create('user_buddy', function ($table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->integer('buddy_id')->unsigned();
            $table->foreign('buddy_id')
                ->references('id')
                ->on('users');
        }
        );

        Schema::create('trip_report_asset', function ($table) {
            $table->integer('trip_report_id')->unsigned();
            $table->foreign('trip_report_id')
                ->references('id')
                ->on('trip_reports')
                ->unsigned();
            $table->integer('asset_id')->unsigned();
            $table->foreign('asset_id')
                ->references('id')
                ->on('assets');
        }
        );

        Schema::create('fishery_hatch', function ($table) {
            $table->integer('fishery_id')->unsigned();
            $table->foreign('fishery_id')
                ->references('id')
                ->on('fisheries');
            $table->integer('hatch_id')->unsigned();
            $table->foreign('hatch_id')
                ->references('id')
                ->on('hatches');
        }
        );

        Schema::create('fly_pattern_tag', function ($table) {
            $table->integer('fly_pattern_id')->unsigned();
            $table->foreign('fly_pattern_id')
                ->references('id')
                ->on('fly_patterns');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');
        }
        );

        Schema::create('flybox_tag', function ($table) {
            $table->integer('flybox_id')->unsigned();
            $table->foreign('flybox_id')
                ->references('id')
                ->on('flyboxes');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');
        }
        );

        Schema::create('trip_report_comment', function ($table) {
            $table->integer('trip_report_id')->unsigned();
            $table->foreign('trip_report_id')
                ->references('id')
                ->on('trip_reports');
            $table->integer('comment_id')->unsigned();
            $table->foreign('comment_id')
                ->references('id')
                ->on('comments')
                ->unsigned();
        }
        );

        Schema::create('fly_pattern_comment', function ($table) {
            $table->integer('fly_pattern_id')->unsigned();
            $table->foreign('fly_pattern_id')
                ->references('id')
                ->on('fly_patterns');
            $table->integer('comment_id')->unsigned();
            $table->foreign('comment_id')
                ->references('id')
                ->on('comments');
        }
        );

        Schema::create('fly_pattern_asset', function ($table) {
            $table->integer('fly_pattern_id')->unsigned();
            $table->foreign('fly_pattern_id')
                ->references('id')
                ->on('fly_patterns');
            $table->integer('asset_id')->unsigned();
            $table->foreign('asset_id')
                ->references('id')
                ->on('assets');
        }
        );

        Schema::create('fishery_tag', function ($table) {
            $table->integer('fishery_id')->unsigned();
            $table->foreign('fishery_id')
                ->references('id')
                ->on('fisheries');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');
        }
        );

        Schema::create('fishery_comment', function ($table) {
            $table->integer('fishery_id')->unsigned();
            $table->foreign('fishery_id')
                ->references('id')
                ->on('fisheries');
            $table->integer('comment_id')->unsigned();
            $table->foreign('comment_id')
                ->references('id')
                ->on('comments');
        }
        );

        Schema::create('trip_report_tag', function ($table) {
            $table->integer('trip_report_id')->unsigned();
            $table->foreign('trip_report_id')
                ->references('id')
                ->on('trip_reports');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');
        }
        );

        Schema::create('role_user', function ($table) {
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->integer('role_id')->unsigned();
            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade');
        }
        );

        Schema::create('hatch_report_asset', function ($table) {
            $table->integer('hatch_report_id')->unsigned();
            $table->foreign('hatch_report_id')
                ->references('id')
                ->on('hatch_reports')
                ->unsigned();
            $table->integer('asset_id')->unsigned();
            $table->foreign('asset_id')
                ->references('id')
                ->on('assets');
        }
        );

        Schema::create('hatch_report_comment', function ($table) {
            $table->integer('hatch_report_id')->unsigned();
            $table->foreign('hatch_report_id')
                ->references('id')
                ->on('hatch_reports');
            $table->integer('comment_id')->unsigned();
            $table->foreign('comment_id')
                ->references('id')
                ->on('comments')
                ->unsigned();
        }
        );

        Schema::create('hatch_report_tag', function ($table) {
            $table->integer('hatch_report_id')->unsigned();
            $table->foreign('hatch_report_id')
                ->references('id')
                ->on('hatch_reports');
            $table->integer('tag_id')->unsigned();
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags');
            }
        );
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (app()->environment() !== 'acceptance' || 'testing') {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        }
        foreach ($this->tables as $tableName) {
            Schema::drop($tableName);
        }
        if (app()->environment() !== 'acceptance' || 'testing') {
            DB::statement('SET FOREIGN_KEY_CHECKS=1');
        }
    }
}

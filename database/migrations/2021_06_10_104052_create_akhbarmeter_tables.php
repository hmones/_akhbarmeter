<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkhbarmeterTables extends Migration
{
    public function up(): void
    {
        Schema::create('cairo_mediameter_publishers', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('description');
            $table->string('url');
            $table->string('slug');
            $table->tinyInteger('score')->nullable();
            $table->dateTime('score_at')->nullable();
            $table->boolean('published');
            $table->tinyInteger('last_month_score')->nullable();
            $table->string('hashtags', 255)->nullable();
            $table->string('title_xpath')->nullable();
            $table->string('content_xpath')->nullable();
            $table->string('image_xpath')->nullable();
            $table->string('auther_xpath')->nullable();
            $table->timestamps();
        });
        Schema::create('cairo_mediameter_articles', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->mediumText('url');
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('auther')->nullable();
            $table->json('json')->nullable();
            $table->string('thumbnail_url')->nullable();
            $table->text('comment')->nullable();
            $table->boolean('active')->nullable()->default(0);
            $table->integer('publisher_id')->nullable()->unsigned();
            $table->integer('approved_by')->nullable()->unsigned();
            $table->integer('created_by')->nullable()->unsigned();
            $table->date('date')->nullable();
            $table->dateTime('fetched_at')->nullable();
            $table->dateTime('approved_at')->nullable();
            $table->integer('score')->nullable()->default(100);
            $table->integer('score_1')->nullable()->default(100);
            $table->integer('score_2')->nullable()->default(100);
            $table->integer('score_3')->nullable()->default(100);
            $table->boolean('fake')->default(0);
            $table->dateTime('score_at')->nullable();
            $table->timestamps();
            $table->foreign('publisher_id')->references('id')->on('cairo_mediameter_publishers')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('approved_by')->references('id')->on('users');
        });
        Schema::create('cairo_mediameter_reviews', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('comment')->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('article_id')->unsigned();
            $table->boolean('active')->defaults(0);
            $table->text('comment_ext')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('article_id')->references('id')->on('cairo_mediameter_articles')->onDelete('cascade');
            $table->tinyInteger('score')->nullable();
            $table->dateTime('score_at')->nullable();
            $table->timestamps();
        });
        Schema::create('cairo_mediameter_questions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('question');
            $table->text('desc')->nullable();
            $table->boolean('active')->default('1');
            $table->mediumText('hint')->nullable();
            $table->string('section')->nullable();
            $table->smallInteger('weight')->nullable()->default(1);
            $table->string('type')->default('radio');
            $table->json('extra')->nullable();
            $table->integer('label_id')->default(2);
            $table->timestamps();
        });
        Schema::create('cairo_mediameter_options', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->string('option');
            $table->text('desc')->nullable();
            $table->string('hint')->nullable();
            $table->integer('weight')->unsigned()->default(0);
            $table->string('code')->nullable();
            $table->boolean('selected')->default(false);
            $table->nullableTimestamps();
            $table->foreign('question_id', 'rq_id')->references('id')->on('cairo_mediameter_questions')->onDelete('cascade');

        });
        Schema::create('cairo_mediameter_responses', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('review_id')->unsigned();
            $table->integer('option_id')->unsigned();
            $table->text('comment')->nullable();
            $table->text('anot_text')->nullable();
            $table->timestamps();
            $table->foreign('review_id')->references('id')->on('cairo_mediameter_reviews')->onDelete('cascade');
            $table->foreign('option_id')->references('id')->on('cairo_mediameter_options')->onDelete('cascade');

        });
        Schema::create('cairo_mediameter_categories', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('cat_title');
            $table->string('slug');
            $table->text('cat_desc')->nullable();
            $table->string('cat_icon')->nullable();
            $table->string('cat_type', 10)->default('topic');
        });
        Schema::create('cairo_mediameter_pscores', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('publisher_id')->unsigned();
            $table->integer('score_percent')->default(100);
            $table->integer('score_1')->default(100);
            $table->integer('score_2')->default(100);
            $table->integer('score_3')->default(100);
            $table->date('score_from')->nullable();
            $table->date('score_to')->nullable();
            $table->string('score_period', 20)->default('week');
            $table->integer('num_articles');
            $table->timestamps();
        });
        Schema::create('cairo_mediameter_art_cat', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('article_id');
            $table->integer('category_id');
            $table->primary(['article_id', 'category_id']);
        });
        Schema::create('cairo_mediameter_videos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('link', 255);
            $table->string('category', 255)->nullable();
            $table->text('tags')->nullable();
            $table->string('hosted_on', 100);
            $table->string('hashtags', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
        Schema::create('cairo_mediameter_pubs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->text('desc')->nullable();
            $table->string('category', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
        Schema::create('cairo_mediameter_label', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('icon', 255)->default('exclamation');
            $table->string('color', 50)->default('red');
            $table->integer('priority');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
        Schema::create('cairo_mediameter_art_label', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('article_id');
            $table->integer('label_id');
            $table->primary(['article_id', 'category_id']);
        });
        Schema::create('cairo_voting_likes', function ($table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('article_id')->unsigned();
            $table->integer('likes')->default(0);
            $table->integer('dislikes')->default(0);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
        Schema::create('cairo_seo_info', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255)->nullable();
            $table->string('keywords', 255)->nullable();
            $table->text('desc')->nullable();
            $table->string('og_image_url', 300)->nullable();
            $table->string('og_title', 255)->nullable();
            $table->text('og_desc')->nullable();
            $table->string('og_url', 300);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cairo_mediameter_publishers');
        Schema::dropIfExists('cairo_mediameter_articles');
        Schema::dropIfExists('cairo_mediameter_reviews');
        Schema::dropIfExists('cairo_mediameter_questions');
        Schema::dropIfExists('cairo_mediameter_options');
        Schema::dropIfExists('cairo_mediameter_responses');
        Schema::dropIfExists('cairo_mediameter_categories');
        Schema::dropIfExists('cairo_mediameter_pscores');
        Schema::dropIfExists('cairo_mediameter_art_cat');
        Schema::dropIfExists('cairo_mediameter_videos');
        Schema::dropIfExists('cairo_mediameter_pubs');
        Schema::dropIfExists('cairo_mediameter_label');
        Schema::dropIfExists('cairo_mediameter_art_label');
        Schema::dropIfExists('cairo_voting_likes');
        Schema::dropIfExists('cairo_seo_info');
    }
}

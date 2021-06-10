<?php

use Illuminate\Database\Migrations\Migration;

class AddOctoberCmsTables extends Migration
{
    public function up(): void
    {
////        1.0.1:
////    - 'First version of MediaMeter'
////    - create_publishers_table.php
//        Schema::create('cairo_mediameter_publishers', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->string('name');
//            $table->string('description');
//            $table->string('url');
//            $table->string('slug');
//            $table->boolean('published');
//            $table->timestamps();
//        });
////    - create_articles_table.php
//        Schema::create('cairo_mediameter_articles', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->mediumText('url');
//            $table->string('title')->nullable();
//            $table->text('content')->nullable();
//            $table->string('auther')->nullable();
//            $table->json('json')->nullable();
//            $table->string('thumbnail_url')->nullable();
//            $table->text('comment')->nullable();
//            $table->string('creator_email')->nullable();
//
//            $table->boolean('active')->nullable()->default(0);
//
//            $table->integer('publisher_id')->nullable()->unsigned();
//            $table->integer('approved_by')->nullable()->unsigned();
//            $table->integer('created_by')->nullable()->unsigned();
//
//            $table->date('date')->nullable();
//            $table->dateTime('fetched_at')->nullable();
//            $table->dateTime('approved_at')->nullable();
//            $table->timestamps();
//
//            $table->foreign('publisher_id')->references('id')->on('cairo_mediameter_publishers')->onDelete('cascade');
//            $table->foreign('created_by')->references('id')->on('users');
//            $table->foreign('approved_by')->references('id')->on('users');
//
//        });
////    - create_reviews_table.php
//        Schema::create('cairo_mediameter_reviews', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->text('comment')->nullable();
//            $table->integer('user_id')->unsigned()->nullable();
//            $table->integer('article_id')->unsigned();
//            $table->boolean('active')->defaults(0);
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
//            $table->foreign('article_id')->references('id')->on('cairo_mediameter_articles')->onDelete('cascade');
//
//        });
////    - create_questions_table.php
//        Schema::create('cairo_mediameter_questions', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->string('question');
//            $table->boolean('active')->default('1');
//            $table->mediumText('hint')->nullable();
//            $table->string('section')->nullable();
//            $table->smallInteger('weight')->nullable()->default(1);
//            $table->enum('type', ['radio', 'checkbox', 'select'])->default('radio');
//            $table->json('extra')->nullable();
//            $table->timestamps();
//        });
////    - create_options_table.php
//        Schema::create('cairo_mediameter_options', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->integer('question_id')->unsigned();
//            $table->string('option');
//            $table->string('hint')->nullable();
//            $table->integer('weight')->unsigned()->default(0);
//            $table->string('code')->nullable();
//            $table->boolean('selected')->default(false);
//            $table->nullableTimestamps();
//            $table->foreign('question_id', 'rq_id')->references('id')->on('cairo_mediameter_questions')->onDelete('cascade');
//
//        });
////    - create_responses_table.php
//        Schema::create('cairo_mediameter_responses', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id')->unsigned();
//            $table->integer('review_id')->unsigned();
//            $table->integer('option_id')->unsigned();
//            $table->text('comment')->nullable();
//            $table->timestamps();
//            $table->foreign('review_id')->references('id')->on('cairo_mediameter_reviews')->onDelete('cascade');
//            $table->foreign('option_id')->references('id')->on('cairo_mediameter_options')->onDelete('cascade');
//
//        });
////1.0.2:
////    - seed_questions_table.php
////    - Not going to take place
////1.0.3:
////    - nullable_datestamps_article.php
//        Schema::table('cairo_mediameter_articles', function ($table) {
//            $table->dropTimestamps();
//        });
//        Schema::table('cairo_mediameter_responses', function ($table) {
//            $table->dropTimestamps();
//        });
////    - cache_score.php
//        Schema::table('cairo_mediameter_articles', function ($table) {
//            $table->nullableTimestamps();
//            $table->tinyInteger('score')->nullable();
//            $table->dateTime('score_at')->nullable();
//        });
//
//        Schema::table('cairo_mediameter_reviews', function ($table) {
//            $table->tinyInteger('score')->nullable();
//            $table->dateTime('score_at')->nullable();
//        });
//
//        Schema::table('cairo_mediameter_publishers', function ($table) {
//            $table->tinyInteger('score')->nullable();
//            $table->dateTime('score_at')->nullable();
//        });
////1.0.4:
////    - 'cache monthly scores'
////    - null
////1.0.5:
////    - 'cache monthly scores again'
//        Schema::table('cairo_mediameter_publishers', function ($table) {
//            $table->tinyInteger('last_month_score')->nullable();
//        });
////1.0.6:
////    - 'Created table cairo_mediameter_categories'
//        Schema::create('cairo_mediameter_categories', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->string('cat_title');
//            $table->string('slug');
//            $table->text('cat_desc')->nullable();
//            $table->string('cat_icon')->nullable();
//        });
////1.0.7:
////    - 'Created table cairo_mediameter_articles_cats'
////    - builder_table_create_cairo_mediameter_articles_cats.php (FILE NOT FOUND)
////1.0.8:
////    - 'Drop table cairo_mediameter_articles_categories'
////    - null
////1.0.9:
////    - 'Drop table cairo_mediameter_articles_cats'
////    - builder_table_delete_cairo_mediameter_articles_cats.php (REMOVED WHAT WAS CREATED)
////1.0.10:
////    - 'Updated table cairo_mediameter_reviews'
//        Schema::table('cairo_mediameter_reviews', function ($table) {
//            $table->dropTimestamps();
//        });
//        Schema::table('cairo_mediameter_reviews', function ($table) {
//            $table->nullableTimestamps();
//            $table->text('comment_ext')->nullable();
//        });
////1.0.11:
////    - 'Created table cairo_mediameter_pscores'
//        Schema::create('cairo_mediameter_pscores', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->integer('score_percent')->default(100);
//            $table->string('score_scope', 20)->default('total');
//            $table->date('score_from');
//            $table->date('score_to');
//            $table->string('score_period', 20)->default('week');
//            $table->integer('num_articles');
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//        });
////1.0.12:
////    - 'Created table cairo_mediameter_pubs_pscores'
//        Schema::create('cairo_mediameter_pubs_pscores', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->integer('publisher_id');
//            $table->integer('pscore_id');
//            $table->primary(['publisher_id', 'pscore_id']);
//        });
////1.0.13:
////    - 'Drop table cairo_mediameter_publishers_pscores'
//        Schema::dropIfExists('cairo_mediameter_publishers_pscores');
////1.0.14:
////    - 'Drop table cairo_mediameter_pubs_pscores'
//        Schema::dropIfExists('cairo_mediameter_pubs_pscores');
////1.0.15:
////    - 'Updated table cairo_mediameter_pscores'
//        Schema::table('cairo_mediameter_pscores', function ($table) {
//            $table->integer('publisher_id');
//        });
////1.0.16:
////    - 'Updated table cairo_mediameter_pscores'
//        Schema::table('cairo_mediameter_pscores', function ($table) {
//            $table->integer('publisher_id')->unsigned()->change();
//        });
////1.0.17:
////    - 'Updated table cairo_mediameter_pscores'
//        Schema::table('cairo_mediameter_pscores', function ($table) {
//            $table->dateTime('score_from')->nullable(false)->unsigned(false)->default(null)->change();
//            $table->dateTime('score_to')->nullable(false)->unsigned(false)->default(null)->change();
//        });
////1.0.18:
////    - 'Updated table Questions by dropping the column named type'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->dropTimestamps();
//            $table->dropColumn('type');
//        });
////1.0.19:
////    - 'Updated table Questions by creating a column string named type and nullable timestamps'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->string('type')->default('radio');
//            $table->nullableTimestamps();
//        });
////1.0.20:
////    - 'Created table cairo_mediameter_likes'
////    - null
////1.0.21:
////    - 'Created table cairo_mediameter_likes'
//        Schema::create('cairo_mediameter_likes', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->integer('article_id')->unsigned();
//            $table->integer('likes')->default(0);
//            $table->integer('unlikes')->default(0);
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//        });
////1.0.22:
////    - 'Updated table cairo_mediameter_likes'
//        Schema::table('cairo_mediameter_likes', function ($table) {
//            $table->increments('id')->unsigned(false)->change();
//        });
////1.0.23:
////    - 'Updated table cairo_mediameter_likes'
//        Schema::table('cairo_mediameter_likes', function ($table) {
//            $table->boolean('rate')->default(0);
//            $table->string('token', 100);
//            $table->dropColumn('likes');
//            $table->dropColumn('unlikes');
//        });
////1.0.24:
////    - 'Updated table cairo_mediameter_likes'
//        Schema::table('cairo_mediameter_likes', function ($table) {
//            $table->string('token', 100)->change();
//        });
////1.0.25:
////    - 'Updated table cairo_mediameter_categories'
//        Schema::table('cairo_mediameter_categories', function ($table) {
//            $table->integer('article_id');
//        });
////1.0.26:
////    - 'Created table cairo_mediameter_art_cat'
//        Schema::create('cairo_mediameter_art_cat', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->integer('article_id');
//            $table->integer('category_id');
//            $table->primary(['article_id', 'category_id']);
//        });
////1.0.27:
////    - 'Drop table cairo_mediameter_articles_categories'
//        Schema::dropIfExists('cairo_mediameter_articles_categories');
////1.0.28:
////    - 'Updated table cairo_mediameter_categories'
//        Schema::table('cairo_mediameter_categories', function ($table) {
//            $table->dropColumn('article_id');
//        });
////1.0.29:
////    - 'Adding hashtags to publishers for social media'
//        Schema::table('cairo_mediameter_publishers', function ($table) {
//            $table->dropTimestamps();
//        });
////1.0.30:
////    - 'Adding hashtags to publishers for social media - modified table'
//        Schema::table('cairo_mediameter_publishers', function ($table) {
//            $table->nullableTimestamps();
//            $table->string('hashtags', 255);
//        });
////1.0.31:
////    - 'Updated table cairo_mediameter_publishers'
//        Schema::table('cairo_mediameter_publishers', function ($table) {
//            $table->string('hashtags', 255)->nullable()->change();
//        });
////1.0.32:
////    - 'Created table cairo_mediameter_videos'
//        Schema::create('cairo_mediameter_videos', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->string('title', 255);
//            $table->text('description')->nullable();
//            $table->string('link', 255);
//            $table->string('category', 255)->nullable();
//            $table->text('tags')->nullable();
//            $table->string('hosted_on', 100);
//            $table->string('hashtags', 255)->nullable();
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//        });
////1.0.33:
////    - 'Updated table cairo_mediameter_questions'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->string('false_icon', 255)->nullable();
//            $table->string('false_answer', 255)->nullable();
//        });
////1.0.34:
////    - 'Created table cairo_mediameter_pubs'
//        Schema::create('cairo_mediameter_pubs', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->string('name', 255);
//            $table->text('desc')->nullable();
//            $table->string('category', 255)->nullable();
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//        });
////1.0.35:
////    - 'Created table cairo_mediameter_seo'
//        Schema::create('cairo_mediameter_seo', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->string('title', 255)->nullable();
//            $table->text('desc')->nullable();
//            $table->string('og_image_url', 300)->nullable();
//            $table->string('of_title', 255)->nullable();
//            $table->text('og_desc')->nullable();
//            $table->string('og_url', 300);
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//        });
////1.0.36:
////    - 'Updated table cairo_mediameter_seo'
//        Schema::table('cairo_mediameter_seo', function ($table) {
//            $table->increments('id')->unsigned(false)->change();
//            $table->renameColumn('of_title', 'og_title');
//        });
////1.0.37:
////    - 'Updated table cairo_mediameter_seo'
//        Schema::table('cairo_mediameter_seo', function ($table) {
//            $table->string('keywords', 255)->nullable();
//        });
////1.0.38:
////    - 'Updated table cairo_mediameter_questions'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->dropColumn('false_answer');
//        });
////1.0.39:
////    - 'Created table cairo_mediameter_art_properties'
//        Schema::create('cairo_mediameter_art_properties', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->string('name', 255);
//            $table->string('icon', 100);
//            $table->integer('article_id');
//        });
////1.0.40:
////    - 'Updated table cairo_mediameter_questions'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->boolean('false_news')->default(0);
//        });
////1.0.41:
////    - 'Updated table cairo_mediameter_questions'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->string('false_type', 255)->nullable();
//            $table->dropColumn('false_news');
//        });
////1.0.42:
////    - 'Updated table cairo_mediameter_art_properties'
//        Schema::table('cairo_mediameter_art_properties', function ($table) {
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//        });
////1.0.43:
////    - 'Updated table cairo_mediameter_art_properties'
//        Schema::table('cairo_mediameter_art_properties', function ($table) {
//            $table->integer('article_id')->unsigned()->change();
//        });
////1.0.44:
////    - 'Updated table cairo_mediameter_likes'
//        Schema::table('cairo_mediameter_likes', function ($table) {
//            $table->integer('likes')->default(0);
//            $table->integer('dislikes')->default(0);
//            $table->dropColumn('rate');
//            $table->dropColumn('token');
//        });
////1.0.45:
////    - 'Drop table cairo_mediameter_art_properties'
//        Schema::dropIfExists('cairo_mediameter_art_properties');
////1.0.46:
////    - 'Created table cairo_mediameter_ascore'
//        Schema::create('cairo_mediameter_ascore', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id');
//            $table->integer('article_id')->unsigned();
//            $table->integer('score')->nullable()->unsigned();
//            $table->integer('score_1')->nullable()->unsigned();
//            $table->integer('score_2')->nullable()->unsigned();
//            $table->integer('score_3')->nullable()->unsigned();
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//        });
////1.0.47:
////    - 'Updated table cairo_mediameter_categories'
//        Schema::table('cairo_mediameter_categories', function ($table) {
//            $table->string('cat_type', 10)->default('category');
//        });
////1.0.48:
////    - 'Updated table cairo_mediameter_categories'
//        Schema::table('cairo_mediameter_categories', function ($table) {
//            $table->string('cat_type', 10)->default('topic')->change();
//        });
////1.0.49:
////    - 'Updated table cairo_mediameter_pscores'
//        Schema::table('cairo_mediameter_pscores', function ($table) {
//            $table->integer('score_1')->default(100);
//            $table->integer('score_2')->default(100);
//            $table->integer('score_3')->default(100);
//            $table->dropColumn('score_scope');
//        });
////1.0.50:
////    - 'Updated table cairo_mediameter_ascore'
//        Schema::table('cairo_mediameter_ascore', function ($table) {
//            $table->boolean('fake')->default(0);
//            $table->string('label_1', 80)->nullable();
//            $table->string('label_2', 80)->nullable();
//            $table->string('label_3', 80)->nullable();
//            $table->string('label_4', 80)->nullable();
//        });
////1.0.51:
////    - 'Updated table cairo_mediameter_articles'
//        Schema::table('cairo_mediameter_articles', function ($table) {
//            $table->integer('score_1')->nullable()->default(100);
//            $table->integer('score_2')->nullable()->default(100);
//            $table->integer('score_3')->nullable()->default(100);
//            $table->boolean('fake')->default(0);
//            $table->integer('score')->nullable()->unsigned(false)->default(100)->change();
//        });
////1.0.52:
////    - 'Updated table cairo_mediameter_articles'
//        Schema::table('cairo_mediameter_articles', function ($table) {
//            $table->dropColumn('creator_email');
//        });
////1.0.53:
////    - 'Drop table cairo_mediameter_ascore'
//        Schema::dropIfExists('cairo_mediameter_ascore');
////1.0.54:
////    - 'Updated table cairo_mediameter_publishers'
//        Schema::table('cairo_mediameter_publishers', function ($table) {
//            $table->string('title_xpath')->nullable();
//            $table->string('content_xpath')->nullable();
//            $table->string('image_xpath')->nullable();
//            $table->string('auther_xpath')->nullable();
//        });
////1.0.55:
////    - 'Created table cairo_mediameter_label'
//        Schema::create('cairo_mediameter_label', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->increments('id')->unsigned();
//            $table->string('name', 255);
//            $table->integer('question_id')->unsigned();
//            $table->string('icon', 255)->default('exclamation');
//            $table->integer('priority');
//            $table->timestamp('created_at')->nullable();
//            $table->timestamp('updated_at')->nullable();
//            $table->timestamp('deleted_at')->nullable();
//        });
////1.0.56:
////    - 'Created table cairo_mediameter_art_label'
//        Schema::create('cairo_mediameter_art_label', function ($table) {
//            $table->engine = 'InnoDB';
//            $table->integer('article_id');
//            $table->integer('category_id');
//            $table->primary(['article_id', 'category_id']);
//        });
////1.0.57:
////    - 'Updated table cairo_mediameter_label'
//        Schema::table('cairo_mediameter_label', function ($table) {
//            $table->dropColumn('question_id');
//        });
////1.0.58:
////    - 'Updated table cairo_mediameter_questions'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->integer('label_id');
//        });
////1.0.59:
////    - 'Updated table cairo_mediameter_questions'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->dropColumn('false_icon');
//            $table->dropColumn('false_type');
//        });
////1.0.60:
////    - 'Updated table cairo_mediameter_responses'
//        Schema::table('cairo_mediameter_responses', function ($table) {
//            $table->text('anot_text')->nullable();
//        });
////1.0.61:
////    - 'Updated table cairo_mediameter_art_label'
//        Schema::table('cairo_mediameter_art_label', function ($table) {
//            $table->dropPrimary(['article_id', 'category_id']);
//            $table->renameColumn('category_id', 'label_id');
//            $table->primary(['article_id', 'label_id']);
//        });
////1.0.62:
////    - 'Updated table cairo_mediameter_questions'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->integer('label_id')->default(2)->change();
//        });
////1.0.63:
////    - 'Updated table cairo_mediameter_label'
//        Schema::table('cairo_mediameter_label', function ($table) {
//            $table->string('color', 50)->default('red');
//        });
////1.0.64:
////    - 'Updated table cairo_mediameter_questions'
//        Schema::table('cairo_mediameter_questions', function ($table) {
//            $table->text('desc')->nullable();
//        });
////1.0.65:
////    - 'Updated table cairo_mediameter_options'
//        Schema::table('cairo_mediameter_options', function ($table) {
//            $table->text('desc')->nullable();
//        });
////1.0.66:
////    - 'Drop table cairo_mediameter_seo'
//        Schema::dropIfExists('cairo_mediameter_seo');
////1.0.67:
////    - 'Drop table cairo_mediameter_likes'
//        Schema::dropIfExists('cairo_mediameter_likes');
    }

    public function down(): void
    {
//        Schema::dropIfExists('cairo_mediameter_publishers');
//        Schema::dropIfExists('cairo_mediameter_articles');
//        Schema::dropIfExists('cairo_mediameter_reviews');
//        Schema::dropIfExists('cairo_mediameter_questions');
//        Schema::dropIfExists('cairo_mediameter_options');
//        Schema::dropIfExists('cairo_mediameter_responses');
//        Schema::dropIfExists('cairo_mediameter_pscores');

    }
}

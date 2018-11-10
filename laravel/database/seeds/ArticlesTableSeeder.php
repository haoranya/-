<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                'title' => 'TNTSearch',
                'content' => '一个用PHP编写的功能齐全的全文搜索引擎'
            ],
            [
                'title' => 'jieba-php',
                'content' => '"结巴"中文分词:做最好的php中文分词、中文断词组件'
            ],
            [
                'title' => '哈哈',
                'content' => '啊哈哈哈哈哈哈哈哈哈哈破飞机哦'
            ]
        ]);
    }

}

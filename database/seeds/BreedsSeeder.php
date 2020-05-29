<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BreedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $breeds = [
            [
                "breed" => "Мейн-кун",
                "breed_info" => "Одной из самых удивительных и загадочных пород считается мейн-кун – ласковый гигант с серьезным взглядом. Этих созданий называют «комнатными рысями», что неудивительно, т.к. они одни из самых крупных домашних кошек."
            ],
            [
                "breed" => "Шотландская вислоухая",
                "breed_info" => "Во всём мире эту породу именуют «скоттиш-фолд», но нам привычней называть этих милых кошек «шотландскими вислоухими». Их «няшная» внешность никого не оставит равнодушным – такое создание сразу хочется взять на руки и затискать."
            ],
            [
                "breed" => "Британские короткошерстные",
                "breed_info" => "Без таких вот «плюшевых» комочков счастья не мыслят своего существования миллионы людей во всем мире. Эти аристократичные, дружелюбные, харизматичные и весьма чистоплотные питомцы уже долгое время являются одной из самых популярных кошачьих пород на планете."
            ],
            [
                "breed" => "Бенгальская кошка",
                "breed_info" => "Бенгальские кошки – невероятно красивые животные, которые сочетают в себе эффектную внешность диких хищников и покладистый характер домашних питомцев. Ну а главной «фишкой» этих созданий является «леопардовый окрас», за что их и зовут «домашними леопардами»."
            ],
            [
                "breed" => "Сиамская кошка",
                "breed_info" => "Сиамы – грациозные восточные красавцы и красавицы (сумевшие сохранить свои корни практически в первозданном виде) выделяются особым изяществом, темпераментным характером и некой миниатюрностью."
            ],
            [
                "breed" => "Абиссинская кошка",
                "breed_info" => "Среди множества пород есть одна, наделенная невероятным изяществом и грацией – это абиссинская кошка – существо умное, гибкое и ловкое. В ней присутствует некая загадочность и особая утонченность, а её внешность называют «божественной»."
            ],
        ];
        DB::table('breeds')->insert($breeds);
    }
}

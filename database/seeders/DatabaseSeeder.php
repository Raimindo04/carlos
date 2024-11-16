<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Menu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Menu::create(['nome'=>'Entradas', 'descricao' =>'Inicie sua experiência com opções irresistíveis de entradas, perfeitas para abrir o apetite. Desde saladas frescas e crocantes até petiscos quentes e aromáticos, cada prato é cuidadosamente elaborado para surpreender o paladar. Sugestões como bruschettas, carpaccios e tábuas de queijos são ideais para compartilhar']);
        Menu::create(['nome'=>'Pratos Principais', 'descricao' =>'Descubra uma seleção refinada de pratos principais, que combinam sabores tradicionais e contemporâneos. Desde carnes suculentas e grelhados no ponto certo até massas artesanais e receitas vegetarianas criativas, cada prato é uma celebração da gastronomia. Opções como risotos cremosos, peixes frescos e cortes nobres encantam todos os gostos.']);
        Menu::create(['nome'=>'Sobremesas', 'descricao' =>'Finalize sua refeição com uma explosão de sabor e doçura. Nossas sobremesas são preparadas com ingredientes de alta qualidade, trazendo delícias como tortas delicadas, mousses aveludados e sobremesas clássicas como pudins e sorvetes artesanais. Cada colherada é um convite ao prazer.']);
        Menu::create(['nome'=>'Bebidas', 'descricao' =>'Complete sua experiência com nossa seleção de bebidas, que inclui sucos naturais, coquetéis elaborados e uma carta de vinhos escolhida a dedo para harmonizar com nossos pratos. Para momentos descontraídos, oferecemos também chás gelados, cafés especiais e refrescos saborosos.']);
    }
}

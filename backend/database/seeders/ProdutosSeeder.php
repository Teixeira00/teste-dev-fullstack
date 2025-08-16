<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produtosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('produtos')->insert([
    ['nome' => 'Camiseta Preta', 'descricao' => 'Camiseta 100% algodão tamanho G', 'preco' => 49.90],
    ['nome' => 'Notebook Dell', 'descricao' => 'Core i5, 8GB RAM, 256GB SSD', 'preco' => 3499.00],
    ['nome' => 'Mouse Gamer', 'descricao' => 'RGB, 7200 DPI', 'preco' => 159.90],
    ['nome' => 'Fone de Ouvido', 'descricao' => 'Bluetooth com cancelamento de ruído', 'preco' => 299.99],
    ['nome' => 'Tênis Esportivo', 'descricao' => 'Ideal para corrida e academia', 'preco' => 219.50],
    ['nome' => 'Livro - Clean Code', 'descricao' => 'Livro sobre boas práticas de programação', 'preco' => 89.90],
    ['nome' => 'Smartphone XYZ', 'descricao' => '64GB, Câmera 48MP, Android 12', 'preco' => 1899.00],
    ['nome' => 'Carregador Turbo', 'descricao' => '20W USB-C rápido', 'preco' => 79.90],
    ['nome' => 'Mochila Executiva', 'descricao' => 'Compartimento para notebook até 15.6"', 'preco' => 139.90],
    ['nome' => 'Webcam Full HD', 'descricao' => '1080p com microfone embutido', 'preco' => 199.00],
    ['nome' => 'Teclado Mecânico', 'descricao' => 'Switch azul, iluminação RGB', 'preco' => 299.99],
    ['nome' => 'Cadeira Gamer', 'descricao' => 'Ergonômica com apoio lombar', 'preco' => 899.00],
    ['nome' => 'Monitor 24"', 'descricao' => 'Full HD, IPS, 75Hz', 'preco' => 749.00],
    ['nome' => 'Echo Dot', 'descricao' => 'Assistente Alexa de 5ª geração', 'preco' => 349.90],
    ['nome' => 'Pulseira Fitness', 'descricao' => 'Contador de passos e batimentos', 'preco' => 229.00],
    ['nome' => 'HD Externo 1TB', 'descricao' => 'USB 3.0', 'preco' => 349.99],
    ['nome' => 'Smart TV 50"', 'descricao' => '4K UHD com Netflix e YouTube', 'preco' => 2499.00],
    ['nome' => 'Ventilador de Mesa', 'descricao' => 'Silencioso e potente', 'preco' => 159.90],
    ['nome' => 'Aspirador Robô', 'descricao' => 'Automático com sensor de obstáculos', 'preco' => 799.90],
    ['nome' => 'Liquidificador', 'descricao' => '5 velocidades com copo de 2L', 'preco' => 179.00],
    ['nome' => 'Air Fryer', 'descricao' => 'Capacidade 4L, sem óleo', 'preco' => 399.99],
    ['nome' => 'Chaleira Elétrica', 'descricao' => '1.7L, aço inox', 'preco' => 119.90],
    ['nome' => 'Panela Antiaderente', 'descricao' => 'Teflon 24cm', 'preco' => 89.00],
    ['nome' => 'Conjunto de Talheres', 'descricao' => '24 peças inox', 'preco' => 139.90],
    ['nome' => 'Relógio Masculino', 'descricao' => 'Pulseira de couro, analógico', 'preco' => 199.00],
    ['nome' => 'Óculos de Sol', 'descricao' => 'Proteção UV400', 'preco' => 129.90],
    ['nome' => 'Perfume Importado', 'descricao' => 'Fragrância masculina 100ml', 'preco' => 299.99],
    ['nome' => 'Bicicleta Aro 29', 'descricao' => '18 marchas com suspensão', 'preco' => 1699.00],
    ['nome' => 'Câmera DSLR', 'descricao' => 'Canon T7 com lente 18-55mm', 'preco' => 2999.00],
    ['nome' => 'Tripé Fotográfico', 'descricao' => 'Altura 1,50m', 'preco' => 89.90],
    ['nome' => 'Mesa Digitalizadora', 'descricao' => 'Ideal para desenho digital', 'preco' => 359.00],
    ['nome' => 'Tablet 10"', 'descricao' => 'Wi-Fi, 64GB, Android 11', 'preco' => 899.00],
    ['nome' => 'Livro - O Hobbit', 'descricao' => 'Clássico da fantasia por Tolkien', 'preco' => 54.90],
    ['nome' => 'Jogo de Panelas', 'descricao' => '5 peças em alumínio', 'preco' => 299.00],
    ['nome' => 'Torradeira', 'descricao' => '2 fatias, inox', 'preco' => 139.00],
    ['nome' => 'Secador de Cabelo', 'descricao' => '2000W com difusor', 'preco' => 149.90],
    ['nome' => 'Prancha Alisadora', 'descricao' => 'Cerâmica, bivolt', 'preco' => 129.90],
    ['nome' => 'Caixa de Som Bluetooth', 'descricao' => 'À prova d’água, 12h bateria', 'preco' => 249.00],
    ['nome' => 'Pen Drive 64GB', 'descricao' => 'USB 3.1', 'preco' => 59.90],
    ['nome' => 'Cartão de Memória 128GB', 'descricao' => 'Classe 10', 'preco' => 89.00],
    ['nome' => 'Cabo HDMI 2m', 'descricao' => 'Alta definição 4K', 'preco' => 34.90],
    ['nome' => 'Roteador Wi-Fi', 'descricao' => 'Dual Band AC1200', 'preco' => 199.00],
    ['nome' => 'Filtro de Linha', 'descricao' => '5 tomadas, proteção contra surtos', 'preco' => 49.90],
    ['nome' => 'Controle Universal', 'descricao' => 'Compatível com várias marcas', 'preco' => 39.90],
    ['nome' => 'Balança Digital', 'descricao' => 'Até 180kg, vidro temperado', 'preco' => 89.90],
    ['nome' => 'Espremedor Elétrico', 'descricao' => 'Potente para frutas cítricas', 'preco' => 109.90],
    ['nome' => 'Tábua de Corte', 'descricao' => 'Bambu ecológico', 'preco' => 49.90],
    ['nome' => 'Aquecedor Elétrico', 'descricao' => 'Cerâmico com 3 níveis de potência', 'preco' => 189.90],
    ['nome' => 'Guarda-chuva Reforçado', 'descricao' => 'Resistente ao vento', 'preco' => 69.00],
]);

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Oppo mobile',
                "price"=>"30,000",
                "description"=>"A smartphone with 8gb ram and much more feature",
                "category"=>"mobile",
                "gallery"=>"https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name'=>'Panasonic Tv',
                "price"=>"10,000",
                "description"=>"A smart tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://i.gadgets360cdn.com/products/televisions/large/1548154685_832_panasonic_32-inch-lcd-full-hd-tv-th-l32u20.jpg"
            ],
            [
                'name'=>'Soni Tv',
                "price"=>"15,000",
                "description"=>"A tv with much more feature",
                "category"=>"tv",
                "gallery"=>"https://4.imimg.com/data4/PM/KH/MY-34794816/lcd-500x500.png"
            ],
            [
                'name'=>'LG fridge',
                "price"=>"20,000",
                "description"=>"A fridge with much more feature",
                "category"=>"fridge",
                "gallery"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTFx-2-wTOcfr5at01ojZWduXEm5cZ-sRYPJA&usqp=CAU"
            ],
            [
                'name'=>'Hp Laptop',
                "price"=>"50,000",
                "description"=>"Internal Storage: 8GB RAM, 256GB SSD Graphics Processor: Intel HD Graphics 4400",
                "category"=>"computer",
                "gallery"=>"https://i.roamcdn.net/hz/pi/listing-thumb-360w/b80ff40d6d921579abde07a68f4a1e33/-/horizon-files-prod/pi/picture/qg6nnq8/102945f2ca4b8d0ccf2f32fb6677dbb966cb2b73.jpg"
            ],
             [
                'name'=>'Dell Laptop',
                "price"=>"45,000",
                "description"=>"Dell Latitude 3410 14″Notebook, Core i5 i5-10310U 10th Gen",
                "category"=>"computer",
                "gallery"=>"https://www.almiriatechstore.co.ke/wp-content/uploads/2021/03/Dell-Latitude-3410-14-Notebook-Core-i5-i5-10310U-10th-Gen-300x300.jpg"
             ],
             [
                'name'=>'Play Station',
                "price"=>"70,000",
                "description"=>"4K-gaming and entertainment with vibrant HDR1",
                "category"=>"gaming",
                "gallery"=>"https://gmedia.playstation.com/is/image/SIEPDC/ps4-pro-image-block-01-en-24jul20?$1600px--t$"
             ],
             [
                'name'=>'CPU',
                "price"=>"30,000",
                "description"=>"Alarco Gaming PC Desktop Computer Intel i5 3.10GHz,8GB Ram,1TB Hard Drive",
                "category"=>"computer",
                "gallery"=>"https://m.media-amazon.com/images/I/711MUuOhJiL._AC_UY218_.jpg"
             ]
        ]);
    }
}

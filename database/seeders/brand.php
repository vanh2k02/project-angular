<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class brand extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('brands')->insert(
            [
                'brand_name' => 'Dolce & Gabbana',
                'brand_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Dolce_%26_Gabbana.svg/1200px-Dolce_%26_Gabbana.svg.png',
                'brand_desc' => 'Dolce & Gabbana là một thương hiệu thời trang cao cấp, được thành lập bởi hai nhà thiết kế thời trang người Ý là Domenico Dolce và Stefano Gabbana.'
            ]
        );
        DB::table('brands')->insert(
            [
                'brand_name' => 'Balenciaga',
                'brand_image' => 'https://www.elleman.vn/wp-content/uploads/2018/10/13/logo-thuong-hieu-balenciaga-elle-man-2.jpg',
                'brand_desc' => 'Balenciaga là thương hiệu thời trang cao cấp của Tây Ban Nha do nhà thiết kế Cristóbal Balenciaga thành lập năm 1919. Công ty hiện thuộc tập đoàn đa quốc gia Kering của Pháp.'
            ]
        );
        DB::table('brands')->insert(
            [
                'brand_name' => 'Gucci',
                'brand_image' => 'https://www.elleman.vn/wp-content/uploads/2018/08/19/logo-thuong-hieu-gucci-elle-man-10.png',
                'brand_desc' => 'The House of Gucci, hay được biết đến ngắn gọn là Gucci, là một biểu tượng thời trang sở hữu bởi Ý và Pháp, một nhãn hiệu đồ da nổi tiếng. Gucci được thành lập vào năm 1921 bởi Guccio Gucci tại Florence, Tuscany năm 1921. '
            ]
        );
        DB::table('brands')->insert(
            [
                'brand_name' => 'Valentino',
                'brand_image' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b3/Valentino_logo.svg/220px-Valentino_logo.svg.png',
                'brand_desc' => 'Valentino SpA là một hãng thời trang do Valentino Garavani thành lập vào năm 1957. Maria Grazia Chiuri và Pier Paolo Piccioli là hai Giám đốc sáng tạo của thương hiệu từ tháng 10 năm 2008 đến nay.'
            ]
        );
    }
}

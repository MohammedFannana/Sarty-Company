<?php

namespace Database\Seeders;

use App\Models\CompanyInformation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyInformation::create([
            'header_text' => 'تصميم وتطوير مواقع الويب وتطبيقات الهواتف الذكية بأحدث الأساليب و بواجهة متميزة ولوحة تحكم سهلة وبسيطة مع مراعاة كافة المعاير التى تساعدك فى أرشفة موقعك فى محركات البحث',
            'about_company_introduction' => 'تعتبر شركة سارتي واحدة من الشركات الرائدة في مجال تصميم وتطوير مواقع الانترنت و تصميم وتطوير تطبيقات الأندرويد و IOS فريق عملنا يمتلك أكثر من 11 سنة من الخبرات في مجال تصميم وبرمجة و استضافة المواقع وجميع خدمات التسويق الإلكتروني.            ',
            'about_company_details' => 'تعتبر شركة سارتي واحدة من الشركات الرائدة في مجال تصميم وتطوير مواقع الانترنت و تصميم وتطوير تطبيقات الأندرويد و IOS فريق عملنا يمتلك أكثر من 11 سنة من الخبرات في مجال تصميم وبرمجة و استضافة المواقع وجميع خدمات التسويق الإلكتروني.            ',
            'service_introduction' => 'الدورات المطروحة حاليا , والتي تبدأ فعليا مع الطلاب من أي مستوى كان ومن أي تخصص سوائا من مجالات التكنولوجيا أو التخصصات الأخرى , حيث يتم فيها مراعاة الفروقات الفردية وتقديم المشورة للتوجيه بما يتناسب مع كل طالب وطالبة وذلك يضمن الكفاءة والجودة والفائدة لكل الملتحقين .',
            'course_introduction' => 'الدورات المطروحة حاليا , والتي تبدأ فعليا مع الطلاب من أي مستوى كان ومن أي تخصص سوائا من مجالات التكنولوجيا أو التخصصات الأخرى , حيث يتم فيها مراعاة الفروقات الفردية وتقديم المشورة للتوجيه بما يتناسب مع كل طالب وطالبة وذلك يضمن الكفاءة والجودة والفائدة لكل الملتحقين .',
            'project_introduction' => 'الدورات المطروحة حاليا , والتي تبدأ فعليا مع الطلاب من أي مستوى كان ومن أي تخصص سوائا من مجالات التكنولوجيا أو التخصصات الأخرى , حيث يتم فيها مراعاة الفروقات الفردية وتقديم المشورة للتوجيه بما يتناسب مع كل طالب وطالبة وذلك يضمن الكفاءة والجودة والفائدة لكل الملتحقين .',
            'team_introduction' => 'الدورات المطروحة حاليا , والتي تبدأ فعليا مع الطلاب من أي مستوى كان ومن أي تخصص سوائا من مجالات التكنولوجيا أو التخصصات الأخرى , حيث يتم فيها مراعاة الفروقات الفردية وتقديم المشورة للتوجيه بما يتناسب مع كل طالب وطالبة وذلك يضمن الكفاءة والجودة والفائدة لكل الملتحقين .',
            'contact_introduction' => 'الدورات المطروحة حاليا , والتي تبدأ فعليا مع الطلاب من أي مستوى كان ومن أي تخصص سوائا من مجالات التكنولوجيا أو التخصصات الأخرى , حيث يتم فيها مراعاة الفروقات الفردية وتقديم المشورة للتوجيه بما يتناسب مع كل طالب وطالبة وذلك يضمن الكفاءة والجودة والفائدة لكل الملتحقين .',
            'address' => ' الثلاثيني عمارة اسطنبول',
            'phone' => '+972567749788',
            'gmail' => ' sarty.company@gmail.com',

        ]);
    }
}
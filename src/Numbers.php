<?php

namespace Alkoumi\LaravelArabicNumbers;


class Numbers
{
    /**
     * Spell integer number in Arabic idiom { تتفقيط الأرقام بالعربية الفصحى مثل أربعة آلاف و مئتان و أربعة و ثلاثون ريالًا و خمسون هللة فقط لا غير  }
     * @param $number { هنا تضع الرقم الذي تريد تفقيطه باللغة العربية 523.05 }
     * @return string The Arabic idiom that spells inserted number { تتفقيط الأرقام بالعربية الفصحى }
     * @author  2020 Mohamed Elkoumi <mohammedelkoumi@gmail.com>
     */
    public static function TafqeetNumber($number)
    {
        return (new ArabicNumbers())->TafqeetNumber($number);
    }

    /**
     * Spell number in Arabic idiom as money { تتفقيط المبالغ النقدية بالعربية الفصحى }
     * @param $number { هنا تضع المبلغ الذي تريد تفقيطه باللغة العربية 523.50 }
     * @param string $currency { هنا تضع العملة التي تريد تفقيطها ثلاث حروف 'SAR' }
     * @return string The Arabic idiom that spells inserted number as money
     * @author  2020 Mohamed Elkoumi <mohammedelkoumi@gmail.com>
     */
    public static function TafqeetMoney($number, $currency = 'sar', $lang = 'ar')
    {
        return (new ArabicNumbers())->TafqeetMoney($number, $currency, $lang);
    }

    /**
     * Convert Arabic idiom number string into Integer { الحصول على العدد من الألفاظ العربية }
     * @param string $str The Arabic idiom that spells input number
     * @return integer OR float The number you spell it in the Arabic idiom
     * @author  2020 Mohamed Elkoumi <mohammedelkoumi@gmail.com>
     */
    public static function NumberFromString(string $str)
    {
        return (new ArabicNumbers())->NumberFromString($str);
    }

    /**
     * Represent integer number in Arabic-Indic digits using HTML entities { عرض وتحويل الأرقام الهندية إلى العربية الشرقية لأي قيمة كانت  }
     * @param string OR Mixed $value
     * @return string The Arabic-Indic digits represent inserted integer number
     * using HTML entities
     * @author  2020 Mohamed Elkoumi <mohammedelkoumi@gmail.com>
     * @copyright inspired from The Great 💗 Khaled Al-Sham'aa <khaled@ar-php.org>
     */
    public static function ShowInArabicDigits($value)
    {
        return (new ArabicNumbers())->ArabicDigits($value);
    }

    public static function ShowInEnglishDigits($value)
    {
        return (new ArabicNumbers())->EnglishDigits($value);
    }


}

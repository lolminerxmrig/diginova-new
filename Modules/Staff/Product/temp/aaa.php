<?php


$jayParsedAry = [
  "status" => true,
  "data" => [
    "categoryFormValid" => true,
    "fields" => [
      "select" => [
        "brands" => [
          "options" => [
            $brands,
          ]
        ],
        "categoryProductTypes" => [
          "options" => [
            $types,
          ]
        ],
//        "productClasses" => [
//          "options" => [
//            [
//              "value" => 1,
//              "text" => "مایعات Liquids"
//            ]
//          ]
//        ],
        "divisions" => [
          "options" => [
            [
              "value" => "",
              "text" => "دسته‌بندی کالا را انتخاب کنید"
            ],
          ]
        ]
      ],
      "span" => [
        "categoryTheme" => "colored",
        "categoryThemeTranslated" => "رنگ",
        "categoryTitle" => "دوربین فیلم برداری",
        "categoryThemeDescription" => "<strong>تنوع رنگ=> <\/strong>تنوع رنگ برای کالاهایی استفاده می‌شود که ظاهر مشابه دارند اما در رنگ‌های مختلف فروخته می‌شوند. از این تنوع برای کالاهایی مثل گوشی موبایل استفاده می‌شود که طبقه‌بندی و فروش آن‌ها با استفاده از رنگ‌های مختلف ساده‌تر است. توجه داشته باشید که می‌توانید برای هر رنگ، قیمتی متفاوت درج کنید.\n"
      ],
      "extra" => [
        "allow_fake" => true,
        "brand_other_id" => 719
      ]
    ],
    "autoTitleSuggestion" => [
      "hint_fa" => "ماهیت کالا+برند کالا+کلمه \"مدل\"+مدل کالا",
      "hint_en" => "Brand+Model+Division",
      "division" => [
        "8661" => [
          "enable_edit" => true,
          "syntax" => [
            [
              "type" => "division",
              "value" => null
            ],
            [
              "type" => "brand",
              "value" => null
            ],
            [
              "type" => "text",
              "value" => "مدل"
            ],
            [
              "type" => "model",
              "value" => null
            ]
          ]
        ],
        "8662" => [
          "enable_edit" => true,
          "syntax" => [
            [
              "type" => "division",
              "value" => null
            ],
            [
              "type" => "brand",
              "value" => null
            ],
            [
              "type" => "text",
              "value" => "مدل"
            ],
            [
              "type" => "model",
              "value" => null
            ]
          ]
        ],
        "8663" => [
          "enable_edit" => true,
          "syntax" => [
            [
              "type" => "division",
              "value" => null
            ],
            [
              "type" => "brand",
              "value" => null
            ],
            [
              "type" => "text",
              "value" => "مدل"
            ],
            [
              "type" => "model",
              "value" => null
            ]
          ]
        ]
      ]
    ],
  ]
];

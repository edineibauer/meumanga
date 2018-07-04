<?php

$data['data']['content'] = template(TPL_SECTION_LARGE,
    [
        "content" => template(TPL_COL_5,
            [
                "content" =>
                    [
                        template(TPL_POST_CARD_LIVRE,
                            [
                                "href" => "import/hitomi",
                                "hrefText" => "Importar",
                                "src" => HOME . "assets/img/hintomia.jpg",
                                "content" => "Hitomi"
                            ]
                        ),
                        template(TPL_POST_CARD_LIVRE,
                            [
                                "href" => "import/gekkouscan",
                                "hrefText" => "Importar",
                                "src" => HOME . "assets/img/gekkou.jpg",
                                "content" => "GekkouScan"
                            ]
                        ),
                        template(TPL_POST_CARD_LIVRE,
                            [
                                "href" => "import/mundohentai",
                                "hrefText" => "Importar",
                                "src" => HOME . "assets/img/mundohentai.jpg",
                                "content" => "Mundo Hentai"
                            ]
                        ),
                        template(TPL_POST_CARD_LIVRE,
                            [
                                "href" => "import/hipercool",
                                "hrefText" => "Importar",
                                "src" => HOME . "assets/img/hipercool.jpg",
                                "content" => "HiperCooL"
                            ]
                        ),
                        template(TPL_POST_CARD_LIVRE,
                            [
                                "href" => "import/baixarhentai",
                                "hrefText" => "Importar",
                                "src" => HOME . "assets/img/bhentai.jpg",
                                "content" => "Baixar Hentai"
                            ]
                        )
                    ]
            ])
    ]);
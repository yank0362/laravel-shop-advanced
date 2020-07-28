<?php

return [
    'alipay' => [
        'app_id'         => '2016102500760538',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmBEkopzPbedJNIASHYMYlv/tMAw/vLK/zdonylZ/gVpV8uys92y+ISqsmPETddEzd6WghDARDLTFlU/S65eLHwYKJr/g/OoGMILqGcGW+kcg6Ww41rN0J09n2PhDKQcyQwiMCinCdNJNzW0CoQXFsl7z5mz1NAkJMMjdGqYoRnKn6f04VOEPhUnccoTWmg4R6nRbx4i30PPdI/L8CuPwzFrb474UH36cpWQuYTl9Fr7HdLs8Wl6pQdWQoAIS4oq+cEsQWxT0WMJSIf/JzzYlUFNdD6tqPUYl6o0zNZ1Jo6kiDxo+dZFu/fd7p84mHBc8EO5N3sKvUAI8z6tOmCO26QIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEAidqZUlnaDCkDqy001o7RtrrH2eC1lF4m/l8X0GF+Y0lnym5F6elNsSAIujyn5zfUL9TE/noyRZtwSj8woVyPZQIfiPWt6/rFOMZR0AxqtcBUey8x5uTSSdo3OmzjeGVdIHw3qZcFkdJxD86HzGHugjUyVVGjmR3M12WqG3wPYN591EvOBj/rRDJry+DAm54sebW4jXUOGk8eBYRKN0KZiXqIO47iAV3LVHKllse8u/bHe2E4t7P3Mt2+qILWW/WbgcHSYqN2f+kQ6nMwk6DUW5p8p79Dbs/hGRsjxFhzIH/ZFAeWhPHAmfH0DAO5EL0Av5zyF9JAyE6CPTr5PhVEiwIDAQABAoIBACph5+OWtmAot/UH2AfjLvzEHi+RU6JC9DAeol6xqr7x0ZQ+JQaOcRF07Nn9Tg3bb0QpYUtv3EbkTDi3hscFgxyl83YTOp6jocEb0Alr1977O74Hu4rmbPTBv1saITFh0KjtJ9vfD5pOne4jLEMdFMw5eLkceXTY4aKToiIDGWNJa+1ri7fj9qvr2UaXEcth12iBN81njK02ZTkBfzeeGl70C0G+dvncAGZjb3/wb1pCcuw1Oz2dKTmiuNrVlbBdMsbILuiDjpwqpwibtYMLs5d2f1Rtk6l4xK0B41HxWMC4xnNTvF+qOLOpnIh/4MBwYG/+WcKNLXQND25rEQWq/qkCgYEA+0N1MzFMQwJ0dVGXozjIgKo1LGohUGF6loWqXvOycP/TCgn9r9ST9LFxkyhyYJOAhBKzK/g8gp5la/9+vTJ02qjRLfvygA51OoZbmmKgvKV2A3uovFsa9Wi1GoxMd6Xehy3SnYgB7imeXlxt9pFq01/1nh6uP0N/56kBN7HqELcCgYEAjHPZ9Q9F+xJbcWv2WOel89hwUZv4/FzEL0f2yF+jSvFtHzYOQh21HNquXJMagU/3JN6fJAasy2KtrdokWbs405nLgibAhm+1Yb1p+rTdzjV/7dVpz16prK+kTP3MCkrm9KqHDY2Knon2P66WuOAYkqFrT6RVULiTJj4nPR+DLs0CgYBaaVWczBpi6lk5ddiYlPAgzB5CExZVtB3GV+aMMCh/XK51qE6unFF49PinOSCe+7R80bXDFpm/bnuUNuVF8wf1PlW2tDf4ODuaiYogrWilOOyUKET5MdcrgzfXi7BgRUEjZyuoH66CIluoHJ484OqNkLPy55tPjFxT4Y5cmhpdVQKBgDL2houpMxdbHdsV9Zlk1I6aZob2NW48quMNFbq3GSVEXPgKQTo0VVdW8hWdOuzY+zBhpxUHZwOVlreSg8YbbQ86quFa9ljRh9sjQ6U4o5MDTpwZ5/7atm52fQOCw9qoOw1kIwUD6tyD6tpIm2AR0FjEQY/wbRSRJLOnsc039f2xAoGAGXQVAh62RQVH4tem955FGSSiYDkK0ClJziD6zVHM7C8immOD6do/SzxtNp64AiEHzAtVcN9Lt96lzBohtjwhc/jMA62GO8lS+4hYjPQWwkioMh+xUaOvHUkLPsiO1RSyZJcF/2KMYCXMkhYHY8izfM2OpiJywvC/6exSW789Mjg=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];

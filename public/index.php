<?php

$piadasTodas = [

    ['piada' => 'O que uma impressora falou pra outra? Esse papel é seu ou é IMPRESSÃO minha.', 'piadista' => 'luizhenryaraujo', 'foto' => 'https://media-exp1.licdn.com/dms/image/C4E03AQHWD1ICo8TfTg/profile-displayphoto-shrink_400_400/0?e=1610582400&v=beta&t=zmnYCmnuS9bpLVKg3ZJTEfiG1ns2zp3qboX8ygYnlFc'],
    ['piada' => 'Existem 10 tipos de pessoas, as que sabem binário e as que não.', 'piadista' => 'edersondeveloper', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/f03455d8-f48b-4784-a077-dabc7a051fa5-profile_image-70x70.png'],
    ['piada' => 'Qual a cidade brasileira onde mais se usa SQL? Joinville', 'piadista' => 'pokemaobr', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/27c52dc8-cde6-4d92-a86a-0454f0b4d106-profile_image-70x70.png'],
    ['piada' => '!false -> é engraçado pq é verdadeiro', 'piadista' => 'monikinhadev', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/de5b6e6f-d503-445b-91ab-6c5864458f0e-profile_image-70x70.png'],
    ['piada' => 'Qual é o professor que corrige a sintaxe do seu código?', 'piadista' => 'Professor PASCALe', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/27c52dc8-cde6-4d92-a86a-0454f0b4d106-profile_image-70x70.png'],
    ['piada' => 'Você já notou como os Windows-95/98/XP/Vista são rápido? Nem eu!', 'piadista' => 'monikinhadev', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/de5b6e6f-d503-445b-91ab-6c5864458f0e-profile_image-70x70.png'],
    ['piada' => 'Ruby é a linguagem favorita da xuxa, pq tem do end', 'piadista' => 'chicocodes', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/6550dbad-1bb6-45ad-a49b-8d419cdccbe0-profile_image-70x70.png'],
    ['piada' => 'Quando o mundo surgiu? em 1 de janeiro de 1970.', 'piadista' => 'edersondeveloper', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/f03455d8-f48b-4784-a077-dabc7a051fa5-profile_image-70x70.png'],
    ['piada' => 'O que o C++ disse para o C? Você não tem classe.', 'piadista' => 'leandro_coelho', 'foto' => 'https://static-cdn.jtvnw.net/user-default-pictures-uv/ce57700a-def9-11e9-842d-784f43822e80-profile_image-70x70.png'],
    ['piada' => 'Meu computador não tem memória, só uma vaga lembrança.', 'piadista' => 'eduardoklosowski', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/0334a0d3-1849-481e-8b27-e6a5bf3bc504-profile_image-70x70.png'],
    ['piada' => 'O que o processador advogado disse para o outro? Não esquenta com esse processo.', 'piadista' => 'luizhenryaraujo', 'foto' => 'https://media-exp1.licdn.com/dms/image/C4E03AQHWD1ICo8TfTg/profile-displayphoto-shrink_400_400/0?e=1610582400&v=beta&t=zmnYCmnuS9bpLVKg3ZJTEfiG1ns2zp3qboX8ygYnlFc'],
    ['piada' => 'Vc faz ciência da computação? Formata meu netbook?', 'piadista' => 'mercuriomng', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/c1932647-eb4a-4740-941a-c7d339b63a25-profile_image-70x70.png'],
    ['piada' => 'Esse site é responsivo sim, ele responde uma requisição HTTP!', 'piadista' => 'profbrunolopes', 'foto' => 'https://static-cdn.jtvnw.net/jtv_user_pictures/db9882dc-6ea1-47f0-babc-bce74f49471d-profile_image-70x70.png']
];

shuffle($piadasTodas);

$piadas[] = array_pop($piadasTodas);
$piadas[] = array_pop($piadasTodas);
$piadas[] = array_pop($piadasTodas);

?>

<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F3Q0X388FS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-F3Q0X388FS');
    </script>
</head>
<body>
<section class="py-5 text-center">
    <div class="container py-4 text-white">
        <header>
            <h1 class="display-4">piadas.dev</h1>
            <div class="font-top">
                <p class="font-italic mb-1">A sua válvula de escape na TI.</p>
                <p class="font-italic">
                    <a class="text-white" href="https://twitch.tv/pokemaobr/">
                        <u>Feito pela live do pokemão</u>
                    </a>
                </p>
            </div>
        </header>
    </div>
</section>


<section class="pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-xl-8 mx-auto">
                <div class="p-5 bg-white shadow rounded">
                    <!-- Bootstrap carousel-->
                    <div class="carousel slide" id="carouselExampleIndicators" data-ride="carousel">
                        <!-- Bootstrap carousel indicators [nav] -->
                        <ol class="carousel-indicators mb-0">
                            <li class="active" data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>


                        <!-- Bootstrap inner [slides]-->
                        <div class="carousel-inner px-5 pb-4">
                            <!-- Carousel slide-->
                            <?php foreach ($piadas as $chave => $piada) { ?>

                                <div class="carousel-item <?= ($chave == 0) ? 'active' : '' ?>">
                                    <div class="media"><img class="rounded-circle img-thumbnail"
                                                            src="<?= $piada['foto'] ?>"
                                                            alt="" width="75">
                                        <div class="media-body ml-3">
                                            <blockquote class="blockquote border-0 p-0">
                                                <p class="font-italic lead"><i
                                                            class="fa fa-quote-left mr-3 text-success"></i><?= $piada['piada'] ?>
                                                </p>
                                                <footer class="blockquote-footer"><?= $piada['piadista'] ?> -
                                                    <cite title="Source Title"> live do pokemaobr</cite>
                                                </footer>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>


                        <!-- Bootstrap controls [dots]-->
                        <a class="carousel-control-prev width-auto" href="#carouselExampleIndicators" role="button"
                           data-slide="prev">
                            <i class="fa fa-angle-left text-dark text-lg"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next width-auto" href="#carouselExampleIndicators" role="button"
                           data-slide="next">
                            <i class="fa fa-angle-right text-dark text-lg"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>




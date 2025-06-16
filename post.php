<?php
    include_once("templates/header.php");
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $postAtual;
        foreach($posts as $post){
            if($post['id'] == $postId){
                $postAtual = $post;
            }
        }
    }
?>
    <main id="post-main">
    <div id="post-titulo-container">
        <h1 id="post-titulo"><?= $postAtual['titulo']?></h1>
        <h3 id="post-desc"><?= $postAtual['desc']?></h3>
        <img id="post-img" src="<?=$BASE_URL?>img/<?=$postAtual['img']?>" alt="<?=$postAtual['titulo']?>">
    </div>
    
    <h2 class="post-subtitulo">Introdução</h2>
    <p class="post-paragrafo">Em 2025, o cenário tecnológico global continua a evoluir rapidamente, impulsionado por avanços em inteligência artificial, computação em nuvem, internet das coisas (IoT), segurança cibernética e aplicações móveis. Dentro desse ambiente dinâmico, algumas linguagens de programação permanecem no topo não apenas por serem populares, mas por atenderem com eficiência às novas demandas do mercado. A adoção dessas linguagens reflete a busca por produtividade, desempenho, segurança e escalabilidade nas soluções tecnológicas modernas. A seguir confira 5 das linguagens mais populares em 2025:</p>
    
    <h2 class="post-subtitulo">1. Python</h2>
    <img class="post-logo-linguagem" src="<?=$BASE_URL?>img/python.png" alt="">
    <p class="post-paragrafo">A linguagem Python segue sendo uma das mais populares graças à sua sintaxe simples, clareza e versatilidade. É amplamente usada em áreas como inteligência artificial e machine learning, com bibliotecas poderosas como TensorFlow e PyTorch, além de ser referência em ciência de dados com ferramentas como Pandas e NumPy. No desenvolvimento web, frameworks como Django e Flask facilitam a criação de aplicações robustas, enquanto sua capacidade de automação o torna ideal para scripts e tarefas administrativas. Sua comunidade ativa e ampla documentação tornam Python uma excelente escolha tanto para iniciantes quanto para profissionais experientes.</p>
    
    <h2 class="post-subtitulo">2. JavaScript</h2>
    <img class="post-logo-linguagem" src="<?=$BASE_URL?>img/javascript.png" alt="">
    <p class="post-paragrafo">JavaScript, junto com seu superset tipado TypeScript, permanece como peça fundamental para o desenvolvimento web. Ele é usado para criar interfaces dinâmicas em navegadores, além de permitir a construção de servidores e APIs com Node.js. Frameworks como React, Vue e Angular continuam impulsionando sua adoção em larga escala. Também é amplamente usado no desenvolvimento de aplicações móveis com ferramentas como React Native, além de projetos em tempo real, como chats e jogos multiplayer. Por ser quase onipresente no desenvolvimento de interfaces, aprender JavaScript é praticamente obrigatório para desenvolvedores frontend modernos.</p>
    
    <h2 class="post-subtitulo">3. Go</h2>
    <img class="post-logo-linguagem" src="<?=$BASE_URL?>img/golang.png" alt="">
    <p class="post-paragrafo">Já a linguagem Go, ou Golang, criada pelo Google, vem crescendo graças à sua eficiência e simplicidade. Com sintaxe enxuta e excelente suporte à concorrência, é muito utilizada em arquiteturas de microserviços, APIs escaláveis e plataformas em nuvem. Por oferecer alto desempenho e facilidade de manutenção, Go tem sido uma escolha estratégica em empresas que priorizam velocidade e confiabilidade no back-end.</p>
    
    <h2 class="post-subtitulo">4. Rust</h2>
    <img class="post-logo-linguagem" src="<?=$BASE_URL?>img/rust.png" alt="">
    <p class="post-paragrafo">Rust também tem conquistado espaço com sua proposta de oferecer segurança de memória sem sacrificar desempenho. É uma linguagem ideal para desenvolvimento de sistemas e infraestrutura de baixo nível, como kernels, drivers e engines de jogos. A forte segurança contra erros comuns, como buffer overflows, a torna excelente para aplicações críticas em segurança cibernética. Sua crescente adoção por grandes empresas como Microsoft, Amazon e Mozilla reforça sua relevância no cenário atual.</p>
    
    <h2 class="post-subtitulo">5. Kotlin</h2>
    <img class="post-logo-linguagem" src="<?=$BASE_URL?>img/kotlin.png" alt="">
    <p class="post-paragrafo">Por fim, Kotlin, desenvolvido pela JetBrains e oficialmente apoiado pelo Google, se consolidou como a principal linguagem para desenvolvimento Android. Com uma sintaxe mais moderna e concisa do que Java, e total interoperabilidade com ele, o Kotlin permite a construção de aplicativos mais seguros e legíveis. Além do uso mobile, também vem sendo adotado no back-end com frameworks como Ktor, e em projetos multiplataforma, permitindo compartilhar lógica de negócios entre diferentes ambientes.</p>
    </main>
    <aside id="post-aside">
        <div id="post-tags-container">
        <h3>Tags</h3>
        <ul>
            <?php foreach($postAtual['tags'] as $tag): ?>
                <li><a class="post-tag" href="#"><?=$tag?></a></li>
            <?php endforeach; ?>
        </ul>
        </div>
    </aside>
</body>
</html>

<?php
    include_once("templates/footer.php");
?>
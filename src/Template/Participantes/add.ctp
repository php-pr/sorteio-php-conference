
<div class="participantes form large-12 medium-12 columns content">

    <h2>Recomendações - Regras para participação</h2>

    <span class="red-highlight">Leia atentamente às recomendações/regras e, somente estando de acordo, preencha seus dados para o sorteio</span>

    <br /><br />
    <strong>O que será sorteado?</strong>
    <br />
    01 (uma) inscrição na modalidade Silver para a <a href="http://phpconference.com.br/" target="_blank">PHP Conference Brasil 2015</a> 
    - O maior evento de PHP da América Latina! 
    
    <br /><br />
    <strong>Quando será sorteado?</strong>
    <br />
    Sabemos que o(a) ganhador(a) terá de se programar para poder ir ao evento, com isso o sorteio será realizado no início do mês de Novembro/2015, cerca de 1 mês antes do evento. Em breve teremos a confirmação da data.
    
    <br /><br />
    <strong>O que é a modalidade Silver?</strong>
    <br />
    A modalidade <a href="http://phpconference.com.br/conteudo/111/Silver" target="_blank">Silver</a> 
    dá direito a assistir as palestras - inlcuindo Keynotes e atrações internacionais - que acontecerão no dia 3 a tarde e nos dias 4 e 5 o dia inteiro.
    
    <br /><br />
    <strong>Quem pode participar?</strong>
    <br />
    Qualquer desenvolvedor, estudante ou interessado na linguagem PHP.
    
    <br /><br />
    <strong>NÃO</strong> está incluso no sorteio:
    
    <ul>
        <li>
            Deslocamento (ônibus, avião, combustível, taxi, nem 
            <a href="http://phpconference.com.br/conteudo/104/Caravanas" target="_blank">caravana</a>)
        </li>
        <li>Despesas com alimentação</li>
        <li>Hotel, camping, etc</li>
        <li><a href="http://phpconference.com.br/conteudo/115/Praia" target="_blank">PHP Conference On Beach</a></li>
    </ul>
    O(a) ganhador(a) deverá arcar com tais despesas, portanto, inscreva-se somente se estiver de acordo.
    
    
    <br /><br />
    <strong>Ganhei mas poderei ir, o que fazer?</strong>
    <br />
    Não hesite em nos informar através do email <a href="mailto:contato@phppr.net">contato@phppr.net</a>. 
    Desta forma conseguiremos nos agilizar e sortear para outra pessoa.
    
    <br /><br />
    <strong>Dica</strong>
    <br />
    Antes de preencher seus dados, 
    pesquise os <a href="http://phpconference.com.br/conteudo/88/Hoteis" target="_blank">hotéis</a> 
    e/ou <a href="http://phpconference.com.br/conteudo/113/PHP+Camping" target="_blank">camping</a> e também 
    <a href="http://phpconference.com.br/conteudo/89/Alimentacao" target="_blank">alimentação</a>. 
    Após se certificar de que tudo está propício para seu comparecimento caso sorteado, sinta-se à vontade para preencher seus dados e concorrer.
    
    <br /><br />
    <button id="agree">Estou de acordo, quero participar!</button>

    <div class="hidden-form">
        <?= $this->Form->create($participante) ?>
        <fieldset>
            <legend>Preencha aqui seus dados</legend>
            <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('email');
            ?>
            <div class="g-recaptcha" data-sitekey="6Lfvfw4TAAAAAPcS9t9R3LAEPoMVVHwxRpnQS1Wo"></div>
        </fieldset>
        <?= $this->Form->button(__('Confirmar participação')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>

<script src='https://www.google.com/recaptcha/api.js'></script>

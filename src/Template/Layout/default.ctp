<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
$cakeDescription = 'PHP PR - Formulário para sorteio';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('base.css') ?>
        <?= $this->Html->css('cake.css') ?>
        <?= $this->Html->script('https://code.jquery.com/jquery-2.1.4.min.js') ?>
        <?= $this->Html->script('main') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body>
        <nav class="top-bar expanded" data-topbar role="navigation">
            <ul class="title-area large-3 medium-4 columns centered-text">
                <li class="name">
                    <h1>
                        <a href="/">
                            <center>
                                <?= $this->Html->image('php-pr-logo.png', ['width' => 125]); ?>
                            </center>
                        </a>
                    </h1>
                </li>
            </ul>
            <section class="top-bar-section">
                <ul class="right">
                    <li><a target="_blank" href="http://phppr.net">Site do PHP PR</a></li>
                    <li><a target="_blank" href="https://www.facebook.com/groups/1398320767076609/">Facebook do PHP PR</a></li>
                    <li><a target="_blank" href="https://github.com/php-pr">Github do PHP PR</a></li>
                </ul>
            </section>
        </nav>
        <?= $this->Flash->render() ?>
        <section class="container clearfix">
            <?= $this->fetch('content') ?>
        </section>
        <footer>
        </footer>
    </body>
</html>

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

$cakeDescription = 'CakePHP: the rapid development php framework';
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
        
    <?= $this->Html->css('semantic.css') ?>
    <?= $this->Html->css('OnlineTailor.css') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->Html->script('jquery.min.js'); ?>
    <?= $this->Html->script('semantic.js'); ?>
    </head>
    <body>
        <div class="ui visible sidebar inverted vertical menu">
            <h1 class="ui header" style="color: white;margin-top: 20px;margin-left: 10px;">Tailor Admin</h1>
            <a class="item" href="<?php echo $this->Url->build(["controller" => "home","action" => "index"]);?>">
                Home
            </a>
            
            <a class="item" href="<?php echo $this->Url->build(["controller" => "peoplesaying","action" => "index"]);?>">
                What People Say
            </a>
            <a class="item" href="<?php echo $this->Url->build(["controller" => "socialmedia","action" => "index"]);?>">
                Social Media
            </a>
            <a class="item" href="<?php echo $this->Url->build(["controller" => "contact","action" => "index"]);?>">
                Contact
            </a>
        </div>
        
    <?= $this->Flash->render() ?>
        <div class="ui grid" style="padding: 20px;">
            <div class="three wide column"></div>   
            <div class="thirteen wide column  container clearfix" >
            <?= $this->fetch('content') ?>
            </div>
        </div>
    </body>
</html>

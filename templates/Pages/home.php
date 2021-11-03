<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->disableAutoLayout();

$cakeDescription = 'ProjectHub: Connecting projects with skills, one task at a time';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake', 'home']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <header>
        <div class="container text-center">
            <a href="" target="_blank" rel="noopener">
                <img alt="CakePHP" src="https://cakephp.org/v2/img/logos/CakePHP_Logo.svg" width="350" />
            </a>
            <h1>
                ProjectHub
            </h1>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="column">
                        <h4>Modules related to Users</h4>
                        <ul>
                            <li class="bullet success"><a href="profiles/">Profiles</a>: User profiles</li>
                            <li class="bullet success"><a href="skills/">Skills</a>: Master skills list</li>
                            <li class="bullet success"><a href="proficiencies/">Proficiencies</a>: Master proficiencies list</li>
                            <hr>
                            <li class="bullet success"><a href="proficiencyProfileSkills/">Profile Skills & Proficiencies</a>: List of which users have which skills</li>
                        </ul>
                    </div>
                    <div class="column">
                        <h4>Modules Related to Companies</h4>
                        <ul>
                            <li class="bullet success"><a href="companies/">Companies</a>: List of companies that have projects</li>
                            <li class="bullet success"><a href="companyProfiles/">Company-Profiles</a>: Which users are employees of which companies</li>
                            <li class="bullet success"><a href="projects/">Projects</a>: List of projects companies have</li>
                            <hr>
                            <li class="bullet success"><a href="proficiencyProjectSkills/">Project Skills & Proficiencies</a>: Skills and proficiencies each project needs/requests</li>
                            <li class="bullet success"><a href="profileProjects/">Project Assignments</a>: List of who is participating in each project</li>
                            <li class="bullet success"><a href="profileProjectSkills/">Project Assignment Skills</a>: List of which skills each person is bringing to each project</li>
                        </ul>
                    </div>
                </div>

                <hr>
            </div>
        </div>
    </main>
</body>
</html>

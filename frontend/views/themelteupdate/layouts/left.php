<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">

            <div class="pull-left text-center info">
                <p>200$</p>
                <span>balance</span>
<!--                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
            </div>
        </div>



        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [
                    ['label' => 'Settings', 'options' => ['class' => 'header borderbottom text-center boldsetting']],
                    ['label' => 'Gii', 'icon' => 's-setting1', 'url' => ['/gii'] ,'options' => ['class' => 'nawitem']],
                    ['label' => 'Gii', 'icon' => 's-setting2', 'url' => ['/gii'] ,'options' => ['class' => 'nawitem']],
                    ['label' => 'Gii', 'icon' => 's-setting3', 'url' => ['/gii'] ,'options' => ['class' => 'nawitem']],
                    ['label' => 'Gii', 'icon' => 's-setting4', 'url' => ['/gii'] ,'options' => ['class' => 'nawitem']],
                    ['label' => 'Gii', 'icon' => 's-setting5', 'url' => ['/gii'] ,'options' => ['class' => 'nawitem']],
                    ['label' => 'Gii', 'icon' => 's-setting6', 'url' => ['/gii'] ,'options' => ['class' => 'nawitem']],
                    ['label' => 'Gii', 'icon' => 's-setting7', 'url' => ['/gii'] ,'options' => ['class' => 'nawitem']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Same tools',                        'options' => ['class' => 'nawitem'],
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],

                    ],
                ],
            ]
        ) ?>

    </section>

</aside>

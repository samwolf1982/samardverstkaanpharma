
1) cкопировать в папку web из папки web  папки: customizetheme,img
2) в папку view скопировать themelteupdate
3) в конфиг вставить 
'view' => [
            'theme' => [
                'pathMap' => [
                    '@app/views' => '@app/views/themelteupdate',
                ],
            ],
        ],

4) из папки ../assets скопироват в папку ../assets файл AdminLteAsset.php
 
5)composer require dmstr/yii2-adminlte-asset "2.*"

6) кастомизации в папке  /frontend/web/customizetheme/adminlte







//   public $publishOptions = [
//        'forceCopy' => true,
//        //you can also make it work only in debug mode: 'forceCopy' => YII_DEBUG
  //  ];

в AdminLteAsset.php
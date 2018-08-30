Chosen Select Widget for Yii 2
=========
Chosen Select Widget based on Chosen jQuery plugin [chosen](http://harvesthq.github.io/chosen).
Fork from [yii2-chosen-select](https://github.com/yii2mod/yii2-chosen-select)

[![Latest Stable Version](https://poser.pugx.org/rafael-neri/yii2-chosen/v/stable)](https://packagist.org/packages/ext4yii2/chosen) [![Total Downloads](https://poser.pugx.org/rafael-neri/yii2-chosen/downloads)](https://packagist.org/packages/ext4yii2/chosen) [![License](https://poser.pugx.org/rafael-neri/yii2-chosen/license)](https://packagist.org/packages/ext4yii2/yii2-chosen)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). 

Either run

```sh
composer require ext4yii2/chosen
```

or add

```json
"ext4yii2/chosen": "~1.0"
```

to the require section of your composer.json.

Usage
------------

1) Usage with ActiveForm and model

```php
echo $form->field($model, 'subject')->widget(\ext4yii2\chosen\ChosenSelect::class, [
    'items' => [
        'first' => 'First',
        'second' => 'Second'
     ],
]); 
```
  
2) Usage without a model

```php
echo \ext4yii2\chosen\ChosenSelect::widget([
     'name'  => 'select',
     'items' => BooleanEnum::listData(),
     'options' => [
         'width' => '95%'
     ]
 ]);
```

Select Options 
----------------
You can find them on the [options page](http://harvesthq.github.io/chosen/options.html)

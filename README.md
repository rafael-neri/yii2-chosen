Chosen Select Widget for Yii 2
=========
Chosen Select Widget based on Chosen jQuery plugin [chosen](http://harvesthq.github.io/chosen).
Fork from [yii2-chosen-select](https://github.com/yii2mod/yii2-chosen-select)

[![Latest Stable Version](https://poser.pugx.org/rafael-neri/yii2-chosen/v/stable)](https://packagist.org/packages/yii2ext/chosen) [![Total Downloads](https://poser.pugx.org/rafael-neri/yii2-chosen/downloads)](https://packagist.org/packages/yii2ext/chosen) [![License](https://poser.pugx.org/rafael-neri/yii2-chosen/license)](https://packagist.org/packages/yii2ext/yii2-chosen)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/). 

Either run

```sh
composer require yii2ext/chosen
```

or add

```json
"yii2ext/chosen": "~1.0"
```

to the require section of your composer.json.

Usage
------------

1) Usage with ActiveForm and model

```php
echo $form->field($model, 'subject')->widget(\yii2ext\chosen\ChosenSelect::class, [
    'items' => [
        'first' => 'First',
        'second' => 'Second'
     ],
]); 
```
  
2) Usage without a model

```php
echo \yii2ext\chosen\ChosenSelect::widget([
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

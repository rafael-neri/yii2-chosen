Chosen Select Widget for Yii 2
=========
Chosen Select Widget based on Chosen jQuery plugin [chosen](http://harvesthq.github.io/chosen).

Fork from [yii2-chosen-select](https://github.com/yii2mod/yii2-chosen-select)


[![Latest Stable Version](https://poser.pugx.org/ext4yii2/chosen/v/stable?format=flat-square)](https://packagist.org/packages/ext4yii2/chosen)
[![Total Downloads](https://poser.pugx.org/ext4yii2/chosen/downloads?format=flat-square)](https://packagist.org/packages/ext4yii2/chosen)
[![License](https://poser.pugx.org/ext4yii2/chosen/license?format=flat-square)](https://packagist.org/packages/ext4yii2/chosen)

Installation
------------

Via Composer (Recommended)

```sh
composer require ext4yii2/chosen "~1.0"
```

or add manually in require section of your compose.json

```json
"ext4yii2/chosen": "~1.0"
```


Usage
------------

1) Usage with ActiveForm and model

```php
use \ext4yii2\chosen\ChosenSelect;
echo $form->field($model, 'subject')->widget(ChosenSelect::class, [
    'items' => [
        'first' => 'First',
        'second' => 'Second'
     ],
]); 
```
  
2) Usage without a model

```php
use \ext4yii2\chosen\ChosenSelect;
echo ChosenSelect::widget([
     'name'  => 'select',
     'items' => [
        'first' => 'First',
        'second' => 'Second'
     ],
 ]);
```

3) Using Options and WidgetOptions

```php
use \ext4yii2\chosen\ChosenSelect;
echo ChosenSelect::widget([
     'name'  => 'select',
     'items' => [
        'first' => 'First',
        'second' => 'Second'
     ],
     'options' => [
         'prompt' => 'Select Option ...',
     ],
     'pluginOptions' => [
         'disable_search' => true,
     ],
 ]);
```

Options
----------------
Visit Yii2 Docs for [more options](https://www.yiiframework.com/doc/api/2.0/yii-helpers-basehtml#dropDownList()-detail).

Plugin Options 
----------------
Visit Chosen Docs for more [Plugin Options](http://harvesthq.github.io/chosen/options.html).

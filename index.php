<?php

use classes\Checkbox;
use classes\Date;
use classes\File;
use classes\Form;
use classes\FormHelper;
use classes\Hidden;
use classes\HtmlList;
use classes\Image;
use classes\Input;
use classes\Interval;
use classes\Link;
use classes\ListItem;
use classes\Ol;
use classes\Option;use classes\Password;
use classes\Radio;
use classes\Select;use classes\Submit;
use classes\Tag;
use classes\TagHelper;
use classes\Textarea;
use classes\Ul;

require_once $_SERVER['DOCUMENT_ROOT'] . '/internal_settings.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/lib/functions.php';

$date = new Date();
$date1 = new Date('2000-12-31');
$date2 = new Date('2022-06-03');
//echo $date;
//print_debug($date->getYear());
//print_debug($date->getMonth());
//print_debug($date->getMonth('ru'));
//print_debug($date->getMonth('en'));
//print_debug($date->getDay());
//print_debug($date->getWeekDay('ru'));
//print_debug($date->getWeekDay('en'));
//print_debug($date->getWeekDay());
//
//echo (new Date())->addDay(1);

//$interval = new Interval($date1, $date2);
//print_debug($interval);
//print_debug($interval->toDays());
//print_debug($interval->toMonths());
//print_debug($interval->toYears());

//$file = new File('files/test.txt');
//
//print_debug($file);
//print_debug($file->getName());
//print_debug($file->getDir());
//print_debug($file->getExt());
//print_debug($file->getSize());


//$file->setText('tesst test');
//$file->appendText('t432234t');
//print_debug($file->getText());
//
//$file->copy('files/copy.txt');
////$file->delete();
////$file->rename('new');
//print_debug($file->replace('upload/new2.txt'));

//$tag = new Tag('input');

//echo $tag->open('input');
//
//$div = new Tag('div');

//echo $div->open() . 'Element Div' . $div->close();


//$img = new Tag('img');

//echo $img->open();

//$tag = new Tag('input', ['id' => 'test', 'class' => 'eee bbb']);
//echo $tag->open(); // выведет <input id="test" class="eee bbb">

//$tag = new Tag('input');
//
//echo $tag
//    ->setAttr('id', 'test1') // добавляем атрибут 'id'
//    ->setAttr('class', 'eee1 bbb') // добавляем атрибут 'class'
//    ->removeAttr('clathss') // добавляем атрибут 'class'
//    ->open(); // выведет <input id="test" class="eee bbb">
//
//$tag = new Tag('div');
//echo $tag->setAttr('id', 'test')->open(); // откроем тег
//echo $tag->close(); // закроем тег
//
//$tag = new Tag('input');
//
//echo $tag
//    ->setAttrs(['id' => 'test', 'class' => 'eee'])
//    ->setAttr('type', 'text')
//    ->open(); // выведет <input id="test" class="eee" type="text">
//
//$tag = new Tag('input');
//
//echo $tag
//    ->setAttr('id', 'test')
//    ->setAttr('disabled', true)
//    ->open(); // выведет <input id="test" disabled>
//
//$tag = new Tag('input');
//
//echo $tag
//    ->setAttr('id', 'test')
//    ->setAttr('class', 'eee bbb')
//    ->open();
//
//echo (new Tag('input'))
//    ->setAttr('id', 'test')
//    ->setAttr('class', 'eee bbb')
//    ->open();
//
//?>
<br>
<?php
$form = (new Form)->setAttrs(['action' => '/', 'method' => 'GET']);

echo $form->open();
echo (new Input)->setAttr('name', 'year');

echo (new Password)->setAttr('name', 'passw');
echo (new Textarea)->setAttr('name', 'text')->show();

echo (new Hidden)->setAttr('name', 'id');

echo new Submit;
echo $form->close();
?>

<?php
$form = (new Form)->setAttrs([
    'action' => '',
    'method' => 'GET'
]);

echo $form->open();
echo (new Checkbox)->setAttr('name', 'checkbox');
echo (new Input)->setAttr('name', 'user');
echo (new Radio)->setAttr('name', 'radio');
echo (new Radio)->setAttr('name', 'radio');

echo new Submit;
echo $form->close();
?>

<?php
echo (new Select)
    ->add( (new Option())->setText('item1') )
    ->add( (new Option())->setText('item2')->setSelected() )
    ->add( (new Option())->setText('item3') )
    ->show();
?>
<?php
$th = new TagHelper();
echo $th->open('div') . 'text' . $th->close('div'); // <div>text</div>
?>

<?php
$th = new TagHelper();

echo $th->open('form', ['action' => 'test.php', 'method' => 'GET']);
echo $th->open('input', ['name' => 'year']);
echo $th->open('input', ['type' => 'submit']);
echo $th->close('form');
?>

<?php
$fh = new FormHelper();

echo $fh->openForm(['action' => '', 'method' => 'GET']);
echo $fh->input(['name' => 'year']);
echo $fh->checkbox(['name' => 'check']);
echo $fh->textarea(['name'=>'taexarea', 'class' => 't1', 'text'=>'text test']);
echo $fh->submit();
echo $fh->closeForm();
?>

<?php
$fh = new FormHelper();

echo $fh->select(
    ['name' => 'list', 'class' => 'eee'],
    [
        ['text' => 'item1', 'attrs' => ['value' => '1']],
        ['text' => 'item2', 'attrs' => ['value' => '1', 'selected' => true]],
        ['text' => 'item1', 'attrs' => ['value' => '1', 'class' => 'last']],
    ]);
?>

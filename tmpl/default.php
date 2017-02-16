<?php

defined('_JEXEC') or die;

$customcategory_enable = $params->get('customcategory_enable');

$customcategory = $params->get('customcategory');

$custommenu = $params->get('custommenu');

$type_of_feed = $params->get('type_of_feed');

$icon_image = $params->get('icon_image');

$font_awesome_icon = $params->get('font_awesome_icon');

$text = $params->get('text');

$type_of_link = $params->get('type_of_link');

$text_with_image_postion = $params->get('text_with_image_postion'); 

if ($text_with_image_postion == 'top'){$text_with_font = '<div class="myfeedtext">'.$text.'</div><br><i class="rssfonticon '.$font_awesome_icon.'"></i>';}

if ($text_with_image_postion == 'left'){$text_with_font = '<div class="myfeedtext">'.$text.'</div> <i class="rssfonticon '.$font_awesome_icon.'"></i>';}

if ($text_with_image_postion == 'right'){$text_with_font = '<i class="rssfonticon '.$font_awesome_icon.'"></i> <div class="myfeedtext">'.$text.'</div>';}

if ($text_with_image_postion == 'bottom'){$text_with_font = '<i class="rssfonticon '.$font_awesome_icon.'"></i><br><div class="myfeedtext">'.$text.'</div>';}

if ($text_with_image_postion == 'top'){$text_with_image = '<div class="myfeedimage"><div class="myfeedtext">'.$text.'</div><br><img src="'.$icon_image.'" alt="RSS Feed" /></div>';}

if ($text_with_image_postion == 'left'){$text_with_image = '<div class="myfeedimage"><div class="myfeedtext">'.$text.'</div> <img src="'.$icon_image.'" alt="RSS Feed" /></div>';}

if ($text_with_image_postion == 'right'){$text_with_image = '<div class="myfeedimage"><img src="'.$icon_image.'" alt="RSS Feed" /> <div class="myfeedtext">'.$text.'</div></div>';}

if ($text_with_image_postion == 'bottom'){$text_with_image = '<div class="myfeedimage"><img src="'.$icon_image.'" alt="RSS Feed" /><br><div class="myfeedtext">'.$text.'</div></div>';}

$option = JRequest::getCmd('option');

$view = JRequest::getCmd('view');

$app = Jfactory::getApplication(); 

    $input=$app->input;

    if ($input->getCmd('option')=='com_content' 

    && $input->getCmd('view')=='article' ){

        $cmodel = JModelLegacy::getInstance('Article', 'ContentModel');

        $catid = $cmodel->getItem($app->input->get('id'))->catid;

    }

    

$menu = JFactory::getApplication()->getMenu();

$alias = $menu->getItem($custommenu)->alias;  

 if (($view == 'category') or ($view == 'featured')){

 $viewstatus = 'ok';

 }

 else{

 $viewstatus = '';

 }

if ($customcategory_enable == 'customcategory'){

if ((!empty($font_awesome_icon)) && ($type_of_link == 'font_awesome_icon')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$customcategory).'&format=feed&type='.$type_of_feed.'"><i class="rssfonticon '.$font_awesome_icon.'"></i></a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'icon_image')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$customcategory).'&format=feed&type='.$type_of_feed.'"><div class="myfeedimage"><img src="'.$icon_image.'" alt="RSS Feed" /></div></a></div>';

}

if ((!empty($font_awesome_icon)) && ($type_of_link == 'text_and_font_awesome_icon')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$customcategory).'&format=feed&type='.$type_of_feed.'">';

echo $text_with_font;

echo '</a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'text_and_icon_image')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$customcategory).'&format=feed&type='.$type_of_feed.'"><div class="myfeedimage">';

echo $text_with_image;

echo '</a></div>';

}

if ((!empty($text)) && ($type_of_link == 'text')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$customcategory).'&format=feed&type='.$type_of_feed.'"><div class="myfeedtext">'.$text.'</div></i></a></div>';

}

 }

 

 if ($customcategory_enable == 'custommenu'){

if ((!empty($font_awesome_icon)) && ($type_of_link == 'font_awesome_icon')){

echo '<div class="myfeed"><a href="'.JURI::base().$alias.'?format=feed&type='.$type_of_feed.'"><i class="rssfonticon '.$font_awesome_icon.'"></i></a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'icon_image')){

echo '<div class="myfeed"><a href="'.JURI::base().$alias.'?format=feed&type='.$type_of_feed.'"><div class="myfeedimage"><img src="'.$icon_image.'" alt="RSS Feed" /></div></a></div>';

}

if ((!empty($font_awesome_icon)) && ($type_of_link == 'text_and_font_awesome_icon')){

echo '<div class="myfeed"><a href="'.JURI::base().$alias.'?format=feed&type='.$type_of_feed.'">';

echo $text_with_font;

echo '</a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'text_and_icon_image')){

echo '<div class="myfeed"><a href="'.JURI::base().$alias.'?format=feed&type='.$type_of_feed.'"><div class="myfeedimage">';

echo $text_with_image;

echo '</a></div>';

}

if ((!empty($text)) && ($type_of_link == 'text')){

echo '<div class="myfeed"><a href="'.JURI::base().$alias.'?format=feed&type='.$type_of_feed.'"><div class="myfeedtext">'.$text.'</div></i></a></div>';

}

 }

 

  

if ($customcategory_enable == 'false') {

 

if ((!empty($font_awesome_icon)) && ($type_of_link == 'font_awesome_icon') && ($viewstatus == '') && !($view == 'article')){

echo '<div class="myfeed"><a href="'.JURI::base().'?format=feed&type='.$type_of_feed.'"><i class="rssfonticon '.$font_awesome_icon.'"></i></a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'icon_image') && ($viewstatus == '') && !($view == 'article')){

echo '<div class="myfeed"><a href="'.JURI::base().'?format=feed&type='.$type_of_feed.'"><div class="myfeedimage"><img src="'.$icon_image.'" alt="RSS Feed" /></div></a></div>';

}

if ((!empty($font_awesome_icon)) && ($type_of_link == 'text_and_font_awesome_icon') && ($viewstatus == '') && !($view == 'article')){

echo '<div class="myfeed"><a href="'.JURI::base().'?format=feed&type='.$type_of_feed.'">';

echo $text_with_font;

echo '</a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'text_and_icon_image') && ($viewstatus == '') && !($view == 'article')){

echo '<div class="myfeed"><a href="'.JURI::base().'?format=feed&type='.$type_of_feed.'"><div class="myfeedimage">';

echo $text_with_image;

echo '</a></div>';

}

if ((!empty($text)) && ($type_of_link == 'text') && ($viewstatus == '') && !($view == 'article')){

echo '<div class="myfeed"><a href="'.JURI::base().'?format=feed&type='.$type_of_feed.'"><div class="myfeedtext">'.$text.'</div></i></a></div>';

}

 

if ((!empty($font_awesome_icon)) && ($type_of_link == 'font_awesome_icon') && ($viewstatus == 'ok')){

echo '<div class="myfeed"><a href="'.JURI::current().'?format=feed&type='.$type_of_feed.'"><i class="rssfonticon '.$font_awesome_icon.'"></i></a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'icon_image') && ($viewstatus == 'ok')){

echo '<div class="myfeed"><a href="'.JURI::current().'?format=feed&type='.$type_of_feed.'"><div class="myfeedimage"><img src="'.$icon_image.'" alt="RSS Feed" /></div></a></div>';

}

if ((!empty($font_awesome_icon)) && ($type_of_link == 'text_and_font_awesome_icon') && ($viewstatus == 'ok')){

echo '<div class="myfeed"><a href="'.JURI::current().'?format=feed&type='.$type_of_feed.'">';

echo $text_with_font;

echo '</a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'text_and_icon_image') && ($viewstatus == 'ok')){

echo '<div class="myfeed"><a href="'.JURI::current().'?format=feed&type='.$type_of_feed.'"><div class="myfeedimage">';

echo $text_with_image;

echo '</a></div>';

}

if ((!empty($text)) && ($type_of_link == 'text') && ($viewstatus == 'ok')){

echo '<div class="myfeed"><a href="'.JURI::current().'?format=feed&type='.$type_of_feed.'"><div class="myfeedtext">'.$text.'</div></i></a></div>';      

}

if ((!empty($font_awesome_icon)) && ($type_of_link == 'font_awesome_icon') && ($view == 'article')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$catid).'?format=feed&type='.$type_of_feed.'"><i class="rssfonticon '.$font_awesome_icon.'"></i></a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'icon_image') && ($view == 'article')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$catid).'?format=feed&type='.$type_of_feed.'"><div class="myfeedimage"><img src="'.$icon_image.'" alt="RSS Feed" /></div></a></div>';

}

if ((!empty($font_awesome_icon)) && ($type_of_link == 'text_and_font_awesome_icon') && ($view == 'article')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$catid).'?format=feed&type='.$type_of_feed.'">';

echo $text_with_font;

echo '</a></div>';

}

if ((!empty($icon_image)) && ($type_of_link == 'text_and_icon_image') && ($view == 'article')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$catid).'?format=feed&type='.$type_of_feed.'"><div class="myfeedimage">';

echo $text_with_image;

echo '</a></div>';

}

if ((!empty($text)) && ($type_of_link == 'text') && ($view == 'article')){

echo '<div class="myfeed"><a href="'.JRoute::_('index.php?option=com_content&view=category&layout=blog&id='.$catid).'?format=feed&type='.$type_of_feed.'"><div class="myfeedtext">'.$text.'</div></i></a></div>';

}

 }

 ?>
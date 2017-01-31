<?php defined('_JEXEC') or die;

    $doc = JFactory::getDocument();

    $dontInclude = array(
        '/media/jui/js/jquery.js',
        '/media/jui/js/jquery.min.js',
        '/media/jui/js/jquery-noconflict.js',
        '/media/jui/js/jquery-migrate.js',
        '/media/jui/js/jquery-migrate.min.js',
        '/media/jui/js/bootstrap.js',
        '/media/system/js/core-uncompressed.js',
        '/media/system/js/tabs-state.js',
        '/media/system/js/core.js',
        '/media/system/js/mootools-core.js',
        '/media/system/js/mootools-core-uncompressed.js',
    );

    foreach($doc->_scripts as $key => $script){
        if(in_array($key, $dontInclude)){
            unset($doc->_scripts[$key]);
        }
    }

    $doc->addStyleSheet('templates/' . $this->template . '/css/style.css');
    $doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');

?>
<!DOCTYPE html>
<html xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
    </head>
    <body>
        <jdoc:include type="component" />
    </body>
</html>
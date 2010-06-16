<?php
/*
Plugin Name: IFrame-less
Plugin URI: http://wordpressiframe.omadataobjects.com/
Description: Request a URL, and display it's contents on-page (not in an IFrame)
Author: Fiach Reid
Version: 1
Author URI: http://wordpressiframe.omadataobjects.com/
*/
 
 
function widget_IFrameless($args) {
  extract($args);
 
  $options = get_option("widget_IFrameless");
  if (!is_array( $options ))
  {
  $options = array(
      'title' => 'http://wordpressiframe.omadataobjects.com/now.php'
      );
  }
 

$request = new WP_Http;

$result = $request->request( htmlspecialchars_decode($options['URL']) );

$contents = $result['body'];

 

  echo $before_widget;
    echo $before_title;
      echo  $contents;
    echo $after_title;
 
    //Our Widget Content
	echo '<br><a href="http://wordpressiframe.omadataobjects.com/">Help</a>';
  echo $after_widget;
}
 
function IFrameless_control()
{
  $options = get_option("widget_IFrameless");
  if (!is_array( $options ))
  {
  $options = array(
      'URL' => 'http://wordpressiframe.omadataobjects.com/now.php'
      );
  }
 
  if ($_POST['IFrameless-Submit'])
  {
    $options['URL'] = htmlspecialchars($_POST['IFrameless-URL']);
    update_option("widget_IFrameless", $options);
  }
 
?>
  <p>
    <label for="IFrameless-URL">URL: </label>
    <input type="text" id="IFrameless-URL" name="IFrameless-URL" value="<?php echo $options['URL'];?>" size="40"/>
    <input type="hidden" id="IFrameless-Submit" name="IFrameless-Submit" value="1" />
  </p>
<?php
}
 
function IFrameless_init()
{
  register_sidebar_widget(__('IFrameless'), 'widget_IFrameless');
  register_widget_control(   'IFrameless', 'IFrameless_control', 300, 200 );
}
add_action("plugins_loaded", "IFrameless_init");
?>
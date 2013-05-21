<?
AutoLoader::register_view_path("plugin", __DIR__."/view/");

WaxEvent::add("cms.use_format_set", function(){
  $controller = WaxEvent::data();
  if($controller->use_format == "csv"){
    header("Content-Type: text/csv");
    header('Content-disposition: attachment;filename=download.csv');
  }
});
?>
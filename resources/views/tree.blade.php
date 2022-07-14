<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Container Spaces</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">

</head>

<body>

<!-- 
<ul id="treeView">
  <li>
   <button type="button">+</button>
    
  text
    <ul>
  <li>
      <button type="button">+</button>
    
  text
    <ul>
  <li>
  text
  </li>
      <li>
  text
  </li>
      <li>
  text
  </li>
</ul>
  </li>
</ul>
  </li>
</ul> -->






<ul id="treeView">
<!-- 


    
    <button type="button">+</button>

        -->


@foreach($treeView as $tree)
  <li class="treeview">
    <a href="#"><i class="fa fa-link"></i> <span>{{ $tree->name }}</span> <i class="fa fa-angle-left pull-right"></i></a>
    <ul class="treeview-menu">
      @foreach($tree->subcategories as $subchild)
        <li class=""><a href="#">{{$subchild->name}}</a></li>
      @endforeach
    </ul>
  </li>
@endforeach


</ul>












</body>

</html>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script>
/*js taken from https://www.jqueryscript.net/demo/Simple-jQuery-Plugin-For-Checkbox-Tree-View-Checktree/*/
$(function(){
  
  /*expend and collapse*/ 
   
   $("#treeView li").each(function(){
        if($(this).children('ul').length > 0){
     $(this).addClass('parent');
        }
   });
   $("#treeView .parent button").on(
   "click", function(){
    
 $(this).parent("li").toggleClass('active').children('ul').slideToggle();
     if($(this).parent("li").hasClass('active')){
       $(this).text('-')
     }else{
       $(this).text('+')
     }
     
   });
  
 /*checkbox function*/
   
   /*function called on change */
  $("#treeView input[type='checkbox']").on(
   "change",function(){
     /*function called here */
     checkParents($(this));    
     checkChildren($(this));
   });
   
 });
 /*for check parent */
 function checkParents(c){
   var parentLi = c.parents('ul:eq(0)').parents('li:eq(0)');
     if (parentLi.length)
                 {
                     var siblingsChecked = parseInt($('input[type="checkbox"]:checked', c.parents('ul:eq(0)')).length),
                         rootCheckbox = parentLi.find('input[type="checkbox"]:eq(0)')
                     ;
 
                     if (c.is(':checked'))
                         rootCheckbox.prop('checked', true)
                     else if (siblingsChecked === 0)
                         rootCheckbox.prop('checked', false);
 
                     checkParents(rootCheckbox);
                 }
   
 }
 /*for check children */
 function checkChildren(c){
                 var childLi = $('ul li input[type="checkbox"]', c.parents('li:eq(0)'));
 
                 if (childLi.length)
                     childLi.prop('checked', c.is(':checked'));
             }
 
</script>
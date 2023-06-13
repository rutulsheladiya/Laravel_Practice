<x-Header componentName="Post"/>
<!-- <?php echo "User Id Is  : ". $userId; ?>  -->

@if($userId == NULL)
<h3>Post Page</h3>
@else 
<h3>Post Page</h3>
{{"User Id  : ".$userId}}
@endif
<x-Footer/>
<!-- Title Field -->

<?php //  dd($nEWS->get_News_Photos );?>
<div class=" col-sm-6  " id="admin_edit">

 <div class="form-group col-sm-12">
 <h1>en </h1> </div>
 
 
 
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
 	  <input type="text" name="title_en" class="form-control" 
	  value="<?php if (isset($News_en )){echo" $News_en->title ";} ?>">

 </div> 
<!------------------------------------------------->
<div class="form-group col-sm-6">
    {!! Form::label('alt', 'alt:') !!}
 	  <input type="text" name="main_img_alt_en" class="form-control" 
	  value="<?php if (isset($News_en )){echo" $News_en->main_img_alt ";} ?>">

 </div> 
 
 

 
 <!------------------------------------------------->
<div class="form-group col-sm-6">
    {!! Form::label('meta description', 'meta description:') !!}
 	  <input type="text" name="meta_description_en" class="form-control" 
	  value="<?php if (isset($News_en )){echo" $News_en->meta_description	 ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
		 	  <input type="text" name="slug_en" class="form-control"
			  value="<?php if (isset($News_en )){echo" $News_en->slug ";} ?>">

 </div>
 
 <div class="form-group col-sm-6">
    {!! Form::label('seo title', 'seo title:') !!}
		 	  <input type="text" name="seo_title_en" class="form-control"
			  value="<?php if (isset($News_en )){echo" $News_en->seo_title ";} ?>">

 </div>
 
  <div class="form-group col-sm-6">
    {!! Form::label('parentid', 'categories :') !!}

<select class="form-control" name="cat_id">
 
  <option value="1" selected = selected >Main</option>
  
   @foreach($categories as $category)
            <option  
			style="<?php  if($category->parentid == 1 ){    echo'color: #dd4b39;  font-weight: bold;' ;} ?>  "
	value="{{$category->id}}">  {{$category->get_categories_news_ar_description[0]['title']}} </option>
        @endforeach
		
		
</select>

 </div>
 
<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
 <textarea name="description_en" class="form-control"   > 
 <?php if (isset($News_en )){echo" $News_en->description ";} ?> </textarea>
	
		 <script> CKEDITOR.replace( 'description_en' );  </script>

</div></div>

 
 <div class=" col-sm-6 admin_edit_ar   "  >

 <div class="form-group col-sm-12">
 <h1>ar </h1> </div>
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
	 	  <input type="text" name="title_ar" class="form-control" 
		  value="<?php if (isset($News_ar )){echo" $News_ar->title ";} ?>">

 </div>
 <div class="form-group col-sm-6">
    {!! Form::label('alt', 'alt:') !!}
	 	  <input type="text" name="main_img_alt_ar" class="form-control" 
		  value="<?php if (isset($News_ar )){echo" $News_ar->main_img_alt ";} ?>">

 </div>
 <div class="form-group col-sm-6">
    {!! Form::label('meta description', 'meta description:') !!}
	 	  <input type="text" name="meta_description_ar" class="form-control" 
		  value="<?php if (isset($News_ar )){echo" $News_ar->meta_description ";} ?>">

 </div>
<div class="form-group col-sm-6">
    {!! Form::label('slug', 'Slug:') !!}
	 	  <input type="text" name="slug_ar" class="form-control" 
		  value="<?php if (isset($News_ar )){echo" $News_ar->slug ";} ?>">

</div>

<div class="form-group col-sm-12">
    {!! Form::label('seo title', 'seo title:') !!}
	 	  <input type="text" name="seo_title_ar" class="form-control" 
		  value="<?php if (isset($News_ar )){echo" $News_ar->seo_title ";} ?>">

</div>
 <!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
	 <textarea name="description_ar" class="form-control"   >  <?php if (isset($News_ar )){echo" $News_ar->description ";} ?> </textarea>

 	
		 <script> CKEDITOR.replace( 'description_ar' );  </script>

</div>

</div>
 
 
 
    
<div class="form-group col-sm-6">
 
	  {!! Form::label('single_photo', 'single_photo :') !!}
 	  <input type='file' name="single_photo" onchange="readURL(this);" />

	    <img id="single_photo" src=" <?php if (isset($nEWS )){echo URL::to('/').'/images/'.$nEWS->single_photo ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />

</div>


 	 <script  >

     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#single_photo')
                        .attr('src', e.target.result)
                        .width(50)
                        .height(50); 
 						
                 };

                reader.readAsDataURL(input.files[0]);
            }
        }</script>
		
 <div class="form-group col-sm-6">
 
	  {!! Form::label('icon', 'icon :') !!}
 	  <input type='file' name="icon" onchange="readURLicon(this);" />

	    <img id="icon" src=" <?php if (isset($nEWS )){echo URL::to('/').'/images/'.$nEWS->icon ;} ?>" style="    
    width: 50px;   height: 50px;		border-radius: 50px; margin: 15px;  " />

</div>




  <div class="form-group col-sm-6">
    {!! Form::label('photos_id', 'Photos Id:') !!}
    <input type="file"   name="photos_id[]" multiple    >
	<a href="#">

<?php if (isset($nEWS )){  ?>
 @foreach($nEWS->get_News_Photos as $products_val)
            <a href="#"  
             class="  btn-xs"  >
            <i class="glyphicon glyphicon-trash"></i></a>
             <img id="Photo{{ $products_val->id }}/{{ $products_val->news_id }}" 
			 src="{{ URL::to('/').'/images/'. $products_val->single_photo_gallery }}"  width="50" height="50"> 
            @endforeach
			
			
<?php } ?>
	

	
	
</div>




 	 <script  >

     function readURLicon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#icon')
                        .attr('src', e.target.result)
                        .width(50)
                        .height(50); 
 						
                 };

                reader.readAsDataURL(input.files[0]);
            }
        }</script>

 
<!-- Slug Field -->


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('nEWS.index') !!}" class="btn btn-default">Cancel</a>
</div>

<?php $this->layout('app:layout'); ?>
<h1>Add Weblink</h1>
<form method="post" action="/weblink/add">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Title">
  </div>
   <div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" id="url" name="url" placeholder="URL">
  </div>
	 <div class="form-group">
    <label for="category">Category</label>
    <input type="text" class="form-control" id="category" name="category" placeholder="Category">
  </div>
   <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username">
  </div>
	 <div class="form-group">
    <label for="description">Description</label>
		 <textarea class="form-control" id="description" name="description"></textarea>
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
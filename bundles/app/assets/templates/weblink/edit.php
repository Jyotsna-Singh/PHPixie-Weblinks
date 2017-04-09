<?php $this->layout('app:layout'); ?>
<a href="/" class="btn btn-default">Go Back</a>
<h1>Edit Weblink</h1>
<form method="post" action="/weblink/edit/<?php echo $weblink->id; ?>">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Title" value="<?php echo $weblink->title; ?>">
  </div>
   <div class="form-group">
    <label for="url">URL</label>
    <input type="text" class="form-control" id="url" name="url" placeholder="URL"  value="<?php echo $weblink->url; ?>">
  </div>
	 <div class="form-group">
    <label for="category">Category</label>
    <input type="text" class="form-control" id="category" name="category" placeholder="Category" value="<?php echo $weblink->category; ?>">
  </div>
   <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $weblink->username; ?>">
  </div>
	 <div class="form-group">
    <label for="description">Description</label>
		 <textarea class="form-control" id="description" name="description"> <?php echo $weblink->title; ?></textarea>
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form>
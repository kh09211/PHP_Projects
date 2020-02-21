<?php
/**
 * index.php
 * main index page for photo gallery site
 */
require 'vendor/autoload.php';
require 'includes/header.inc.php';

use NewNamespace\SQLiteConnection;
use NewNamespace\SQLiteCreateTable;
use NewNamespace\SQLiteInsert;
use NewNamespace\SQLiteSelect;

//create the tables if not exists
$pdo = (new SQLiteConnection())->connect();
$sqlite = new SQLiteCreateTable($pdo);
$sqlite->createTables();
// $tables = $sqlite->getTableList();


// Test the DB connection
/*
if ($sqlite != null) {
    echo 'Connected to the SQLite database successfully!';
} else {
    echo 'Whoops, could not connect to the SQLite database!';
}
*/


// query all the photos from the db
$pdo = (new SQLiteConnection())->connect();
$rows = (new SQLiteSelect())->getPhotos($pdo);

?>
<main>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="gallery-tab" data-toggle="tab" href="#gallery" role="tab" aria-controls="gallery" aria-selected="true">Gallery</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="cms-tab" data-toggle="tab" href="#cms" role="tab" aria-controls="cms" aria-selected="false">Add Photos</a>
  </li>
</ul>
<div class="tab-content" id="tabs">
  <div class="tab-pane fade show active" id="gallery" role="tabpanel" aria-labelledby="gallery-tab">
    <!-- TAB FOR DISPLAYING THE PHOTOS-->
    <div class="container text-center">
      <p class="mt-3"> Click photos to enlarge.</p>
      <div class="row">
        <?php foreach ($rows as $row) { ?>
          <div class="col-md-4 mt-3">
            <div class="photobox">
              <span title="Remove photo"><a href="delete.php?id=<?php echo $row['photo_id']; ?>" class="x">X</a></span>
              <a href="uploaded/<?php echo $row['filename']; ?>"><img src="uploaded/<?php echo $row['filename']; ?>" class="w-100 rounded"/></a>
              <p class="mt-2"><?php echo $row['description']; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <div class="tab-pane fade" id="cms" role="tabpanel" aria-labelledby="cms-tab">
    <!-- TAB FOR UPLOADING THE PHOTOS -->
    <div class="container text-center">
  	   <h3 class="mt-3">Upload new photos here.</h3>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="inputs">
                <label>Enter Password:<input type="password" placeholder="password" name="pass" class="ml-3" style="width: 300px;" autofocus /></label><br />
                <label>Photo Description:<textarea placeholder="description" name="description" class="ml-3" style="width: 300px"></textarea></label><br />
            </div>
            <br />
            <label class="ml-5">Photo File: <input type="file" name="file_to_upload" id="file_to_upload" class="ml-3" /></label><br/><br/>
            <input type="submit" name="submited" value="Submit Photo"/>
        </form>
    </div>
  </div>
</div>
</main>
<?php include 'includes/footer.inc.php'; ?>

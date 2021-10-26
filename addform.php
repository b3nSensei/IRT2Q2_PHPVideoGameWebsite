<!-- Form to add games to DB, included in gadd.php  -->
<div class="container site">
  <div class="card">
    <div class="card-body">
      <!-- Form will be POST to gadd.php -->
      <form method="POST" action="gadd.php" class="form-group col-md-12">
        <!-- Title input -->
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="title"><b>Title (*):</b> </label>
          <input type="text" class="form-control" id="title"
            placeholder="What is the game's title?" name="postname" required="required" autocomplete="on">
        </div>
        <!-- Date input -->
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="InputTitle"><b>Release Date :</b> </label>
          <p>(expected format: yyyy-mm-dd )</p>
          <input type="date" class="form-control" id="date"
            placeholder="yyyy-mm-dd" name="postdate" autocomplete="on">
        </div>
        <!-- Genre input -->
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="genre"><b>Genre:</b> </label>
          <input type="text" class="form-control" id="genre"
            placeholder="What is the game genre?" name="postgenre" autocomplete="on">
        </div>
        <!-- Editor input -->
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="editor"><b>Editor:</b> </label>
          <input type="text" class="form-control" id="editor"
            placeholder="Who edited the game?" name="posted" autocomplete="on">
        </div>
        <!-- Developer input -->
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="developer"><b>Developer:</b> </label>
          <input type="text" class="form-control" id="developer"
            placeholder="Who made the game?" name="postdev" autocomplete="on">
        </div>
        <!-- Description input -->
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="description"><b>Description (*):</b> </label>
            <textarea type="text" rows="10" cols="50" class="form-control" id="description" 
            name="postdes" required="required" autocomplete="on">What is the game about?
            </textarea>
        </div>
        <!-- Cover input -->
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="cover"><b>Cover (*):</b> </label>
          <p>(Use only direct weblink to image)</p>
          <input type="text" class="form-control" id="cover"
            placeholder="Exemple from shrinked url: https://bit.ly/2YrynSx" name="postcover" required="required" autocomplete="on">
        </div>
        <!-- Video input -->
        <div class="form-group col-md-12" style="text-align: center;">
          <label for="video"><b>Video:</b> </label>
          <p>(Use "ONLY" direct link from youtube)</p>
          <input type="text" class="form-control" id="video"
            placeholder="Exemple: https://www.youtube.com/watch?v=FTQbiNvZqaY" name="postvideo" autocomplete="on">
        </div>
        <!-- Submit form -->
        <div class="form-group col-md-12" style="text-align: center;">
          <button type="submit" name="add-btn" class="btn btn-primary">Add game</button>
        </div>
        (*) fields are mandatory.
      </form>
    </div>
  </div>
</div>
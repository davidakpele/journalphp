<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=ASSETS?>css/bootstrap.css">
    <script src="<?=ASSETS?>js/jquery2.js"></script>
    <title>Document</title>
</head>
<body>
    <body style="padding-top:60px;background-color:gray" id="app" >
    <div class="container" id="page">
        <div class="row">
             <form class="form-group" name="frmImage" enctype="multipart/form-data"method="post" autocomplete="off">
                <div class="phppot-container tile-container">
                <label for="categorieid">Categories</label>
                <select name="categorieid" id="categorieid" class="form-control">
                    <option value="">-Select-</option>
                    <?php foreach ($data['cat'] as $key):?>
                    <option <?=($key['categoriesid'] ==8) ? 'selected' : ''?> value="<?=$key['categoriesid']?>"><?=$key['categories_name']?></option>
                    <?php endforeach;?>
                </select><br/><br/>
                <label for="bookshelvesid">Bookshelves</label>
                <select name="bookshelvesid" id="bookshelvesid" class="form-control">   
                    <option value="">-Select-</option> 
                    <?php foreach ($data['book'] as $key):?>
                    <option  <?=((($key['bookshelvesid'] ==37))?'selected':'')?> value="<?=$key['bookshelvesid']?>"><?=$key['bookshelves_name']?></option>
                    <?php endforeach;?>
                </select><br/><br/>
                <label for="journal_name">Journal name</label>
                <input type="text" name="journal_name" id="journal_name" class="form-control"/><br/><br/>
                    <label>Upload Image File:</label>
                    <div class="row">
                        <input name="file" type="file" class="full-width" class="form-control"/>
                    </div>
                    <div class="row">
                        <input type="submit" value="Submit" name="submit" class="btn btn-primary mt-4"/>
                    </div>
                </div>
        
            </form>
        </div>
    </div>
   <script>
var app = document.getElementById('page');
// $( window ).resize(function() {
//  if ($(window).width() <= 700){
//   $('#app').addClass('two').removeClass('one')
//      $('#app').load('')
//      return;
//  }
//  else{
//   $('#app').addClass('one').removeClass('two')
//     $('#app').load('./form')

//  }
// }).trigger('resize');
   </script>
    </body>
</body>
</html>